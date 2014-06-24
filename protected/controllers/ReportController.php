<?php

class ReportController extends Controller
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
			'postOnly + delete', // we only allow deletion via POST request
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','PartAutocomplete','Pdf', 'OrderView'),
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
	
	public function actionOrderView($id)
	{
		$criteria=new CDbCriteria;

		$criteria->condition ="order_id = '$id'";
		$model=Report::model()->findAll($criteria);
	
		//$idd=$model["id"];
		$this->render('order_view',array(
			'model'=>$model[0],
		));
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($id)
	{
		$model=new Report;
		$model_order=Order::model()->findByPk($id);
		$model_cli = Client::model()->findByPk($model_order->client_id);
		$model_equi =Equipment::model()->findByPk($model_order->equipment_id);
		$model_part=new Part;
		
		//$model_part_report=new ReportPart;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Report']))
		{
			$model->attributes=$_POST['Report'];
			$model->order_id=$model_order->id;
			 // change the order status to in revision
 			if($model->save())
			{
				if(!empty($_POST['Part']))
				{
					$parts= $_POST['Part'];	
					foreach($parts as $part) 
					{	
						$model_part_report=new ReportPart;
						$model_part_report->part_id=$part;
						$model_part_report->report_id=$model->id;
						$model_part_report->quantity=1;
						$model_part_report->save();
					}
				}
				
				$model_order->status_id='9';
				$model_order->save();
				
				
 				$this->redirect(array('view','id'=>$model->id));
			}
 		}
		
		

		
		$this->render('create',array(
			'model'=>$model,
			'model_order'=>$model_order,
			'model_cli'=>$model_cli,
			'model_equi'=>$model_equi,
			'model_part'=>$model_part,
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
		$model_order=Order::model()->findByPk($model->order_id);
		$model_cli = Client::model()->findByPk($model_order->client_id);
		$model_equi =Equipment::model()->findByPk($model_order->equipment_id);
		$criteria=new CDbCriteria;

		$criteria->condition ="report_id = '$id'";
		$model_part_report=ReportPart::model()->findAll($criteria);
		
		$model_part=new Part;
		

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Report']))
		{
			$model->attributes=$_POST['Report'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
			'model_order'=>$model_order,
			'model_cli'=>$model_cli,
			'model_equi'=>$model_equi,
			'model_part'=>$model_part,
			'model_part_report'=>$model_part_report,
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
		$dataProvider=new CActiveDataProvider('Report');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Report('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Report']))
			$model->attributes=$_GET['Report'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Report the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Report::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Report $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='report-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
		public function actionPartAutocomplete () {
		if (isset($_GET['term'])) {
			$criteria=new CDbCriteria;
			$criteria->condition ="LOWER(name) like LOWER(:term) ";
			$criteria->params = array(':term'=> '%'.$_GET['term'].'%');
			$parts = Part::model()->findAll($criteria);
			$return_array[]=array();
			foreach($parts as $part) {
				$return_array[] = array(
					'label'=>$part->name,
					'value'=>$part->name,
					'name'=>$part->name,
					'id'=>$part->id,
					'description'=>$part->description,
					'stock'=>$part->stock,
					);
			}
		}
		echo CJSON::encode($return_array);
	}

}
