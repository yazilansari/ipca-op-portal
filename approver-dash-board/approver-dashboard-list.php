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
            <h4>Approver dash board<hr></h4>
        </div>  
    </div>
  </div>


  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <thead>
          <tr class="table-secondary">
            <th>Sr No.</th>        
            <th>Request Generated Date</th>                    
            <th>Survey done date</th>
            <th>PAN CARD / chq updated date</th>
			<th>Payment processed date</th>
            <th>Request</th>              
          </tr>
        </thead>
        <tbody>
                <tr>
                  <td class="first_td">1</td>
                  <td class="font-weight-bold">1-1-2023</td>					
                  <td class="font-weight-bold">1-1-2023</td>					
                  <td class="font-weight-bold">1-1-2023</td>					
				  <td class="font-weight-bold">1-1-2023</td>					
				  <td class="font-weight-bold"> 					
					<p class="aprover">
					<button type="button" class="btn btn-success" ><i class="far fa-edit"></i> Approve </button>
					<button type="button" class="btn btn-danger"><i class="far fa-edit"></i> Reject </button>
					<button type="button" class="btn btn-info"><i class="far fa-edit"></i> Pending </button>
					</p>	
				  </td>                  
                </tr>				
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