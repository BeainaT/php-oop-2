<?php
require_once './classes/product.php';
require_once './classes/food.php';
require_once './classes/toys.php';

$monge = new Food('dry', 'beef', '10/2024', 'monge', 35, 'dog', 'puppy');
$trainer = new Food('wet', 'salmon', '10/2023', 'trainer', 40, 'cat', 'adult');
$duck = new Toys ('xl', 'hard', 'duck', 10, 'dog', 'adult');
$FluffyBall = new Toys ('s', 'soft', 'fluffy ball', 5, 'cat', 'puppy, adult, senior');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP oop e-commerce</title>
    </head>
    <body>
        <h1>Product</h1>
        <h2>Food</h2>
        <ul>
            <li>
                <h3><?= "{$monge->name}<br>" ?></h3>
                <?php foreach($monge as $elm) { ?>
                    <?php if($elm !== $monge->name) { ?>
                        <div> <?= $elm ?> </div>
                   <?php } ?>
                <?php } ?>
            </li>
            <li>
                <h3><?= "{$trainer->name}<br>" ?></h3>
                <?php foreach($trainer as $elm) { ?>
                    <?php if($elm !== $trainer->name) { ?>
                        <div> <?= $elm ?> </div>
                   <?php } ?>
                <?php } ?>
            </li>
        </ul>
        <h2>Toys</h2>
        <ul>
            <li>
                <h3><?= "{$duck->name}<br>" ?></h3>
                <?php foreach($duck as $elm) { ?>
                    <?php if($elm !== $duck->name) { ?>
                        <div> <?= $elm ?> </div>
                   <?php } ?>
                <?php } ?>
            </li>
            <li>
                <h3><?= "{$FluffyBall->name}<br>" ?></h3>
                <?php foreach($FluffyBall as $elm) { ?>
                    <?php if($elm !== $FluffyBall->name) { ?>
                        <div> <?= $elm ?> </div>
                   <?php } ?>
                <?php } ?>
            </li>
        </ul>
    </body>
</html>