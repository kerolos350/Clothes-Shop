<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="/src/css/register.css">
    <link rel="shortcut icon" href="src/identity/favicon.svg" type="image/x-icon">
</head>
<body>
    <nav>
        <h1>Register</h1>
    </nav>
    <form action="/src/php/register.php" method="post">
        <div class="container">
            <div class="name">
                <input type="text" name="first-Name" id="first-Name" placeholder="First Name">
                <input type="text" name="last-Name" id="last-Name" placeholder="Last Name">
            </div>
            <div class="email">
                <input type="text" name="email" id="email" placeholder="Email">
                <input type="text" name="conf-email" id="conf-email" placeholder="Confirm Email">
            </div>
            <div class="pass">
                <input type="password" name="Password" id="Password" placeholder="Password">
                <input type="password" name="conf-Password" id="conf-Password" placeholder="Confirm Password">
            </div>
            <div class="btns">
                <button>Register</button>
                <a class="register" href="/login.php">Login</a>
            </div>
        </div>
    </form>
</body>
</html>