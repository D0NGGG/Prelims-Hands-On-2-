<?php
$membership = 'new';  

$offer = match($membership){
    'new' => 'Welcome to Fireworks Lights! Get ready to light up the night with a dazzling **50% discount** on your first purchase!',
    'old' => 'Hello, valued customer! Ready to light up the sky with some new and exciting fireworks? Let’s make this celebration unforgettable!',
    default => 'Hello! Sign up today and enjoy a 50% discount on your first firework purchase. Let’s ignite the fun!'
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Fireworks Store</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <h1>Ignite the Night with Brilliant Fireworks!</h1>

    <h2>Welcome to Fireworks Lights!</h2>


    <p>Are you a new member or an old friend? (new/old): <strong><?= $membership ?></strong></p>
    
  
    <p>Exciting News!
        Your first firework purchase comes with a dazzling 50% discount! Let’s light up the night and create memories that sparkle forever! </p>

 
    <p><?= $offer ?></p>

    <p>Don’t miss out on the chance to grab the most spectacular fireworks in town! Shop now and ignite the sky!</p>

</body>
<footer>
    <?php include 'includes/footer.php'; ?>
</footer>
</html>
