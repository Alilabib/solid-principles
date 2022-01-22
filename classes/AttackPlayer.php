<?php 

namespace classes;

use interfaces\AttackInterface;
use interfaces\PlayerInterface;

class AttackPlayer implements AttackInterface{

    public function Attack()
    {
        echo "Attacker attack";
    }

}