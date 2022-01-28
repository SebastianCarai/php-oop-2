<?php 
require_once __DIR__ . '/Pant.php';
require_once __DIR__ . '/Jeans.php';
require_once __DIR__ . '/Cargo.php';
require_once __DIR__ . '/Sweatpants.php';
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/User-Premium.php';

$jeans_levis = new Jeans(55, 'S');
$jeans_levis->brand= 'Levis';

$cargo_bershka = new Cargo (28, 'M');
$cargo_bershka->color = 'beige';
$cargo_bershka->brand = 'Bershka';

$sweatpants_nike = new Sweatpants (40, 'L');
$sweatpants_nike->color = 'gray';
$sweatpants_nike->brand= 'Nike';

// User
$Mario = new User('Mario' , 'Rossi', 'mario@gmail.com');
$Mario->age = 20;
$Mario->setDiscount();
$Mario->addToCart($cargo_bershka);
$Mario->addToCart($jeans_levis);
var_dump($Mario);

// Premium User
$Anna = new UserPremium('Anna', 'Verdi', 'anna@email.it', 2);
$Anna->age = 62;
$Anna->premium_level = 1;
$Anna->setDiscount();
$Anna->addToCart($sweatpants_nike);
$Anna->addToCart($jeans_levis);
var_dump($Anna);
?>