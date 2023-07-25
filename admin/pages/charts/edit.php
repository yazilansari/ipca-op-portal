<?php 

include 'conn.php';

if (!isset($_SESSION['user'])) {
  header('Location: ../../index.php?Something Went Wrong');
}
$id = $_GET['id'];
$q = "SELECT `pan_card_received`, `cancelled_cheque_received`, `pan_card`, `bank_name`, `account_no`, `ifsc_code`, `payment_done_date`, `gross`, `tds`, `net_paid`, `payment_reference_no`, `survey_completion_date`, `survey_completion_status`, `payment_type`, `remark`, `payment_status`, `reciept` FROM `dr_details` WHERE `id`='$id'";
$result = mysqli_query($conn, $q);
$row = mysqli_fetch_assoc($result);
// print_r($row);
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
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
<script src="js/jquery.js"></script> 
    <script src="media/js/jquery.dataTables.min.js"></script> 
      <link href="media/css/jquery.dataTables.min.css" rel="stylesheet">
    <script>
     $(document).ready(function(){
     $("#myTable").dataTable();
   });
</script>
<style>
body { font-size: 14px; color: #000; font-family: 'Roboto', sans-serif; }  
.eastzone p { width: 170px; }
.table form input[type="submit"] {
    background: #0082df; color: #fff; font-size: 16px; border: none;
    border-radius: 5px; /* padding: 8px 10px; */ width: 85px; height: 38px; padding: 0px; }
.table td input { width: 200px; height: 35px; color: #000; outline: none; padding-left: 15px; 
  font-size: 14px; font-weight: 500; border-radius: 3px; font-family: 'Roboto', sans-serif; 
  border: 1px solid rgb(0, 0, 0) }
.table td select { width: 90px; height: 35px; color: #000; outline: none; /* border: 1px solid #999999; */
    padding-left: 15px; font-size: 16px; font-weight: 500; border-radius: 3px; font-family: 'Roboto', sans-serif;
    border: none; }  
.table thead th { color: #711616; font-size: 16px; border: 1px solid #dee2e6; } 
.table-bordered td, .table-bordered th { border: 1px solid #dee2e6; }
.table td:nth-child(5) p { width: 180px; }
/***********/
.form-flex{
  display: flex;
    flex-direction: row;
    justify-content: flex-start;
    flex-wrap: nowrap;
}
.eastzone { font-weight: normal; font-family: 'Roboto', sans-serif; }
</style>
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
</head>
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
            <!-- <h1>Search Registered User</h1> -->
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
                <h3>Submit Form</h3>
                <!-- <a href="ecosprin_gold_export.php?submit=submit&flag=BE2"><button type="button" name="submit" class="btn btn-dark float-right">Export to Excel </button></a> -->
                </div>
                <div class="card-header">
                  <form action="../../handler/submit_action.php" method="post" class="ws-validate" enctype="multipart/form-data">
                    <!-- <div class="form-row form-flex"> -->
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Pan Card Received <span style="color: red;">*</span></label>
                            <select class="form-control" name="pan_card_received" required>
                              <option value="">Select Pan Card Received</option>
                              <option <?php echo ($row['pan_card_received'] == 'Yes') ? 'selected' : '' ?>>Yes</option>
                              <option <?php echo ($row['pan_card_received'] == 'No') ? 'selected' : '' ?>>No</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Cancelled Cheque Received <span style="color: red;">*</span></label>
                            <select class="form-control" name="cancelled_cheque_received" required>
                              <option value="">Select Cancelled Cheque Received</option>
                              <option <?php echo ($row['cancelled_cheque_received'] == 'Yes') ? 'selected' : '' ?>>Yes</option>
                              <option <?php echo ($row['cancelled_cheque_received'] == 'No') ? 'selected' : '' ?>>No</option>
                            </select>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Pan Card <span style="color: red;">*</span></label>
                          <input type="text" class="form-control" placeholder="Pan Card" name="pan_card" value="<?php echo $row['pan_card']; ?>" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Bank Name <span style="color: red;">*</span></label>
                          <input type="text" class="form-control" placeholder="Bank Name" name="bank_name" value="<?php echo $row['bank_name']; ?>" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Account No. <span style="color: red;">*</span></label>
                          <input type="text" class="form-control" placeholder="Account No." name="account_no" value="<?php echo $row['account_no']; ?>" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">IFSC Code <span style="color: red;">*</span></label>
                          <input type="text" class="form-control" placeholder="IFSC Code" name="ifsc_code" value="<?php echo $row['ifsc_code']; ?>" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Payment Done Date <span style="color: red;">*</span></label>
                          <input type="date" class="form-control" placeholder="Payment Done Date" name="payment_done_date" value="<?php echo $row['payment_done_date']; ?>" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Gross <span style="color: red;">*</span></label>
                          <input type="text" class="form-control" placeholder="Gross" name="gross" value="<?php echo $row['gross']; ?>" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">TDS <span style="color: red;">*</span></label>
                          <input type="text" class="form-control" placeholder="TDS" name="tds" value="<?php echo $row['tds']; ?>" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Net Paid <span style="color: red;">*</span></label>
                          <input type="text" class="form-control" placeholder="Net Paid" name="net_paid" value="<?php echo $row['net_paid']; ?>" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Payment Reference No. <span style="color: red;">*</span></label>
                          <input type="text" class="form-control" placeholder="Payment Reference No." name="payment_reference_no" value="<?php echo $row['payment_reference_no']; ?>" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Survey Completion Date <span style="color: red;">*</span></label>
                          <input type="date" class="form-control" placeholder="Survey Completion Date" name="survey_completion_date" value="<?php echo $row['survey_completion_date']; ?>" required>
                        </div>
                      </div>
                    </div>
                     <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Survey Completion Status <span style="color: red;">*</span></label>
                            <select class="form-control" name="survey_completion_status" required>
                              <option value="">Select Survey Completion Status</option>
                              <option <?php echo ($row['survey_completion_status'] == 'Yes') ? 'selected' : '' ?>>Yes</option>
                              <option <?php echo ($row['survey_completion_status'] == 'No') ? 'selected' : '' ?>>No</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Type of Payment <span style="color: red;">*</span></label>
                            <select class="form-control" name="payment_type" required>
                              <option value="">Select Type of Payment</option>
                              <option <?php echo ($row['payment_type'] == 'NEFT') ? 'selected' : '' ?>>NEFT</option>
                              <option <?php echo ($row['payment_type'] == 'Cheque') ? 'selected' : '' ?>>Cheque</option>
                            </select>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Remark <span style="color: red;">*</span></label>
                            <textarea class="form-control" name="remark" placeholder="Remark" required><?php echo $row['remark']; ?></textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Payment Status <span style="color: red;">*</span></label>
                          <select class="form-control" name="payment_status" required>
                            <option value="">Select Payment Status</option>
                            <option <?php echo ($row['payment_status'] == 'Yes') ? 'selected' : '' ?>>Yes</option>
                            <option <?php echo ($row['payment_status'] == 'No') ? 'selected' : '' ?>>No</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Upload Reciept</label>
                            <input type="file" name="reciept">
                        </div>
                      </div>
                      <?php if(!empty($row['reciept'])) { ?>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Upoladed Reciept</label>
                            <a download href="../../../reciept_uploads/<?php echo $row['reciept']; ?>"><?php echo $row['reciept']; ?></a>
                        </div>
                      </div>
                      <?php } ?>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="" style="visibility: hidden;">Type of Payment <span style="color: red;">*</span></label>
                          <input type="submit" name="submit" class="form-control btn btn-primary"/>
                        </div>
                      </div>
                    </div>
                  </form> 
                </div>
              <!-- /.card-header -->
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

<!-- <script>
$(document).ready(function() {
    $('#myTable').DataTable();
} );


</script> -->














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
$(function() {
  $('input[name="datetimes"]').daterangepicker({
    timePicker: true,
    startDate: moment().startOf('hour'),
    endDate: moment().startOf('hour').add(32, 'hour'),
    locale: {
      format: 'M/DD hh:mm A'
    }
  });
});
</script>



</body>
</html>
