<?php

$userType = 'vip'; 

$motorcycles = [
    ['name' => 'Yamaha R1', 'price' => 17999, 'stock' => 3, 'category' => 'Sport', 'discount' => true, 'image' => 'https://tse4.mm.bing.net/th/id/OIP._F8gw4GNdQ0w3xwKVMn4AgHaFj?pid=Api&P=0&h=180'],
    ['name' => 'Harley Davidson Street 750', 'price' => 7599, 'stock' => 5, 'category' => 'Cruiser', 'discount' => false, 'image' => 'https://i1.wp.com/www.iamabiker.com/wp-content/uploads/2014/08/2015-Harley-Davidson-Street-750-review-01.jpg?fit=2560%2C1707'],
    ['name' => 'Honda PCX 160', 'price' => 3299, 'stock' => 2, 'category' => 'Scooter', 'discount' => true, 'image' => 'https://i1.wp.com/goflatoutph.com/wp-content/uploads/2020/12/image-06.png?fit=3000%2C1458'],
    ['name' => 'Kawasaki Ninja 400', 'price' => 5299, 'stock' => 4, 'category' => 'Sport', 'discount' => false, 'image' => 'https://motoringworld.in/wp-content/uploads/2022/12/Kawasaki-Ninja-400-web3.jpg'],
    ['name' => 'Suzuki Boulevard C50', 'price' => 8199, 'stock' => 3, 'category' => 'Cruiser', 'discount' => true, 'image' => 'https://tse3.mm.bing.net/th/id/OIP.MEb4pyK8LI3qlJIXIAjBPwHaD2?pid=Api&P=0&h=180'],
    ['name' => 'Vespa Primavera 150', 'price' => 5999, 'stock' => 6, 'category' => 'Scooter', 'discount' => false, 'image' => 'https://images.unsplash.com/photo-1541890289-9ba144088c67?w=400'],
    ['name' => 'BMW S1000RR', 'price' => 18999, 'stock' => 2, 'category' => 'Sport', 'discount' => false, 'image' => 'https://motoringworld.in/wp-content/uploads/2022/12/2023-BMW-S1000RR.jpg'],
    ['name' => 'Indian Scout Bobber', 'price' => 12499, 'stock' => 4, 'category' => 'Cruiser', 'discount' => true, 'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400']
];

$cartItems = [
    ['name' => 'Yamaha R1', 'price' => 17999],
    ['name' => 'Honda PCX 160', 'price' => 3299],
    ['name' => 'Kawasaki Ninja 400', 'price' => 5299]
];

$selectedCategory = 'Sport'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotorHub - Premium Motorcycle Dealer</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    
    <header>
        <div class="container">
            <div class="logo">
                <h1>MotorHub</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#inventory">Inventory</a></li>
                    <li><a href="#transactions">Transactions</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    
    <section class="welcome-banner" id="home">
        <div class="container">
            <?php
            
            $greeting = match($userType) {
                'new' => 'Welcome to MotorHub!',
                'returning' => 'Welcome Back!',
                'vip' => 'Welcome, VIP Member!',
                default => 'Welcome to MotorHub!'
            };
            
            $message = match($userType) {
                'new' => 'Enjoy 10% off your first purchase!',
                'returning' => 'Check out our new arrivals!',
                'vip' => 'Exclusive deals and free shipping on all orders!',
                default => 'Your trusted motorcycle dealer'
            };
            
            echo "<h2>$greeting</h2>";
            echo "<p>$message</p>";
            
            
            if ($userType === 'vip') {
                echo "<span class='badge badge-gold'>VIP Member</span>";
            } elseif ($userType === 'returning') {
                echo "<span class='badge badge-blue'>Loyalty Points: 250</span>";
            } else {
                echo "<span class='badge badge-green'>First Time Bonus Available</span>";
            }
            ?>
        </div>
    </section>

    
    <section class="inventory-section" id="inventory">
        <div class="container">
            <h2>Inventory</h2>
            
            <div class="inventory-grid">
                <?php
                for ($i = 0; $i < 5 && $i < count($motorcycles); $i++) {
                    $bike = $motorcycles[$i];
                    echo "<div class='inventory-card'>";
                    echo "<div class='card-image'>";
                    echo "<img src='{$bike['image']}' alt='{$bike['name']}'>";
                    if ($bike['discount']) {
                        echo "<span class='sale-badge'>SALE</span>";
                    }
                    if ($bike['stock'] == 0) {
                        echo "<div class='out-of-stock-overlay'>OUT OF STOCK</div>";
                    }
                    echo "</div>";
                    echo "<div class='card-content'>";
                    echo "<h3>{$bike['name']}</h3>";
                    echo "<p class='price'>$" . number_format($bike['price'], 2) . "</p>";
                    echo "<p class='stock-info'>Stock: {$bike['stock']}</p>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>
            </div>

            <div class="category-filter">
                <h3>Browse by Category: <span class="highlight-category"><?php echo $selectedCategory; ?></span></h3>
                <div class="inventory-grid">
                    <?php
                    switch($selectedCategory) {
                        case 'Sport':
                            foreach ($motorcycles as $bike) {
                                if ($bike['category'] === 'Sport') {
                                    echo "<div class='inventory-card'>";
                                    echo "<div class='card-image'>";
                                    echo "<img src='{$bike['image']}' alt='{$bike['name']}'>";
                                    if ($bike['stock'] == 0) {
                                        echo "<div class='out-of-stock-overlay'>OUT OF STOCK</div>";
                                    }
                                    echo "</div>";
                                    echo "<div class='card-content'>";
                                    echo "<h3>{$bike['name']}</h3>";
                                    echo "<p class='price'>$" . number_format($bike['price'], 2) . "</p>";
                                    echo "<p class='stock-info'>Stock: {$bike['stock']}</p>";
                                    echo "</div>";
                                    echo "</div>";
                                }
                            }
                            break;
                        
                        case 'Cruiser':
                            foreach ($motorcycles as $bike) {
                                if ($bike['category'] === 'Cruiser') {
                                    echo "<div class='inventory-card'>";
                                    echo "<div class='card-image'>";
                                    echo "<img src='{$bike['image']}' alt='{$bike['name']}'>";
                                    if ($bike['stock'] == 0) {
                                        echo "<div class='out-of-stock-overlay'>OUT OF STOCK</div>";
                                    }
                                    echo "</div>";
                                    echo "<div class='card-content'>";
                                    echo "<h3>{$bike['name']}</h3>";
                                    echo "<p class='price'>$" . number_format($bike['price'], 2) . "</p>";
                                    echo "<p class='stock-info'>Stock: {$bike['stock']}</p>";
                                    echo "</div>";
                                    echo "</div>";
                                }
                            }
                            break;
                        
                        case 'Scooter':
                            foreach ($motorcycles as $bike) {
                                if ($bike['category'] === 'Scooter') {
                                    echo "<div class='inventory-card'>";
                                    echo "<div class='card-image'>";
                                    echo "<img src='{$bike['image']}' alt='{$bike['name']}'>";
                                    if ($bike['stock'] == 0) {
                                        echo "<div class='out-of-stock-overlay'>OUT OF STOCK</div>";
                                    }
                                    echo "</div>";
                                    echo "<div class='card-content'>";
                                    echo "<h3>{$bike['name']}</h3>";
                                    echo "<p class='price'>$" . number_format($bike['price'], 2) . "</p>";
                                    echo "<p class='stock-info'>Stock: {$bike['stock']}</p>";
                                    echo "</div>";
                                    echo "</div>";
                                }
                            }
                            break;
                        
                        default:
                            echo "<p class='no-products'>No products found in this category.</p>";
                            break;
                    }
                    ?>
                </div>
            </div>

            <div class="limited-stock-alert">
                <h3>Limited Stock Alert</h3>
                <div class="alert-items">
                    <?php
                    $index = 0;
                    do {
                        if ($motorcycles[$index]['stock'] <= 3 && $motorcycles[$index]['stock'] > 0) {
                            $bike = $motorcycles[$index];
                            echo "<div class='alert-item'>";
                            echo "<span class='alert-name'>{$bike['name']}</span>";
                            echo "<span class='alert-stock'>Only ";
                            
                            $remaining = $bike['stock'];
                            do {
                                echo "<strong>$remaining</strong>";
                                $remaining--;
                                if ($remaining > 0) echo ", ";
                            } while ($remaining > 0);
                            
                            echo " units left!</span>";
                            echo "</div>";
                        }
                        $index++;
                    } while ($index < count($motorcycles));
                    ?>
                </div>
            </div>
            
            <?php
            $totalPrice = 0;
            $discountIndex = 0;
            while ($discountIndex < count($motorcycles)) {
                $bike = $motorcycles[$discountIndex];
                $price = $bike['price'] * $bike['stock'];
                
                if ($bike['discount']) {
                    $price = $price * 0.85;
                }
                
                $totalPrice += $price;
                $discountIndex++;
            }
            
            $totalWithTax = $totalPrice * 1.12;
            ?>
            
            <div class="total-price-section">
                <h3>Total Price of All Motorcycles (including tax): <span class="total-amount">$<?php echo number_format($totalWithTax, 2); ?></span></h3>
            </div>
        </div>
    </section>

    <section class="cart-section">
        <div class="container">
            <h3>Your Shopping Cart</h3>
            <div class="cart-box">
                <?php
                $total = 0;
                
                foreach ($cartItems as $item) {
                    echo "<div class='cart-row'>";
                    echo "<span class='cart-item-name'>{$item['name']}</span>";
                    echo "<span class='cart-item-price'>$" . number_format($item['price'], 2) . "</span>";
                    echo "</div>";
                    
                    $total += $item['price'];
                }
                
                $cartTax = $total * 0.12;
                $cartTotal = $total + $cartTax;
                
                echo "<div class='cart-subtotal'>";
                echo "<span>Subtotal:</span>";
                echo "<span>$" . number_format($total, 2) . "</span>";
                echo "</div>";
                echo "<div class='cart-tax'>";
                echo "<span>Tax (12%):</span>";
                echo "<span>$" . number_format($cartTax, 2) . "</span>";
                echo "</div>";
                echo "<div class='cart-total-row'>";
                echo "<strong>Total:</strong>";
                echo "<strong>$" . number_format($cartTotal, 2) . "</strong>";
                echo "</div>";
                ?>
            </div>
        </div>
    </section>

    <section class="transactions-section" id="transactions">
        <div class="container">
            <h2>Transactions</h2>
            <div class="transaction-box">
                <?php
                $transactions = [
                    ['user' => 'User 1', 'action' => 'cannot buy', 'bike' => 'BMW S1000RR', 'reason' => 'Out of stock'],
                    ['user' => 'User 2', 'action' => 'bought', 'bike' => 'Yamaha R1', 'amount' => 17999 * 1.12],
                    ['user' => 'User 3', 'action' => 'bought', 'bike' => 'Honda PCX 160', 'amount' => 3299 * 1.12]
                ];
                
                foreach ($transactions as $trans) {
                    echo "<p class='transaction-item'>";
                    if ($trans['action'] === 'cannot buy') {
                        echo "{$trans['user']} {$trans['action']} {$trans['bike']}: {$trans['reason']}.";
                    } else {
                        echo "{$trans['user']} {$trans['action']} {$trans['bike']} successfully! Total: $" . number_format($trans['amount'], 2);
                    }
                    echo "</p>";
                }
                ?>
            </div>
        </div>
    </section>

    <footer id="contact">
        <div class="container">
            <p>© Created By: Carlo Catacutan    CYB-201</p>
        </div>
    </footer>
</body>
</html>