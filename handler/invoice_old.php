<?php
$data = json_decode(file_get_contents("php://input", true));
// echo "<pre>";print_r($data);die;
include "../razorpay-php/Razorpay.php";

use Razorpay\Api\Api;

$api = new Api('rzp_test_SI1DwVvBwj2MSa', '7kEvxHTfbVhB8PzfSczc4GRQ');

$res = $api->invoice->create(array("draft" => 1));

if($data->type == 'Indian Doctors') {
	$res2 = $api->Item->create(array("name" => $data->item_name, 'description' => $data->item_name, "amount" => $data->item_total_amount*100, "tax_rate" => 1800, "tax_inclusive" => true, "currency" => $data->item_currency));
} else {
	$res2 = $api->Item->create(array("name" => $data->item_name, 'description' => $data->item_name, "amount" => $data->item_total_amount*100, "currency" => $data->item_currency));
}

if($res2['id'] && !empty($res2['id']) && $res['id'] && $res['id']) {
	$supply_state_code = '';
	if($data->type == 'Indian Doctors') {
		$supply_state_code = 27;
	}

	$res3 = $api->invoice->fetch($res['id'])->edit(array("description" => $data->customer_name, "customer" => array("name" => $data->customer_name, "contact" => $data->customer_mob_no, "email" => $data->customer_email, "billing_address" => array("line1" => $data->customer_address, "line2" => $data->customer_address, "city" => $data->customer_city, "state" => $data->customer_state, "country" => $data->customer_country)), "line_items" => array(array("item_id" => $res2['id'])), "sms_notify" => 1, "email_notify" => 1, "receipt" => $data->receipt_no, "comment" => "GSTIN: ".$data->gstin, "supply_state_code" => $supply_state_code));

	if($res3['id'] && !empty($res3['id'])) {
		// $res4 = $api->invoice->fetch($res3['id'])->issue();
	}

	// "customer" => array("name" => $data->customer_name, "contact" => $data->customer_mob_no, "email" => $data->customer_email, "billing_address" => array("line1" => $data->customer_address, "line2" => $data->customer_address, "city" => $data->customer_city, "state" => $data->customer_state, "country" => $data->customer_country)),

	// echo "<pre>";print_r($res['id']);
}
?>
