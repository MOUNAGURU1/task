<?php

$conn = mysqli_connect("localhost", "root", "", "trymywebsite");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>