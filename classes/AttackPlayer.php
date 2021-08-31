<?php 

namespace classes;
use interfaces\PlayerInterface;

class AttackPlayer implements PlayerInterface{

    public function play()
    {
        echo "Attack";
    }


}