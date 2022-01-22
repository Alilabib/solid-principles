<?php 

namespace classes;

use interfaces\PlayerInterface;
use Players\ChildKeeper;
use Players\ParentKeeper;

class KeepingPlayer implements PlayerInterface{
     
    // public function play()
    // {
    //     $keeper = new ParentKeeper;
    //     // $keeper = new ChildKeeper();
    //     echo $keeper->keeping();
    // }

    public function Attack()
    {
    }

    public function Defence()
    {
        
    }

    public function Keeping()
    {
                $keeper = new ParentKeeper;
        // $keeper = new ChildKeeper();
        echo $keeper->keeping();
    }
}