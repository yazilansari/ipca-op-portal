<?php

include "conn.php";
// print_r($_SESSION);die();
if (isset($_POST["submit"])) {
    $emp_code = $_POST["emp_code"];
    $division = $_POST["division"];
    $q = "SELECT * FROM employees_ipca WHERE `emp_no` = '$emp_code'";
    $res = mysqli_query($conn, $q);
    if(mysqli_num_rows($res) > 0) {
        $_SESSION["emp_code"] = $emp_code;
        $_SESSION["division"] = $division;
        header("Location: ../drdetails.php?msg=Successfully Login");
        exit();
    } else {
        header("Location: ../index.php?msg=Incorrect Employee Code");
        exit();
    }
} else {
    header("Location: ../index.php?msg=Someting Went Wrong");
    exit();
}

?>
