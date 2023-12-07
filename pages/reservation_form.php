<?php 
include '../include/navbar.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="select    name from hotel where id='$id'";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
?>
<div class ="container mt-5 d-flex justify-content-center text-center">
    <form method="post" action="../include/reservation.php">
    <div class="form-row">
        <div class="form-group">
        <label for="inputEmail4">hotel</label>
        <input type="text" name="hotelname" class="form-control mb-3" id="inputEmail4" placeholder="<?=$row['name']?>" readonly>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group">
        <label for="inputAddress">room type</label>
        <select name="room" class="form-control w-100 mb-3" id="">
            <?php
            $sql1="select * from room where idHotel='$id'";
            $resul=mysqli_query($conn,$sql1);
            while($roww=mysqli_fetch_assoc($resul)){
            ?>
            <option value="<?=$roww['id']?>"><?=$roww['type']?></option>
            <?php }
             ?>
        </select>

        </div>
        <div class="form-group ">
        <label for="inputAddress">number of rooms</label>
        <input type="number" name="country" class="form-control w-100 mb-3" id="inputAddress" name="quantity" placeholder="number of rooms" max="20">
        </div>
        
    </div>

    <div class="form-group">
        <label for="inputAddress">checkin</label>
        <input type="date" name="adresse" class="form-control mb-3" id="inputAddress" name="checkin" placeholder="checkin">
    </div>
    <div class="form-group">
        <label for="inputAddress">checkou</label>
        <input type="date" name="adresse" class="form-control mb-2" id="inputAddress" name="checkout" placeholder="checkout">
    </div>
       <?php
       if(isset($_SESSION['id'])){
        $id0=$_SESSION['id'];
        ?>
       <input type="hidden" value="<?=$id0?>">
        <button type="submit" name="request" class="btn btn-primary">Request</button>
        <?php
       }else{
       ?><a href="login.php">
    <button type="submit" name="request" class="btn btn-primary">Request</button></a><?php }?>
    </form>
    </div>
<?php
    }}
    include '../include/footer.php'
?>