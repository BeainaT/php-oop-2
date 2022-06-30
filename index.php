<?php
require_once './classes/food.php';
require_once './classes/toys.php';
require_once './classes/HealthyCare.php';
require_once './classes/user.php';
require_once './classes/RegisteredUser.php';
require_once './classes/CreditCard.php';

//Products extended by Food, Toy and HealthyCare classes
$food = [
    new Food('dry', 'beef', '10/2024', 'monge', 35, 'dog', 'puppy'),
    new Food('wet', 'salmon', '10/2023', 'trainer', 40, 'cat', 'adult'),
    new Food('dry', 'insects, grain', '8/2025', 'nutriBirds', 7, 'birds', 'chick, adult')
];
$toys = [
    new Toys ('xl', 'hard', 'duck', 10, 'dog', 'adult'),
    new Toys ('s', 'soft', 'fluffy ball', 5, 'cat', 'puppy, adult, senior')
];
$HealthyObj = [
    new HealthyCare('brush', 'flufflyCare', 17, 'dog, cat', 'puppy, adult, senior'),
    new HealthyCare('carder', 'hecklerPlus', 25, 'dog', 'adult')
];

//Set user as class
$user = new User('John', 'Doe', 'JD@gmail.com');
//Set RegisteredUser as extending User
$RegisteredUser = new RegisteredUser('Jessica', 'Palmer', 'JS@hotmail.com');

//try and catch
try {
    //$cc is a valid card
    $cc = new CreditCard(0, 'visa', 'john', 'doe', 0, '2023-08-15');
    //assign CreditCard to RegisteredUser passing obj $cc
    $RegisteredUser->setCreditCard($cc);
} catch (Exception $e) {
    //Exception message setted in CreditCard Class
    $e->getMessage();
}

try {
    //$ccFailed is invalid card
    $ccFailed =  new CreditCard(0, 'visa', 'john', 'doe', 0, '2022-04-15');
    //assign CreditCard to RegisteredUser passing obj $ccFailed
    $RegisteredUser->setCreditCard($ccFailed);
} catch (Exception $e) {
    //Exception message setted in CreditCard Class
    $e->getMessage();
}
?>
