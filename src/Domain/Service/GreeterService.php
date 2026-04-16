<?php

namespace App\Domain\Service;
class GreeterService
{
    private string $greet;

    public function __construct( string $greet )
    {
        $this -> greet  = $greet;
    }

    public function greet( string $name ): string
    {
        return "<b>{$this->greet}</b>, <i>$name</i>!";
    }
}
