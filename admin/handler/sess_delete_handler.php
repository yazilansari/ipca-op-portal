<?php


include 'conn.php';


if (isset($_GET['id'])) {
	
	$id=$_GET['id'];


	$sql="DELETE FROM `iccc2021_admin_session` WHERE `id`='$id'";


	$final=mysqli_query($conn,$sql);



	
	if ($final) {

				$_SESSION['msg'] = 'Successfully Deleted';
				header('Location: ../pages/charts/add_session.php?msg=Successfully Deleted');
		

	}else{

		header('Location: ../pages/charts/add_session.php?msg=Unble to Delete');
	}


}else{

		header('Location: ../../csi/index.php?msg=Someting Went Wrong');exit();


}











?>