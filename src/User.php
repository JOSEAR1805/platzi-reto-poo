<?php

namespace App;

class User
{
    private $name;

    public function setName($value)
    {
        $this->name = $value;
    }

    public function getName()
    {
        return $this->name;
    }
}