<?php
require_once 'product.php';

class Food extends Product {
    public $type;
    public $MainProtein;
    public $ExpiryDate;

    function __construct(string $_type, string $_MainProtein, string $_ExpiryDate, string $_name, int $_price, string $_SpeciesTarget, string $_AgeRange)
    {
        parent::__construct($_name, $_price, $_SpeciesTarget, $_AgeRange);
        $this->type = $_type;
        $this->MainProtein = $_MainProtein;
        $this->ExpiryDate = $_ExpiryDate;

    }
}