<?php


namespace Exporter;


//include "Exporter.php";

class TextExporter extends Exporter
{

    protected $type = '.txt';

    public function export()
    {
        # code...

        $file_name = "file-text-" . rand(10, 100) . $this->type;
        $file_path =  __DIR__ . "/files/$file_name";
        file_put_contents($file_path, "{$this->data['title']}\n{$this->data['content']}");
        echo "$file_name Successfully Created !";
    }
}


// $text = new TextExporter(['title' => 'jjjjkkkk', 'content' => 'hacker']);
// $text->export();
