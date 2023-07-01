<?php
include 'conn.php';

if (isset($_POST['submit'])) {
	
	$username = $_POST['username'];
	$password = $_POST['pass'];
	
	if ($username === 'admin' && $password == 'admin') {
		$_SESSION['user'] = $username;
		header('Location: ../pages/charts/drdetails.php?Successfully Login');
	} else {
		header('Location: ../index.php?msg=Unable to Login');
	}
} else {
	header('Location: ../../index.php?msg=Someting Went Wrong');exit();
}











?>