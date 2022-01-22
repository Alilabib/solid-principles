<?php 
namespace classes;

use interfaces\DefenseInterface;
use interfaces\PlayerInterface;
class DefencePlayer implements DefenseInterface{

    public function Defence()
    {
        echo "Defence ";
    }

}