<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothes Shop</title>
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="src/identity/favicon.svg" type="image/x-icon">
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
                <img id="avatar-img" src="/src/svg/avatar.svg" alt="user avatar">
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
    <section class="brans">
        <div id="brans-container"></div>
    </section>
    <section class=""></section>
    <section class=""></section>
    <section class=""></section>
    <script src="main.js"></script>
</body>
</html>