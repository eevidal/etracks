<?php

class BudgetController extends RController
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
			'rights',
		);

// 		return array(
// 			'accessControl', // perform access control for CRUD operations
// 			'postOnly + delete', // we only allow deletion via POST request
// 		);
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
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin'),
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
		//$model_report=Report::model()->findByPk($id);
		$criteria=new CDbCriteria;

		$criteria->condition ="id_order = '$id'";
		$model=Budget::model()->findAll($criteria);
		$idd=$model[0]->id;
		$this->render('view',array(
			'model'=>$this->loadModel($idd),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($id)
	{
		$model=new Budget;
		$model_report=Report::model()->findByPk($id);
		$model_order=Order::model()->findByPk($model_report->order_id);
		
		$user =Yii::app()->getModule('user')->user();
		$profile=$user->profile;
		
		
		$model_client=Client::model()->findByPk($model_order->client->id);
		$model_equipment=Equipment::model()->findByPk($model_order->equipment->id);
		$criteria=new CDbCriteria;
		$iid=$model_order->id;	
		$criteria->condition ="report_id = '$id'";
		$model_part_report=ReportPart::model()->findAll($criteria);
		$model_part=new Part;
		$model_tracker=new Tracker;
		//$model_equipment=Equipment::model()->findByPk($model_order->equipment->id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Budget']))
		{
			$model->attributes=$_POST['Budget'];
			$model->id_order=$iid;
			$model->id_report=$id;
			$model->id_user=$user->id;
			$model->date = date("Y/m/d",time());
			
			
			
			if($model->save())
			{
							
				$model_order->status_id=4;
				$model_order->save();
			
				// Tracker record				
				$model_tracker->date = date("Y/m/d",time());
				$model_tracker->time = date("H:i:s",time());
				$model_tracker->technician = $profile->nickname;
				$model_tracker->status_id=$model_order->status_id;
				$model_tracker->order_id = $model_report->order_id;
				$model_tracker->save();
				
				$this->redirect(array('view','id'=>$model_order->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
			'model_order'=>$model_order,
			'model_report'=>$model_report,
			'model_client'=>$model_client,
			'model_part_report'=>$model_part_report,
			'model_part'=>$model_part,
		
			'model_equipment'=>$model_equipment,
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

		if(isset($_POST['Budget']))
		{
			$model->attributes=$_POST['Budget'];
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
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Budget');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Budget('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Budget']))
			$model->attributes=$_GET['Budget'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Budget the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Budget::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Budget $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='budget-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
