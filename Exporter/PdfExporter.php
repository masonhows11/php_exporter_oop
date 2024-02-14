<?php
namespace Exporter;

//include "Exporter.php";

class PdfExporter extends Exporter
{

    protected $type = '.pdf';

    public function export()
    {
        echo "pdf Successfully Created !";
    }


}


$pdf = new PdfExporter(['title' => 'james', 'content' => 'hacker']);
$pdf->export();