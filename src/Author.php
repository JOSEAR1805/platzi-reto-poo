<?php

namespace App;

class Author extends User
{
    public function __construct($name)
    {
        $this->setName($name);
    }
}