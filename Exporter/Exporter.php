<?php

namespace Exporter;

interface Exportable{
    public function export();
}


interface Importable{
    public function import();
}



abstract  class Exporter implements Exportable
{

    protected $type;
    protected $data;

    public function __construct($data)
    {

        $this->data = $data;

        if(!$this->is_valid())
        {
            die(" invalid data ");
        }
    }



    public  function is_valid()
    {
        # code...
        foreach($this->data as $field){

            if(empty($field)){
                return false;
            }

            return true;
        }
    }

    // public abstract function export();
  
}
