<?php 
    require_once __DIR__ . '/food.php';
    require_once __DIR__ . '/accessories.php';
    require_once __DIR__ . '/unloggedUser.php';
    require_once __DIR__ . '/loggedUser.php';

    $crocchi = new Food ('dog', 5, 'crocchette', 1);
    var_dump($crocchi);

    $toys = new Accessories ('cat', 48, 'tiragraffi');
    var_dump($toys);

    $userLogged = new LoggedUser ('Azzurra', 'Graziano', 'azzurra@me.com');
    var_dump($userLogged); 

    $userLogged->addProduct($crocchi);
    $userLogged->addProduct($toys);

    var_dump($userLogged);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>
</head>
<body>

    <?php foreach ($userLogged->getShoppingBag as $product) { ?>
        <div>Per: <?php echo $product -> $animal; ?></div>
        <div>Prezzo: <?php echo $product -> $price; ?></div>
        <div>Tipo: <?php echo $product -> $type; ?></div>
    <?php } ?>
    
</body>
</html>