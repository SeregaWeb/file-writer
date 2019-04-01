<?php

class filewriter 
{
    private $file;

    function __construct()
    {
        $arr = file(FILE_PATH);
        $this->setFile($arr);
        $this->filenew = $this->file;
    }

    function __destruct()
    {
        file_put_contents('NEW_FIL_PATH.txt','rete');
        $this->saveFile();
    }

    private function setFile($f)
    {
        $this->file = $f;
    }

    public function getFile()
    {
        return $this->file;
    }

    public function getOneRow($num)
    {
        $arr = $this->getFile();
        return $arr[$num];
    }

    public function getOneSimbol($num,$index)
    {
        $arr = $this->getOneRow($num);
        $str = strval($arr);
        return substr($str,$index,1);
    }  

    public function getCount()
    {
        return count($this->file);
    }

    public function updateRow($string , $index)
    {
        $arr = $this->getFile();
        $arr[$index] = $string;
        $this->setFile($arr);
    }

    public function updateOneSimbol($newSimbol,$row,$numSimbol)
    {
        $arr = $this->getFile();
        $str = strval($arr[$row]);
        
        $colSimbols = 1;
        $str = substr_replace($str, $newSimbol, $numSimbol, $colSimbols);

        $arr[$row] = $str; 
        $this->setFile($arr);
    }

    public function saveFile()
    {
        if(file_put_contents(NEW_FILE_PATH,$this->file))
        {
            return 'save file';
        }else{
            return 'save error';
        }
    }
    
}