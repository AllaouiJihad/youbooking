<?php 
include 'connexion.php';  
session_start();
if(isset($_SESSION['']))
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
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="desc.css">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
  <!-- Container wrapper -->
  <div class="container ">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="./index.php">
      <img
        src="./logo.png"
        height="40"
        alt="MDB Logo"
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
        <a href="login.php">
      <button data-mdb-ripple-init type="button" class="btn me-3 gold">
         login
        </button></a>
        <a href="signup.php">
        <button data-mdb-ripple-init type="button" class="btn me-3 gold" data-toggle="modal" data-target="#exampleModalCenter">
          Sign up for free
        </button></a>
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
