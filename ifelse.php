<?php
$product = [
    "product_name" => "Fireworks Display Package",
    "category" => "Celebration Pyrotechnics",
    "location" => "Capas, Tarlac",
    "description" => "Bring your events to life with our vibrant fireworks displays! We focus on creating a spectacular show while keeping safety our top priority."
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Our Product</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php include 'includes/header.php'; ?>

<h2>Discover Our Fireworks</h2>

<p>Here’s a closer look at what makes our fireworks display special:</p>

<ul>
    <li><strong>Product Name:</strong> <?= $product['product_name'] ?></li>
    <li><strong>Category:</strong> <?= $product['category'] ?></li>
    <li><strong>Location:</strong> <?= $product['location'] ?></li>
    <li><strong>Description:</strong> <?= $product['description'] ?></li>
</ul>

<?php include 'includes/footer.php'; ?>

</body>
</html>
