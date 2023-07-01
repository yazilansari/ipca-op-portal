



<?php

include 'conn.php';

if(isset($_POST['submit'])){
$date1=$_POST['date1'];
  $date2=$_POST['date2'];
  $time1=$_POST['time1'];
  $time2=$_POST['time2'];




if(isset($date1)){

  $sql="SELECT * FROM `iccc2021_registration`  WHERE `durration` BETWEEN '$date1 $time1' AND '$date2 $time2'";

$query = mysqli_query($conn, $sql); // Get data from Database from demo table
 
 
    $delimiter = ",";
    $filename = "iccc2021_Registration_Report" . date('Ymd') . ".csv"; // Create file name
     
    //create a file pointer
    $f = fopen('php://memory', 'w'); 
     
    //set column headers
    $fields = array('Name', 'Email', 'MCI Reg No','Contact', 'State', 'City', 'Device', 'IP Address','Reg. Mode','Nation', 'Time');
    fputcsv($f, $fields, $delimiter);
     
    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){
        
        $lineData = array($row['name'], $row['email'],$row['mciregno'], $row['contact'], $row['state'], $row['city'], $row['device'], $row['ip_address'],$row['reg_mode'], $row['nation'], $row['durration']);
        fputcsv($f, $lineData, $delimiter);
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