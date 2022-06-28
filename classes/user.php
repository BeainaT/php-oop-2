<?php
class User {
    public $name;
    public $surname;
    public $email;

    function __construct(string $_name, string $_surname , string $_email)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
    }
}