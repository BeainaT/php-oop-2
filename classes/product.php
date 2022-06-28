<?php
class Product {
    public $name;
    public $quantiy;
    public $price;
    public $SpeciesTarget;
    public $AgeRange;

    function __construct(string $_name, int $_price, string $_SpeciesTarget, string $_AgeRange)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->SpeciesTarget = $_SpeciesTarget;
        $this->AgeRange = $_AgeRange;
    }
}