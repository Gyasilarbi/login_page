<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="login">

        <div class="q">
            <h2>Log In</h2>
            <p>Welcome to my page. <a href="welcome.php">New here? Sign Up.</a></p>
        </div>  

        <form action="welcome.php" method="get">
            Username: <input type="text" name="name"><br>
            Password: <input type="password" name="password"><br>
        </form>

        <div class="w">
            <a href="#">Forgot Password?</a>
        </div>

        <input type="submit">

        <div class="social-links">
            <p>Join our socials</p>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>
            <a href="#"><i class="fa fa-whatsapp"></i></a>
        </div>

        <p>Thank you!</p>
    </div>
</body>
</html>