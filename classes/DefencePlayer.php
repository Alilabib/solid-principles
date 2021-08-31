<?php 
namespace classes;
use interfaces\PlayerInterface;
class DefencePlayer implements PlayerInterface{

    public function play()
    {
        echo "defence";   
    }
}