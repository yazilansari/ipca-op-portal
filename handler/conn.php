<?php
session_start();
$conn=mysqli_connect('127.0.0.1','root','','zydus');
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>