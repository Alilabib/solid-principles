<?php 
namespace classes;

class FootballMatch{
    private $playerList;
    public function __construct(Array $players)
    {   
        $this->playerList = $players;
    }

    public function start()
    {
        echo "start match";
        echo "<br>";
        foreach($this->playerList as $player){
            echo "<br>";
            $player->attack();
            echo "<br>";

        }
    }
}