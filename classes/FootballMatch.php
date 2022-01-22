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
            if($player instanceof AttackPlayer){
                $player->Attack();
            }elseif( $player instanceof DefencePlayer){
                $player->keeping();
            }
            // elseif($player instanceof KeepingPlayer){
            //     $player->Keeping();
            // }

            echo "<br>";

        }
    }
}