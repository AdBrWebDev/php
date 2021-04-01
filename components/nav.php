<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./node_modules/material-icons/iconfont/material-icons.css">
    <title>Document</title>
</head>

<body>
    <nav class='navbar border border-success navbar-expand shadow bg-light mb-5'>
        <ul class='navbar-nav float-right'>
            <li class='nav-item'><a href='./shop.php' class='nav-link text-success'>shop</a></li>
            <li class='nav-item'><a class='nav-link text-success' href='./loginForm.php'>sign in</a></li>
            <li class='nav-item'><a class='nav-link text-success' href='./signupForm.php'>sign up</a></li>
            <li class='nav-item'><a class='nav-link text-success' href='./signOut.php'>sign out</a></li>
            <li class='nav-item'>
                <button class="btn btn-success">
                    <?php 
                if(isset($_SESSION['user'])){
                    echo $_SESSION['user'];
                }else{
                    echo 'prihlasenie';
                }
            ?>
                    <i class="material-icons">face</i>
                </button>
            </li>
        </ul>
    </nav>
</body>

</html>