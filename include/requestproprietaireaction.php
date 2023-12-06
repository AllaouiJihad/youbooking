<?php
include 'connexion.php';

if (isset($_POST['request'])) {
    $name = $_POST['hotelname'];
    $rate = $_POST['rate'];
    $description = $_POST['description'];
    $id_pro = $_POST['id_pro'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $adresse= $_POST['adresse'];

    // Utilisez des guillemets simples autour des valeurs de chaîne
    $sql = "INSERT INTO `hotel` (`name`, `category`, `description`, `idproprietaire`) VALUES ('$name', '$rate', '$description', '$id_pro')";
    $result=mysqli_query($conn, $sql);
    if ($result) {
    $select = mysqli_insert_id($conn);
    $sql2= "INSERT INTO `localistaion` (`id`, `city`, `country`, `address`, `idhotel`) VALUES (NULL, '$city', '$country', '$adresse', '$select');";
    mysqli_query($conn,$sql2);
             echo '<script type="text/javascript">window.location.href = "../index.php";</script>';
         exit;
     }else {
            die(mysqli_error($conn));
     }
    
}
?>
