<?php
    session_start();
    session_unset();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
</head>

<body class="p-5 m-5 bg-danger">
    <section class="text-center mt-5 card shadow-lg p-5">
        <h1>You were signed out !</h1>
        <div>
            <button type="button" class="btn btn-danger mt-3 text-white"><a class="text-white" target="_self"
                    href="./loginForm.php">Login
                    form</a></button>
        </div>
    </section>
</body>

</html>