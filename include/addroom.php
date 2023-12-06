<?php
include 'connexion.php';
if (isset($_POST['addroom'])) {
    $quantity = $_POST['quantity'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $id_hotel = $_POST['idHotel'];

    $sql = "INSERT INTO `room`( `quantity`, `type`, `price`, `idHotel`) VALUES ('$quantity','$type','$price','$id_hotel')";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die(mysqli_error($conn));
    }
    else
    {
        
        echo '<script type="text/javascript">window.location.href = "../pages/dashboard_proprietaire_add_room.php";</script>';
        exit;
      
    }
}