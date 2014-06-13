<?php
$this->breadcrumbs=array(
	'Orders'=>array('index'),
	$model->id,
);

?>

<h1>Detalles orden de trabajo número #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
	//	'id',
		'date',
		array('label'=>'Equipo', 'value'=>$model->equipment->name),
		array('label'=>'Cliente', 'value'=>$model->client->name),
		'fail',
		'warranty',
		array('label'=>'Estado', 'value'=>$model->status->name),
		'adicional',
	),
)); ?>



<?php
    // get the HTML
    ob_start();
    echo $this->renderPartial('_view'); 
    $content = ob_get_clean();
 
    // convert in PDF
    Yii::import('application.extensions.html2pdf.html2pdf');
    try
    {
        $html2pdf = new html2pdf('P', 'A4', 'en');
//      $html2pdf->setModeDebug();
        $html2pdf->setDefaultFont('Arial');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output("name.pdf");
    }
    catch(html2pdf_exception $e) {
        echo $e;
        exit;
    }
?>