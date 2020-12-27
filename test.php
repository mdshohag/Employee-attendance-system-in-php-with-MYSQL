<?php


  
include('vendor/autoload.php');

$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML('Hello World');

$mpdf->Output('name.pdf','D');

?>