<?php

namespace OOP;

class Teacher extends User
{
    protected $type;

    public function __construct($name, $email, $phone, $type = null)
    {
        parent::__construct($name, $email, $phone);
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->type = $type;
    }

    public function getProfile(){
        // TODO: Implement getProfile() method.
        $data[] = $this->name;
        $data[] = $this->email;
        $data[] = $this->phone;
        $data[] = $this->comment;
        $data[] = $this->type;

        return $data;
    }

    public function setComment($comment)
    {
        // TODO: Implement setComment() method.
        $this->comment = $comment;
    }

}