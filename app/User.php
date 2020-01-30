<?php

namespace OOP;

class User
{
    protected $name;
    protected $email;
    protected $phone;

    public function __construct($name, $email, $phone)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }
}