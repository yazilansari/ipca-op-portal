<?php 
  include 'handler/conn.php';
  if(!isset($_SESSION['emp_code']) || empty($_SESSION['emp_code'])) {
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
  td:nth-of-type(2):before { content: "Doctor Name"; text-align: left; font-weight: 600; }
  td:nth-of-type(3):before { content: "Doctor Mobile"; text-align: left; font-weight: 600; }
  td:nth-of-type(4):before { content: "Doctor Email Id"; text-align: left; font-weight: 600; }
  td:nth-of-type(5):before { content: "Address"; text-align: left; font-weight: 600; }
  td:nth-of-type(6):before { content: "Speciality"; text-align: left; font-weight: 600; }
  td:nth-of-type(7):before { content: "SBU Code"; text-align: left; font-weight: 600; }
  td:nth-of-type(8):before { content: "Visiting First Date"; text-align: left; font-weight: 600; }
  td:nth-of-type(9):before { content: "Visiting Second Date"; text-align: left; font-weight: 600; }
  td:nth-of-type(10):before { content: "Exisitng Supported Brands"; text-align: left; font-weight: 600; }
  td:nth-of-type(11):before { content: "Monthly Support Value"; text-align: left; font-weight: 600; }
  td:nth-of-type(12):before { content: "Targetted Brand"; text-align: left; font-weight: 600; }
  td:nth-of-type(13):before { content: "Head Quarters"; text-align: left; font-weight: 600; }
  td:nth-of-type(14):before { content: "Payment Mode"; text-align: left; font-weight: 600; }
  td:nth-of-type(15):before { content: "Upload Pancard Card"; text-align: left; font-weight: 600; }
  td:nth-of-type(16):before { content: "Upload Cancelled Cheque"; text-align: left; font-weight: 600; }
  td:nth-of-type(17):before { content: "Action"; text-align: left; font-weight: 600; }
  td:nth-of-type(18):before { content: "Status"; text-align: left; font-weight: 600; }
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
      <a href="drdetails.php" style="background: #1c619d;">Add Doctor</a>
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
            <h4>Doctor List<hr></h4>
        </div>  
    </div>
  </div>


  <div class="row">
    <div class="col-md-12">
      <table class="table table-responsive">
        <thead>
          <tr class="table-secondary">
            <th>Sr No.</th>        
            <th>Action</th>                    
            <th>Approval Status</th>
            <th>Payment Status</th>
            <th>Survey Forms</th>  
            <th>Exisitng Supported Brands</th>
            <th>Pan Card</th>
            <th>Cancelled Cheque</th>
            <th>Division</th>
            <th>Emp Code</th>
            <th>Doctor Name</th>        
            <th>Doctor Mobile</th>        
            <th>Doctor Email Id</th>        
            <th>Address</th>        
            <th>Speciality</th>        
            <th>SBU Code</th>        
            <th>Visiting First Date</th>        
            <th>Visiting Second Date</th>                      
            <th>Monthly Support Value</th> 
            <th>Targetted Brand</th>
            <th>Head Quarters</th>
            <th>Payment Mode</th>          
            <th>Created At</th>        
            <th>Updated At</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $q = "SELECT * FROM dr_details WHERE emp_code='".$_SESSION['emp_code']."' ORDER BY `id` DESC";
            $res = mysqli_query($conn, $q);
            $count = 1;
            if(mysqli_num_rows($res) > 0) {
              while ($row = mysqli_fetch_assoc($res)) { ?>
                <tr>
                  <td class="first_td"><?php echo $count; ?></td>
                  <td class="">            
                  <a href="edit-field.php?id=<?php echo base64_encode($row['id']); ?>"><button type="button" class="btn btn-primary"><i class="far fa-edit"></i> Edit</button></a><br><br>
                  <a href="#"><button type="button" class="btn btn-secondary"><i class="far fa-envelope"></i> Send Email</button></a> 
                  </td>                               
                  <td class="font-weight-bold"><?php echo ucfirst($row['status']); ?></td>
                  <td class="font-weight-bold"></td>
                  <td class="">
                    <?php
                      $expl_brands = explode('|', $row['brand']);
                      foreach ($expl_brands as $key => $value) {
                        if($value == 'BRIPCA') { 
                          // echo "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$row['id']." AND `brand` = 'BRIPCA'";
                          $q2 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$row['id']." AND `brand` = 'BRIPCA'";
                          $res2 = mysqli_query($conn, $q2);
                          $count = mysqli_num_rows($res2); 
                          if($count <= 0) { ?>
                            <a href="survey-form/bripca.php?id=<?php echo base64_encode($row['id']); ?>"><button type="button" class="btn btn-primary"> Submit BRIPCA Form</button></a><br><br>
                      <?php } else { ?>
                          <h6 style="color: red;">Submitted BRIPCA Form</h6><br>
                      <?php } } if ($value == 'PEG NT') {
                                // echo "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$row['id']." AND `brand` = 'PEG NT'";
                                $q3 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$row['id']." AND `brand` = 'PEG NT'";
                                $res3 = mysqli_query($conn, $q3);
                                $count2 = mysqli_num_rows($res3); 
                                if($count2 <= 0) { ?>
                                  <a href="survey-form/peg-nt.php?id=<?php echo base64_encode($row['id']); ?>"><button type="button" class="btn btn-primary"> Submit PEG NT Form</button></a><br><br>
                      <?php }  else { ?>
                          <h6 style="color: red;">Submitted PEG NT Form</h6><br>
                      <?php } } if ($value == 'RECITA') {
                                // echo "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$row['id']." AND `brand` = 'RECITA'";
                                $q4 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$row['id']." AND `brand` = 'RECITA'";
                                $res4 = mysqli_query($conn, $q4);
                                $count3 = mysqli_num_rows($res4); 
                                if($count3 <= 0) { ?>
                                  <a href="survey-form/recita.php?id=<?php echo base64_encode($row['id']); ?>"><button type="button" class="btn btn-primary"> Submit RECITA Form</button></a><br><br>
                      <?php }  else { ?>
                          <h6 style="color: red;">Submitted RECITA Form</h6><br>
                      <?php } } if ($value == 'VIPCA') {
                                // echo "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$row['id']." AND `brand` = 'VIPCA'";
                                $q5 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$row['id']." AND `brand` = 'VIPCA'";
                                $res5 = mysqli_query($conn, $q5);
                                $count4 = mysqli_num_rows($res5); 
                                if($count4 <= 0) { ?>
                                  <a href="survey-form/vipca.php?id=<?php echo base64_encode($row['id']); ?>"><button type="button" class="btn btn-primary"> Submit VIPCA Form</button></a><br><br>
                    <?php }  else { ?>
                          <h6 style="color: red;">Submitted VIPCA Form</h6><br>
                    <?php } } if ($value == 'PARI COMBO') {
                                $q6 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$row['id']." AND `brand` = 'PARI COMBO'";
                                $res6 = mysqli_query($conn, $q6);
                                $count5 = mysqli_num_rows($res6); 
                                if($count5 <= 0) { ?>
                                  <a href="survey-form/pari-combo.php?id=<?php echo base64_encode($row['id']); ?>"><button type="button" class="btn btn-primary"> Submit PARI COMBO Form</button></a><br><br>
                    <?php }  else { ?>
                          <h6 style="color: red;">Submitted PARI COMBO Form</h6><br>
                    <?php } } if ($value == 'PARI CR PLUS') {
                                $q7 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$row['id']." AND `brand` = 'PARI CR PLUS'";
                                $res7 = mysqli_query($conn, $q7);
                                $count6 = mysqli_num_rows($res7); 
                                if($count6 <= 0) { ?>
                                  <a href="survey-form/pari-cr-plus.php?id=<?php echo base64_encode($row['id']); ?>"><button type="button" class="btn btn-primary"> Submit PARI CR PLUS Form</button></a><br><br>
                    <?php }  else { ?>
                          <h6 style="color: red;">Submitted PARI CR PLUS Form</h6><br>
                    <?php } } if ($value == 'SOVE') {
                                $q8 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$row['id']." AND `brand` = 'SOVE'";
                                $res8 = mysqli_query($conn, $q8);
                                $count7 = mysqli_num_rows($res8); 
                                if($count7 <= 0) { ?>
                                  <a href="survey-form/sove.php?id=<?php echo base64_encode($row['id']); ?>"><button type="button" class="btn btn-primary"> Submit SOVE Form</button></a><br><br>
                    <?php }  else { ?>
                          <h6 style="color: red;">Submitted SOVE Form</h6><br>
                    <?php } } if ($value == 'EPICTAL') {
                                $q9 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$row['id']." AND `brand` = 'EPICTAL'";
                                $res9 = mysqli_query($conn, $q9);
                                $count8 = mysqli_num_rows($res9); 
                                if($count8 <= 0) { ?>
                                  <a href="survey-form/epictal.php?id=<?php echo base64_encode($row['id']); ?>"><button type="button" class="btn btn-primary"> Submit EPICTAL Form</button></a><br><br>
                    <?php }  else { ?>
                          <h6 style="color: red;">Submitted EPICTAL Form</h6><br>
                    <?php } } if ($value == 'PEG SR') {
                                $q10 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$row['id']." AND `brand` = 'PEG SR'";
                                $res10 = mysqli_query($conn, $q10);
                                $count9 = mysqli_num_rows($res10); 
                                if($count9 <= 0) { ?>
                                  <a href="survey-form/pegsr.php?id=<?php echo base64_encode($row['id']); ?>"><button type="button" class="btn btn-primary"> Submit PEG SR Form</button></a><br><br>
                    <?php }  else { ?>
                          <h6 style="color: red;">Submitted PEG SR Form</h6><br>
                    <?php } } if ($value == 'QUEL') {
                                $q11 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$row['id']." AND `brand` = 'QUEL'";
                                $res11 = mysqli_query($conn, $q11);
                                $count10 = mysqli_num_rows($res11); 
                                if($count10 <= 0) { ?>
                                  <a href="survey-form/quel.php?id=<?php echo base64_encode($row['id']); ?>"><button type="button" class="btn btn-primary"> Submit QUEL Form</button></a><br><br>
                    <?php }  else { ?>
                          <h6 style="color: red;">Submitted QUEL Form</h6><br>
                    <?php } } if ($value == 'PEG D') {
                                $q12 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$row['id']." AND `brand` = 'PEG D'";
                                $res12 = mysqli_query($conn, $q12);
                                $count11 = mysqli_num_rows($res12); 
                                if($count11 <= 0) { ?>
                                  <a href="survey-form/pegd.php?id=<?php echo base64_encode($row['id']); ?>"><button type="button" class="btn btn-primary"> Submit PEG D Form</button></a><br><br>
                    <?php }  else { ?>
                          <h6 style="color: red;">Submitted PEG D Form</h6><br>
                    <?php } } if ($value == 'CITINOVA') {
                                $q13 = "SELECT * FROM `survey_forms` WHERE `dr_id` = ".$row['id']." AND `brand` = 'CITINOVA'";
                                $res13 = mysqli_query($conn, $q13);
                                $count12 = mysqli_num_rows($res13); 
                                if($count12 <= 0) { ?>
                                  <a href="survey-form/citinova.php?id=<?php echo base64_encode($row['id']); ?>"><button type="button" class="btn btn-primary"> Submit CITINOVA Form</button></a>
                    <?php }  else { ?>
                          <h6 style="color: red;">Submitted CITINOVA Form</h6><br>
                    <?php } } } ?>
                  </td>
                  <td><?php echo implode(', ', explode('|', $row['brand'])); ?></td>              
                  <td class="pan_cheque">
                    <a download="" href="docs/<?php echo $row['pan_file']; ?>">Download</a>
                  </td>
                  <td class="pan_cheque">
                    <a download="" href="docs/<?php echo $row['cheque_file']; ?>">Download</a>
                  </td>
                  <td><?php echo $row['division']; ?></td>
                  <td><?php echo $row['emp_code']; ?></td>
                  <td><?php echo $row['doc_name']; ?></td>     
                  <td><?php echo $row['doc_mobile']; ?></td>          
                  <td><?php echo $row['doc_email']; ?></td>
                  <td><?php echo $row['doc_add']; ?></td>
                  <td><?php echo $row['doc_speciality']; ?></td>          
                  <td><?php echo $row['doc_region']; ?></td>          
                  <td><?php echo date('d-m-Y', strtotime($row['first_date'])); ?></td>                    
                  <td><?php echo date('d-m-Y', strtotime($row['second_date'])); ?></td>                    
                  <td><?php echo $row['monthly_support']; ?></td>                    
                  <td><?php echo $row['targetted_brand']; ?></td>
                  <td><?php echo $row['head_quarters']; ?></td>                    
                  <td><?php echo $row['payment_mode']; ?></td>                    
                  <td><?php echo $row['created_at']; ?></td>
                  <td><?php echo $row['updated_at']; ?></td>                                        
                </tr>                               
              <?php $count++; } } ?>
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