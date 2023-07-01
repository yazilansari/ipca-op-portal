<?php


include 'conn.php';


if (isset($_POST['submit'])) {

	$sess_name=$_POST['sess_name'];
	$sess_date=$_POST['sess_date'];
	$sess_str_time=$_POST['sess_str_time'];
	$sess_end_time=$_POST['sess_end_time'];
	$sess_det=$_POST['sess_det'];
	$user=$_POST['user'];

	$num="INSERT INTO `iccc2021_admin_session`(`name`, `sessionname`, `date`, `str_time`, `end_time`, `user`) VALUES ('$sess_name', '$sess_det', '$sess_date', '$sess_str_time', '$sess_end_time', '$user')";

	$num_final=mysqli_query($conn,$num);

if ($num_final) {
	

		header('Location: ../pages/charts/add_session.php?Successfully Added');exit();
}else{
		$_SESSION['status'] = 'Email id is already exist';
		$_SESSION['symbol'] = 'error';
		$_SESSION['status_code'] = 'Unable to Registered';
		header('Location: ../pages/charts/add_session.php?Unable to Add');exit();
}

} else {
		header('Location: ../pages/charts/add_session.php?Something Went Wrong');exit();
}










?>