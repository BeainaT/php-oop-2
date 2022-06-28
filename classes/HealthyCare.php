<?php
require_once 'product.php';

class HealthyCare extends Product {
    public $object;
    function __construct(string $_object, string $_name, int $_price, string $_SpeciesTarget, string $_AgeRange)
    {
        parent::__construct($_name, $_price, $_SpeciesTarget, $_AgeRange);
        $this->object = $_object;
    }
}