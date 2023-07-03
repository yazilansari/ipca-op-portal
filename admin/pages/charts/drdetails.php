<?php 
include 'conn.php';
if (!isset($_SESSION['user'])) {
  header('Location: ../../index.php');exit();
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
    <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <script src="js/jquery.js"></script>  -->
    <script src="media/js/jquery.dataTables.min.js"></script> 
      <link href="media/css/jquery.dataTables.min.css" rel="stylesheet">
    <script>
     $(document).ready(function(){
     $("#myTable").dataTable();
   });
</script>
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

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Doctor List</h1>
          </div>
          <div class="col-sm-6">
          
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">


  <!-- Content Wrapper. Contains page content -->
                  <div class="card">
              <!-- <div class="card-header">
                <h3 class="card-title">Questions</h3>
                  
              </div> -->
              <!-- /.card-header -->
              <div class="card-body table-responsive">
                <table id="myTable" class="table table-bordered table-striped">
                  <!-- <input type="text" name="search" id="myInput" class="form-control w-25 m-2 float-right " placeholder="Search Contain"> -->
                             <?php 
                if (isset($_SESSION['msg'])) {
                  echo "<br><p class='text-success'><b>".$_SESSION['msg']."</b></p>";
                }

                unset($_SESSION['msg']);

                ?>
                  <thead>
                  <tr>
                    <th>Sr.</th>
                    <th>Action </th>
                    <th>Zone </th>
                    <th>Region </th>
                    <th>HQ </th>
                    <th>Activity Name</th>
                    <th>View Activity</th>
                    <th>Amt</th>
                    <th>Qty</th>
                    <th>Emp Code </th>
                    <th>Dr Name </th>
                    <th>SBU Code </th>
                    <th>Speciality </th>
                    <th>Email </th>
                    <th>Mobile </th>
                    <th>Approval Status</th>
                    <th>Payment Status</th>
                    <th>Pan File</th>
                    <th>Cheque File</th>
                    <th>Division</th>
                    <!-- <th>Address </th> -->
                    <th>Request Date </th>
                    <!-- <th>Second Date </th> -->
                    <!-- <th>Monthly Support</th> -->
                    <!-- <th>Targetted Brand</th> -->
                    <th>Head Quarters</th>
                    <th>Payment Mode</th>
                    <th>Remark</th>
                    <th>Created At</th>        
                    <th>Updated At</th>
                  </tr>
                  </thead>
                  <tbody id="myTable">

                  
<?php 


$division = $_SESSION['division'];
// $results_per_page = 10;
$sess_fetch="SELECT *, `dr_details`.`id` as id FROM `dr_details` LEFT JOIN `employees_ipca` ON `employees_ipca`.`emp_no` = `dr_details`.`emp_code` WHERE `division` = '$division' ORDER BY `dr_details`.`id` DESC";
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

// $sql="SELECT * FROM iccc2021_questions LIMIT "   . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($conn, $sess_fetch);
while ($data=mysqli_fetch_array($result)) {
  $html = '';
  $expl_brands = explode('|', $data['brand']);
  // echo "<pre>";print_r($survey_forms);
  // echo count($survey_forms);
  // $expl_brands = explode('|', $row['brand']);
  // echo count($expl_brands);
  foreach ($expl_brands as $key => $value) {
    if($value == 'BRIPCA') {
      // echo "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$row['id']." AND `brand` = 'BRIPCA'";
      $q2 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$data['id']." AND `brand` = 'BRIPCA'";
      $res2 = mysqli_query($conn, $q2);
      $count = mysqli_num_rows($res2); 
      if($count <= 0) { 
        $html .='<h6 style="color: red;">Not Submitted BRIPCA Form</h6><br>';
      } else { 
        $html .='<a href="#"><button type="button" class="btn btn-primary"> View BRIPCA Form</button></a><br><br>';
      }
    }
    if ($value == 'PEG NT') {
      // echo "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$row['id']." AND `brand` = 'PEG NT'";
      $q3 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$data['id']." AND `brand` = 'PEG NT'";
      $res3 = mysqli_query($conn, $q3);
      $count2 = mysqli_num_rows($res3); 
      if($count2 <= 0) {
        $html .='<h6 style="color: red;">Not Submitted PEG NT Form</h6><br>';
      } else {
        $html .='<a href=""><button type="button" class="btn btn-primary"> View PEG NT Form</button></a><br><br>';
      }
    }
    if ($value == 'RECITA') {
      // echo "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$row['id']." AND `brand` = 'RECITA'";
      $q4 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$data['id']." AND `brand` = 'RECITA'";
      $res4 = mysqli_query($conn, $q4);
      $count3 = mysqli_num_rows($res4); 
      if($count3 <= 0) { 
        $html .='<h6 style="color: red;">Not Submitted RECITA Form</h6><br>';
      } else {
        $html .='<a href=""><button type="button" class="btn btn-primary"> View RECITA Form</button></a><br><br>';
      }
      }
      if ($value == 'VIPCA') {
        // echo "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$row['id']." AND `brand` = 'VIPCA'";
        $q5 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$data['id']." AND `brand` = 'VIPCA'";
        $res5 = mysqli_query($conn, $q5);
        $count4 = mysqli_num_rows($res5); 
        if($count4 <= 0) { 
          $html .='<h6 style="color: red;">Not Submitted VIPCA Form</h6><br>';
      } else {
          $html .='<a href=""><button type="button" class="btn btn-primary"> View VIPCA Form</button></a><br><br>';
        }
      }
      if ($value == 'PARI COMBO') {
        $q6 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$data['id']." AND `brand` = 'PARI COMBO'";
        $res6 = mysqli_query($conn, $q6);
        $count5 = mysqli_num_rows($res6); 
        if($count5 <= 0) { 
          $html .='<h6 style="color: red;">Not Submitted PARI COMBO Form</h6><br>';
        } else {
          $html .='<a href=""><button type="button" class="btn btn-primary"> View PARI COMBO Form</button></a><br><br>';
        }
      }
      if ($value == 'PARI CR PLUS') {
        $q7 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$data['id']." AND `brand` = 'PARI CR PLUS'";
        $res7 = mysqli_query($conn, $q7);
        $count6 = mysqli_num_rows($res7); 
        if($count6 <= 0) {
          $html .='<h6 style="color: red;">Not Submitted PARI CR PLUS Form</h6><br>';
        } else {
          $html .='<a href=""><button type="button" class="btn btn-primary"> View PARI CR PLUS Form</button></a><br><br>';
        }
      }
      if ($value == 'SOVE') {
        $q8 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$data['id']." AND `brand` = 'SOVE'";
        $res8 = mysqli_query($conn, $q8);
        $count7 = mysqli_num_rows($res8); 
        if($count7 <= 0) {
          $html .='<h6 style="color: red;">Not Submitted SOVE Form</h6><br>';
        } else {
          $html .='<a href=""><button type="button" class="btn btn-primary"> View SOVE Form</button></a><br><br>';
        }
      }
      if ($value == 'EPICTAL') {
        $q9 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$data['id']." AND `brand` = 'EPICTAL'";
        $res9 = mysqli_query($conn, $q9);
        $count8 = mysqli_num_rows($res9); 
        if($count8 <= 0) {
            $html .='<h6 style="color: red;">Not Submitted EPICTAL Form</h6><br>';
        } else {
            $html .='<a href=""><button type="button" class="btn btn-primary"> View EPICTAL Form</button></a><br><br>';
        }
      }
      if ($value == 'PEG SR') {
        $q10 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$data['id']." AND `brand` = 'PEG SR'";
        $res10 = mysqli_query($conn, $q10);
        $count9 = mysqli_num_rows($res10); 
        if($count9 <= 0) {
          $html .='<h6 style="color: red;">Not Submitted PEG SR Form</h6><br>';
      } else {
          $html .='<a href=""><button type="button" class="btn btn-primary"> View PEG SR Form</button></a><br><br>';
        }
      }
      if ($value == 'QUEL') {
        $q11 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$data['id']." AND `brand` = 'QUEL'";
        $res11 = mysqli_query($conn, $q11);
        $count10 = mysqli_num_rows($res11); 
        if($count10 <= 0) { 
            $html .='<h6 style="color: red;">Not Submitted QUEL Form</h6><br>';
        } else {
            $html .='<a href=""><button type="button" class="btn btn-primary"> View QUEL Form</button></a><br><br>';
        }
      }
      if ($value == 'PEG D') {
        $q12 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$data['id']." AND `brand` = 'PEG D'";
        $res12 = mysqli_query($conn, $q12);
        $count11 = mysqli_num_rows($res12); 
        if($count11 <= 0) { 
            $html .='<h6 style="color: red;">Not Submitted PEG D Form</h6><br>';
        } else {
            $html .='<a href=""><button type="button" class="btn btn-primary"> View PEG D Form</button></a><br><br>';
        }
      }
      if ($value == 'CITINOVA') {
        $q13 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$data['id']." AND `brand` = 'CITINOVA'";
        $res13 = mysqli_query($conn, $q13);
        $count12 = mysqli_num_rows($res13); 
        if($count12 <= 0) { 
          $html .='<h6 style="color: red;">Not Submitted CITINOVA Form</h6><br>';
      } else {
          $html .='<a href=""><button type="button" class="btn btn-primary"> View CITINOVA Form</button></a>';
       }
     }
   }

    $id = $data['id'];
    $zone = $data['zone'];
    $region = $data['region'];
    $hq = $data['hq'];
    $amt = $data['monthly_support'];
    $qty = 1;
    $emp_code = $data['emp_code'];
    $name = $data['doc_name'];
    $mobile = $data['doc_mobile'];
    $email = $data['doc_email'];
    // $add = $data['doc_add'];
    $speciality = $data['doc_speciality'];
    $sbu_code = $data['doc_sbu_code'];
    $request_date = $data['request_date'];
    // $second_date = $data['second_date'];
    $brands = implode(', ', explode('|', $data['brand']));
    // $monthly_support = $data['monthly_support'];
    // $targetted_brand = $data['targetted_brand'];
    $head_quarters = $data['head_quarters'];
    $payment_mode = $data['payment_mode'];
    $pan_file = $data['pan_file'];
    $cheque_file = $data['cheque_file'];
    $division = $data['division'];
    $status = ucfirst($data['status']);
    $payment_status = ucfirst($data['payment_status']);
    $remark = $data['remark'];
    $created_at = $data['created_at'];
    $updated_at = $data['updated_at'];

    // <td>".date('d-m-Y', strtotime($second_date))."</td>
    // <td>$add</td>
    // <td>$targetted_brand</td>
    // <td>$monthly_support</td>
    echo "
        <tr>
          <td>$num</td>
          <td><a title='Approve' href='../../handler/action.php?id=$id&type=approved'><i class='fa fa-check text-dark' aria-hidden='true'></i> </a>| <a title='Reject' href='../../handler/action.php?id=$id&type=rejected'><i class='fa fa-ban text-dark' aria-hidden='true'></i></a><br><a title='Edit' href='edit.php?id=$id'><i class='fa fa-edit text-dark' aria-hidden='true'></i></a></td>
          <td>$zone</td>
          <td>$region</td>
          <td>$hq</td>
          <td>$brands</td>
          <td>$html</td>
          <td>$amt</td>
          <td>$qty</td>
          <td>$emp_code</td>
          <td>$name</td>
          <td>$sbu_code</td>
          <td>$speciality</td>
          <td>$email</td>
          <td>$mobile</td>
          <td>$status</td>
          <td>$payment_status</td>
          <td><a href='../../../docs/$pan_file' download>$pan_file</a></td>
          <td><a href='../../../docs/$cheque_file' download>$cheque_file</a></td>
          <td>$division</td>
          <td>".date('d-m-Y', strtotime($request_date))."</td>
          <td>$head_quarters</td>
          <td>$payment_mode</td>
          <td>$remark</td>
          <td>$created_at</td>
          <td>$updated_at</td>
        </tr>";

    $num++;
}

                   // <form method='POST' action='../../handler/mail3.php'>
                    //<textarea class='form-control' name='msg'></textarea>
                    //<input type='text' value='$email' name='rplmail' hidden>
                     //<button type='submit' name='submit' class='btn btn-primary float-right mt-1'>Reply</button>
                    //</form>
?>




                  </tbody>
                </table>

                <div class="col-md-12 mt-2">
                    <ul class="pagination justify-content-end">
   
    <?php 

    // for ($page=1;$page<=$number_of_pages;$page++) {
    // echo "<li class='page-item'><a class='page-link' href='questions_answers.php?page=$page'>$page</a></li>";
//}
    ?>
  </ul>


              
                </div>
                
              </div>
              <!-- /.card-body -->
            </div>






  
 </div>

          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Add Content Here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<!-- <script src="../../plugins/jquery/jquery.min.js"></script> -->
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- Page specific script -->

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
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Digital Goods',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : 'Electronics',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    new Chart(areaChartCanvas, {
      type: 'line',
      data: areaChartData,
      options: areaChartOptions
    })

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions
    })

    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Chrome',
          'IE',
          'FireFox',
          'Safari',
          'Opera',
          'Navigator',
      ],
      datasets: [
        {
          data: [700,500,400,600,300,100],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

    //---------------------
    //- STACKED BAR CHART -
    //---------------------
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = $.extend(true, {}, barChartData)

    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  })
</script>
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
</body>
</html>
