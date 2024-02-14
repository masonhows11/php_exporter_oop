<?php



class Exporter
{




    public static function export_to_text($title, $content)
    {

        echo "Export to text [$title,$content]" . PHP_EOL;
    }


    public static function export_to_pdf($title, $content)
    {

        echo "Export to pdf [$title,$content]" . PHP_EOL;
    }


    public static function export_to_json($title, $content)
    {

        echo "Export to json [$title,$content]" . PHP_EOL;
    }
}
