<?php 

/**
 * Created By Ali Labib
 * Date 1/13/18
 * Time: 09:40 PM
 */

use classes\Match;
use classes\Player;

require __DIR__ . '/../vendor/autoload.php';
 $players = [];
 for($index=1;$index<12;$index++){
    array_push($players,new Player());
 }
 $match = new Match($players);
 $match->start();