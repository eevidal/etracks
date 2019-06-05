<?php

class ReportController extends RController
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
// 		return array(
// 			'accessControl', // perform access control for CRUD operations
// 			'postOnly + delete', // we only allow deletion via POST request
// 		);
		return array(
			'rights',
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
				'actions'=>array('index','view','error'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','PartAutocomplete','Pdf', 'OrderView','TOrderView'),
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
		$model=Report::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		$model_order=Order::model()->findByPk($model->order_id);	
		$this->render('view',array(
			'model'=>$model,
			'model_order'=>$model_order,
		));
	}
	
	public function actionOrderView($id)
	{
		$criteria=new CDbCriteria;

		$criteria->condition ="order_id = '$id' AND type = 0";
		$model=Report::model()->findAll($criteria);
		$model_order=Order::model()->findByPk($id);
		$model_client=Client::model()->findByPk($model_order->client->id);
		$model_equipment=Equipment::model()->findByPk($model_order->equipment->id);
		//$idd=$model["id"];
		$criteria=new CDbCriteria;
		$iid=$model[0]->id;	
		$criteria->condition ="report_id = '$iid'";
		$model_part_report=ReportPart::model()->findAll($criteria);
		$model_part=new Part;
		$this->render('order_view',array(
			'model'=>$model[0],
			'model_order'=>$model_order,
			'model_equipment'=>$model_equipment,
			'model_client'=>$model_client,
			'model_part_report'=>$model_part_report,
			'model_part'=>$model_part,
		));
	}
	
	public function actionTOrderView($id)
	{
		$criteria=new CDbCriteria;

		$criteria->condition ="order_id = '$id' AND type = 1";
		$model=Report::model()->findAll($criteria);
		$model_order=Order::model()->findByPk($id);
		$model_client=Client::model()->findByPk($model_order->client->id);
		$model_equipment=Equipment::model()->findByPk($model_order->equipment->id);
		//$idd=$model["id"];
		$criteria=new CDbCriteria;
		$iid=$model[0]->id;	
		$criteria->condition ="report_id = '$iid'";
		$model_part_report=ReportPart::model()->findAll($criteria);
		$model_part=new Part;
		$this->render('order_view',array(
			'model'=>$model[0],
			'model_order'=>$model_order,
			'model_equipment'=>$model_equipment,
			'model_client'=>$model_client,
			'model_part_report'=>$model_part_report,
			'model_part'=>$model_part,
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
		$model_tracker=new Tracker;
		//$model_part_report=new ReportPart;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if($model_order->status_id==2)
		{
			if(isset($_POST['Report']))
			{
				$model->attributes=$_POST['Report'];
				$model->order_id=$model_order->id;
				// change the order status to in revision
				//$user=Yii::app()->controller->module->user();
				$user =Yii::app()->getModule('user')->user();
				
				$profile=$user->profile;
				$model->technician= $profile->nickname;

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
					// Tracker record				
					$model_tracker->date = date("Y/m/d",time());
					$model_tracker->time = date("H:i:s",time());
					$model_tracker->technician = $model->technician;
					$model_tracker->status_id=$model_order->status_id;
					$model_tracker->order_id = $model->order_id;
					$model_tracker->save();
				
					$this->redirect(array('view','id'=>$model->id));
				}	
			}
 		}
 		elseif (in_array($model_order->status_id,array(5,10,11),true))
 		{
			$criteria=new CDbCriteria;
			$criteria->condition ="order_id = '$id'";
			$model_pre=Report::model()->findAll($criteria);
		
			$idd=$model_pre[0]->id;
			$criteria->condition ="report_id = '$idd'";
			$rparts=ReportPart::model()->findAll($criteria);
			
			$model->order_id=$model_order->id;
			$model->type = 1;
			$model->count=$model_pre[0]->count;
			$model->date = date("Y/m/d",time());
			$model->report=$model_pre[0]->report;
			$model->observation=$model_pre[0]->observation;
			$user =Yii::app()->getModule('user')->user();
			$profile=$user->profile;
			$model->technician= $profile->nickname;
			//$model->technician=$model_pre[0]->technician;
			
			if($model->save())
				{
					if(!empty($rparts))
					{
						
						foreach($rparts as $part) 
						{	
							$model_part_report=new ReportPart;
							$model_part_report->part_id=$part->part_id;
							$model_part_report->report_id=$model->id;
							$model_part_report->quantity=$part->quantity;
							$model_part_report->type_report=1;
							$model_part_report->save();
						}
					}
				
					$model_order->status_id='13';
					$model_order->save();
					// Tracker record				
					$model_tracker->date = date("Y/m/d",time());
					$model_tracker->time = date("H:i:s",time());
					$model_tracker->technician = $model->technician;
					$model_tracker->status_id=$model_order->status_id;
					$model_tracker->order_id = $model->order_id;
					$model_tracker->save();
				
					$this->redirect(array('view','id'=>$model->id));
				}	
			
 		} elseif (in_array($model_order->status_id,array(3,4,6,7,8,12,13),true))
			{	$this->render('error',array('id'=>$model_order->id,'msg'=>'No es posible crear informes en el estado actual de la orden.'));
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
	public function actionDelete($id)
	{
// 		$this->loadModel($id)->delete();
// 
// 		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
// 		if(!isset($_GET['ajax']))
// 			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
 	}

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
			$criteria->condition ="LOWER(name) like LOWER(:term) or LOWER(description) like LOWER(:term) ";
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
