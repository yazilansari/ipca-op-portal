<?php


include 'conn.php';

	$name=$_POST['name'];
	$contactno=$_POST['contactno'];
	$email=$_POST['email'];
	$city=$_POST['city'];
	$state=$_POST['state'];

	$num="SELECT `email` FROM `iccc2021_registration` WHERE `email`='$email'";

	$num_final=mysqli_query($conn,$num);

if (mysqli_num_rows($num_final)==0) {
	

if (isset($_POST['submit'])) {
	


	$sql="INSERT INTO `registration`(`name`, `email`, `contact`, `state`, `city`) VALUES ('$name', '$email', '$contactno', '$state', '$city')";


	$final=mysqli_query($conn,$sql);

	if ($final) {

		$_SESSION['status'] = 'Successfully Submited';
		$_SESSION['symbol'] = 'success';
		$_SESSION['status_code'] = 'Submited';
		header('Location: ../index.php');
	}else{

		header('Location: ../index.php?msg=Not Add');
	}


}else{

		header('Location: ../index.php?msg=Someting Went Wrong');


}

}else{
		$_SESSION['status'] = 'Email id is already exist';
		$_SESSION['symbol'] = 'error';
		$_SESSION['status_code'] = 'Unable to Registered';
		header('Location: ../index.php?msg=Email id is already Registered');exit();
}











?>