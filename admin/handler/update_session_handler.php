<?php


include 'conn.php';


if (isset($_POST['submit'])) {

	$sess_name=$_POST['sess_name'];
	$sess_date=$_POST['sess_date'];
	$sess_str_time=$_POST['sess_str_time'];
	$sess_end_time=$_POST['sess_end_time'];
	$sess_det=$_POST['sess_det'];
	$id=$_POST['id'];
	$user=$_POST['user'];

	$num="UPDATE `iccc2021_admin_session` SET `name`='$sess_name',`sessionname`='$sess_det', `str_time`='$sess_str_time',`end_time`='$sess_end_time',`date`='$sess_date',`user`='$user' WHERE `id`='$id'";

	$num_final=mysqli_query($conn,$num);

if ($num_final) {
	

		$_SESSION['msg'] = 'Successfully Updated';
		header('Location: ../pages/charts/add_session.php');exit();
}else{
		$_SESSION['symbol'] = 'error';
		$_SESSION['status_code'] = 'Unable to Registered';
		header('Location: ../pages/charts/add_session.php?Unable to Add');exit();
}

} else {
		header('Location: ../pages/charts/add_session.php?Something Went Wrong');exit();
}










?>