<?php

namespace App;

abstract class Game
{
    abstract protected function initialize();

    abstract protected function startPlay();

    abstract protected function endPlay();

    /** Template method */
    public final function play()
    {
        /** Primitive */
        $this->initialize();

        /** Primitive */
        $this->startPlay();

        /** Primitive */
        $this->endPlay();
    }
}