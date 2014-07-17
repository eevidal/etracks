<?php

class ReportPartController extends RController
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
// 		//	'postOnly + delete', // we only allow deletion via POST request
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
// 			array('allow',  // allow all users to perform 'index' and 'view' actions
// 				'actions'=>array('index','view'),
// 				'users'=>array('*'),
// 			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'PartAutocomplete', 'MultipleCreate', 'multiple_create'),
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

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate( $report_id)
	{
		$model=new ReportPart;
		$model_part=new Part;
		$model_report=Report::model()->findByPk($report_id);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ReportPart']))
		{
			$model->attributes=$_POST['ReportPart'];
			$model->type_report=$model_report->type;
// 			$part_id=$model->part_id;
// 			$model_part=Part::model()->findByPk($part_id);
// 			$stock=$model_part->stock;
// 			$model_part->stock= $stock - $model->quantity;
			
			//$model_part->stock= $stock - $model->quantity;
			if($model->save())
			{
				//$model_part->save();
				$this->redirect(array('report/update','id'=>$model_report->id));
			}	
		}

		$this->render('create',array(
			'model'=>$model,
			'model_part'=>$model_part,
			'model_report'=>$model_report,
		));
	}

	public function actionMultipleCreate( $report_id)
	{
		$model=new ReportPart;
		$model_part=new Part;
		$model_report=Report::model()->findByPk($report_id);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Part']))
		{
			
			$parts= $_POST['Part'];	
			foreach($parts as $part) 
			{	
				$model_part_report=new ReportPart;
				$model_part_report->part_id=$part;
				$model_part_report->report_id=$model_report->id;
				$model_part_report->quantity=1;
				$model_part_report->save();
			}

			$this->redirect(array('report/update','id'=>$model_report->id));

		}

		$this->render('multiple_create',array(
			'model'=>$model,
			'model_part'=>$model_part,
			'model_report'=>$model_report,
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
		$model_part=Part::model()->findByPk($model->part_id);
		$model_report=Part::model()->findByPk($model->report_id);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ReportPart']))
		{
			$model->attributes=$_POST['ReportPart'];
			if($model->save())
				$this->redirect(array('report/update','id'=>$model->report_id));
		}

		$this->render('update',array(
			'model'=>$model,
			'model_part'=>$model_part,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$model=$this->loadModel($id);
	        $report=$model->report_id;
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(array('report/update','id'=>$report));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('ReportPart');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ReportPart('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ReportPart']))
			$model->attributes=$_GET['ReportPart'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ReportPart the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ReportPart::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ReportPart $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='report-part-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	
		public function actionPartAutocomplete () {
		if (isset($_GET['term'])) {
			$criteria=new CDbCriteria;
			//$criteria->alias = "clients";
			//$criteria->condition = "clients.name like '" . $_GET['term'] . "%'";
			$criteria->condition ="LOWER(name) like LOWER(:term) or LOWER(description) like LOWER(:term)";
			$criteria->params = array(':term'=> '%'.$_GET['term'].'%');
			//$dataProvider = new CActiveDataProvider(get_class(Client::model()), array('criteria'=>$criteria,‘pagination’=>false,));
			//$clients = $dataProvider->getData();
			$parts = Part::model()->findAll($criteria);
			$return_array = array();
		
			foreach($parts as $part) {
				$return_array[] = array(
					'label'=>$part->name,
					'value'=>$part->name,
					'id'=>$part->id,
					'description'=>$part->description,
					'stock'=>$part->stock,
					'name'=>$part->name,
					

					
					);
			}
 
			echo CJSON::encode($return_array);
		} 
	}
}
