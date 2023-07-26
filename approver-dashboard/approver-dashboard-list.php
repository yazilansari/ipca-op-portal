<?php include "../handler/conn.php"; if (!isset($_SESSION['approver_user'])) {
  header('Location: index.php');exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">	
<meta name="viewport" content="width=device-width, initial-scal=1">
<title></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/media.css">
<script src="js/sweetalert.min.js"></script>
<style>
.container { max-width: 1350px;  }
.body1 { background: url(./images/bg-form.jpg) center no-repeat; background-size: 100% 100%; width: 100%; height: auto;
background-attachment: fixed; }		

/*.date { width: 150px; }*/
th, td { text-align: center; }
/*td:last-child { display: flex; padding-top: 22px; text-align: center; justify-content: center; border-left: none; }*/
.table thead th, td { border: 1px solid #8a8f8f; }
.sendemail a { background: #000; color: #fff; width: 70px; padding: 8px 0; }
.sendemail a i { padding-right: 2px; }
@media(max-width: 1279px){
.table-responsive { display: inherit; }
}
/*******************END********************/

/*******************Responsive********************/
@media(max-width: 575.98px){
.container { max-width: 100%; }  
/***************Table****************/
/* Force table to not be like tables anymore */
  table, thead, tbody, th, td, tr { display: block; }
  
  /* Hide table headers (but not display: none;, for accessibility) */
  thead tr { position: absolute; top: -9999px; left: -9999px; }
  
  tr { border: 1px solid #ccc; }
  
  td { 
    /* Behave  like a "row" */
    border: none; border-bottom: 1px solid #eee; position: relative;
    padding-left: 50%; }
  
  td:before { /* Now like a table header */
    position: absolute;
    /* Top/left values mimic padding */
    top: 12px; left: 6px; width: 45%; padding-right: 10px; 
    white-space: nowrap; }
  
  /*
  Label the data
  */
  .table td, .table th { text-align: right; }
  td:nth-of-type(1):before { content: ""; }
  td:nth-of-type(2):before { content: "Request Generated Date"; text-align: left; font-weight: 600; }
  td:nth-of-type(3):before { content: "Survey done date"; text-align: left; font-weight: 600; }
  td:nth-of-type(4):before { content: "PAN CARD / chq updated date"; text-align: left; font-weight: 600; }
  td:nth-of-type(5):before { content: "Payment Processed Date"; text-align: left; font-weight: 600; }
  td:nth-of-type(6):before { content: "Request"; text-align: left; font-weight: 600; }
  td:nth-of-type(7):before { content: ""; text-align: left; font-weight: 600; }
  td:nth-of-type(8):before { content: ""; text-align: left; font-weight: 600; }
  td:nth-of-type(9):before { content: ""; text-align: left; font-weight: 600; }
  td:nth-of-type(10):before { content: ""; text-align: left; font-weight: 600; }
  td:nth-of-type(11):before { content: ""; text-align: left; font-weight: 600; }
  td:nth-of-type(12):before { content: ""; text-align: left; font-weight: 600; }
  td:nth-of-type(13):before { content: ""; text-align: left; font-weight: 600; }
  td:nth-of-type(14):before { content: ""; text-align: left; font-weight: 600; }
  td:nth-of-type(15):before { content: ""; text-align: left; font-weight: 600; }
  td:nth-of-type(16):before { content: ""; text-align: left; font-weight: 600; }
  td:nth-of-type(17):before { content: ""; text-align: left; font-weight: 600; }
  td:nth-of-type(18):before { content: ""; text-align: left; font-weight: 600; }
  .pan_cheque img { margin-top: 30px; }
/****td:nth-of-type(12):before { content: "Coupon Code"; text-align: left; font-weight: 600; }
  td:nth-of-type(13):before { content: "From"; text-align: left; font-weight: 600; }
  td:nth-of-type(14):before { content: "To"; text-align: left; font-weight: 600; }****/

/*td:nth-of-type(13):before { content: "Action"; text-align: left; font-weight: 600; z-index: 1; }*/
/*td:last-child { width: 100%; padding-top: 15px; padding-bottom: 15px; text-align: right; }*/
.first_td { background: #727476; color: #fff; text-align: center!important; font-size: 16px; }
.date { width: 100%; }
.sepratecol { margin-top: 10px; padding-bottom: 15px; }
/*td:nth-last-child(2) { text-align: right; }*/
.sendemail a { margin: auto; margin-right: 0; }
.table-responsive { margin-bottom: 120px; }
.body1 { background-attachment: inherit; }
.aprover { margin-top: 30px; } 
.table { margin-bottom: 58px; }
/***************Table****************/
}
/*******************END********************/
</style>
</head>
<body class="body1">
<header>
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-12">        
        <!------Start------>
        <div class="row">
          <!-- <div class="dashboard1 dashboard2">
            <p><a href="#" data-toggle="modal" data-target="#exampleModal">Rules and Regulations</a></p>
          </div> -->
        </div>
      </div>          
    </div>
  </div>
</header>


<div class="container">
  <div class="row">
    <div class="col-md-12 thanku_out">
      <!----<a href="drdetails.php" style="background: #1c619d;">Add Doctor</a>---->
      <a href="index.php">Logout</a>
    </div>
  </div>

  <!-- <div class="row">
    <div class="col-md-12">
      <div class="editlogout">
        <p>
          <a href="patient_details.php" style="background: #1c619d;">Add Patient</a>
          <span></span>
          <a href="index.php">Logout</a>
        </p>
      </div>
    </div>
  </div> --><!-----Patientlist-ENd---->

  <div class="row"> 
    <div class="col-md-12 col-sm-12">
        <div class="drstatus mb-4">
            <h4>Approver Dashboard<hr></h4>
        </div>  
    </div>
  </div>


  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <thead>
          <tr class="table-secondary">
            <th>Sr No.</th>        
            <th>Action</th>
            <th>Approval Status</th>
            <th>Request Generated Date</th>                    
            <th>Survey Done Date</th>
            <th>PAN Card / Chq Updated Date</th>
			      <th>Payment Processed Date</th>
            <!-- <th>Payment Status</th> -->
            <!-- <th>Survey Forms</th>   -->
            <th>Exisitng Supported Brands</th>
            <!-- <th>Pan Card</th> -->
            <!-- <th>Cancelled Cheque</th> -->
            <!-- <th>Reciept</th> -->
            <th>Division</th>
            <th>Emp Code</th>
            <th>Doctor Name</th>        
            <th>Doctor Mobile</th>        
            <th>Doctor Email Id</th>        
            <!-- <th>Address</th>  -->
            <th>City</th>
            <th>State</th>
            <th>ZBM Zone</th>
            <th>RBM Region</th>
            <th>Territory</th>
            <th>Speciality</th>
            <th>SBU Code</th>        
            <!-- <th>Request Date</th>     -->
            <!-- <th>Visiting Second Date</th> -->
            <th>Monthly Support Value</th> 
            <th>Targetted Brand</th>
            <th>Head Quarters</th>
            <!-- <th>Payment Mode</th>               -->
          </tr>
        </thead>
        <tbody>
                <!-- <tr>
                  <td class="first_td">1</td>
        				  <td class="font-weight-bold"> 					
          					<p class="aprover">
          					 <button type="button" class="btn btn-success" ><i class="far fa-edit"></i> Approve </button>
          					 <button type="button" class="btn btn-danger"><i class="far fa-edit"></i> Reject </button>
          					 <button type="button" class="btn btn-info"><i class="far fa-edit"></i> Pending </button>
          					</p>	
        				  </td>                  
                  <td class="font-weight-bold">1-1-2023</td>					
                  <td class="font-weight-bold">1-1-2023</td>					
                  <td class="font-weight-bold">1-1-2023</td>					
				          <td class="font-weight-bold">1-1-2023</td>					
                </tr>	-->
          <?php $sess_fetch="SELECT *, `dr_details`.`id` as `id`, `quarter_details`.`territory` FROM `dr_details` LEFT JOIN `employees_ipca` ON `employees_ipca`.`emp_no` = `dr_details`.`emp_code` LEFT JOIN `quarter_details` ON `quarter_details`.`id` = `dr_details`.`quarter_detail_id` WHERE `dr_details`.`division` = '$division' ORDER BY `dr_details`.`id` DESC";

$num=1;

// if (!isset($_GET['page'])) {
//   $page = 1;
// } else {
//   $page = $_GET['page'];
// }
// $this_page_first_result = ($page-1)*$results_per_page;

// $sql="SELECT * FROM iccc2021_questions LIMIT "   . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($conn, $sess_fetch);
while ($data=mysqli_fetch_array($result)) { ?>
  <div class="modal fade" id="approve<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalupload2" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header couponphead" style="background: #007bff;">
          <h5 class="modal-title" id="exampleModalupload2">Approve</h5>
          <button type="button" class="close close02" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h6>Are You Sure Want to Approve?</h6><br>
          <!-- <form method="POST" action="handler/patient_delete.php"> -->
            <!-- <input type="hidden" name="id" value="<?php //echo $row['id']; ?>"> -->
             <div class="uploadmssg sendmail">
                <a href="#" title="No" style="background: #1c619d; border-radius: 5px; width: 115px !important; font-size: 12px !important; padding: 10px; color: #fff;" data-dismiss="modal"><i class="fa fa-times"></i> No</a>
                <a href="../../handler/action.php?id=<?php echo $data['id']; ?>&type=approved" style="cursor: pointer; background: green; border-radius: 5px; width: 115px !important; font-size: 12px !important; padding: 10px; color: #fff;"><i class="fa fa-check"></i> Yes</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="reject<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalupload2" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header couponphead" style="background: #dc3545;">
          <h5 class="modal-title" id="exampleModalupload2">Reject</h5>
          <button type="button" class="close close02" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h6>Are You Sure Want to Reject?</h6><br>
          <!-- <form method="POST" action="handler/patient_delete.php"> -->
            <!-- <input type="hidden" name="id" value="<?php //echo $row['id']; ?>"> -->
             <div class="uploadmssg sendmail">
                <a href="#" title="No" style="background: #1c619d; border-radius: 5px; width: 115px !important; font-size: 12px !important; padding: 10px; color: #fff;" data-dismiss="modal"><i class="fa fa-times"></i> No</a>
                <a href="../../handler/action.php?id=<?php echo $data['id']; ?>&type=rejected" style="cursor: pointer; background: green; border-radius: 5px; width: 115px !important; font-size: 12px !important; padding: 10px; color: #fff;"><i class="fa fa-check"></i> Yes</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php 
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
        $html .='<button type="button" class="btn btn-primary view viewbripca" id="'.$data['id'].'" data-activity="BRIPCA"> View BRIPCA Form</button><br><br>';
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
        $html .='<button type="button" class="btn btn-primary view" id="'.$data['id'].'" data-activity="PEG NT"> View PEG NT Form</button><br><br>';
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
        $html .='<button type="button" class="btn btn-primary view" id="'.$data['id'].'" data-activity="RECITA"> View RECITA Form</button><br><br>';
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
          $html .='<button type="button" class="btn btn-primary view" id="'.$data['id'].'" data-activity="VIPCA"> View VIPCA Form</button><br><br>';
        }
      }
      if ($value == 'PARI COMBO') {
        $q6 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$data['id']." AND `brand` = 'PARI COMBO'";
        $res6 = mysqli_query($conn, $q6);
        $count5 = mysqli_num_rows($res6); 
        if($count5 <= 0) { 
          $html .='<h6 style="color: red;">Not Submitted PARI COMBO Form</h6><br>';
        } else {
          $html .='<button type="button" class="btn btn-primary view" id="'.$data['id'].'" data-activity="PARI COMBO"> View PARI COMBO Form</button><br><br>';
        }
      }
      if ($value == 'PARI CR PLUS') {
        $q7 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$data['id']." AND `brand` = 'PARI CR PLUS'";
        $res7 = mysqli_query($conn, $q7);
        $count6 = mysqli_num_rows($res7); 
        if($count6 <= 0) {
          $html .='<h6 style="color: red;">Not Submitted PARI CR PLUS Form</h6><br>';
        } else {
          $html .='<button type="button" class="btn btn-primary view" id="'.$data['id'].'" data-activity="PARI CR PLUS"> View PARI CR PLUS Form</button><br><br>';
        }
      }
      if ($value == 'SOVE') {
        $q8 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$data['id']." AND `brand` = 'SOVE'";
        $res8 = mysqli_query($conn, $q8);
        $count7 = mysqli_num_rows($res8); 
        if($count7 <= 0) {
          $html .='<h6 style="color: red;">Not Submitted SOVE Form</h6><br>';
        } else {
          $html .='<button type="button" class="btn btn-primary view" id="'.$data['id'].'" data-activity="SOVE"> View SOVE Form</button><br><br>';
        }
      }
      if ($value == 'EPICTAL') {
        $q9 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$data['id']." AND `brand` = 'EPICTAL'";
        $res9 = mysqli_query($conn, $q9);
        $count8 = mysqli_num_rows($res9); 
        if($count8 <= 0) {
            $html .='<h6 style="color: red;">Not Submitted EPICTAL Form</h6><br>';
        } else {
            $html .='<button type="button" class="btn btn-primary view" id="'.$data['id'].'" data-activity="EPICTAL"> View EPICTAL Form</button><br><br>';
        }
      }
      if ($value == 'PEG SR') {
        $q10 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$data['id']." AND `brand` = 'PEG SR'";
        $res10 = mysqli_query($conn, $q10);
        $count9 = mysqli_num_rows($res10); 
        if($count9 <= 0) {
          $html .='<h6 style="color: red;">Not Submitted PEG SR Form</h6><br>';
      } else {
          $html .='<button type="button" class="btn btn-primary view" id="'.$data['id'].'" data-activity="PEG SR"> View PEG SR Form</button><br><br>';
        }
      }
      if ($value == 'QUEL') {
        $q11 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$data['id']." AND `brand` = 'QUEL'";
        $res11 = mysqli_query($conn, $q11);
        $count10 = mysqli_num_rows($res11); 
        if($count10 <= 0) { 
            $html .='<h6 style="color: red;">Not Submitted QUEL Form</h6><br>';
        } else {
            $html .='<button type="button" class="btn btn-primary view" id="'.$data['id'].'" data-activity="QUEL"> View QUEL Form</button><br><br>';
        }
      }
      if ($value == 'PEG D') {
        $q12 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$data['id']." AND `brand` = 'PEG D'";
        $res12 = mysqli_query($conn, $q12);
        $count11 = mysqli_num_rows($res12); 
        if($count11 <= 0) { 
            $html .='<h6 style="color: red;">Not Submitted PEG D Form</h6><br>';
        } else {
            $html .='<button type="button" class="btn btn-primary view" id="'.$data['id'].'" data-activity="PEG D"> View PEG D Form</button><br><br>';
        }
      }
      if ($value == 'CITINOVA') {
        $q13 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$data['id']." AND `brand` = 'CITINOVA'";
        $res13 = mysqli_query($conn, $q13);
        $count12 = mysqli_num_rows($res13); 
        if($count12 <= 0) { 
          $html .='<h6 style="color: red;">Not Submitted CITINOVA Form</h6><br>';
      } else {
          $html .='<button type="button" class="btn btn-primary view" id="'.$data['id'].'" data-activity="CITINOVA"> View CITINOVA Form</button>';
       }
     }
   }

    $id = $data['id'];
    $zone = $data['zone'];
    $region = $data['rbm_region'];
    $territory = $data['territory'];
    $amt = $data['monthly_support'];
    $qty = 1;
    $emp_code = $data['emp_code'];
    $name = $data['doc_name'];
    $mobile = $data['doc_mobile'];
    $email = $data['doc_email'];
    // $add = $data['doc_add'];
    $speciality = $data['doc_speciality'];
    $sbu_code = $data['doc_region'];
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

    $approve_reject = '';
    // $reject = '';
    $submit_details = '';
    if($user == 'admin') {
      $submit_details = "<a title='Submit Details' href='edit.php?id=$id'><button class='btn btn-info action1'><i class='fa fa-save' aria-hidden='true'></i> Submit Details</button></a>";
    } else if($user == 'ipca') {
      $approve_reject = "<a title='Approve' href='#' data-toggle='modal' data-target='#approve".$data['id']."'><button class='btn btn-primary action1'><i class='fa fa-check' aria-hidden='true'></i> Approve</button></a><a title='Reject' href='#' data-toggle='modal' data-target='#reject".$data['id']."'><button class='btn btn-danger action1'><i class='fa fa-ban' aria-hidden='true'></i> Reject</button></a>";
    }

    // <td>".date('d-m-Y', strtotime($second_date))."</td>
    // <td>$add</td>
    // <td>$targetted_brand</td>
    // <td>$monthly_support</td>
    echo "
        <tr>
          <td>$num</td>
          <td>$approve_reject".''."$submit_details</td>
          <td>$zone</td>
          <td>$region</td>
          <td>$territory</td>
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
    </div>
  </div>
</div><!-----Table-End!------->	

<!---------------Edit---------------> 
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="doctorlist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title listofdr" id="exampleModalLabel">Doctor List</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-------------End-Edit---------------> 

<!-- <div class="footer2"><img src="images/footer.jpg"></div> -->
</body>
<script src="js/jquery-3.6.4.min.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script>
var inputs = document.querySelectorAll('.file-input')

for (var i = 0, len = inputs.length; i < len; i++) {
  customInput(inputs[i])
}

function customInput (el) {
  const fileInput = el.querySelector('[type="file"]')
  const label = el.querySelector('[data-js-label]')
  
  fileInput.onchange =
  fileInput.onmouseout = function () {
    if (!fileInput.value) return
    
    var value = fileInput.value.replace(/^.*[\\\/]/, '')
    el.className += ' -chosen'
    label.innerText = value
  }
}
</script>
</html>