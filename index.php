<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothes Shop</title>
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="src/identity/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="hero">
        <nav>
            <a href="/">
                <img class="logo" src="/src/identity/logo.svg" alt="logo">
            </a>
            <menu class="main-menu">
                <a href="#">Everything</a>
                <a href="#">Women</a>
                <a href="#">Men</a>
                <a href="#">Kids</a>
            </menu>
            <menu class="sec-menu">
                <a href="#">About</a>
                <a href="#">Contact us</a>
            </menu>
            <div class="cart-menu">
                <input type="checkbox" name="cart-Check" id="cart-Check">
                <label class="cart" for="cart-Check">
                    <p>
                        <span id="total-money">0.00</span>
                        <span id="currency">EGP</span>
                    </p>
                    <img src="/src/svg/cart.svg" alt="cart"><i class="cart-count">0</i></img>
                </label>
                <div class="cart-items cart-show">
                    <div class="cart-lable">Shopping Cart</div>
                    <div id="cart-containers" class="hidden"></div>
                    <p class='cart-empty'>No products in the cart</p>
                    <div class="cart-total">
                        <p>Subtotal:</p>
                        <p>
                            <span id="total-money-cart">0.00</span>
                            <span id="currency-cart">EGP</span>
                        </p>
                    </div>
                    <button id="cont-shopping">CONTINUE SHOPPING</button>
                    <button id="cart-btn" class="hidden">VIEW CART</button>
                    <button id="check-btn" class="hidden">CHECKOUT</button>
                </div>
            </div>
            <label class="avatar" for="avatar-Check">
                <img id="avatar-img" src="/src/img/avatars/default.png" alt="user avatar">
            </label>
            <input type="checkbox" name="avatar-Check" id="avatar-Check">
            <div id="avatar-menu" class="avatar-menu">
                <a id="acount-btn" class="hidden" href="#">Account settings</a>
                <a id="login-btn" href="/login.php">Login</a>
                <a id="register-btn" href="/register.php">Register</a>
                <a id="logout-btn" class="hidden" href="#">Logout</a>
            </div>
        </nav>
        <div class="hero-info">
            <h1>Raining Offers For Christmas!</h1>
            <p>30% Off On All Products</p>
            <div class="hero-buttons">
                <a href="#" class="shop-btn">Shop Now</a>
                <a href="#" class="about-btn">Find more</a>
            </div>
        </div>
    </section>
    <section class="brands">
        <div id="brands-container">
            <div class="brand-images">
                <?php
                    $path = "./src/svg/brands";
                    foreach (scandir($path) as $file) {
                        if ($file !== '.' && $file !== '..') {
                            echo '<img src="/src/svg/brands/'.$file.'" alt="'.$file.'">';
                        }
                    }
                ?>
            </div>
            <div class="brand-images">
                <?php
                    $path = "./src/svg/brands";
                    foreach (scandir($path) as $file) {
                        if ($file !== '.' && $file !== '..') {
                            echo '<img src="/src/svg/brands/'.$file.'" alt="'.$file.'">';
                        }
                    }
                ?>
            </div>
        </div>
    </section>
    <section class="featured">
        <h2>Featured Products</h2>
        <div class="line"></div>
        <?php
            $jsonData = file_get_contents('./src/json/products.json');
            $products = json_decode($jsonData, true);
            
            $featuredProducts = array_filter($products['products'], function($product) {
                return $product['featured'] === true;
            });

            foreach ($featuredProducts as $product) {
                echo '<div class="product">';
                echo "\r\n";
                    echo '<div class="product-img">';
                        echo'<img src="'.$product['image_url'].'">';
                    echo '</div>';
                    echo "\r\n";
                    echo '<p class="product-name">'.$product['name'].'</p>';
                    echo "\r\n";
                    echo '<div class="product-categories">';
                    echo "\r\n";
                        foreach ($product['categories'] as $category) {
                            echo '<p class="product-category">'.$category.'</p>';
                            echo "\r\n";
                        }
                    echo '</div>';
                    echo "\r\n";
                    if ($product['price']['sale'] === "0.00" or $product['price']['sale'] === "0.0" or $product['price']['sale'] === "0") {
                        echo '<p class="price product-price-original">'.$product['price']['original'].'</p>';
                        echo "\r\n";
                    }else {
                        echo '<div class="product-price">';
                        echo "\r\n";
                            echo '<p class="product-price-original">';
                                echo '<span class="old-price">'.$product['price']['original'].' EGP</span>';
                                echo '<span class="price"> - </span>';
                                echo '<span class="price">'.$product['price']['sale'].' EGP</span>';
                            echo '</p>';
                            echo "\r\n";
                        echo '</div>';
                        echo "\r\n";
                    }
                    echo '<div class="colors">';
                    echo "\r\n";
                        foreach ($product['colors'] as $color){
                            echo '<p class="product-color">'.ucfirst($color['color']).'</p>';
                            echo "\r\n";
                        }
                    echo '</div>';
                    echo "\r\n";
                    echo '<div class="reviews">';
                    echo "\r\n";
                        if ($product['review'] == 0.5) {
                            echo '<span class="fa fa-star-half-o"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star"></span>';
                            echo "\r\n";
                        } elseif ($product['review'] == 1) {
                            echo '<span class="fa fa-star checked"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star"></span>';
                            echo "\r\n";
                        } elseif ($product['review'] == 1.5) {
                            echo '<span class="fa fa-star checked"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star-half-o"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star"></span>';
                            echo "\r\n";
                        } elseif ($product['review'] == 2) {
                            echo '<span class="fa fa-star checked"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star checked"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star"></span>';
                            echo "\r\n";
                        } elseif ($product['review'] == 2.5) {
                            echo '<span class="fa fa-star checked"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star checked"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star-half-o"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star"></span>';
                            echo "\r\n";
                        } elseif ($product['review'] == 3) {
                            echo '<span class="fa fa-star checked"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star checked"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star checked"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star"></span>';
                            echo "\r\n";
                        } elseif ($product['review'] == 3.5) {
                            echo '<span class="fa fa-star checked"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star checked"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star checked"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star-half-o"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star"></span>';
                            echo "\r\n";
                        } elseif ($product['review'] == 4) {
                            echo '<span class="fa fa-star checked"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star checked"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star checked"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star checked"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star"></span>';
                            echo "\r\n";
                        } elseif ($product['review'] == 4.5) {
                            echo '<span class="fa fa-star checked"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star checked"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star checked"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star checked"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star-half-o"></span>';
                            echo "\r\n";
                        } elseif ($product['review'] == 5) {
                            echo '<span class="fa fa-star checked"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star checked"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star checked"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star checked"></span>';
                            echo "\r\n";
                            echo '<span class="fa fa-star checked"></span>';
                            echo "\r\n";
                        }
                    echo '</div>';
                    echo "\r\n";
                echo '</div>';
                echo "\r\n";
            }
        ?>
    </section>
    <section class=""></section>
    <section class=""></section>
    <script src="main.js"></script>
</body>
</html>