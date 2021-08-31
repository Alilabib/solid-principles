<?php 
namespace classes;

class Match{
    private $attack;
    private $defence;
    private $keeper;
    public function __construct()
    {
      $this->attack  = new Attack();
      $this->defence = new Defence();
      $this->keeper  = new Keeper();   
    }

    public function start()
    {
        echo "start play";
    }
}