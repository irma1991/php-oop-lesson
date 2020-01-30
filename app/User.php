<?php

namespace OOP;

abstract class User
{
    protected $name;
    protected $email;
    protected $phone;
    protected $comment;

    // abstraktus metodai, juos butina realizuoti child klasese
    abstract public function __construct($name, $email, $phone);
    abstract public function getProfile();
    abstract public function setComment($comment);

}