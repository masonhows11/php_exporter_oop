<?php
// include "./exporter/exporter.php";
if ($_SERVER['REQUEST_METHOD'] != "POST") {

    // echo "Not Submitted ";
    return;
}

# form submitted

include "autoload.php";

[$title, $content, $type] =
    [$_POST['title'], $_POST['content'], $_POST['type']];

$whitelist = ['text', 'json', 'pdf'];

if (!in_array($type, $whitelist)) {

    echo (" invalid format ");
    return;
}


//// this is dynamic call class & dynamic create class base on type of each exporter
//// like TextExporter JsonExporter or PdfExporter 
$class_name = "Exporter\\{$type}Exporter";

if(class_exists($class_name))
{
    $export = new $class_name(['title' => $title, 'content' => $content]);
    //// then call  export method
    $export->export();
    /// echo " Submit Ok";
}

//// we use dynamic call call & obj & method instead of switch case

