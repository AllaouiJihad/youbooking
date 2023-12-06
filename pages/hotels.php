<?php
include '../include/navbar.php';
?>
<div class="container mt-3">
    <h2 class="text-center">categorie</h2>
      <form class="d-flex mb-5" role="search" method="get">
        <input class="form-control me-2" type="search" placeholder="City" aria-label="Search" name="city">
            <div class='input-group date' id='datetimepicker1'>
               <input type='text' class="form-control me-2" placeholder="name"/>
               </span>
              </div>
              <div class='input-group date' id='datetimepicker1'>
               <input type='text' class="form-control me-2" />
               </span>
              </div>
        <button class="btn gold" type="submit">Search</button>
      </form></div>
      <div class="cards">
    <?php
if(isset($_GET['city'])){
  $city=$_GET['city'];
  $sal="select idhotel from localistaion where city='$city'";
  $res=$result=mysqli_query($conn,$sal);
  while($rows=mysqli_fetch_assoc($res)){
    $idh=$rows['idhotel'];
  $sql="select * from hotel where id = $idh";
  $result=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_assoc($result)){
    ?>

<div class="card hotel">
<div class="card__image-holder">
  <img class="card__image" src="./../assets/hotelpreview.jpg.jpg" alt="wave" />
</div>
<div class="card-title">
  <a href="description.php?id=<?=$row['id']?>" class="toggle-info btn">
  see more
  </a>
  <h2>
  <br><?=$row['name']?>
  </h2>
</div>
<div class="card-flap flap1">
  <div class="card-description">
    This grid is an attempt to make something nice that works on touch devices. Ignoring hover states when they're not available etc.
  </div>
  <div class="card-flap flap2">
    <div class="card-actions">
      <a href="description.php?<?=$row['id']?>" class="btn">Read more</a>
    </div>
  </div>
</div>
</div><?php
  }}}elseif(empty($_GET['city'])){
    $sql="select * from hotel ";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
      ?>

<div class="card hotel">
  <div class="card__image-holder">
    <img class="card__image" src="./../assets/hotelpreview.jpg.jpg" alt="wave" />
  </div>
  <div class="card-title">
    <a href="description.php?id=<?=$row['id']?>" class="toggle-info btn">
    see more
    </a>
    <h2>
    <br><?=$row['name']?>
    </h2>
  </div>
  <div class="card-flap flap1">
    <div class="card-description">
      This grid is an attempt to make something nice that works on touch devices. Ignoring hover states when they're not available etc.
    </div>
    <div class="card-flap flap2">
      <div class="card-actions">
        <a href="description.php?<?=$row['id']?>" class="btn">Read more</a>
      </div>
    </div>
  </div>
</div>

<?php
    }}
    ?>

</div>
<?php
include '../include/footer.php';
?>




 