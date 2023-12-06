<?php
include('../include/connexion.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $id_pro = $_POST['id_pro'];
    
    $update = "UPDATE `hotel` SET `request` = 1 WHERE `id` = '$id'";
    $update1 = "UPDATE `users` SET `id_role` = 3 WHERE `id` = '$id_pro'";
    
    $result = mysqli_query($conn, $update);
    $result1 = mysqli_query($conn, $update1);

    if(!$result || !$result1){
        die(mysqli_error($conn)); 
    }
     echo '<script type="text/javascript">window.location.href = "dashboard_admin-request.php";</script>';

}
?>
