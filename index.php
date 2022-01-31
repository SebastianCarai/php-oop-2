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

$users_array=[];

// User
try{
    $Mario = new User('M' , 'Rossi', 'mario@gmail.com');    
} catch(Exception $e){
    error_log($e);

    echo '<h1 style="text-align:center">Il sito è momentaneamente in manutenazione. Torneremo presto</h1>';
}
$Mario->age = 20;
$Mario->setDiscount();
$Mario->addToCart($cargo_bershka);
$Mario->addToCart($jeans_levis);
$users_array[] = $Mario;

// Premium User
$Anna = new UserPremium('Anna', 'Verdi', 'anna@email.it', 2);
$Anna->age = 62;
$Anna->premium_level = 1;
$Anna->setDiscount();
$Anna->addToCart($sweatpants_nike);
$Anna->addToCart($jeans_levis);
$users_array[] = $Anna;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($users_array as $single_user){ ?>
        <h1> <?php echo $single_user->getFullName() ?>, ecco il suo carrello </h1>

        <?php foreach($single_user->getCart() as $single_product){ ?>
            <ul>
                <li> Brand: <?php echo $single_product->brand ?></li>
                <li> Price: <?php echo $single_product->price ?></li>
                <li> Size: <?php echo $single_product->size ?></li>
                <li> Color: <?php echo $single_product->color ?></li>
                <li> Material: <?php echo $single_product->material ?></li>
            </ul>

        <?php } ?>

        <div> Spesa totale: <?php echo $single_user->getMoneySpent();?> €</div>
    <?php } ?>

</body>
</html>