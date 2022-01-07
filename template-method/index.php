<?php

use App\Mario;
use App\TankFight;

require 'vendor/autoload.php';


$game = new Tankfight();
$game->play();

$game = new Mario();
$game->play();
