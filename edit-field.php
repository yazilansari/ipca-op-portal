<?php 
  include 'handler/conn.php';
  if(!isset($_SESSION['emp_code']) || empty($_SESSION['emp_code'])) {
    header('Location: index.php');exit();
  }

  if(isset($_GET['id']) && !empty($_GET['id'])) {
	  $q = "SELECT * FROM dr_details WHERE id='".base64_decode($_GET['id'])."'";
	  $res = mysqli_query($conn, $q);
	  $row = mysqli_fetch_assoc($res);
	  $expl_brand = explode('|', $row['brand']);
	  // print_r($expl_brand);die();
  } else {
  	header('Location: drdetails.php');exit();
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">	
<meta name="viewport" content="width=device-width, initial-scal=1">
<title>Fill a Form</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
.body1 { background: url(./images/bg-form.jpg) center no-repeat; background-size: 100% 100%; width: 100%; height: auto; }
.zydus { text-align: right; margin-top: 20px; }
.zydus img { width: 120px; }
footer { position: absolute; bottom: 10px; width: 1140px; left: 0; right: 0; margin: auto; }
.dapalogo { width: 202px; }

.maincol {width: 90%; height: auto; display: flex;align-items: center;justify-content: center; margin: auto; margin-top: 0px; margin-bottom: 120px; }
.login { margin-top: 0px; margin-bottom: 20px; text-align: center; background: #fff; }

.login img { width: 300px; margin-bottom: 0px;  }
.login h1 { text-align: center; font-size: 28px; color: #000; margin-bottom: 0px; font-weight: 400; padding: 10px 0; }

.login2 a { margin-top: 35px; padding: 0 12px; color: #fff; font-weight: bold; border-radius: 5px;
    background: #d63324; text-align: center; margin-right:15px; }
.login2 a h4 { font-size: 18px; margin-bottom: 0px; height: 48px; line-height: 48px; }
/********END*******/
.employedoctr { padding: 0 70px; }
.roww { width: 80%; margin: 0 10%; }

.brderer { border: 1px solid #9f9f9f; width: 55%; margin: auto; padding: 0px;
margin-top: 0px; border-radius: 5px; box-shadow: 0 0px 5px #bfbbbb; }
.brderer form { width: 100%; padding: 0px; }
.userlogin input { width: 100%; height: 42px; color: #333; margin-bottom: 12px;
outline: none; border: 1px solid #a3a1a1; padding-left: 15px; font-weight: 400;
font-size: 17px; letter-spacing: 0.5px; border-radius: 3px; }
.userlogin input[type="file"] { padding: 0px; font-size: 14px; }
.userlogin input[type="file"]:hover { background: none; }
.userlogin textarea { width: 100%; height: 90px; color: #333; margin-bottom: 12px;
outline: none; border: 1px solid #a3a1a1; padding-left: 15px; font-weight: 400;
font-size: 17px; letter-spacing: 0.5px; border-radius: 3px; padding-top: 5px; }

.userlogin input[type="date"] { height: 42px; width: 100%; color: #444; font-weight: 400; }

.userlogin label { color: #333; font-size: 16px; font-family: 'Roboto', sans-serif; 
font-weight: 700; }   

.userlogin select { width: 100%; height: 42px; color: #605c5c; margin-bottom: 12px;
outline: none; border: 1px solid #999999; padding-left: 15px; font-weight: 400;
font-size: 16px; letter-spacing: 0.5px; border-radius: 3px; }
.userlogin select option { font-weight: 700; }
.userlogin select option:hover { background-color: yellow; }
.userlogin input::-webkit-input-placeholder { color: #626262; font-weight: 400; } 

.userlogin input::-webkit-inner-spin-button { display: none; }
.userlogin a { width: 120px; height: 45px; border-radius: 5px; margin: 0px auto; cursor: pointer; background-image: linear-gradient(180deg, red, #f1cacd); padding: 0px; font-size: 20px; text-transform: uppercase; color: #fff; border: none; font-weight: normal; display: block; font-weight: bold; margin-bottom: 35px; letter-spacing: 0.5px; }
.input-file{ background-color: #f8f9fc; border: 1px solid #e2e9f3; border-radius: 4px; height: 40px;
    width: 500px; color: #565A90; }
.input-file::file-selector-button{ border: none; border-radius: 4px; color: white; background-color: #595ef1bd;
    border: 1px solid #595ef1bd; height: 40px; cursor: pointer; transition: all .25s ease-in; cursor: pointer; }
/*.input-file::file-selector-button:hover{
    background-color: #fff;
    color: #565A90;
    transition: all .25s ease-in;
}*/
.wrapper #signature-pad { width: 100%; }
.modal-header .close1 { padding-top: 20px; padding-right: 8px; }

.userlogin input[type="submit"] { width: 120px; height: 45px; border-radius: 5px; display: block; 
margin: 0 auto; cursor: pointer; background-image: linear-gradient(180deg, red, #f1cacd); padding: 0px; font-size: 22px; 
text-transform: uppercase; color: #fff; border: none; font-weight: 500; margin-bottom: 50px; }

@media(max-width: 1024px){
.maincol { width: 90%; margin: 0 5%; }
.login h1 { font-size: 28px; padding: 10px 0; }	
footer { position: absolute; bottom: 3.5vh; width: 100%; left: 0; right: 0; margin: auto; }
.check1 label { font-size: 12px; }
}
@media(max-width: 900px){
.maincol { width: 100%; margin: 0; margin-bottom: 120px; }	
.brderer { width: 100%; }
.login h1 { font-size: 22px; font-weight: 500; }
.employedoctr { padding:0 30px; }
.brands { width: 90%; }
.check1 label { font-size: 14px; }
.userlogin input[type="submit"] { font-size: 18px; width: 33%; }
.userlogin a { width: 33%; font-size: 18px; }
.thanku_out { margin-top: 40px; margin-bottom: 30px; }
.thanku_out a { font-size: 16px; }
}
@media(max-width: 768px){
footer { position: absolute; bottom: 10vh;  width: 100%; left: 0; right: 0; margin: auto; }
}
</style>
<body class="body1">
<div class="portrait-content">
  <div class="portrait-center">
    
<!--       <p>Please Rotate your device</p> -->
  </div>
</div>

<header>
	<!-- <div class="container">
		<div class="zydus">
			<p><img src="images/zydus.png" width="120px"></p>
		</div>
	</div> -->
</header>

	<div class="maincol">
<div class="container">
		<div class="row">
			<div class="col-md-12 thanku_out">
				<a href="doctor_list.php" style="background: #1c619d;"> Doctor List</a>
				<a href="index.php">Logout</a>
			</div>
		</div>
		<div class="brderer">			
				<div class="col-md-12 login">
					 <h1>Edit Profile</h1>
					<!--<img src="images/logo2.png" alt="">	-->
				</div>
					<form method="POST" action="handler/dr_handler.php" enctype="multipart/form-data">
						<div class="col-md-12 employedoctr">

							<div class="row mt-2">
								<div class="row" id="emplcode">									
									<div class="col-md-12 userlogin">
										<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
										<input type="text" placeholder="Doctor Name" name="doc_name" value="<?php echo $row['doc_name']; ?>" required="">
									</div><!-----Doctor-Name---->	
									<div class="col-md-6 col-sm-12 userlogin">
										<input type="number" placeholder="Doctor Mobile" name="doc_mobile" value="<?php echo $row['doc_mobile']; ?>" required>
									</div><!-----Doctor-Mobile---->	
									<div class="col-md-6 col-sm-12 userlogin">
										<input type="email" placeholder="Doctor Email Id" name="doc_email" value="<?php echo $row['doc_email']; ?>" required>
									</div><!-----Doctor-Mobile---->	
									
									<div class="col-md-12 userlogin">	
										<textarea placeholder="Address" name="doc_add" required><?php echo $row['doc_add']; ?></textarea>
									</div><!---Address---->

									<div class="col-md-6 col-sm-12 userlogin">
										<input type="text" placeholder="Speciality" name="doc_speciality" value="<?php echo $row['doc_speciality']; ?>" required="">
									</div><!-----Speciality----->	
									<div class="col-md-6 col-sm-12 userlogin">
										<input type="text" placeholder="SBU Code" name="doc_sbu_code" value="<?php echo $row['doc_sbu_code']; ?>" required="">
									</div><!---SBU-Code-->	


									<div class="col-md-12">
										<div class="row">
											<div class="col-md-6 userlogin">
												<label>Request Date: </label>
												<input type="date" name="request_date" value="<?php echo $row['request_date']; ?>" required="">
											</div>	
											<!-- <div class="col-md-6 userlogin">
												<label>Visiting Second Date: </label>
												<input type="date" name="second_date" value="<?php echo $row['second_date']; ?>" required="">
											</div>	 -->
										</div>
									</div><!----Visiting-Date--->

									<div class="col-md-12 userlogin brands mt-2 mb-3">

										<?php if ($row['division'] == 'Innova') { ?>
											<div class="row brand">
												<div class="col-md-12">
													<label>Exisitng Supported Brands:</label>
													<hr>
												</div>
												<div class="col-md-4 col-sm-12 check1">
													<label> <input value="BRIPCA" type="checkbox" name="brand[]" <?php echo (in_array('BRIPCA', $expl_brand)) ? 'checked' : ''; ?> required> BRIPCA</label>
												</div>
												<div class="col-md-4 col-sm-12 check1">
													<label> <input value="PEG NT" type="checkbox" name="brand[]" <?php echo (in_array('PEG NT', $expl_brand)) ? 'checked' : ''; ?> required> PEG NT</label>
												</div>
												<div class="col-md-4 col-sm-4 check1">
													<label> <input value="RECITA" type="checkbox" name="brand[]" <?php echo (in_array('RECITA', $expl_brand)) ? 'checked' : ''; ?> required> RECITA </label>
												</div>
												<div class="col-md-4 col-sm-12 check1">
													<label> <input value="VIPCA" type="checkbox" name="brand[]" <?php echo (in_array('VIPCA', $expl_brand)) ? 'checked' : ''; ?> required> VIPCA</label>
												</div>
												<div class="col-md-4 col-sm-12 check1">
													<label> <input value="PARI COMBO" type="checkbox" name="brand[]" <?php echo (in_array('PARI COMBO', $expl_brand)) ? 'checked' : ''; ?> required> PARI COMBO</label>
												</div>
												<div class="col-md-4 col-sm-12 check1">
													<label> <input value="PARI CR PLUS" type="checkbox" name="brand[]" <?php echo (in_array('PARI CR PLUS', $expl_brand)) ? 'checked' : ''; ?> required> PARI CR PLUS</label>
												</div>

											</div>
										<?php } else { ?>
											<div class="row brand">
												<div class="col-md-12">
													<label>Exisitng Supported Brands:</label>
													<hr>
												</div>
												<div class="col-md-4 col-sm-12 check1">
													<label> <input value="SOVE" type="checkbox" name="brand[]" <?php echo (in_array('SOVE', $expl_brand)) ? 'checked' : ''; ?> required> SOVE</label>
												</div>
												<div class="col-md-4 col-sm-12 check1">
													<label> <input value="EPICTAL" type="checkbox" name="brand[]" <?php echo (in_array('EPICTAL', $expl_brand)) ? 'checked' : ''; ?> required> EPICTAL</label>
												</div>
												<div class="col-md-4 col-sm-12 check1">
													<label> <input value="PEG SR" type="checkbox" name="brand[]" <?php echo (in_array('PEG SR', $expl_brand)) ? 'checked' : ''; ?> required> PEG SR</label>
												</div>
												<div class="col-md-4 col-sm-12 check1">
													<label> <input value="QUEL" type="checkbox" name="brand[]" <?php echo (in_array('QUEL', $expl_brand)) ? 'checked' : ''; ?> required> QUEL</label>
												</div>
												<div class="col-md-4 col-sm-12 check1">
													<label> <input value="PEG D" type="checkbox" name="brand[]" <?php echo (in_array('PEG D', $expl_brand)) ? 'checked' : ''; ?> required> PEG D</label>
												</div>
												<div class="col-md-4 col-sm-4 check1">
													<label> <input value="CITINOVA" type="checkbox" name="brand[]" <?php echo (in_array('CITINOVA', $expl_brand)) ? 'checked' : ''; ?> required> CITINOVA </label>
												</div>
											</div>
										<?php } ?>
										<!-- <select>
											<option>Exisitng Supported Brands</option>
											<option>BRIPCA</option>
											<option>EPICTAL CPD</option>
											<option>PARI CR PLUS</option>
											<option>PEG-NT</option>
											<option>VIPCA</option>
											<option>ZOLPIDEM</option>
										</select> -->
									</div><!-----Bripca---->										
									<div class="col-md-12 userlogin">
										<input type="number"  placeholder="Monthly Support Value" name="monthly_support" value="<?php echo $row['monthly_support']; ?>" required="">
									</div><!-----Speciality----->	
									<div class="col-md-6 col-sm-12 userlogin">
										<input type="text" placeholder="Targetted Brand" name="targetted_brand" value="<?php echo $row['targetted_brand']; ?>" required="">
									</div><!-----Number----->	
									<div class="col-md-6 col-sm-12 userlogin">
										<input type="text" placeholder="Head Quarters" name="head_quarters" value="<?php echo $row['head_quarters']; ?>" required="">
									</div><!---SBU-Code-->	

									<div class="col-md-12 userlogin">
										<select name="payment_mode" required>
											<option value="">Payment Mode</option>
											<option value="Cheque" <?php echo ($row['payment_mode'] == 'Cheque') ? 'selected' : ''; ?>>Cheque</option>											
											<option value="NEFT" <?php echo ($row['payment_mode'] == 'NEFT') ? 'selected' : ''; ?>>NEFT</option>
										</select>
									</div><!-----Bripca---->

									<div class="col-md-12 brands mt-2 mb-3">
										<div class="row">
											<div class="col-md-6">
												<label style="font-weight: bold;">Uploaded Pan Card: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
												<a download="" href="docs/<?php echo $row['pan_file']; ?>">Pan Card Download</a>
												<input type="hidden" name="uploaded_pan_file" value="<?php echo $row['pan_file']; ?>">
												<!-- <input type="file" name="pan_file" class="input-file"> -->
											</div>	
											<div class="col-md-6">
												<label style="font-weight: bold;">Uploaded Cancelled Cheque: </label>
												<a download="" href="docs/<?php echo $row['cheque_file']; ?>">Cancelled Cheque Download</a>
												<input type="hidden" name="uploaded_cheque_file" value="<?php echo $row['cheque_file']; ?>">
												<!-- <input type="file" name="cheque_file" class="input-file"> -->

											</div>	
										</div>
									</div><!-----Date--->					

									<div class="col-md-12 userlogin brands mt-2 mb-3">
										<div class="row">
											<div class="col-md-6">
												<label>Upload Pan Card: </label>
												<!-- <span><a href="docs/<?php echo $row['pan_file']; ?>"><?php echo $row['pan_file']; ?></a></span> -->
												<input type="file" name="pan_file" class="input-file">
											</div>	
											<div class="col-md-6">
												<label>Upload Cancelled Cheque: </label>
												<input type="file" name="cheque_file" class="input-file">
											</div>	
										</div>
									</div><!-----Date--->

									<div class="col-md-12 userlogin">	
										<input type="submit" value="Submit" name="update"> 
										<!-- <a href="#" data-toggle='modal' data-target='#exampleModalCenter'>Update</a> -->
									</div>										
								</div>
							<!------------END-------------->	
							</div>	
						</div>
					</form>
				
			</div>
		</div>
	</div>
</div>


<!-- Modal -->
					<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" data-keyboard="false" data-backdrop="static" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header schedulmodal">
								<!-- <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5> -->
								<button type="button" class="close scheduleclose" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
								</div>
							<div class="modal-body">
								<div class="checkmodal1">          
									<p><span><i class="fas fa-check-square"></i></span> Updated Successfully.</p>
								<!-- 	<p>
										<a href="new-campaign.php">Yes</a>
										<a href="#" data-dismiss="modal">Close</a>
									</p> -->
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" onclick="redirect()" data-dismiss="modal">Ok</button>        
							</div>
							</div>
						</div>
					</div>
					<!------end-popup----->
					<?php
	$msg = ''; 
	if(isset($_GET['msg'])) {
		$msg = $_GET['msg'];
	}
?>
<!-- <footer>
<div class="container">
	<div class="dapalogo"><img src="images/dapa.png"></div>
</div>
</footer> -->
<script>
swal({
  title: "<?php  echo $_SESSION['logout'];   ?>",
  icon: "<?php  echo $_SESSION['symbol'];   ?>",
  button: "Ok",
});
</script>
</body>
<script src="js/jquery-3.6.4.min.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script>
function redirect()	{
window.location.href="doctor_list.php";	
}
</script>
<script>
function emloyee() {
var emplcode = document.getElementById("emplcode");
if(emplcode.style.display==="none"){
emplcode.style.display="block";
emplcode2.style.display="none";	
}else {
emplcode.style.display="block";	
}	
}

$(document).ready(function() {
	if('<?php echo $msg; ?>' == 'Duplicate Email') {
		$("#error").text("Duplicate Email Id.");
	} else if('<?php echo $msg; ?>' == 'Duplicate Mobile') {
		$("#error").text("Duplicate Mobile Number.");
	} else if('<?php echo $msg; ?>' == 'Successfully Updated') {
		$('#exampleModalCenter').modal('show');	
	}

	var requiredCheckboxes = $('.brand :checkbox[required]');
	if(requiredCheckboxes.is(':checked')) {
            requiredCheckboxes.removeAttr('required');
    } else {
            requiredCheckboxes.attr('required', 'required');
    }
    requiredCheckboxes.change(function() {
        if(requiredCheckboxes.is(':checked')) {
            requiredCheckboxes.removeAttr('required');
        } else {
            requiredCheckboxes.attr('required', 'required');
        }
    });
});


jQuery('select[name*="lstDestinations"] option').hover(
        function() {
            jQuery(this).addClass('highlight');
        }, function() {
            jQuery(this).removeClass('highlight');
        }
    );

</script>
</html>