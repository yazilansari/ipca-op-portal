<?php

include "conn.php";
// print_r($_SESSION);die();
if (isset($_POST["submit"])) {
    $emp_code = $_POST["emp_code"];
    // $division = $_POST["division"];
    // $q = "SELECT * FROM `employees_ipca` WHERE `emp_no` = '$emp_code' AND `division` = '$division' AND (`designation` = 'ZBM' OR `designation` = 'RBM')";
    // $res = mysqli_query($conn, $q);
    if(strtolower($emp_code) == 'admin') {
        $_SESSION["approver_user"] = $emp_code;
        // $_SESSION["division"] = $division;
        header("Location: ../approver-dashboard/approver-dashboard-list.php?msg=Successfully Login");
        exit();
    } else {
        header("Location: ../approver-dashboard/index.php?msg=Incorrect Employee Code");
        exit();
    }
} else {
    header("Location: ../approver-dashboard/index.php?msg=Someting Went Wrong");
    exit();
}

?>
