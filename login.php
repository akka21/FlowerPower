<?php
//index.php

// start the session
session_start();

// include the database class
include "database.php";

// include the field_validation class
include "field_validation.php";

// $title contains the title for the page
$title = "Login";

// this inserts the header and the navbar
require_once('header.php');  

?>

<body>
    <br>
    <?php
        // if $message is set then echo it
        if(isset($message)){
            echo '<label class="test-danger">' . $message . '</label>';
        }
    ?>
    <div class="container" style="width: 500px;">
        <h3>PHP Login Pagina</h3><br>
        <form action="" method="post">

            <label for="Email">Email</label>
            <input type="text" name="email" class="form-control">
            <br>

            <label for="Password">Password</label>
            <input type="password" name="password" class="form-control">
            <br>

            <input type="submit" name="login" class="btn btn-info" value="Login">
            <a href="signup.php" class="btn btn-link" role="button">Registreren?</a>
        </form>
    </div>
</body>

</html>