<?php

require 'vendor/autoload.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;
$faker =faker\factory::create();
$dompdf = new Dompdf();
$nama=$faker->nama();
$alamat=$faker->text();


$dompdf->loadHtml("
     <table border='1'>
     <tr>
     <td>nama</td>
     </tr>
     
     </table>");

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();

?>