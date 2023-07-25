<?php
include 'conn.php';

if (isset($_POST['submit'])) {
	
	$username = $_POST['username'];
	// $password = $_POST['pass'];
	$division = $_POST['division'];
	
	if ($username === 'admin' || $username === 'ipca') {
		$_SESSION['user'] = $username;
		$_SESSION['division'] = $division;
		header('Location: ../pages/charts/drdetails.php?Successfully Login');
	} else {
		header('Location: ../index.php?msg=Unable to Login');
	}
} else {
	header('Location: ../../index.php?msg=Someting Went Wrong');exit();
}











?>