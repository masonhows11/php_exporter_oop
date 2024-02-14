<?php

namespace Exporter;

//include "Exporter.php";

class JsonExporter extends Exporter
{


    protected $type = '.json';

    public function export()
    {
        # code...

        $file_name = "file-text-" . rand(10, 100) . $this->type;
        $file_path =  __DIR__ . "/files/$file_name";
        file_put_contents($file_path,json_encode($this->data));
        echo "$file_name Successfully Created !";
    }
}


$json = new JsonExporter(['title' => 'james', 'content' => 'hacker']);
$json->export();
