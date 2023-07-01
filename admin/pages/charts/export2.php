



<?php

include 'conn.php';
$date1=$_POST['date1'];
  $date2=$_POST['date2'];
  $time1=$_POST['time1'];
  $time2=$_POST['time2'];

if(isset($_POST['submit'])){





if(isset($_POST['valid']) == "Y") {
  if(!empty($time1) && !empty($time2)) {
    $sql = "SELECT max(id),email,device,ipaddress,durration,name,max(durration) FROM `iccc2021_logindata` WHERE `durration` BETWEEN '$date1 $time1' AND '$date2 $time2' GROUP BY `email` ORDER BY 'durration' DESC";
  } else {
    $sql = "SELECT max(id),email,device,ipaddress,durration,name,max(durration) FROM `iccc2021_logindata` WHERE DATE_FORMAT(`durration`, '%Y-%m-%d') BETWEEN '$date1' AND '$date2' GROUP BY `email` ORDER BY 'durration' DESC";
  }

  $query = mysqli_query($conn, $sql); // Get data from Database from demo table
 
 
    $delimiter = ",";
    $filename = "iccc2021_Login_Report_Without_Duplicate" . date('Ymd') . ".csv"; // Create file name
     
    //create a file pointer
    $f = fopen('php://memory', 'w'); 
     
    //set column headers
    $fields = array('Name', 'Email', 'Device', 'Ip Address', 'Time');
    fputcsv($f, $fields);
     
    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){
        
        $lineData = array($row['name'], $row['email'], $row['device'], $row['ipaddress'], $row['durration']);


        fputcsv($f, $lineData);
    }
     
    //move back to beginning of file
    fseek($f, 0);
     
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
     
    //output all remaining data on a file pointer
    fpassthru($f);
 
 } else {
    if(!empty($time1) && !empty($time2)) {
      $sql="SELECT * FROM `iccc2021_logindata`  WHERE `durration` BETWEEN '$date1 $time1' AND '$date2 $time2' ORDER BY `id` DESC";
    } else {
      $sql="SELECT * FROM `iccc2021_logindata`  WHERE DATE_FORMAT(`durration`, '%Y-%m-%d') BETWEEN '$date1' AND '$date2' ORDER BY `id` DESC";
    }

    $query = mysqli_query($conn, $sql); // Get data from Database from demo table
 
 
    $delimiter = ",";
    $filename = "iccc2021_Login_Report_With_Duplicate" . date('Ymd') . ".csv"; // Create file name
     
    //create a file pointer
    $f = fopen('php://memory', 'w'); 
     
    //set column headers
    $fields = array('Name', 'Email', 'Device', 'Ip Address', 'Time');
    fputcsv($f, $fields);
     
    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){

      //  $array1=array($row['name'], $row['email'], $row['device'], $row['durration']);
        
        $lineData = array($row['name'], $row['email'], $row['device'], $row['ipaddress'], $row['durration']);
        
        fputcsv($f, $lineData);
    }
     
    //move back to beginning of file
    fseek($f, 0);
     
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
     
    //output all remaining data on a file pointer
    fpassthru($f);













 }
}

?>  