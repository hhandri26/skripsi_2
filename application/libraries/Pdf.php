<?php


class Pdf {

    function generate($html,$filename) {
        define('DOMPDF_ENABLE_AUTOLOAD', false);
        require_once APPPATH .'../vendor/dompdf/dompdf/src/Dompdf.php';
        require_once APPPATH .'../vendor/dompdf/dompdf/lib/html5lib/Parser.php';
        require_once APPPATH .'../vendor/dompdf/dompdf/src/Autoloader.php';
        
     
        $dompdf = new Dompdf\DOMPDF();
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream($filename.'.pdf',array("Attachment"=>0));
    }

    

}