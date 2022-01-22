<?php 
namespace classes;

use interfaces\DefenseInterface;
use interfaces\PlayerInterface;
class DefencePlayer implements PlayerInterface, DefenseInterface{

    public function play()
    {
        $this->Defence();
    }

    public function Defence()
    {
        echo "Defence ";
    }

}