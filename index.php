<?php
require_once './classes/product.php';
require_once './classes/food.php';
require_once './classes/toys.php';
require_once './classes/HealthyCare.php';
require_once './classes/user.php';
require_once './classes/RegisteredUser.php';

$products = [
    new Food('dry', 'beef', '10/2024', 'monge', 35, 'dog', 'puppy'),
    new Toys ('xl', 'hard', 'duck', 10, 'dog', 'adult'),
    new Food('wet', 'salmon', '10/2023', 'trainer', 40, 'cat', 'adult'),
    new Food('dry', 'insects, grain', '8/2025', 'nutriBirds', 7, 'birds', 'chick, adult'),
    new Toys ('s', 'soft', 'fluffy ball', 5, 'cat', 'puppy, adult, senior'),
    new HealthyCare('brush', 'flufflyCare', 17, 'dog, cat', 'puppy, adult, senior'),
    new HealthyCare('carder', 'hecklerPlus', 25, 'dog', 'adult'),

];
$user = new User('John', 'Doe', 'JD@gmail.com');
$RegisteredUser = new RegisteredUser(20, 'Jessica', 'Palmer', 'JS@hotmail.com');
var_dump($RegisteredUser)
?>
