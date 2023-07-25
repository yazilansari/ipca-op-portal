<?php

include "conn.php";
// print_r($_SESSION);die();
// if (isset($_POST["submit"])) {
    $territory = $_GET["territory"];
    $division = $_GET["division"];
    // $division = $_POST["division"];
    $q = "SELECT `id`, `group1`, `2022-23_qtr1_PMPT`, `2023-24_qtr1_PMPT` FROM `quarter_details` WHERE `division` = '$division' AND `territory` LIKE '%$territory%'";
    // echo $q;die();
    $res = mysqli_query($conn, $q);
    $quarters = [];
    if(mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            array_push($quarters, $row);
        }
        echo json_encode($quarters);exit();
    } else {
        echo json_encode($quarters);exit();
    }
// } else {
//     header("Location: ../index.php?msg=Someting Went Wrong");
//     exit();
// }

?>
