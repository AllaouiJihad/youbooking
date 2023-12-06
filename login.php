<?php
include "navbar.php";
?>

<div class="container w-75 m-5 p-5">

    <form class="d-flex flex-column  gap-3" method="post">


        <label>USERNAME</label>
        <input type="text" name="username">
        <label>PASSWORD</label>
        <input type="password" name="password">
        <input type="submit" name ="submit" value="ENTER">
    </form>



    <?php
    if (isset($_POST["submit"])) {

        $username = $_POST["username"];
        $password = $_POST["password"];


        $sqlcheck = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sqlcheck);
        
       
        if($row = mysqli_fetch_assoc($result)) {
            echo $row['username'];
            echo $row['password'];
        }
        else {
            echo "No User Found!";
        }
    }
    ?>
</div>