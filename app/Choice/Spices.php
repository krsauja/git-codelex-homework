<?php

namespace app\Choice;

abstract class Spices
{
    abstract function getToTell(): string;

    public function getName(): string
    {
        return get_class($this);
    }
}