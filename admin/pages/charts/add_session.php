<?php 

include 'conn.php';
if (!isset($_SESSION['user'])) {
  header('Location: ../../index.php?Something Went Wrong');
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Envisage Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="icon" href="../../../csi/odisha/images/favicon.png" type="images/png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
  <!-- CodeMirror -->
  <link rel="stylesheet" href="../../plugins/codemirror/codemirror.css">
  <link rel="stylesheet" href="../../plugins/codemirror/theme/monokai.css">
  <!-- SimpleMDE -->
  <link rel="stylesheet" href="../../plugins/simplemde/simplemde.min.css">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<!-- <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> -->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
     <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" data-widget="pushmenu" href="#" role="button" >
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a href="logout.php"><button type="button" class="btn btn-dark">
          Logout
        </button></a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
           
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php

include '../nav.php';

  ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create New Session</h1>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-md-12">
          <div class="card card-outline card-info">
            
            <!-- /.card-header -->
<?php
  $user=$_SESSION['user'];
if (isset($_GET['id'])) {

  $id1=$_GET['id'];
  $sess_fetch="SELECT * FROM `iccc2021_admin_session` WHERE `id`='$id1'";
 
$sess_final2=mysqli_query($conn,$sess_fetch);



$num=1;
while ($data=mysqli_fetch_assoc($sess_final2)) {


    $name=$data['name'];
    $id=$data['ID'];
    $sessionname=$data['sessionname'];
    $date=$data['date'];
    $str_time=$data['str_time'];
    $sdate=date('h:i a', strtotime($str_time));
    $end_time=$data['end_time'];
    $edate=date('h:i a', strtotime($end_time));
    
  
  echo "         
<div class='card-header'>
              <h3 class='card-title'>
               <b> Update Session</b>
              </h3>
            </div>


   <form action='../../handler/update_session_handler.php' method='POST'>
            <div class='card-body'>
              <div class='row'>
                <div class='col-md-2'>
                <label>Session Name</label>
                <input type='text' required='' value='$name' class='form-control m-2 w-75' name='sess_name' placeholder='Day...'>
                <input type='text'  name='id' value='$id' hidden>
                <input type='text'  name='user' value='$user' hidden>
              </div>
              <div class='col-md-2' style='margin-left:-4%'>
                <label>Session Date</label>
                <input type='date' required='' name='sess_date' value='$date' class='form-control m-2' placeholder='Day...'>
              </div>
              <div class='col-md-2'>
                <label>Start Time</label>
                <input type='time' required='' name='sess_str_time' value='$str_time' class='form-control m-2 w-75' placeholder='Day...'>
              </div>
              <div class='col-md-2' style='margin-left:-4%'>
                <label>End Time</label>
                <input type='time' required='' value='$end_time' name='sess_end_time' class='form-control m-2 w-75' placeholder='Day...'>
              </div>
              </div>
                <label>Session Details</label>
              <textarea id='summernote' name='sess_det' value='' required=''>
                $sessionname
              </textarea>

                <button type='submit' name='submit' class='form-control btn-dark w-25' value='submit'>Update Session</button>
            </div>
            
            </form>

";
} 
}
else {

  echo "            

<div class='card-header'>
              <h3 class='card-title'>
                Add New Session
              </h3>
            </div>


  <form action='../../handler/add_session_handler.php' method='POST'>
            <div class='card-body'>
              <div class='row'>
                <div class='col-md-2'>
                <label>Session Name</label>
                <input type='text' required='' class='form-control m-2' name='sess_name' placeholder='Day...'>
                <input type='text'  name='user' value='$user' hidden>
              </div>
              <div class='col-md-2'>
                <label>Session Date</label>
                <input type='date' required='' name='sess_date' class='form-control m-2' placeholder='Day...'>
              </div>
              <div class='col-md-2'>
                <label>Start Time</label>
                <input type='time' required='' name='sess_str_time' class='form-control m-2 w-100' placeholder='Day...'>
              </div>
              <div class='col-md-2'>
                <label>End Time</label>
                <input type='time' required='' name='sess_end_time' class='form-control m-2 w-75' placeholder='Day...'>
              </div>
              </div>
                <label>Session Details</label>
              <textarea id='summernote' name='sess_det' required=''>
                Place <em>some</em> <u>text</u> <strong>here</strong>
              </textarea>

                <button type='submit' name='submit' class='form-control btn-dark w-25' value='submit'>Add New Session</button>
            </div>
            
            </form>";
}
?>



          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row 
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                CodeMirror
              </h3>
            </div>-->
            <!-- /.card-header -->
            <div class="card">
              <div class="card-header">
               
             <?php 
                if (isset($_SESSION['msg'])) {
                  echo "<p class='text-success'><b>".$_SESSION['msg']."</b></p>";
                }


                ?>
              
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="myTable" class="table table-bordered table-striped">
                  <!-- <input type="text" name="search" id="myInput" class="form-control w-25 m-2 float-right " placeholder="Search Contain"> -->
                  <thead>
                  <tr>
                    <th>Sr.</th>
                    <th>Day </th>
                    <th>Session Details </th>
                    <th>Date </th>
                    <th>Start Time </th>
                    <th>End Time </th>
                    <th>Action </th>
                    <th>Status </th>
                  </tr>
                  </thead>
                  <tbody>
                  
<?php 

// $results_per_page = 10;
  $sess_fetch="SELECT * FROM `iccc2021_admin_session`";
 
// $sess_final2=mysqli_query($conn,$sess_fetch);


// $number_of_results = mysqli_num_rows($sess_final2);

// $number_of_pages = ceil($number_of_results/$results_per_page);



$num=1;

// if (!isset($_GET['page'])) {
//   $page = 1;
// } else {
//   $page = $_GET['page'];
// }
// $this_page_first_result = ($page-1)*$results_per_page;

// $sql="SELECT * FROM iccc2021_admin_session LIMIT "   . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($conn, $sess_fetch);
while ($data=mysqli_fetch_array($result)) {


    $name=$data['name'];
    $id=$data['ID'];
    $status=$data['status'];
    $sessionname=$data['sessionname'];
    $date2=$data['date'];
    $date=date('jS M Y', strtotime($date2));
    $str_time=$data['str_time'];
    $sdate=date('h:i a', strtotime($str_time));
    $end_time=$data['end_time'];
    $edate=date('h:i a', strtotime($end_time));

    

    if ($status==1) {
      $live="<a href='../../handler/update_status_handler.php?live=0&&id=$id'><button type='button' class='btn btn-success'>Make Live</button></a>";
    } else {
      $live="<a href='../../handler/update_status_handler.php?live=1&&id=$id'><button type='button' class='btn btn-danger'>Stop</button></a>";
    }
    
    


    echo "

                <tr>
                    <td>$num</td>
                    <td>$name</td>
                    <td>$sessionname</td>
                    <td>$date</td>
                    <td>$sdate</td>
                    <td>$edate</td>
                    <td><a href='add_session.php?id=$id' class='text-dark'>Edit </a>| <a href='../../handler/sess_delete_handler.php?id=$id'><i class='fa fa-trash text-dark' aria-hidden='true'></i></a></td>
                    <td>$live</td>
                    
                    
                    
                  </tr>






    ";

$num++;
}


?>




                  </tbody>
                </table>
                  <div class="col-md-12 mt-2">
                    <ul class="pagination justify-content-end">
   
    <?php 

//     for ($page=1;$page<=$number_of_pages;$page++) {
//     echo "<li class='page-item'><a class='page-link' href='questions_answers.php?page=$page'>$page</a></li>";
// }
    ?>
  </ul>


              
                </div>
                 <?php

 //              if (isset($sess_final2)) {

 //    // Return the number of rows in result set
 //    $rowcount = mysqli_num_rows($sess_final2);
    
 //    // Display result
 //    printf("<br><i>Total Results shows : </i> %d\n", $rowcount);
 // }else {

 //    printf("<br><i>Total Results shows : 0</i>");


 // } 

              ?>
              <!-- /.card-body -->
            </div>


            
            </div>

          
      </section>
        </div>

      
    <!-- /.content -->
  <!-- /.content-wrapper -->
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- CodeMirror -->
<script src="../../plugins/codemirror/codemirror.js"></script>
<script src="../../plugins/codemirror/mode/css/css.js"></script>
<script src="../../plugins/codemirror/mode/xml/xml.js"></script>
<script src="../../plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<!-- AdminLTE for demo purposes -->

<script>
    $('th').click(function(){
    var table = $(this).parents('table').eq(0)
    var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()))
    this.asc = !this.asc
    if (!this.asc){rows = rows.reverse()}
    for (var i = 0; i < rows.length; i++){table.append(rows[i])}
})
function comparer(index) {
    return function(a, b) {
        var valA = getCellValue(a, index), valB = getCellValue(b, index)
        return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.toString().localeCompare(valB)
    }
}
function getCellValue(row, index){ return $(row).children('td').eq(index).text() }
</script>
<!-- Page specific script -->
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
<!-- <script src="js/jquery.js"></script>  -->
    <script src="media/js/jquery.dataTables.min.js"></script> 
      <link href="media/css/jquery.dataTables.min.css" rel="stylesheet">
    <script>
     $(document).ready(function(){
     $("#myTable").dataTable();
   });
</script>
</body>
</html>
