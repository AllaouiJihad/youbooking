<?php

include 'connexion.php';
if (isset($_POST['update'])) {
    $qte= $_POST['quantity'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $id =$_POST['id'];
    $result= mysqli_query($conn, "UPDATE `room` SET `quantity` = '$qte', `type` = '$type', `price` = '$price' WHERE `room`.`id` = '$id'");
     if (!$result) {
        die(mysqli_error($conn));
     } 
     else
     {

         echo '<script type="text/javascript">window.location.href = "../pages/dashboard_proprietaire_add_room.php";</script>';
         exit;
       
     }}