<?php

include "conn.php";
date_default_timezone_set('Asia/Kolkata');

if (isset($_POST['bripca_submit'])) {
    $dr_id = base64_decode($_POST["dr_id"]);
    $brand = $_POST["brand"];
    $question1 = $_POST["question1"];
    $question2 = $_POST["question2"];
    $question3 = $_POST["question3"];
    $question4 = $_POST["question4"];
    $question5 = $_POST["question5"];
    $question6 = $_POST["question6"];
    $question7 = $_POST["question7"];
    $question8 = $_POST["question8"];
    $question9 = $_POST["question9"];
    $question10 = $_POST["question10"];
    $answer1 = implode('|', $_POST["answer1"]);
    $answer2 = implode('|', $_POST["answer2"]);
    $answer3 = implode('|', $_POST["answer3"]);
    $answer4 = implode('|', $_POST["answer4"]);
    $answer5 = implode('|', $_POST["answer5"]);
    $answer6 = implode('|', $_POST["answer6"]);
    $answer7 = implode('|', $_POST["answer7"]);
    $answer8 = implode('|', $_POST["answer8"]);
    $answer9 = implode('|', $_POST["answer9"]);
    $answer10 = implode('|', $_POST["answer10"]);


    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question1."', '".$answer1."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question2."', '".$answer2."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question3."', '".$answer3."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question4."', '".$answer4."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question5."', '".$answer5."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question6."', '".$answer6."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question7."', '".$answer7."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question8."', '".$answer8."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question9."', '".$answer9."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question10."', '".$answer10."')";
    $num_final = mysqli_query($conn, $num);
    if ($num_final) {
        header("Location: ../doctor_list.php?msg=Successfully Added");
        exit();
    } else {
        $_SESSION["msg2"] = "Unable to Add";
        $_SESSION["symbol"] = "error";
        header("Location: ../doctor_list.php?msg=Unable to Add");
        exit();
    }
} elseif (isset($_POST['epictal_submit'])) {
    $dr_id = base64_decode($_POST["dr_id"]);
    $brand = $_POST["brand"];
    $question1 = $_POST["question1"];
    $question2 = $_POST["question2"];
    $question3 = $_POST["question3"];
    $question4 = $_POST["question4"];
    $question5 = $_POST["question5"];
    $question6 = $_POST["question6"];
    $question7 = $_POST["question7"];
    $question8 = $_POST["question8"];
    $question9 = $_POST["question9"];
    $question10 = $_POST["question10"];
    $question11 = $_POST["question11"];
    $question12 = $_POST["question12"];
    $answer1 = implode('|', $_POST["answer1"]);
    $other1 = $_POST["other1"];
    $answer2 = implode('|', $_POST["answer2"]);
    $answer3 = implode('|', $_POST["answer3"]);
    $answer4 = implode('|', $_POST["answer4"]);
    $answer5 = implode('|', $_POST["answer5"]);
    $other5 = $_POST["other5"];
    $answer6 = implode('|', $_POST["answer6"]);
    $other6 = $_POST["other6"];
    $answer7 = implode('|', $_POST["answer7"]);
    $answer8 = $_POST["answer8"];
    $answer9 = $_POST["answer9"];
    $answer10 = $_POST["answer10"];
    $answer11 = $_POST["answer11"];
    $answer12 = $_POST["answer12"];


    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`, `others`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question1."', '".$answer1."', '".$other1."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question2."', '".$answer2."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question3."', '".$answer3."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question4."', '".$answer4."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`, `others`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question5."', '".$answer5."', '".$other5."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`, `others`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question6."', '".$answer6."', '".$other6."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question7."', '".$answer7."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question8."', '".$answer8."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question9."', '".$answer9."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question10."', '".$answer10."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question11."', '".$answer11."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question12."', '".$answer12."')";
    $num_final = mysqli_query($conn, $num);
    if ($num_final) {
        header("Location: ../doctor_list.php?msg=Successfully Added");
        exit();
    } else {
        $_SESSION["msg2"] = "Unable to Add";
        $_SESSION["symbol"] = "error";
        header("Location: ../doctor_list.php?msg=Unable to Add");
        exit();
    }
} elseif (isset($_POST['pari_submit'])) {
    $dr_id = base64_decode($_POST["dr_id"]);
    $brand = $_POST["brand"];
    $question1 = $_POST["question1"];
    $question2 = $_POST["question2"];
    $question3 = $_POST["question3"];
    $question4 = $_POST["question4"];
    $question5 = $_POST["question5"];
    $question6 = $_POST["question6"];
    $question7 = $_POST["question7"];
    $question8 = $_POST["question8"];
    $question9 = $_POST["question9"];
    $question10 = $_POST["question10"];
    $answer1 = $_POST["answer1"];
    $answer2 = $_POST["answer2"];
    $answer3 = $_POST["answer3"];
    $answer4 = $_POST["answer4"];
    $answer5 = $_POST["answer5"];
    $answer6 = $_POST["answer6"];
    $answer7 = $_POST["answer7"];
    $answer8 = $_POST["answer8"];
    $answer9 = $_POST["answer9"];
    $answer10 = $_POST["answer10"];


    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question1."', '".$answer1."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question2."', '".$answer2."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question3."', '".$answer3."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question4."', '".$answer4."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question5."', '".$answer5."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question6."', '".$answer6."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question7."', '".$answer7."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question8."', '".$answer8."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question9."', '".$answer9."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question10."', '".$answer10."')";
    $num_final = mysqli_query($conn, $num);
    if ($num_final) {
        header("Location: ../doctor_list.php?msg=Successfully Added");
        exit();
    } else {
        $_SESSION["msg2"] = "Unable to Add";
        $_SESSION["symbol"] = "error";
        header("Location: ../doctor_list.php?msg=Unable to Add");
        exit();
    }
} elseif (isset($_POST['peg_submit'])) {
    $dr_id = base64_decode($_POST["dr_id"]);
    $brand = $_POST["brand"];
    $question1 = $_POST["question1"];
    $question2 = $_POST["question2"];
    $question3 = $_POST["question3"];
    $question4 = $_POST["question4"];
    $question5_below_25 = $_POST["question5_below_25"];
    $question5_25_50 = $_POST["question5_25_50"];
    $question5_50_75 = $_POST["question5_50_75"];
    $question5_above_75 = $_POST["question5_above_75"];
    $question6 = $_POST["question6"];
    $question7 = $_POST["question7"];
    $question8 = $_POST["question8"];
    $question9 = $_POST["question9"];
    $question10 = $_POST["question10"];
    $question11 = $_POST["question11"];
    $question12_0_4_weeks = $_POST["question12_0_4_weeks"];
    $question12_4_8_weeks = $_POST["question12_4_8_weeks"];
    $question12_8_12_weeks = $_POST["question12_8_12_weeks"];
    $question12_12_24_weeks = $_POST["question12_12_24_weeks"];
    $question12_above_24_weeks = $_POST["question12_above_24_weeks"];
    $question13 = $_POST["question13"];
    $question14 = $_POST["question14"];
    $question15 = $_POST["question15"];
    $answer1 = implode('|', $_POST["answer1"]);
    $other1 = $_POST["other1"];
    $answer2 = implode('|', $_POST["answer2"]);
    $answer3 = implode('|', $_POST["answer3"]);
    $answer4 = implode('|', $_POST["answer4"]);
    $other4 = $_POST["other4"];
    $answer5_below_25 = $_POST["answer5_below_25"];
    $answer5_25_50 = $_POST["answer5_25_50"];
    $answer5_50_75 = $_POST["answer5_50_75"];
    $answer5_above_75 = $_POST["answer5_above_75"];
    $answer6 = implode('|', $_POST["answer6"]);
    $other6 = $_POST["other6"];
    $answer7 = implode('|', $_POST["answer7"]);
    $other7 = $_POST["other7"];
    $answer8 = implode('|', $_POST["answer8"]);
    $other8 = $_POST["other8"];
    $answer9 = implode('|', $_POST["answer9"]);
    $answer10 = implode('|', $_POST["answer10"]);
    $answer11 = implode('|', $_POST["answer11"]);
    $answer12_0_4_weeks = implode('|', $_POST["answer12_0_4_weeks"]);
    $answer12_4_8_weeks = implode('|', $_POST["answer12_4_8_weeks"]);
    $answer12_8_12_weeks = implode('|', $_POST["answer12_8_12_weeks"]);
    $answer12_12_24_weeks = implode('|', $_POST["answer12_12_24_weeks"]);
    $answer12_bove_24_weeks = implode('|', $_POST["answer12_bove_24_weeks"]);
    $answer13 = implode('|', $_POST["answer13"]);
    $other13 = $_POST["other13"];
    $answer14 = $_POST["answer14"];
    $answer15 = implode('|', $_POST["answer15"]);
    

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`, `others`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question1."', '".$answer1."', '".$other1."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question2."', '".$answer2."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question3."', '".$answer3."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`, `others`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question4."', '".$answer4."', '".$other4."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question5_below_25."', '".$answer5_below_25."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question5_25_50."', '".$answer5_25_50."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question5_50_75."', '".$answer5_50_75."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question5_above_75."', '".$answer5_above_75."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`, `others`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question6."', '".$answer6."', '".$other6."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`, `others`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question7."', '".$answer7."', '".$other7."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`, `others`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question8."', '".$answer8."', '".$other8."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question9."', '".$answer9."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question10."', '".$answer10."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question11."', '".$answer11."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question12_0_4_weeks."', '".$answer12_0_4_weeks."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question12_4_8_weeks."', '".$answer12_4_8_weeks."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question12_8_12_weeks."', '".$answer12_8_12_weeks."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question12_12_24_weeks."', '".$answer12_12_24_weeks."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question12_above_24_weeks."', '".$answer12_above_24_weeks."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`, `others`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question13."', '".$answer13."', '".$other13."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question14."', '".$answer14."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question15."', '".$answer15."')";
    $num_final = mysqli_query($conn, $num);
    if ($num_final) {
        header("Location: ../doctor_list.php?msg=Successfully Added");
        exit();
    } else {
        $_SESSION["msg2"] = "Unable to Add";
        $_SESSION["symbol"] = "error";
        header("Location: ../doctor_list.php?msg=Unable to Add");
        exit();
    }
} elseif (isset($_POST['vipca_submit'])) {
    $dr_id = base64_decode($_POST["dr_id"]);
    $brand = $_POST["brand"];
    $question1 = $_POST["question1"];
    $question2 = $_POST["question2"];
    $question3 = $_POST["question3"];
    $question4 = $_POST["question4"];
    $question5 = $_POST["question5"];
    $question6 = $_POST["question6"];
    $question7 = $_POST["question7"];
    $question8 = $_POST["question8"];
    $question9 = $_POST["question9"];
    $question10 = $_POST["question10"];
    $question11 = $_POST["question11"];
    $question12 = $_POST["question12"];
    $question13 = $_POST["question13"];
    $question14 = $_POST["question14"];
    $question15 = $_POST["question15"];
    $question16 = $_POST["question16"];
    $answer1 = implode('|', $_POST["answer1"]);
    $answer2 = implode('|', $_POST["answer2"]);
    $answer3 = implode('|', $_POST["answer3"]);
    $answer4 = implode('|', $_POST["answer4"]);
    $other4 = $_POST["other4"];
    $answer5 = implode('|', $_POST["answer5"]);
    $other5 = $_POST["other5"];
    $answer6 = implode('|', $_POST["answer6"]);
    $other6 = $_POST["other6"];
    $answer7 = implode('|', $_POST["answer7"]);
    $answer8 = implode('|', $_POST["answer8"]);
    $answer9 = implode('|', $_POST["answer9"]);
    $answer10 = implode('|', $_POST["answer10"]);
    $answer11 = implode('|', $_POST["answer11"]);
    $answer12 = implode('|', $_POST["answer12"]);
    $answer13 = implode('|', $_POST["answer13"]);
    $answer14 = implode('|', $_POST["answer14"]);
    $other14 = $_POST["other14"];
    $answer15 = implode('|', $_POST["answer15"]);
    $answer16 = implode('|', $_POST["answer16"]);


    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question1."', '".$answer1."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question2."', '".$answer2."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question3."', '".$answer3."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`, `others`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question4."', '".$answer4."', '".$other4."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`, `others`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question5."', '".$answer5."', '".$other5."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`, `others`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question6."', '".$answer6."', '".$other6."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question7."', '".$answer7."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question8."', '".$answer8."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question9."', '".$answer9."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question10."', '".$answer10."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question11."', '".$answer11."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question12."', '".$answer12."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question13."', '".$answer13."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`, `others`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question14."', '".$answer14."', '".$other14."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question15."', '".$answer15."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question16."', '".$answer16."')";
    $num_final = mysqli_query($conn, $num);
    if ($num_final) {
        header("Location: ../doctor_list.php?msg=Successfully Added");
        exit();
    } else {
        $_SESSION["msg2"] = "Unable to Add";
        $_SESSION["symbol"] = "error";
        header("Location: ../doctor_list.php?msg=Unable to Add");
        exit();
    }
} elseif (isset($_POST['zoipidem_submit'])) {
    $dr_id = base64_decode($_POST["dr_id"]);
    $brand = $_POST["brand"];
    $question1 = $_POST["question1"];
    $question2 = $_POST["question2"];
    $question3_5_mg = $_POST["question3_5_mg"];
    $question3_10_mg = $_POST["question3_10_mg"];
    $question3_6_mg = $_POST["question3_6_mg"];
    $question3_12_mg = $_POST["question3_12_mg"];
    $question4 = $_POST["question4"];
    $question5 = $_POST["question5"];
    $question6 = $_POST["question6"];
    $question7 = $_POST["question7"];
    $question8 = $_POST["question8"];
    $question9 = $_POST["question9"];
    $question10 = $_POST["question10"];
    $answer1 = implode('|', $_POST["answer1"]);
    $other1 = $_POST["other1"];
    $answer2 = implode('|', $_POST["answer2"]);
    $other2 = $_POST["other2"];
    $answer3_5_mg = implode('|', $_POST["answer3_5_mg"]);
    $answer3_10_mg = implode('|', $_POST["answer3_10_mg"]);
    $answer3_6_mg = implode('|', $_POST["answer3_6_mg"]);
    $answer3_12_mg = implode('|', $_POST["answer3_12_mg"]);
    $answer4 = implode('|', $_POST["answer4"]);
    $answer5 = implode('|', $_POST["answer5"]);
    $answer6 = implode('|', $_POST["answer6"]);
    $other1 = $_POST["other1"];
    $other6 = $_POST["other6"];
    $answer7 = implode('|', $_POST["answer7"]);
    $answer8 = implode('|', $_POST["answer8"]);
    $other8 = $_POST["other8"];
    $answer9 = $_POST["answer9"];
    $answer10 = $_POST["answer10"];

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`, `others`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question1."', '".$answer1."', '".$other1."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`, `others`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question2."', '".$answer2."', '".$other2."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question3_5_mg."', '".$answer3_5_mg."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question3_10_mg."', '".$answer3_10_mg."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question3_6_mg."', '".$answer3_6_mg."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question3_12_mg."', '".$answer3_12_mg."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`, `others`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question4."', '".$answer4."', '".$other4."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`, `others`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question5."', '".$answer5."', '".$other5."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`, `others`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question6."', '".$answer6."', '".$other6."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question7."', '".$answer7."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`, `others`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question8."', '".$answer8."', '".$other8."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question9."', '".$answer9."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question10."', '".$answer10."')";
    $num_final = mysqli_query($conn, $num);

    if ($num_final) {
        header("Location: ../doctor_list.php?msg=Successfully Added");
        exit();
    } else {
        $_SESSION["msg2"] = "Unable to Add";
        $_SESSION["symbol"] = "error";
        header("Location: ../doctor_list.php?msg=Unable to Add");
        exit();
    }
} elseif (isset($_POST['peg_sr_submit'])) {
    $dr_id = base64_decode($_POST["dr_id"]);
    $brand = $_POST["brand"];
    $question1 = $_POST["question1"];
    $question2 = $_POST["question2"];
    $question3 = $_POST["question3"];
    $question4 = $_POST["question4"];
    $question5 = $_POST["question5"];
    $question6 = $_POST["question6"];
    $question7 = $_POST["question7"];
    $question8 = $_POST["question8"];
    $question9 = $_POST["question9"];
    $question10 = $_POST["question10"];
    $answer1 = $_POST["answer1"];
    $other1 = $_POST["other1"];
    $answer2 = $_POST["answer2"];
    $answer3 = $_POST["answer3"];
    $answer4 = $_POST["answer4"];
    $answer5 = $_POST["answer5"];
    $answer6 = $_POST["answer6"];
    $answer61 = 'Yes: '.$_POST["answer61"];
    $answer7 = $_POST["answer7"];
    $answer8 = $_POST["answer8"];
    $other8 = $_POST["other8"];
    $answer9 = $_POST["answer9"];
    $answer10 = $_POST["answer10"];

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`, `others`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question1."', '".$answer1."', '".$other1."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question2."', '".$answer2."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question3."', '".$answer3."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question4."', '".$answer4."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question5."', '".$answer5."')";
    $num_final = mysqli_query($conn, $num);

    if($answer6 == 'Yes') {
        $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question6."', '".$answer61."')";
        $num_final = mysqli_query($conn, $num);
    } else {
        $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question6."', '".$answer6."')";
        $num_final = mysqli_query($conn, $num);
    }

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question7."', '".$answer7."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`, `others`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question8."', '".$answer8."', '".$other8."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question9."', '".$answer9."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question10."', '".$answer10."')";
    $num_final = mysqli_query($conn, $num);
    if ($num_final) {
        header("Location: ../doctor_list.php?msg=Successfully Added");
        exit();
    } else {
        $_SESSION["msg2"] = "Unable to Add";
        $_SESSION["symbol"] = "error";
        header("Location: ../doctor_list.php?msg=Unable to Add");
        exit();
    }
} elseif (isset($_POST['sove_submit'])) {
    $dr_id = base64_decode($_POST["dr_id"]);
    $brand = $_POST["brand"];
    $question1 = $_POST["question1"];
    $question2 = $_POST["question2"];
    $question3_5_mg = $_POST["question3_5_mg"];
    $question3_10_mg = $_POST["question3_10_mg"];
    $question3_625_mg = $_POST["question3_625_mg"];
    $question3_125_mg = $_POST["question3_125_mg"];
    $question4 = $_POST["question4"];
    $question5 = $_POST["question5"];
    $question6 = $_POST["question6"];
    $question7 = $_POST["question7"];
    $question8 = $_POST["question8"];
    $question9 = $_POST["question9"];
    $question10 = $_POST["question10"];
    $answer1 = implode('|', $_POST["answer1"]);
    $other1 = $_POST["other1"];
    $answer2 = implode('|', $_POST["answer2"]);
    $other2 = $_POST["other2"];
    $answer3_5_mg = implode('|', $_POST["answer3_5_mg"]);
    $answer3_10_mg = implode('|', $_POST["answer3_10_mg"]);
    $answer3_625_mg = implode('|', $_POST["answer3_625_mg"]);
    $answer3_125_mg = implode('|', $_POST["answer3_125_mg"]);
    $answer4 = implode('|', $_POST["answer4"]);
    $answer5 = implode('|', $_POST["answer5"]);
    $answer6 = implode('|', $_POST["answer6"]);
    $other6 = $_POST["other6"];
    $answer7 = implode('|', $_POST["answer7"]);
    $answer8 = implode('|', $_POST["answer8"]);
    $other8 = $_POST["other8"];
    $answer9 = $_POST["answer9"];
    $answer10 = $_POST["answer10"];
    

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`, `others`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question1."', '".$answer1."', '".$other1."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`, `others`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question2."', '".$answer2."', '".$other2."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question3_5_mg."', '".$answer3_5_mg."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question3_10_mg."', '".$answer3_10_mg."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question3_625_mg."', '".$answer3_625_mg."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question3_125_mg."', '".$answer3_125_mg."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question4."', '".$answer4."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question5."', '".$answer5."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`, `others`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question6."', '".$answer6."', '".$other6."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question7."', '".$answer7."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`, `others`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question8."', '".$answer8."', '".$other8."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question9."', '".$answer9."')";
    $num_final = mysqli_query($conn, $num);

    $num = "INSERT INTO `survey_forms`(`emp_code`, `brand`, `dr_id`, `questions`, `answers`) VALUES ('".$_SESSION['emp_code']."', '$brand', '$dr_id', '".$question10."', '".$answer10."')";
    $num_final = mysqli_query($conn, $num);

    if ($num_final) {
        header("Location: ../doctor_list.php?msg=Successfully Added");
        exit();
    } else {
        $_SESSION["msg2"] = "Unable to Add";
        $_SESSION["symbol"] = "error";
        header("Location: ../doctor_list.php?msg=Unable to Add");
        exit();
    }
} else {
     header("Location: ../index.php?Something Went Wrong");
    exit();
}
?>
