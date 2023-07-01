<?php

include "conn.php";

if (isset($_POST['submit'])) {


    $name = $_POST["name"];
    $designation = $_POST["designation"];
    $institution = $_POST["institution"];
    $qualifications = $_POST["qualifications"];
    $mc_reg_name_no = $_POST["mc_reg_name_no"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $mob_no = $_POST["mob_no"];
    $profession = $_POST["profession"];
    $country = $_POST["country"]; 
    $state = $_POST["state"];
    $city = $_POST["city"]; 
    $reg_type = $_POST["reg_type"];
    $category = $_POST["category"];
    $amount = $_POST["amount"];
    $total_amount = $_POST["total_amount"];   

    $num = "INSERT INTO `synapse_registration`(`name`, `designation`, `institution`, `qualifications`, `mc_reg_name_no`, `address`, `email`, `mob_no`, `profession`, `country`, `state`, `city`, `reg_type`, `category`, `amount`, `total_amount`) VALUES ('$name','$designation','$institution','$qualifications','$mc_reg_name_no','$address','$email','$mob_no','$profession','$country','$state','$city','$reg_type','$category','$amount','$total_amount')";

    $num_final = mysqli_query($conn, $num);

    if ($num_final) {
        header("Location: ../thank-you.php?Successfully Updated");
        exit();
    } else {
        $_SESSION["msg2"] = "Unable to Add";
        $_SESSION["symbol"] = "error";
        header("Location: ../Reg.php?Unable to Add");
        exit();
    }
} else {
     header("Location: ../Reg.php?Something Went Wrong");
    exit();
}

?>
