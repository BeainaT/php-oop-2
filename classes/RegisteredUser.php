<?php
require_once 'user.php';
class RegisteredUser extends User {
    public $discount = 20;

    function __construct(int $_discount, string $_name, string $_surname , string $_email)
    {   
        parent::__construct($_name, $_surname, $_email, $_discount);
        $this->discount = $_discount;

    }
}