<?php 

namespace classes;

use interfaces\AttackInterface;
use interfaces\PlayerInterface;

class AttackPlayer implements PlayerInterface, AttackInterface{

    public function play()
    {
        $this->Attack();
    }
    public function Attack()
    {
        echo "Attacker attack";
    }

}