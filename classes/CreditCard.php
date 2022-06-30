<?php 
class CreditCard {
    public $brand;
    public $name;
    public $surname;
    public $expiryDate;

    function __construct(int $_number, string $_brand, string $_name, string $_surname, int $_cvc, string $_expire)
    {
        $this->setNumbers($_number);
        $this->brand = $_brand;
        $this->name = $_name;
        $this->surname = $_surname;
        $this->setNumbers($_cvc);
        $this->setExpiryDate($_expire);
    }
    //credit card date validation
    public function setExpiryDate($_expire) {
        $today = date('Y-m-d');
        if ($_expire < $today) {
            throw new Exception("invalid Credit Card");
        }
        $this->expiryDate = $_expire;
    }
    //set random numbers for credit card $number and $cvc
    public function setNumbers() {
        $this->number = mt_rand(00000000000000, 999999999999);
        $this->cvc = mt_rand(000, 999);
    }
}