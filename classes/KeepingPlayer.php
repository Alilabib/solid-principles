<?php 

namespace classes;

use interfaces\PlayerInterface;

class KeepingPlayer implements PlayerInterface{
     
    public function play()
    {
        echo "Goal Keeping";
    }
}