<?php

include 'conn.php';

	if (isset($_POST['submit'])) {
		// echo "<pre>";print_r($_POST);die();
		$id = $_POST['id'];
		$pan_card_received = $_POST['pan_card_received'];
		$cancelled_cheque_received = $_POST['cancelled_cheque_received'];
		$pan_card = $_POST['pan_card'];
		$bank_name = $_POST['bank_name'];
		$account_no = $_POST['account_no'];
		$ifsc_code = $_POST['ifsc_code'];
		$payment_done_date = date('Y-m-d', strtotime($_POST['payment_done_date']));
		$gross = $_POST['gross'];
		$tds = $_POST['tds'];
		$net_paid = $_POST['net_paid'];
		$payment_reference_no = $_POST['payment_reference_no'];
		$survey_completion_date = date('Y-m-d', strtotime($_POST['survey_completion_date']));
		$survey_completion_status = $_POST['survey_completion_status'];
		$payment_type = $_POST['payment_type'];
		$remark = $_POST['remark'];
		$payment_status = $_POST['payment_status'];

		$file_name = $_FILES['reciept']['name'];
      	$file_size =$_FILES['reciept']['size'];
      	$file_tmp =$_FILES['reciept']['tmp_name'];
      	$file_type=$_FILES['reciept']['type'];

      	// print_r($_FILES);die();

      	if(!empty($file_name) && $file_name != '') {
      		$new_file_name = time() .'_'.$file_name;
	         if(!move_uploaded_file($file_tmp, "../../reciept_uploads/".$new_file_name)) {
	         	// header('Location: ../pages/charts/drdetails.php?Unable to Update');exit();
	         	$new_file_name = '';
	         }
      	} else {
      		$query = "SELECT `reciept` FROM `dr_details` WHERE `id` = '$id'";
			$result = mysqli_query($conn, $query);
			$row = mysqli_fetch_assoc($result);
			$new_file_name = $row['reciept'];
      	}

		$num="UPDATE `dr_details` SET `pan_card_received` = '$pan_card_received', `cancelled_cheque_received` = '$cancelled_cheque_received', `pan_card` = '$pan_card', `bank_name` = '$bank_name', `account_no` = '$account_no', `ifsc_code` = '$ifsc_code', `payment_done_date` = '$payment_done_date', `gross` = '$gross', `tds` = '$tds', `net_paid` = '$net_paid', `payment_reference_no` = '$payment_reference_no', `survey_completion_date` = '$survey_completion_date', `survey_completion_status` = '$survey_completion_status', `payment_type` = '$payment_type', `remark` = '$remark', `payment_status` = '$payment_status', `reciept` = '$new_file_name' WHERE `id`='$id'";

		$num_final=mysqli_query($conn,$num);

	if ($num_final) {
		$_SESSION['msg'] = 'Successfully Updated';
		header('Location: ../pages/charts/drdetails.php');exit();
	} else {
		$_SESSION['symbol'] = 'error';
		$_SESSION['status_code'] = 'Unable to Submit';
		header('Location: ../pages/charts/drdetails.php?Unable to Update');exit();
	}

	} else {
		header('Location: ../pages/charts/drdetails.php?Something Went Wrong');exit();
	}
?>