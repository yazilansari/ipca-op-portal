<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>  
    <title></title>  
   <script type="text/javascript" src="http://ajax.googleapis.com/ 
ajax/libs/jquery/1.5/jquery.min.js"></script> 
<script type="text/javascript" src="jquery.form.js"></script> 
<script type="text/javascript"> 
    $('document').ready(function(){ 
        $('#form').ajaxForm( { 
            success: function() {  
            }  
        });  
    }); 
</script>   
    
</head>  
<body style="height: 431px">  
<div id="form-container"> 
    <form id="form" action="ruff.php" method="post"> 
        Name 
        <input type="text" name="name" /> 
        Email 
        <input type="text" name="email" /> 
        <input type="submit" value="Submit"> 
    </form> 
</div> 
<?php 

include 'conn.php';
    //Database connection configuration 
    $db_hostname = 'localhost'; 
    $db_user = 'root'; 
    $db_password = ''; 
    $db_database = 'card_conf_2'; 
    $db_conn = mysqli_connect($db_hostname, $db_user, $db_password) or die("Could not connect database"); 
    //Connect to Database 
    mysqli_select_db($conn, $db_database) or die("Could not select database"); 
     
    if($_SERVER["REQUEST_METHOD"] == "POST"){ 
        $name=mysql_real_escape_string($_POST['name']); 
        $email=mysql_real_escape_string($_POST['email']); 
        if(strlen($name)>0 && strlen($email)>0){ 
            mysql_query("INSERT INTO `csi2021_questions` (name, email) VALUES('$name','$email')"); 
        } 
    } 
?> 
    </body>  
</html> 