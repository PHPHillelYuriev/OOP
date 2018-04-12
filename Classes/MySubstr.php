<?php
require_once("MyString.php");
require_once("../Interfaces/IntMySubstr.php");

class MySubstr extends MyString implements IntMySubstr
{
    public $start;
    public $length;


    function __construct($str, $start, $length)
    {   
        parent::__construct($str);
        $this->start = $start;
        $this->length = $length;
    }

    public function MySubstr()
    {
        $resPos = ($this->start + $this->length);
        $result = "";

        for ($i = $this->start; $i < $resPos; $i++) { 
            $result .= $this->str{$i};
        }

        return $result;
    }
} 

$str = "tildho!hello!world!lo, world!qwe!fghfg! ret";
$start = "5";
$length = "10";

$obj = new MySubstr($str, $start, $length);

echo "<pre>";
var_dump($obj->MySubstr());  