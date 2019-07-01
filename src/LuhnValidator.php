<?php

namespace Deckard\Dojo;

class LuhnValidator
{
    public function isValid(string $luhnCode) : bool
    {
        $inverted = strrev($luhnCode);

        return !($inverted[0] !== '0');
    }
}