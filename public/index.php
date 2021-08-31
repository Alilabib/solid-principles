<?php 

/**
 * Created By Ali Labib
 * Date 1/13/18
 * Time: 09:40 PM
 */

use classes\AttackPlayer;
use classes\DefencePlayer;
use classes\KeepingPlayer;
use classes\Match;
use classes\Player;

require __DIR__ . '/../vendor/autoload.php';
 $players = [];
 for($index=1;$index<=5;$index++){
    array_push($players,new AttackPlayer());
 }
 for($index=1;$index<=5;$index++){
    array_push($players,new DefencePlayer());
 }

 array_push($players, new KeepingPlayer());

 $match = new Match($players);
 $match->start();