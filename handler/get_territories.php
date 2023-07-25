<?php

include "conn.php";
// print_r($_SESSION);die();
// if (isset($_POST["submit"])) {
    $region = $_GET["region"];
    // $division = $_POST["division"];
    $q = "SELECT `id`, `territory` FROM `quarter_details` WHERE `region` LIKE '%$region%' GROUP BY `territory`";
    $res = mysqli_query($conn, $q);
    $territories = [];
    if(mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            array_push($territories, $row);
        }
        echo json_encode($territories);exit();
    } else {
        echo json_encode($territories);exit();
    }
// } else {
//     header("Location: ../index.php?msg=Someting Went Wrong");
//     exit();
// }

?>
