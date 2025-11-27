<?php
$teamMembers = [
    "name" => "Carlo Catacutan",
    "role" => "Fireworks Safety Coordinator",
    "experience" => "3 years",
    "description" => "Carlo ensures that every fireworks setup is safe, secure, and well-prepared before each show."
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Our Member</title>
     <link rel="stylesheet" href="css/styles.css">  
</head>
<body>
        <?php include 'includes/header.php'; ?>

<h2>About Our Team Member</h2>

<p>Meet one of our dedicated team members who plays a big role in our fireworks displays:</p>

<p>
<?php  
    foreach ($teamMembers as $key => $value) {
        echo ucfirst($key) . ": " . $value . "<br>";
    }
?>
</p>
<?php include 'includes/footer.php'; ?>
</body>
</html>
