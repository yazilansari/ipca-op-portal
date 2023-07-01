<?php

include "conn.php";

$data = json_decode(file_get_contents("php://input", true));
// echo "<pre>";print_r($data);
$email = $data->email;

if ($data->pay == 'pay1') {
	$id1 = $data->payment_id1;
	$status1 = $data->status1;
	$amt1 = $data->part1amount;
	$num = "UPDATE `synapse_registration` SET `part_payment_1_id`='$id1',`part_payment_1_status`='$status1',`part_payment_1_amount`='$amt1' WHERE `email`='$email'";
	// echo $num;die;
} elseif ($data->pay == 'pay2') {
	$id2 = $data->payment_id2;
	$status2 = $data->status2;
	$amt2 = $data->part2amount;
	$num = "UPDATE `synapse_registration` SET `part_payment_2_id`='$id2',`part_payment_2_status`='$status2',`part_payment_2_amount`='$amt2' WHERE `email`='$email'";
} elseif ($data->pay == 'pay3') {
	$id3 = $data->payment_id3;
	$status3 = $data->status3;
	$amt3 = $data->part3amount;
	$num = "UPDATE `synapse_registration` SET `part_payment_3_id`='$id3',`part_payment_3_status`='$status3',`part_payment_3_amount`='$amt3' WHERE `email`='$email'";
} elseif ($data->pay == 'pay4') {
	$id4 = $data->payment_id4;
	$status4 = $data->status4;
	$amt4 = $data->part4amount;
	$num = "UPDATE `synapse_registration` SET `part_payment_4_id`='$id4',`part_payment_4_status`='$status4',`part_payment_4_amount`='$amt4' WHERE `email`='$email'";
}
$num_final = mysqli_query($conn, $num);
$symbol = "";
if ($num_final) {
    $symbol = "success";
} else {    
    $symbol = "error";
}
json_encode($symbol);
?>
