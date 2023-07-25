<?php
include "conn.php";
$id = $_POST['id'];
$activity = $_POST['activity'];
$return_arr = [];
$query = "SELECT * FROM `survey_forms` WHERE `dr_id` = '$id' AND `brand` = '$activity'";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($result)) {
    $questions = $row["questions"];
    $answers = $row["answers"];
    $others = $row["others"];
    // $total_amt = $row["including_gst(18%)"];

    $return_arr[] = array(
        "questions" => $questions,
        "answers" => implode(',&nbsp;&nbsp;',  explode('|', $answers)),
        "others" => $others,
        // "totalamt" => $total_amt,
    );
}

echo json_encode($return_arr);

?>
