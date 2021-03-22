<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up form</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
</head>

<body class="bg-info">
    <?php include './components/nav.php'?>
    <form class="form card w-50 mx-auto text-center mt-5 p-4 shadow-lg" action="./signupForm.php" method="post">
        <h2>Sign up</h2>
        <div>
            <label for="name">Meno</label><br>
            <input class="form-control w-50 mx-auto" type="text" name="name">
        </div>
        <div>
            <label for="surname">Priezisko</label><br>
            <input class="form-control w-50 mx-auto" type="text" name="surname">
        </div>
        <div>
            <label for="email">E-mail</label><br>
            <input class="form-control w-50 mx-auto" type="mail" name="email">
        </div>
        <div>
            <label for="password">Heslo</label><br>
            <input class="form-control w-50 mx-auto" type="password" name="password">
        </div>
        <a class="mt-2" href="./loginForm.php">I already have an account.</a>
        <div>
            <input class="btn btn-danger mt-3" type="submit" name="submit" value="sign up">
        </div>
    </form>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test";

        $connection = new mysqli($servername, $username, $password, $dbname);
        if(isset($_POST["submit"])){
        if($connection->connect_error){
            echo 'connection error';
        }else{
            $meno = $_POST["name"];
            $priezvisko = $_POST["surname"];
            $email = $_POST["email"];
            $heslo = $_POST["password"];
            
            $sql = "INSERT INTO pouzivatelia VALUES ('$meno','$priezvisko','$email', '$heslo')";
            mysqli_query($connection, $sql);
        }}
    ?>
</body>

</html>