<?php

include "conn.php";
date_default_timezone_set('Asia/Kolkata');

if (isset($_POST['submit'])) {
    $doc_name = $_POST["doc_name"];
    $doc_mobile = $_POST["doc_mobile"];
    $doc_email = $_POST["doc_email"];
    // $doc_add = $_POST["doc_add"];
    $doc_city = $_POST["doc_city"];
    $doc_state = $_POST["doc_state"];
    $doc_speciality = $_POST["doc_speciality"];
    // $doc_region = $_POST["doc_region"];
    $doc_sbu_code = $_POST["doc_sbu_code"];
    $request_date = date('Y-m-d', strtotime($_POST["request_date"]));
    // $second_date = date('Y-m-d', strtotime($_POST["second_date"]));
    $brand = $_POST["brand"];
    $monthly_support = $_POST["monthly_support"];
    $targetted_brand = $_POST["targetted_brand"];
    $head_quarters = $_POST["head_quarters"];
    $payment_mode = $_POST["payment_mode"];
    $zbm_zone = $_POST["zbm_zone"];
    $rbm_region = $_POST["rbm_region"];
    $territory = $_POST["territory"];
    $pan_file = $_FILES["pan_file"];
    $cheque_file = $_FILES["cheque_file"];
    $brand_q = $_POST["brand_q"];
    $brand_value = $_POST["brand_value"];
    $quarter = $_POST["quarter"];
    $division = $_POST["division"];

    // echo "<pre>";print_r($brand_q);
    // echo "<pre>";print_r($brand_value);
    // echo "<pre>";print_r($quarter);die();
    // print_r( $_SESSION);die;

    $sql = "SELECT * FROM `dr_details` WHERE `doc_mobile` = '$doc_mobile'";
    $final = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($final);
    if ($num > 0) {
        header("Location: ../drdetails.php?msg=Duplicate Mobile");
        exit();
    }
    $sql = "SELECT * FROM `dr_details` WHERE `doc_email` = '$doc_email'";
    $final = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($final);
    if ($num > 0) {
        header("Location: ../drdetails.php?msg=Duplicate Email");
        exit();
    }

    $temp = explode(".", $_FILES["pan_file"]["name"]);
    $panfilename = $doc_name. '_'.implode('_', $brand).'_pan.'.end($temp);
    move_uploaded_file($_FILES["pan_file"]["tmp_name"], "../docs/" . $panfilename);

    $temp = explode(".", $_FILES["cheque_file"]["name"]);
    $chequefilename = $doc_name. '_'.implode('_', $brand).'_cheque.'.end($temp);
    move_uploaded_file($_FILES["cheque_file"]["tmp_name"], "../docs/" . $chequefilename);

    // echo "INSERT INTO `dr_details`(`emp_code`, `doc_name`, `doc_mobile`, `doc_email`, `doc_add`, `doc_speciality`, `doc_region`, `first_date`, `second_date`, `brand`, `monthly_support`, `targetted_brand`, `head_quarters`, `payment_mode`, `pan_file`, `cheque_file`, `status`, `created_at`) VALUES ('".$_SESSION['emp_code']."', '$doc_name', '$doc_mobile', '$doc_email', '$doc_add', '$doc_speciality', '$doc_sbu_code', '$first_date', '$second_date', '".implode('|', $brand)."', '$monthly_support', '$targetted_brand', '$head_quarters', '$payment_mode', '$panfilename', '$chequefilename', 'Pending', '".date("Y-m-d H:i:s")."')";die();

    $num = "INSERT INTO `dr_details`(`emp_code`, `division`, `doc_name`, `doc_mobile`, `doc_email`, `doc_city`, `doc_state`, `doc_speciality`, `doc_region`, `request_date`, `brand`, `monthly_support`, `targetted_brand`, `head_quarters`, `payment_mode`, `pan_file`, `cheque_file`, `status`, `created_at`, `updated_at`, `zbm_zone`, `rbm_region`, `quarter_detail_id`) VALUES ('".$_SESSION['emp_code']."', '$division', '$doc_name', '$doc_mobile', '$doc_email', '$doc_city', '$doc_state', '$doc_speciality', '$doc_sbu_code', '$request_date', '".implode('|', $brand)."', '$monthly_support', '$targetted_brand', '$head_quarters', '$payment_mode', '$panfilename', '$chequefilename', 'Pending', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."', '$zbm_zone', '$rbm_region', '$territory')";

    $num_final = mysqli_query($conn, $num);

    if ($num_final) {
        $last_id = mysqli_insert_id($conn);
        for ($i=0; $i < count($brand_q); $i++) { 
            $num2 = "INSERT INTO `dr_quarter_details`(`dr_id`, `quarter`, `brand`, `brand_value`, `created_at`) VALUES ('$last_id', '$quarter[$i]', '$brand_q[$i]', '$brand_value[$i]', '".date("Y-m-d H:i:s")."')";

            mysqli_query($conn, $num2);
        }
        header("Location: ../drdetails.php?msg=Successfully Added");
        exit();
    } else {
        $_SESSION["msg2"] = "Unable to Add";
        $_SESSION["symbol"] = "error";
        header("Location: ../drdetails.php?msg=Unable to Add");
        exit();
    }
} elseif (isset($_POST['update'])) {
    $id = base64_decode($_POST["id"]);
    $doc_name = $_POST["doc_name"];
    $doc_mobile = $_POST["doc_mobile"];
    $doc_email = $_POST["doc_email"];
    // $doc_add = $_POST["doc_add"];
    $doc_city = $_POST["doc_city"];
    $doc_state = $_POST["doc_state"];
    $doc_speciality = $_POST["doc_speciality"];
    $doc_sbu_code = $_POST["doc_sbu_code"];
    $request_date = date('Y-m-d', strtotime($_POST["request_date"]));
    // $second_date = date('Y-m-d', strtotime($_POST["second_date"]));
    $brand = $_POST["brand"];
    $monthly_support = $_POST["monthly_support"];
    $targetted_brand = $_POST["targetted_brand"];
    $head_quarters = $_POST["head_quarters"];
    $payment_mode = $_POST["payment_mode"];
    $zbm_zone = $_POST["zbm_zone"];
    $rbm_region = $_POST["rbm_region"];
    $territory = $_POST["territory"];
    $uploaded_pan_file = $_POST["uploaded_pan_file"];
    $uploaded_cheque_file = $_POST["uploaded_cheque_file"];
    $pan_file = $_FILES["pan_file"];
    $cheque_file = $_FILES["cheque_file"];
    $brand_q = $_POST["brand_q"];
    $brand_value = $_POST["brand_value"];
    $quarter = $_POST["quarter"];

    // echo "<pre>";print_r($cheque_file);die();
    // print_r( $_SESSION);die;

    $sql = "SELECT * FROM `dr_details` WHERE `doc_mobile` = '$doc_mobile' AND `id` != '$id'";
    $final = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($final);
    if ($num > 0) {
        header("Location: ../edit-field.php?id=".$id."&msg=Duplicate Mobile");
        exit();
    }
    $sql = "SELECT * FROM `dr_details` WHERE `doc_email` = '$doc_email' AND `id` != '$id'";
    $final = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($final);
    if ($num > 0) {
        header("Location: ../edit-field.php?id=".$id."&msg=Duplicate Email");
        exit();
    }

    if(!empty($_FILES["pan_file"]['name'])) {
        $temp = explode(".", $_FILES["pan_file"]["name"]);
        $panfilename = $doc_name. '_'.implode('_', $brand).'_pan.'.end($temp);
        unlink('../docs/'.$uploaded_pan_file);
        move_uploaded_file($_FILES["pan_file"]["tmp_name"], "../docs/" . $panfilename);
    } else {
        $panfilename = $uploaded_pan_file;
    }

    if(!empty($_FILES["cheque_file"]['name'])) {
        $temp = explode(".", $_FILES["cheque_file"]["name"]);
        $chequefilename = $doc_name. '_'.implode('_', $brand).'_cheque.'.end($temp);
        unlink('../docs/'.$uploaded_cheque_file);
        move_uploaded_file($_FILES["cheque_file"]["tmp_name"], "../docs/" . $chequefilename);
    } else {
        $chequefilename = $uploaded_cheque_file;
    }

    // echo "UPDATE `dr_details` SET `doc_name` = '$doc_name', `doc_mobile` = '$doc_mobile', `doc_email` = '$doc_email', `doc_add` = '$doc_add', `doc_speciality` = '$doc_speciality', `doc_region` = '$doc_sbu_code', `first_date` = '$first_date', `second_date` = '$second_date', `brand` = '".implode('|', $brand)."', `monthly_support` = '$monthly_support', `targetted_brand` = '$targetted_brand', `head_quarters` = '$head_quarters', `payment_mode` = '$payment_mode', `pan_file` = '$panfilename', `cheque_file` = '$chequefilename' WHERE id = '$id'";die();

    $num = "UPDATE `dr_details` SET `doc_name` = '$doc_name', `doc_mobile` = '$doc_mobile', `doc_email` = '$doc_email', `doc_city` = '$doc_city', `doc_state` = '$doc_state', `doc_speciality` = '$doc_speciality', `doc_region` = '$doc_sbu_code', `request_date` = '$request_date', `brand` = '".implode('|', $brand)."', `monthly_support` = '$monthly_support', `targetted_brand` = '$targetted_brand', `head_quarters` = '$head_quarters', `payment_mode` = '$payment_mode', `pan_file` = '$panfilename', `cheque_file` = '$chequefilename', `zbm_zone` = '$zbm_zone', `rbm_region` = '$rbm_region', `quarter_detail_id` = '$territory', `updated_at` = '".date('Y-m-d H:i:s')."' WHERE id = '$id'";

    $num_final = mysqli_query($conn, $num);

    if ($num_final) {
        $num2 = "DELETE FROM `dr_quarter_details` WHERE `dr_id` = '$id'";
        // echo $num2;die();
        $num_final2 = mysqli_query($conn, $num2);
        if ($num_final2) {
            for ($i=0; $i < count($brand_q); $i++) { 
                $num2 = "INSERT INTO `dr_quarter_details`(`dr_id`, `quarter`, `brand`, `brand_value`, `created_at`, `updated_at`) VALUES ('$id', '$quarter[$i]', '$brand_q[$i]', '$brand_value[$i]', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')";

                mysqli_query($conn, $num2);
            }
            header("Location: ../edit-field.php?id=".base64_encode($id)."&msg=Successfully Updated");
            exit();
        }
    } else {
        $_SESSION["msg2"] = "Unable to Add";
        $_SESSION["symbol"] = "error";
        header("Location: ../edit-field.php?id=".base64_encode($id)."&msg=Unable to Add");
        exit();
    }
} else {
     header("Location: ../index.php?Something Went Wrong");
    exit();
}
?>
