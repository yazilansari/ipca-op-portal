<?php
session_start();
$conn=mysqli_connect('localhost','root','','ipca-op-portal');
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>