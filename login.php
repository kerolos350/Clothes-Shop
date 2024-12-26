<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="/src/css/login.css">
    <link rel="shortcut icon" href="src/identity/favicon.svg" type="image/x-icon">
</head>
<body>
    <nav>
        <h1>Log In</h1>
    </nav>
    <form action="/src/php/login.php" method="post">
        <div class="container">
            <label for="Name"></label>
            <input type="text" name="Name" id="Name" placeholder="Username or Email">
            <label for="Password"></label>
            <input type="password" name="Password" id="Password" placeholder="Password">
            <div class="btns">
                <button>Login</button>
                <a class="register" href="/register.php">Register</a>
            </div>
        </div>
    </form>
</body>
</html>