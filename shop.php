<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/shop-logo.jpg">
    <title>Shop</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
</head>

<body>
    <?php include "./components/nav.php" ?>
    <?php
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'test';

        $connection = new mysqli($servername, $username, $password, $dbname);

        $sql = "SELECT * FROM produkty";
        $query = $connection->query($sql);
        echo '<div class="row">';
        while($row = mysqli_fetch_assoc($query)){
            echo card($row["nazov"], $row["ks_skladom"], $row["produktImg"], $row["cena"], $row["popis"]);
        }
        echo '</div>';

        function card($nazov, $warenhouse, $img, $price, $info){
            $card = "<div class='col-12 col-sm-12 col-md-12 col-xl-12 col-xl-12'>
                <div class='card border border-success w-25 text-center p-3 shadow'>
               <img class='img-responsive p-5' src=$img alt=$nazov />
               <h4>$nazov</h4>
               <p>$info</p>
               <h5>$price €</h5>
               <p>Skladom: $warenhouse ks</p>
               <div>
                <input type='number' min='0' class='form-control w-25 mx-auto my-2' name='count' />
               </div>
               <div>
                    <button class='btn btn-success'>Do košíka</button>
               </div>
            </div></div>";
            return $card;
        }
        include './components/footer.php';
    ?>
</body>

</html>