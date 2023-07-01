<?php
include "conn.php";
date_default_timezone_set("Asia/Calcutta");
$email = $_POST["email"];
$category = $_POST["category"];

$targetDir = "../abstract-papaer-uploads/";
for ($i=0; $i < count($_FILES['doc_name']['name']); $i++) { 
    if(!empty($_FILES['doc_name']['name'][$i]) && $_FILES['doc_name']['name'][$i] != '') {
        $fileName = time().'-'.basename($_FILES["doc_name"]["name"][$i]);
        $targetFilePath = $targetDir . $fileName;
        move_uploaded_file($_FILES["doc_name"]["tmp_name"][$i], $targetFilePath);
        $sql = "INSERT INTO synapse_abstract_paper (email, category, full_manuscript, created_date)
                VALUES ('".$email."', '".$category."', '".$fileName."', '".date('Y-m-d H:i:s')."')";
        if (!mysqli_query($conn, $sql)) {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

header("Location: ../abstract_paperlist.php?msg=Added Successfully");
exit();
?>
