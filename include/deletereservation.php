<?php
include 'connexion.php';
if(isset($_POST['delete'])){
    $id = $_POST['id'];

    $sql = "DELETE FROM reservation WHERE `id` = '$id'";
    $result = mysqli_query($conn,$sql);
    if(!$result)
    {
        die('connect failed '. mysqli_connect_error());
    }
    
    header("Location: ../pages\dashboard_proprietaire_confermation.php");
}
?>