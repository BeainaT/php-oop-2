<?php
class User {
    public $name;
    public $surname;
    public $email;
    private $CreditCard;

    function __construct(string $_name, string $_surname , string $_email)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
    }
    public function setCreditCard($_CreditCard) {
        $this->CreditCard = $_CreditCard;
    }
    public function getCreditCard() {
        return $this->CreditCard;
    }
}