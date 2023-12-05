<?php
include('../include/connexion.php');
?>

 
    
    <?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
       
        $DELETE="DELETE FROM `users` WHERE id='$id'  ";
$result=mysqli_query($conn,$DELETE);
 
if(!$result){
    die (mysqli_connect_error());
}
Header('Location: '.$_SERVER['PHP_SELF']);
Exit();
    }

    ?>