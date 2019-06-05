<?php
    // get the HTML
 $this->breadcrumbs=array(
	'Budget',
);  

    ob_start();
    echo $this->renderPartial('_pdf', array('model'=>$model,'model_order'=>$model_order)); 
    $content = ob_get_clean();
 $id=$model_order->id;
  //  convert in PDF
    Yii::import('application.extensions.html2pdf.html2pdf');
    try
    {
        $html2pdf = new html2pdf('P', 'A4', 'en');
  //    $html2pdf->setModeDebug();
        $html2pdf->setDefaultFont('Arial');
        $html2pdf->writeHTML($content);
      //  echo var_dump($html2pdf);
        $html2pdf->Output("orden".$id.".pdf");
    }
    catch(html2pdf_exception $e) {
        echo $e;
        exit;
    }
?>