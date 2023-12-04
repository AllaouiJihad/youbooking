<?php
$conn = mysqli_connect('localhost', 'root', '', 'youhotels');

 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
   }
  echo "Connected successfully";