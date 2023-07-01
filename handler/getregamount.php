<?php
include "conn.php";
$return_arr = [];

$query = "SELECT * FROM `synapse_reg_amount`";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($result)) {
    $regtype = $row["reg_type"];
    $regcat = $row["category"];
    $amt = $row["amount"];
    $total_amt = $row["including_gst(18%)"];

    $return_arr[] = array(
        "type" => $regtype,
        "cat" => $regcat,
        "amount" => $amt,
        "totalamt" => $total_amt,
    );
}

echo json_encode($return_arr);

?>
