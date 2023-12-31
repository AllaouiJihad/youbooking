<?php
        $conn=mysqli_connect('localhost','root','','youhotels');

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <!-- Font Awesome -->
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
  />
  <!-- Google Fonts -->
  <link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
  />
  <!-- MDB -->
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.0.0/mdb.min.css"
  rel="stylesheet"
  />
  <link rel="stylesheet" href="https://unpkg.com/flickity@2.2.2/dist/flickity.min.css" />
<script src="https://unpkg.com/flickity@2.2.2/dist/flickity.pkgd.min.js"></script>

  <!-- Optional theme -->
  
  <link rel="stylesheet" href="../../youbooking/pages/style.css">
  <link rel="stylesheet" href="../../youbooking/pages/desc.css">

</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
  <!-- Container wrapper -->
  <div class="container ">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="../../youbooking/index.php">
      <img
        src="../../youbooking/assets/logo.png"
        height="40"
        alt="youbooking"
        loading="lazy"
        style="margin-top: -1px;"
      />
    </a>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
      </ul>
      <!-- Left links -->
      <div class="d-flex align-items-center">
      <a href="../../youbooking/pages/login.php">
        <?php 

        session_start();
        if(isset($_SESSION['id'])){
$id=$_SESSION["id"];
$sql="select * from users where id='$id'";
$res=mysqli_query($conn,$sql);
while($rws=mysqli_fetch_assoc($res)){
  ?>
    <a class="btn btn-secondary me-2" href="../../youbooking/pages/request_proprietair.php" type="button">become a owner</a>
  </button>
  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
    <?=$rws['firstname']?>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">profil</a></li>
    <li><a class="dropdown-item" href="#">my reservation</a></li>
    <li><a class="dropdown-item" href="#">logout</a></li>
  </ul>
</div>
  
  <?php
}
        }else{

        ?>
      <button data-mdb-ripple-init type="button" class="btn me-3 gold">
         login
        </button></a>
        <a href="../../youbooking/pages/signup.php">
        <button data-mdb-ripple-init type="button" class="btn me-3 gold">
          Sign up for free
        </button></a>
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <?php
        }
  ?>
  <!-- Container wrapper -->
</nav>