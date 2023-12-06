
<?php
include('../include/connexion.php');
?>

 
    
    <?php
    if(isset($_POST['delete'])){
        $id=$_POST['id'];
       
        $DELETE="DELETE FROM `hotel` WHERE id='$id' ";
$result=mysqli_query($conn,$DELETE);
 
if(!$result){
    die (mysqli_connect_error());
}
header("location:dashboard_admin-request.php");
exit();
    }

    ?>

