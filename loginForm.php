<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
</head>

<body class="bg-warning">
    <?php include './components/nav.php'?>
    <form class="form card w-50 mx-auto text-center mt-5 p-5 shadow-lg" action="./loginForm.php" method="post">
        <h2>Sign in</h2>
        <div>
            <label for="name">name</label><br>
            <input class="form-control w-50 mx-auto" type="text" name="name">
        </div>
        <div>
            <label for="name">password</label><br>
            <input class="form-control w-50 mx-auto" type="password" name="password">
        </div>
        <a class="mt-2" href="./signupForm.php">I have no account yet.</a>
        <div>
            <input class="btn btn-danger mt-3" type="submit" value="login">
        </div>
    </form>
    <?php
    $servername = "localhost";
    $usernames = "root";
    $password = "";
    $db = "test";

    $connection = new mysqli($servername, $usernames, $password, $db);

    if(isset($_POST["name"]) && isset($_POST["password"])){
    /*if($connection->connect_error){
        echo "Connection error";
    }else{
        echo "connected successfully";
    }*/

    $username = $_POST["name"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM pouzivatelia WHERE meno = '$username' AND heslo = '$password'";
    $query = $connection->query($sql);
    /*while($row = mysqli_fetch_assoc($query)){
        echo "<br> meno: ",$row["meno"],"</br> priezvisko: ",$row["priezvisko"],"<br> e-mail: ",$row["email"],"</br> heslo: ",$row["heslo"];
    }*/
    while($row = mysqli_fetch_assoc($query)){
        $_SESSION['user'] = $row['meno'];
    }
}
?>
</body>

</html>