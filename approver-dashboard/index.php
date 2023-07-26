<?php
	// include '../handler/conn.php';
	// session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">	
<meta name="viewport" content="width=device-width, initial-scal=1">
<title>Dapaglyn Activity</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/media.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
<script src="js/sweetalert.min.js"></script>
</head>
<body class="body1">
<style>
.body1 { background: url(./images/bg-form.jpg) center no-repeat; background-size: 100% 100%; width: 100%; height: auto;
background-attachment: fixed; }	
/*@media only screen and (min-device-width: 0px) and (max-device-width: 815px) and (orientation:portrait) {*/
@media(max-width: 1024px){
.maincol { width: 100%; height: 74vh;  display: flex; align-items: center; justify-content: center;  margin: auto; margin-right: 0;  }	
footer { width: 100%; position: absolute; bottom: 4vh; width: 1140px; left: 0;  right: 0; margin: auto; }	
}
@media(max-width: 1024px){
.maincol { width: 80%; margin: 0 10%; }
footer { width: 100%; }
}
@media(max-width: 768px){
footer { width: 100%; }
}
</style>	
<!-- 
<div class="portrait-content">
  <div class="portrait-center">
      <img src="images/rotate.gif" alt="">
      <p>Please Rotate your device</p>
  </div>
</div> -->
<!-- <header>
	<div class="container">
		<div class="zydus">
			<p><img src="images/zydus.png" width="120px"></p>
		</div>
	</div>
</header> -->
<div class="maincol">
<div class="container">
		<div class="brderer">
			
				<div class="col-md-12 login">
					<!-- <h1><b>Atorva Purity</h1> -->
					<p><img src="images/1logo.png"></p>
				</div>
					<form method="POST" action="../handler/approver_login_handler.php">
				<div class="col-md-12 employedoctr">
					<div class="row">
						<!-- <div class="col-md-12 text-center login-employee-doctr">
							<h3>Login_Via</h3><br>
						</div> -->
						<!-- <div class="col-md-6 col-sm-6 text-center login-employee-doctr">						
							<label><input type="radio" onclick="emloyee()" name="activity" value="emp">Patient Login</label>
						</div> 
						<div class="col-md-6 col-sm-6 text-center login-employee-doctr">						
							<label><input type="radio" onclick="emloyee()" name="activity" value="doc" checked="">Chemist Login</label>			
						</div>	
					-->						
					</div>

					<!-- <div class="row">
						<div class="col-md-6 col-sm-12 text-center login-employee-doctr">
							<label><input type="radio" name="1">Login via Employee</label>
						</div>
						<div class="col-md-6 col-sm-12 text-center login-employee-doctr">
							<label><input type="radio" name="1">Login via Doctor</label>
						</div>	
					</div> -->
					<div class="roww mt-2">
						<div class="row" id="emplcode" style="display: block;">
							<!----
							<div class="col-md-12 userlogin">
								<select name="division" required>
									<option value="">Select Division</option>
                                      <option>Innova</option>									
                                      <option>Innovex</option>									
								</select>
							</div>	----->		
							<div class="col-md-12 userlogin">
								<input type="text" placeholder="Enter Code" name="emp_code" required="">
							</div>			
							<div class="col-md-12 userlogin">	
								<input type="submit" value="Login" name="submit"> 
								<!-- <a href='#' data-toggle='modal' data-target='#exampleModalCenter'>Login</a> -->
							</div>	
						</div>
					<!------------END-------------->	
					</div>


					<!---------Registered-mobile-Note-Matching------>	
					<!-- <div class="roww mt-2">
						<div class="row" id="emplcode2" style="display: none;">
							<div class="col-md-12 userlogin">
								<input type="text" placeholder="Employee Code" name="emp_code" required="">
							</div>			
							<div class="col-md-12 userlogin">	
								<input type="submit" value="Submit" name="submit"> --> 
								<!-- <a href='picture-field.php' data-toggle='modal' data-target='#exampleModalCenter'>Login</a> -->
						<!-- 	</div>	
						</div> -->
					<!------------END-------------->	
					</div>
					</form>
					<!---------Registered-mobile-Note-Matching------>	
					<!-- <div class="roww mt-2">
						<div class="row">
							<div class="col-md-12 userlogin">
								<input type="text" placeholder="Registered Mobile Not Matching" name="emp_code" required="">
							</div>			
							<div class="col-md-12 userlogin">								
								<a href='#' data-toggle='modal' data-target='#exampleModalCenter'>Login</a>
							</div>	
						</div>
					</div> -->
					<!------------END-------------->	
					

					<!-- Modal -->
					<!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" data-keyboard="false" data-backdrop="static" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header schedulmodal">
								<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
								<button type="button" class="close scheduleclose" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
								</div>
							<div class="modal-body">
								<div class="checkmodal1">          
									<p><span><i class="far fa-times-circle"></i></span> Employee Code Not Matching.</p>
									<p>
										<a href="new-campaign.php">Yes</a>
										<a href="#" data-dismiss="modal">Close</a>
									</p>
								</div>
							</div>
							<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Yes</button>        
							</div>
							</div>
						</div>
					</div> -->
					<!------end-popup----->
				
			</div>
		</div>
	</div>
</div>
<footer>
<!-- <div class="container">
<div class="dapalogo"><img src="images/dapa.png"></div>
</div> -->
</footer>
</body>
<script src="js/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script>
// function emloyee() {
// var emplcode = document.getElementById("emplcode2");
// if(emplcode.style.display==="none"){
// emplcode.style.display="none";
// emplcode2.style.display="none";	
// }else {
// emplcode.style.display="bock";	
// }	
// }	



function emloyee() {
var emplcode = document.getElementById("emplcode");
if(emplcode.style.display==="none"){
emplcode.style.display="block";
emplcode2.style.display="none";	
}else {
emplcode.style.display="block";	
}	
}	


jQuery('select[name*="lstDestinations"] option').hover(
        function() {
            jQuery(this).addClass('highlight');
        }, function() {
            jQuery(this).removeClass('highlight');
        }
    );




// function emloyee2() {
// var emplcode = document.getElementById("emplcode");
// if(emplcode2.style.display==="none"){
// emplcode.style.display="none";	
// emplcode2.style.display="block";	
// }else {
// emplcode2.style.display="block";	
// }	
// }

</script>
</html>