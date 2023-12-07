<?php
$conn = mysqli_connect('http://172.16.10.221:80', 'root', '', 'youhotels');

 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
   }

