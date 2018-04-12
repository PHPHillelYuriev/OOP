<?php
require_once("MyString.php");
require_once("../Interfaces/IntMyStrpos.php");

class MyStrpos extends MyString implements IntMyStrpos
{   
    public $needle;

    function __construct($str, $needle)
    {   
        parent::__construct($str);
        $this->needle = $needle;
    }    

    public function myStrpos()
    {
        $strLength = strlen($this->str);
        $needleLength = strlen($this->needle);
        $pos = 0;

        for ($i= 0; $i < $strLength; $i++) {
            if ($this->needle{0} == $this->str{$i}) {
                $pos = $i;
                $resStr = substr($this->str, $i, $needleLength);

                if ($resStr == $this->needle) {
                    return $pos;
                }
            }
        } 
        
        return false;
    }
}

$str = "tilho hello weldg hille hatlo hallo";
$str1 = "hi";

$obj = new MyStrpos($str, $str1);

var_dump($obj->myStrpos());