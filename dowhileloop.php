<?php
$fireworks = 5;  
$price = 1800;    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Fireworks Store - Checkout</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <h2>Receipt:</h2>
    <p>
        <?php  
      
        do {
            echo $fireworks;
            echo ' firework(s) cost Php ';
            echo $fireworks * $price;
            echo '<br>';
            $fireworks--;  
        } while ($fireworks > 0);
        ?>  
    </p>
</body>

<footer>
    <?php include 'includes/footer.php'; ?>
</footer>

</html>
