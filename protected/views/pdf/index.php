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
        echo var_dump($html2pdf);
        $html2pdf->Output("name.pdf");
    }
//     catch(html2pdf_exception $e) {
//         echo $e;
//         exit;
//     }
?>