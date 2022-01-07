<?php

namespace App;

class TankFight extends Game
{
    protected function initialize()
    {
        echo "Tankfight Game Initialized! Start playing.", PHP_EOL;
    }

    protected function startPlay()
    {
        echo "Tankfight Game Started. Enjoy the game!", PHP_EOL;
    }

    protected function endPlay()
    {
        echo "Tankfight Game Finished!", PHP_EOL;
    }

}