<?php 

namespace classes;

use interfaces\PlayerInterface;
use Players\ChildKeeper;

class KeepingPlayer implements PlayerInterface{
     
    public function play()
    {
        $keeper = new ChildKeeper();
        echo $keeper->keeping();
    }
}