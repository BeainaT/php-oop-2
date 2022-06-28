<?php 
require_once 'product.php';
class Toys extends Product {
    public $size;
    public $strength;

    function __construct(string $_size, string $_strength, string $_name, int $_price, string $_SpeciesTarget, string $_AgeRange)
    {
        parent::__construct($_name, $_price, $_SpeciesTarget, $_AgeRange);
        $this->size = $_size;
        $this->strength = $_strength;
    }
}