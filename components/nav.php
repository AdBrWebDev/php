    <?php
    session_start();
        echo "<nav class='navbar border border-success navbar-expand shadow bg-light mb-5'>
        <ul class='navbar-nav float-right'>
            <li class='nav-item'><a href='./shop.php' class='nav-link text-success'>shop</a></li>
            <li class='nav-item'><a class='nav-link text-success' href='./loginForm.php'>sign in</a></li>
            <li class='nav-item'><a class='nav-link text-success' href='./signupForm.php'>sign up</a></li>
            <li class='nav-item'><a class='nav-link text-success' href='./components/signOut.php'>sign out</a></li>
            <li class='nav-item'><button class='nav-link btn btn-success'>",$_SESSION["user"],"</button></li>
        </ul>
        </nav>";
    ?>