<?php

namespace App;

class Mario extends Game
{
    protected function initialize()
    {
        echo "Mario Game Initialized! Start playing.", PHP_EOL;
    }

    protected function startPlay()
    {
        echo "Mario Game Started. Enjoy the game!", PHP_EOL;
    }

    protected function endPlay()
    {
        echo "Mario Game Finished!", PHP_EOL;
    }

}