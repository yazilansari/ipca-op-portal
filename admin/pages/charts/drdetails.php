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
            <h1>Question & Answers</h1>
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
              <div class="card-header">
                <h3 class="card-title">Questions</h3>
                  
              </div>
              <!-- /.card-header -->
              <div class="card-body">
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
                    <th>Status</th>
                    <th>Pan File</th>
                    <th>Cheque File</th>
                    <th>Emp Code </th>
                    <th>Name </th>
                    <th>Mobile </th>
                    <th>Email </th>
                    <th>Address </th>
                    <th>Speciality </th>
                    <th>Region </th>
                    <th>First Date </th>
                    <th>Second Date </th>
                    <th>Brands</th>
                    <th>Monthly Support</th>
                    <th>Targetted Brand</th>
                    <th>Head Quarters</th>
                    <th>Payment Mode</th>
                    <th>Created At</th>        
                    <th>Updated At</th>
                  </tr>
                  </thead>
                  <tbody id="myTable">

                  
<?php 



// $results_per_page = 10;
$sess_fetch="SELECT * FROM `dr_details` ORDER BY `id` DESC";
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


    $id = $data['id'];
    $emp_code = $data['emp_code'];
    $name = $data['doc_name'];
    $mobile = $data['doc_mobile'];
    $email = $data['doc_email'];
    $add = $data['doc_add'];
    $speciality = $data['doc_speciality'];
    $region = $data['doc_region'];
    $first_date = $data['first_date'];
    $second_date = $data['second_date'];
    $brands = $data['brand'];
    $monthly_support = $data['monthly_support'];
    $targetted_brand = $data['targetted_brand'];
    $head_quarters = $data['head_quarters'];
    $payment_mode = $data['payment_mode'];
    $pan_file = $data['pan_file'];
    $cheque_file = $data['cheque_file'];
    $status = $data['status'];
    $created_at = $data['created_at'];
    $updated_at = $data['updated_at'];

    echo "
        <tr>
          <td>$num</td>
          <td><a href='../../handler/action.php?id=$id&type=approved'><i class='fa fa-check text-dark' aria-hidden='true'></i> </a>| <a href='../../handler/action.php?id=$id&type=rejected'><i class='fa fa-ban text-dark' aria-hidden='true'></i></a></td>
          <td>$status</td>
          <td><a href='../../../docs/$pan_file' download>$pan_file</a></td>
          <td><a href='../../../docs/$cheque_file' download>$cheque_file</a></td>
          <td>$emp_code</td>
          <td>$name</td>
          <td>$mobile</td>
          <td>$email</td>
          <td>$add</td>
          <td>$speciality</td>
          <td>$region</td>
          <td>".date('d-m-Y', strtotime($first_date))."</td>
          <td>".date('d-m-Y', strtotime($second_date))."</td>
          <td>$brands</td>
          <td>$monthly_support</td>
          <td>$targetted_brand</td>
          <td>$head_quarters</td>
          <td>$payment_mode</td>
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
