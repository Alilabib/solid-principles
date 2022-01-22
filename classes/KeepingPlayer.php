<?php 

namespace classes;

use interfaces\KeepingInterface;
use interfaces\PlayerInterface;
use Players\ChildKeeper;
use Players\ParentKeeper;

class KeepingPlayer implements PlayerInterface, KeepingInterface{
     
    public function play()
    {
       $this->Keeping();   
    }
    public function Keeping()
    {
        $keeper = new ParentKeeper;
        // $keeper = new ChildKeeper();
        echo $keeper->keeping();
    }
}