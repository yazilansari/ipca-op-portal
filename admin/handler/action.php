<?php


include 'conn.php';


if (isset($_GET['id'])) {

	$type = $_GET['type'];
	$id = $_GET['id'];
	

	$num="UPDATE `dr_details` SET `status`='".ucfirst($type)."' WHERE `id`='$id'";

	$num_final=mysqli_query($conn,$num);

if ($num_final) {
	$_SESSION['msg'] = 'Successfully Updated';
	header('Location: ../pages/charts/drdetails.php');exit();
} else {
	$_SESSION['symbol'] = 'error';
	$_SESSION['status_code'] = 'Unable to Registered';
	header('Location: ../pages/charts/drdetails.php?Unable to Add');exit();
}

} else {
	header('Location: ../pages/charts/drdetails.php?Something Went Wrong');exit();
}










?>