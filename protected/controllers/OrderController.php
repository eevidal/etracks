<?php

class OrderController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		//	'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','pdf'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'ClientAutocomplete', 'EquipmentAutocomplete','Pdf' ),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$criteria=new CDbCriteria;

		$criteria->condition ="order_id = '$id'";
		$model_report=Report::model()->findAll($criteria);
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'model_report'=>$model_report,
		));
	}


	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Order;
		$model_cli = new Client;
		$model_equi = new Equipment;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Order']))
		{	
			
			$model->attributes=$_POST['Order'];
			$model->date=date("Y/m/d",time());
			
			if(!empty($_POST['Equipment']['id']))
			{
				
				$id_equi=$_POST['Equipment']['id'];
				$model->equipment_id=$id_equi;
				$model_equi=$this->loadModelEquipment($id_equi);
				$model_equi->attributes=$_POST['Equipment'];
				$model_equi->save();
			}	
			else
			{	
				$model_equi->attributes=$_POST['Equipment'];
				if($model_equi->save())
					$model->equipment_id=$model_equi->id;
			}
			
			if(!empty($_POST['Client']['id']))
			{
				$id_cli=$_POST['Client']['id'];
				$model->client_id=$id_cli;
				$model_cli=$this->loadModelClient($id_cli);
				$model_cli->attributes=$_POST['Client'];
				$model_cli->save();
			}	
			else
			{
				$model_cli->attributes=$_POST['Client'];
				if($model_cli->save())
					$model->client_id=$model_cli->id;
			}
				
			$model->status_id='2';
		//	var_dump($model_cli);
		//	var_dump($model->attributes);
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
			'model_cli'=>$model_cli,
			'model_equi'=>$model_equi,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Order']))
		{
			$model->attributes=$_POST['Order'];
			PC::debug('Short way to debug directly in PHP Console', 'some,debug,tags');
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	


	

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
// 	public function actionDelete($id)
// 	{
// 		$this->loadModel($id)->delete();
// 
// 		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
// 		if(!isset($_GET['ajax']))
// 			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
// 	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Order');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Order('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Order']))
			$model->attributes=$_GET['Order'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Order the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Order::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	
		public function loadModelClient($id)
	{
		$model=Client::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	
		public function loadModelEquipment($id)
	{
		$model=Equipment::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}


	/**
	 * Performs the AJAX validation.
	 * @param Order $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='order-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function actionClientLists()
    {
        $term = Yii::app()->request->getQuery('term');
        $clientes = Client::model()->findAllByAttributes(array('name' => "%{$term}%"));
        $lists = array();
        foreach($countries as $client) {
            $lists[] = array(
					'value'=>$client->name,
					'id'=>$client->id,
            );
        }
        echo json_encode($lists);
    }
	
	public function actionClientAutocomplete () {
		if (isset($_GET['term'])) {
			$criteria=new CDbCriteria;
			//$criteria->alias = "clients";
			//$criteria->condition = "clients.name like '" . $_GET['term'] . "%'";
			$criteria->condition ="LOWER(name) like LOWER(:term) or LOWER(comercial_name) like LOWER(:term)";
			$criteria->params = array(':term'=> '%'.$_GET['term'].'%');
			//$dataProvider = new CActiveDataProvider(get_class(Client::model()), array('criteria'=>$criteria,‘pagination’=>false,));
			//$clients = $dataProvider->getData();
			$clients = Client::model()->findAll($criteria);
			$return_array = array();
		
			foreach($clients as $client) {
				$return_array[] = array(
					'label'=>$client->name,
					'value'=>$client->name,
					'id'=>$client->id,
					'address1'=>$client->address1,
					'address2'=>$client->address2,
					'phone1'=>$client->phone1,
					'phone2'=>$client->phone2,
					'mail'=>$client->mail,
					'contact'=>$client->contact,
					'comment'=>$client->comment,
					'city'=>$client->city,
					'postal_code'=>$client->postal_code,
					'comercial_name'=>$client->comercial_name,
					'type'=>$client->type,
					
					);
			}
 
			echo CJSON::encode($return_array);
		} 
	}
	
	public function actionEquipmentAutocomplete () {
		if (isset($_GET['term'])) {
			$criteria=new CDbCriteria;
			$criteria->condition ="LOWER(serie) like LOWER(:term) ";
			$criteria->params = array(':term'=> '%'.$_GET['term'].'%');
			$equipments = Equipment::model()->findAll($criteria);
			$return_array[]=array();
			foreach($equipments as $equipment) {
				$return_array[] = array(
					'label'=>$equipment->serie,
					'value'=>$equipment->serie,
					'name'=>$equipment->name,
					'id'=>$equipment->id,
					'serie'=>$equipment->serie,
					);
			}
		}
		echo CJSON::encode($return_array);
	}	

	
	 public function actionPdf($id)
	{
		 $this->renderPartial('pdf',array(
			'model'=>$this->loadModel($id),
		));
//		
	}

}