<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }else {
            echo "Connection successfully.";
        }

        $sql = "SELECT poradie, nazov, rok, spisovatel FROM filmydata";
        $result = $conn->query($sql);
        echo "<table><tr><th>poradie</th><th>nazov</th><th>rok</th><th>spisovatel</th>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>".$row["poradie"]."</td><td>".$row["nazov"]."</td><td>".$row["rok"]."</td><td>".$row["spisovatel"]."</tr></td>";
        }
        echo "</table>";
        echo $_SERVER['PHP_SELF'], '<br>';
        echo $_SERVER['SERVER_NAME'], '<br>';
        echo $_SERVER['HTTP_HOST'], '<br>';
        echo $_SERVER['HTTP_USER_AGENT'], '<br>';
        echo $_SERVER['SCRIPT_NAME'], '<br>';
        echo $_SERVER['REMOTE_HOST'];
    ?>


</body>

</html>