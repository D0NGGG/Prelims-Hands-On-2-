<?php
$amount = 3;  

switch (true) {
    case ($amount <= 2):
        $message = 'Thank you for shopping for fireworks at our store!';
        break;
    case ($amount >= 3 && $amount < 5):
        $message = 'Enjoy the 25% discount coupon. Thank you for shopping fireworks at our store! Proceed to checkout.';
        break;
    case ($amount >= 5):
        $message = 'Enjoy the 40% discount coupon. Thank you for shopping fireworks at our store! Proceed to checkout.';
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Cart</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <h2><img src="img/cart.png" width="25px"> Amounts of Paputok in cart: <?= $amount; ?></h2>
    <p><?= $message ?></p>
</body>
<footer>
    <?php include 'includes/footer.php'; ?>
</footer>
</html>
