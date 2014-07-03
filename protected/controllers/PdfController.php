<?php
class PdfController extends Controller{

	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view',),
				'users'=>array('*'),
			),
			
		);
	}

   public function actionView(){
    $this->renderpartial("view");
  }
 
 
 public function actionIndex()
	{
		 $this->renderpartial("view");
	}
}
?>