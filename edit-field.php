<?php 
  include 'handler/conn.php';
  if(!isset($_SESSION['emp_code']) || empty($_SESSION['emp_code'])) {
    header('Location: index.php');exit();
  }
  $emp_code = $_SESSION['emp_code'];
  if(isset($_GET['id']) && !empty($_GET['id'])) {
	  $q = "SELECT `dr_details`.*, `dr_details`.`id` AS `dr_id`, `employees_ipca`.`designation`, `quarter_details`.`territory` AS `territory_name` FROM `dr_details` LEFT JOIN `employees_ipca` ON `employees_ipca`.`emp_no` = `dr_details`.`emp_code` LEFT JOIN `quarter_details` ON `quarter_details`.`id` = `dr_details`.`quarter_detail_id` WHERE `dr_details`.`id`='".base64_decode($_GET['id'])."'";
	  $res = mysqli_query($conn, $q);
	  $row = mysqli_fetch_assoc($res);
	  $expl_brand = explode('|', $row['brand']);
	  // print_r($row['rbm_region']);die();
	  if(strtoupper($row['designation']) == 'RBM') {
    		$region = $row['region'];
       } else {
    		$q2 = "SELECT `region` FROM `employees_ipca` WHERE `zbm_code` = '$emp_code'";
    		$res2 = mysqli_query($conn, $q2);
       }
       $dr_id = $row['dr_id'];
       // echo $dr_id;
       $q3 = "SELECT `brand_value` FROM `dr_quarter_details` WHERE `dr_id` = '$dr_id'";
       // echo $q3;die();
       $res3 = mysqli_query($conn, $q3);
       $data = array();
       while ($row3 = mysqli_fetch_assoc($res3)) {
       // $row3 = mysqli_fetch_assoc($res3);
       	// echo "<pre>";print_r($row3);
       		array_push($data, $row3['brand_value']);
       }
       	// echo "<pre>";print_r($data);
       	if($row['division'] == 'INNOVEX') {
       		$quarter_1_22_23_sove = $data[0];
			$quarter_1_22_23_epictal = $data[1];
			$quarter_1_22_23_peg_sr = $data[2];
			$quarter_1_22_23_quel = $data[3];
			$quarter_1_22_23_peg_d = $data[4];
			$quarter_1_22_23_citinova = $data[5];

			$quarter_1_23_24_sove = $data[6];
			$quarter_1_23_24_epictal = $data[7];
			$quarter_1_23_24_peg_sr = $data[8];
			$quarter_1_23_24_quel = $data[9];
			$quarter_1_23_24_peg_d = $data[10];
			$quarter_1_23_24_citinova = $data[11];
       	} else {
       		$quarter_1_22_23_bripca = $data[0];
			$quarter_1_22_23_peg_nt = $data[1];
			$quarter_1_22_23_recita = $data[2];
			$quarter_1_22_23_pari_combo = $data[3];
			$quarter_1_22_23_peg_nt_m = $data[4];
			// $quarter_1_22_23_citinova = $data[5];

			$quarter_1_23_24_bripca = $data[5];
			$quarter_1_23_24_peg_nt = $data[6];
			$quarter_1_23_24_recita = $data[7];
			$quarter_1_23_24_pari_combo = $data[8];
			$quarter_1_23_24_peg_nt_m = $data[9];
			// $quarter_1_23_24_citinova = $data[10];
       	}
       		// echo $quarter_1_23_24_sove;die();
       	// die();
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
									
									<!-- <div class="col-md-12 userlogin">	
										<textarea placeholder="Address" name="doc_add" required><?php echo $row['doc_add']; ?></textarea>
									</div> --><!---Address---->
									<div class="col-md-6 col-sm-12 userlogin">
										<input type="text" placeholder="Doctor City" name="doc_city" value="<?php echo $row['doc_city']; ?>" required>
									</div><!-----Doctor-Mobile---->	
									<div class="col-md-6 col-sm-12 userlogin">
										<input type="text" placeholder="Doctor State" name="doc_state" value="<?php echo $row['doc_state']; ?>" required>
									</div>
									<div class="col-md-6 col-sm-12 userlogin">
										<input type="text" placeholder="Speciality" name="doc_speciality" value="<?php echo $row['doc_speciality']; ?>" required="">
									</div><!-----Speciality----->	
									<div class="col-md-6 col-sm-12 userlogin">
										<input type="text" placeholder="SBU Code" name="doc_sbu_code" value="<?php echo $row['doc_region']; ?>" required="">
									</div><!---SBU-Code-->	

									<div class="col-md-6 col-sm-12 userlogin">
										<select name="zbm_zone" required>
											<!-- <option value="">ZBM HQ</option> -->
											<option value="<?php echo $row['zbm_zone'] ?>"><?php echo $row['zbm_zone'] ?></option>
										</select>
									</div><!---SBU-Code-->		
									<div class="col-md-6 col-sm-12 userlogin">
										<?php if(strtoupper($row['designation']) == 'RBM') { ?>
											<select name="rbm_region" id="rbm_region" required>
												<!-- <option value="">RBM HQ</option> -->
												<option value="<?php echo $region; ?>"><?php echo $region; ?></option>
											</select>
										<?php } else { ?>
											<select name="rbm_region" id="rbm_region" required>
												<option value="">RBM HQ</option>	
												<?php if(mysqli_num_rows($res2) > 0) {
								    			while ($row2 = mysqli_fetch_assoc($res2)) { ?>
													<option value="<?php echo $row2['region'] ; ?>" <?php echo $row2['region'] == $row['rbm_region'] ? 'selected' : '' ; ?>><?php echo $row2['region']; ?></option>
								    			 <?php } } ?>
											</select>
										<?php } ?>
									</div>
									<div class="col-md-6 col-sm-12 userlogin">
										<select name="territory" id="territory" required>
											<!-- <option value="">BE / BO / TM </option> -->
											<option value="<?php echo $row['quarter_detail_id']; ?>"><?php echo $row['territory_name']; ?></option>
										</select>
									</div><!---SBU-Code-->
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-6 userlogin">
												<label>Request Date: (Dynamic Date)</label>
												<input type="text" name="request_date" value="<?php echo date('d-m-Y', strtotime($row['request_date'])); ?>" readonly>
											</div>	
											<!-- <div class="col-md-6 userlogin">
												<label>Visiting Second Date: </label>
												<input type="date" name="second_date" value="<?php echo $row['second_date']; ?>" required="">
											</div>	 -->
										</div>
									</div><!----Visiting-Date--->

									<div class="col-md-12 userlogin brands mt-2 mb-3">

										<?php if (strtoupper($row['division']) == 'INNOVA') { ?>
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
												<!-- <div class="col-md-4 col-sm-12 check1">
													<label> <input value="VIPCA" type="checkbox" name="brand[]" <?php echo (in_array('VIPCA', $expl_brand)) ? 'checked' : ''; ?> required> VIPCA</label>
												</div> -->
												<div class="col-md-4 col-sm-12 check1">
													<label> <input value="PARI COMBO" type="checkbox" name="brand[]" <?php echo (in_array('PARI COMBO', $expl_brand)) ? 'checked' : ''; ?> required> PARI COMBO</label>
												</div>
												<div class="col-md-4 col-sm-12 check1">
													<label> <input value="PEG NT" type="checkbox" name="brand[]" <?php echo (in_array('PEG NT M', $expl_brand)) ? 'checked' : ''; ?> required> PEG NT</label>
												</div>
												<!-- <div class="col-md-4 col-sm-12 check1">
													<label> <input value="PARI CR PLUS" type="checkbox" name="brand[]" <?php echo (in_array('PARI CR PLUS', $expl_brand)) ? 'checked' : ''; ?> required> PARI CR PLUS</label>
												</div> -->

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


									<!----------------------------------Quarterly-Data------------------------------------->
											<!-------------Quarterly-Data---2022------->
											<div class="col-md-12 userlogin">
												<label class="mt-1 mb-0">Quarterly Data:</label>
											</div>
											<div class="col-md-12">
											<div class="col-md-12">	
											<div class="row">									
											<div class="col-md-6 userlogin brands brands2 mt-2 mb-3">
												<div class="row brand">
												<div class="col-md-12">
													<label>Quarter-1 2022-23:</label>
													<hr>
												</div>
												<?php if (strtoupper($row['division']) == 'INNOVA') { ?>
												<div class="col-md-12 col-sm-12 check1">		
													<div class="row">
														<div class="col-md-4">	<label class="bripca"> BRIPCA</label><input type="hidden" name="brand_q[]" value="BRIPCA"></div>
														<div class="col-md-8">	 <input type="text" id="quarter_1_22_23_bripca" name="brand_value[]" value="<?php echo $quarter_1_22_23_bripca; ?>" readonly=""><input type="hidden" value="Quarter-1 2022-23" name="quarter[]"></div>
													</div>													
													</div>
													<div class="col-md-12 col-sm-12 check1">		
														<div class="row">
															<div class="col-md-4 pr-0">	<label class="bripca"> PEG NT</label><input type="hidden" name="brand_q[]" value="PEG NT"></div>
															<div class="col-md-8">	 <input type="text" id="quarter_1_22_23_peg_nt" name="brand_value[]" value="<?php echo $quarter_1_22_23_peg_nt; ?>" readonly=""><input type="hidden" value="Quarter-1 2022-23" name="quarter[]"></div>
														</div>													
													</div>
													<div class="col-md-12 col-sm-12 check1">		
														<div class="row">
															<div class="col-md-4">	<label class="bripca"> RECITA</label><input type="hidden" name="brand_q[]" value="RECITA"></div>
															<div class="col-md-8">	 <input type="text" id="quarter_1_22_23_recita" name="brand_value[]" value="<?php echo $quarter_1_22_23_recita; ?>" readonly=""><input type="hidden" value="Quarter-1 2022-23" name="quarter[]"></div>
														</div>													
													</div>
													<!-- <div class="col-md-12 col-sm-12 check1">		
														<div class="row">
															<div class="col-md-4">	<label class="bripca"> VIPCA</label><input type="hidden" name="brand_q[]" value="VIPCA"></div>
															<div class="col-md-8">	 <input value="" type="text" id="quarter_1_22_23_vipca" name="brand_value[]" readonly=""><input type="hidden" value="Quarter-1 2022-23" name="quarter[]"></div>
														</div>													
													</div> -->
													<div class="col-md-12 col-sm-12 check1">		
														<div class="row">
															<div class="col-md-6 pr-0">	<label class="bripca"> PARI COMBO </label><input type="hidden" name="brand_q[]" value="PARI COMBO"></div>
															<div class="col-md-6">	 <input type="text" id="quarter_1_22_23_pari_combo" name="brand_value[]" value="<?php echo $quarter_1_22_23_pari_combo; ?>" readonly=""><input type="hidden" value="Quarter-1 2022-23" name="quarter[]"></div>
														</div>													
													</div>
													<div class="col-md-12 col-sm-12 check1">		
														<div class="row">
															<div class="col-md-4 pr-0">	<label class="bripca"> PEG NT M</label><input type="hidden" name="brand_q[]" value="PEG NT"></div>
															<div class="col-md-8">	 <input type="text" id="quarter_1_22_23_peg_nt_m" name="brand_value[]" value="<?php echo $quarter_1_22_23_peg_nt_m; ?>" readonly=""><input type="hidden" value="Quarter-1 2022-23" name="quarter[]"></div>
														</div>													
													</div>
													<!-- <div class="col-md-12 col-sm-12 check1">	
															<div class="row">	
															<div class="col-md-6 pr-0">	<label class="bripca"> PARI CR PLUS </label><input type="hidden" name="brand_q[]" value="PARI CR PLUS"></div>
															<div class="col-md-6">	 <input value="" type="text" id="quarter_1_22_23_pari_cr_plus" name="brand_value[]" readonly=""><input type="hidden" value="Quarter-1 2022-23" name="quarter[]"></div>																					
															</div>
													</div> -->
												<?php } else { ?>
													<div class="col-md-12 col-sm-12 check1">		
													<div class="row">
														<div class="col-md-4">	<label class="bripca"> SOVE</label><input type="hidden" name="brand_q[]" value="SOVE"></div>
														<div class="col-md-8">	 <input type="text" id="quarter_1_22_23_sove" name="brand_value[]" value="<?php echo $quarter_1_22_23_sove; ?>" readonly=""><input type="hidden" value="Quarter-1 2022-23" name="quarter[]"></div>
													</div>													
													</div>
													<div class="col-md-12 col-sm-12 check1">		
														<div class="row">
															<div class="col-md-4 pr-0">	<label class="bripca"> EPICTAL</label><input type="hidden" name="brand_q[]" value="EPICTAL"></div>
															<div class="col-md-8">	 <input type="text" id="quarter_1_22_23_epictal" name="brand_value[]" value="<?php echo $quarter_1_22_23_epictal; ?>" readonly=""><input type="hidden" value="Quarter-1 2022-23" name="quarter[]"></div>
														</div>													
													</div>
													<div class="col-md-12 col-sm-12 check1">		
														<div class="row">
															<div class="col-md-4">	<label class="bripca"> PEG SR</label><input type="hidden" name="brand_q[]" value="PEG SR"></div>
															<div class="col-md-8">	 <input type="text" id="quarter_1_22_23_peg_sr" name="brand_value[]" value="<?php echo $quarter_1_22_23_peg_sr; ?>" readonly=""><input type="hidden" value="Quarter-1 2022-23" name="quarter[]"></div>
														</div>													
													</div>
													<div class="col-md-12 col-sm-12 check1">		
														<div class="row">
															<div class="col-md-4">	<label class="bripca"> QUEL</label><input type="hidden" name="brand_q[]" value="QUEL"></div>
															<div class="col-md-8">	 <input type="text" id="quarter_1_22_23_quel" name="brand_value[]" value="<?php echo $quarter_1_22_23_quel; ?>" readonly=""><input type="hidden" value="Quarter-1 2022-23" name="quarter[]"></div>
														</div>													
													</div>
													<div class="col-md-12 col-sm-12 check1">		
														<div class="row">
															<div class="col-md-6 pr-0">	<label class="bripca"> PEG D </label><input type="hidden" name="brand_q[]" value="PEG D"></div>
															<div class="col-md-6">	 <input type="text" id="quarter_1_22_23_peg_d" name="brand_value[]" value="<?php echo $quarter_1_22_23_peg_d; ?>" readonly=""><input type="hidden" value="Quarter-1 2022-23" name="quarter[]"></div>
														</div>													
													</div>
													<div class="col-md-12 col-sm-12 check1">	
															<div class="row">	
															<div class="col-md-6 pr-0">	<label class="bripca"> CITINOVA </label><input type="hidden" name="brand_q[]" value="CITINOVA"></div>
															<div class="col-md-6">	 <input type="text" id="quarter_1_22_23_citinova" name="brand_value[]" value="<?php echo $quarter_1_22_23_citinova; ?>" readonly=""><input type="hidden" value="Quarter-1 2022-23" name="quarter[]"></div>																					
															</div>
													</div>
												<?php } ?>
											</div>
																				<!-- <select>
											<option>Exisitng Supported Brands</option>
											<option>BRIPCA</option>
											<option>EPICTAL CPD</option>
											<option>PARI CR PLUS</option>
											<option>PEG-NT</option>
											<option>VIPCA</option>
											<option>ZOLPIDEM</option>
										</select> -->
									</div>

											<!-------------Quarterly-Data---2023------->										
											<div class="col-md-6 userlogin brands mt-2 mb-3">
												<div class="row brand">
												<div class="col-md-12">
													<label>Quarter-1 2023-24:</label>
													<hr>
												</div>
												<?php if (strtoupper($row['division']) == 'INNOVA') { ?>
												<div class="col-md-12 col-sm-12 check1">		
													<div class="row">
														<div class="col-md-4">	<label class="bripca"> BRIPCA</label><input type="hidden" name="brand_q[]" value="BRIPCA"></div>
														<div class="col-md-8">	 <input type="text" id="quarter_1_23_24_bripca" name="brand_value[]" value="<?php echo $quarter_1_23_24_bripca; ?>" readonly=""><input type="hidden" value="Quarter-1 2023-24" name="quarter[]"></div>
													</div>													
													</div>
													<div class="col-md-12 col-sm-12 check1">		
														<div class="row">
															<div class="col-md-4 pr-0">	<label class="bripca"> PEG NT</label><input type="hidden" name="brand_q[]" value="PEG NT"></div>
															<div class="col-md-8">	 <input type="text" id="quarter_1_23_24_peg_nt" name="brand_value[]" value="<?php echo $quarter_1_23_24_peg_nt; ?>" readonly=""><input type="hidden" value="Quarter-1 2023-24" name="quarter[]"></div>
														</div>													
													</div>
													<div class="col-md-12 col-sm-12 check1">		
														<div class="row">
															<div class="col-md-4">	<label class="bripca"> RECITA</label><input type="hidden" name="brand_q[]" value="RECITA"></div>
															<div class="col-md-8">	 <input type="text" id="quarter_1_23_24_recita" name="brand_value[]" value="<?php echo $quarter_1_23_24_recita; ?>" readonly=""><input type="hidden" value="Quarter-1 2023-24" name="quarter[]"></div>
														</div>													
													</div>
													<!-- <div class="col-md-12 col-sm-12 check1">		
														<div class="row">
															<div class="col-md-4">	<label class="bripca"> VIPCA</label><input type="hidden" name="brand_q[]" value="VIPCA"></div>
															<div class="col-md-8">	 <input value="" type="text" id="quarter_1_23_24_vipca" name="brand_value[]" readonly=""><input type="hidden" value="Quarter-1 2023-24" name="quarter[]"></div>
														</div>													
													</div> -->
													<div class="col-md-12 col-sm-12 check1">		
														<div class="row">
															<div class="col-md-6 pr-0">	<label class="bripca"> PARI COMBO </label><input type="hidden" name="brand_q[]" value="PARI COMBO"></div>
															<div class="col-md-6">	 <input type="text" id="quarter_1_23_24_pari_combo" name="brand_value[]" value="<?php echo $quarter_1_23_24_pari_combo; ?>" readonly=""><input type="hidden" value="Quarter-1 2023-24" name="quarter[]"></div>
														</div>													
													</div>
													<div class="col-md-12 col-sm-12 check1">		
														<div class="row">
															<div class="col-md-4 pr-0">	<label class="bripca"> PEG NT M</label><input type="hidden" name="brand_q[]" value="PEG NT"></div>
															<div class="col-md-8">	 <input type="text" id="quarter_1_23_24_peg_nt_m" name="brand_value[]" value="<?php echo $quarter_1_23_24_peg_nt_m; ?>" readonly=""><input type="hidden" value="Quarter-1 2022-23" name="quarter[]"></div>
														</div>													
													</div>
													<!-- <div class="col-md-12 col-sm-12 check1">	
															<div class="row">	
															<div class="col-md-6 pr-0">	<label class="bripca"> PARI CR PLUS </label><input type="hidden" name="brand_q[]" value="PARI CR PLUS"></div>
															<div class="col-md-6">	 <input value="" type="text" id="quarter_1_23_24_pari_cr_plus" name="brand_value[]" readonly=""><input type="hidden" value="Quarter-1 2023-24" name="quarter[]"></div>																					
															</div>
													</div> -->
												<?php } else { ?>
													<div class="col-md-12 col-sm-12 check1">		
													<div class="row">
														<div class="col-md-4">	<label class="bripca"> SOVE</label><input type="hidden" name="brand_q[]" value="SOVE"></div>
														<div class="col-md-8">	 <input type="text" id="quarter_1_23_24_sove" name="brand_value[]" value="<?php echo $quarter_1_23_24_sove; ?>" readonly=""><input type="hidden" value="Quarter-1 2023-24" name="quarter[]"></div>
													</div>													
													</div>
													<div class="col-md-12 col-sm-12 check1">		
														<div class="row">
															<div class="col-md-4 pr-0">	<label class="bripca"> EPICTAL</label><input type="hidden" name="brand_q[]" value="EPICTAL"></div>
															<div class="col-md-8">	 <input type="text" id="quarter_1_23_24_epictal" name="brand_value[]" value="<?php echo $quarter_1_23_24_epictal; ?>" readonly=""><input type="hidden" value="Quarter-1 2023-24" name="quarter[]"></div>
														</div>													
													</div>
													<div class="col-md-12 col-sm-12 check1">		
														<div class="row">
															<div class="col-md-4">	<label class="bripca"> PEG SR</label><input type="hidden" name="brand_q[]" value="PEG SR"></div>
															<div class="col-md-8">	 <input type="text" id="quarter_1_23_24_peg_sr" name="brand_value[]" value="<?php echo $quarter_1_23_24_peg_sr; ?>" readonly=""><input type="hidden" value="Quarter-1 2023-24" name="quarter[]"></div>
														</div>													
													</div>
													<div class="col-md-12 col-sm-12 check1">		
														<div class="row">
															<div class="col-md-4">	<label class="bripca"> QUEL</label><input type="hidden" name="brand_q[]" value="QUEL"></div>
															<div class="col-md-8">	 <input type="text" id="quarter_1_23_24_quel" name="brand_value[]" value="<?php echo $quarter_1_23_24_quel; ?>" readonly=""><input type="hidden" value="Quarter-1 2023-24" name="quarter[]"></div>
														</div>													
													</div>
													<div class="col-md-12 col-sm-12 check1">		
														<div class="row">
															<div class="col-md-6 pr-0">	<label class="bripca"> PEG D </label><input type="hidden" name="brand_q[]" value="PEG D"></div>
															<div class="col-md-6">	 <input type="text" id="quarter_1_23_24_peg_d" name="brand_value[]" value="<?php echo $quarter_1_23_24_peg_d; ?>" readonly=""><input type="hidden" value="Quarter-1 2023-24" name="quarter[]"></div>
														</div>													
													</div>
													<div class="col-md-12 col-sm-12 check1">	
															<div class="row">	
															<div class="col-md-6 pr-0">	<label class="bripca"> CITINOVA </label><input type="hidden" name="brand_q[]" value="CITINOVA"></div>
															<div class="col-md-6">	 <input type="text" id="quarter_1_23_24_citinova" name="brand_value[]" value="<?php echo $quarter_1_23_24_citinova; ?>" readonly=""><input type="hidden" value="Quarter-1 2023-24" name="quarter[]"></div>																					
															</div>
													</div>
												<?php } ?>
											</div>
																				<!-- <select>
											<option>Exisitng Supported Brands</option>
											<option>BRIPCA</option>
											<option>EPICTAL CPD</option>
											<option>PARI CR PLUS</option>
											<option>PEG-NT</option>
											<option>VIPCA</option>
											<option>ZOLPIDEM</option>
										</select> -->
									</div>
						</div>
					</div>	
				</div>


									<div class="col-md-12 userlogin">
										<input type="number"  placeholder="Monthly Support Value" name="monthly_support" value="<?php echo $row['monthly_support']; ?>" required="">
									</div><!-----Speciality----->	
									<!-- <div class="col-md-6 col-sm-12 userlogin">
										<input type="text" placeholder="Targetted Brand" name="targetted_brand" value="<?php echo $row['targetted_brand']; ?>" required="">
									</div> --><!-----Number----->
									<div class="col-md-6 col-sm-12 userlogin">
										<select name="targetted_brand" required>
											<option value="">Targetted Brand</option>
											<?php if (strtoupper($row['division']) == 'INNOVEX') { ?>
												<option <?php echo $row['targetted_brand'] == 'SOVE' ? 'selected' : ''; ?>>SOVE</option>
												<option <?php echo $row['targetted_brand'] == 'EPICTAL' ? 'selected' : ''; ?>>EPICTAL</option>
												<option <?php echo $row['targetted_brand'] == 'PEG SR' ? 'selected' : ''; ?>>PEG SR</option>
												<option <?php echo $row['targetted_brand'] == 'QUEL' ? 'selected' : ''; ?>>QUEL</option>
												<option <?php echo $row['targetted_brand'] == 'PEG D' ? 'selected' : ''; ?>>PEG D</option>
												<option <?php echo $row['targetted_brand'] == 'CITINOVA' ? 'selected' : ''; ?>>CITINOVA</option>
											<?php } else { ?>
												<option <?php echo $row['targetted_brand'] == 'BRIPCA' ? 'selected' : ''; ?>>BRIPCA</option>
												<option <?php echo $row['targetted_brand'] == 'PEG NT' ? 'selected' : ''; ?>>PEG NT</option>
												<option <?php echo $row['targetted_brand'] == 'RECITA' ? 'selected' : ''; ?>>RECITA</option>
												<option <?php echo $row['targetted_brand'] == 'PARI COMBO' ? 'selected' : ''; ?>>PARI COMBO</option>
												<option <?php echo $row['targetted_brand'] == 'PEG NT M' ? 'selected' : ''; ?>>PEG NT M</option>
												<!-- <option>CITINOVA</option> -->
											<?php } ?>
										</select>
									</div>
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

    $(document).on('change', '#rbm_region', function() {
		let region = $(this).val();
		if(region != '') {
			let territories = '<option value="">BE / BO / TM</option>';
			$.ajax({
				url: 'handler/get_territories.php?region='+region,
				method: 'GET',
				dataType: 'json',
				success: function(res) {
					if(res.length > 0) {
						res.map((val, ind) => {
							territories += `<option value="${val.id}">${val.territory}</option>`;
						});
						$('#territory').html('');
						$('#territory').html(territories);
					}
				}
			});
		}
	});

		$(document).on('change', '#territory', function() {
		let territory = $('#territory option:selected').text();
		let division = '<?php echo $row['division']; ?>';
		if(territory != 'BE / BO / TM') {
			$.ajax({
				url: 'handler/get_quarters.php?territory='+territory+'&division='+division,
				method: 'GET',
				dataType: 'json',
				success: function(res) {
					if(division.toUpperCase() == 'INNOVEX') {
						if(res.length > 0) {
							$('#quarter_1_22_23_sove').val(res[0]['2022-23_qtr1_PMPT']);
							$('#quarter_1_22_23_epictal').val(res[3]['2022-23_qtr1_PMPT']);
							$('#quarter_1_22_23_peg_sr').val(res[1]['2022-23_qtr1_PMPT']);
							$('#quarter_1_22_23_quel').val(res[2]['2022-23_qtr1_PMPT']);
							$('#quarter_1_22_23_peg_d').val(res[4]['2022-23_qtr1_PMPT']);
							$('#quarter_1_22_23_citinova').val(res[5]['2022-23_qtr1_PMPT']);

							$('#quarter_1_23_24_sove').val(res[0]['2023-24_qtr1_PMPT']);
							$('#quarter_1_23_24_epictal').val(res[3]['2023-24_qtr1_PMPT']);
							$('#quarter_1_23_24_peg_sr').val(res[1]['2023-24_qtr1_PMPT']);
							$('#quarter_1_23_24_quel').val(res[2]['2023-24_qtr1_PMPT']);
							$('#quarter_1_23_24_peg_d').val(res[4]['2023-24_qtr1_PMPT']);
							$('#quarter_1_23_24_citinova').val(res[5]['2023-24_qtr1_PMPT']);
						} else {
							$('#quarter_1_22_23_sove').val(0);
							$('#quarter_1_22_23_epictal').val(0);
							$('#quarter_1_22_23_peg_sr').val(0);
							$('#quarter_1_22_23_quel').val(0);
							$('#quarter_1_22_23_peg_d').val(0);
							$('#quarter_1_22_23_citinova').val(0);

							$('#quarter_1_23_24_sove').val(0);
							$('#quarter_1_23_24_epictal').val(0);
							$('#quarter_1_23_24_peg_sr').val(0);
							$('#quarter_1_23_24_quel').val(0);
							$('#quarter_1_23_24_peg_d').val(0);
							$('#quarter_1_23_24_citinova').val(0);
						}
					} else {
						if(res.length > 0) {
							$('#quarter_1_22_23_bripca').val(res[2]['2022-23_qtr1_PMPT']);
							$('#quarter_1_22_23_peg_nt').val(res[3]['2022-23_qtr1_PMPT']);
							$('#quarter_1_22_23_recita').val(res[1]['2022-23_qtr1_PMPT']);
							$('#quarter_1_22_23_pari_combo').val(res[0]['2022-23_qtr1_PMPT']);
							$('#quarter_1_22_23_peg_nt_m').val(res[4]['2022-23_qtr1_PMPT']);
							// $('#quarter_1_22_23_citinova').val(res[5]['2022-23_qtr1_PMPT']);

							$('#quarter_1_23_24_bripca').val(res[2]['2023-24_qtr1_PMPT']);
							$('#quarter_1_23_24_peg_nt').val(res[3]['2023-24_qtr1_PMPT']);
							$('#quarter_1_23_24_recita').val(res[1]['2023-24_qtr1_PMPT']);
							$('#quarter_1_23_24_pari_combo').val(res[0]['2023-24_qtr1_PMPT']);
							$('#quarter_1_23_24_peg_nt_m').val(res[4]['2023-24_qtr1_PMPT']);
							// $('#quarter_1_23_24_citinova').val(res[5]['2023-24_qtr1_PMPT']);
						} else {
							$('#quarter_1_22_23_bripca').val(0);
							$('#quarter_1_22_23_peg_nt').val(0);
							$('#quarter_1_22_23_recita').val(0);
							$('#quarter_1_22_23_pari_combo').val(0);
							$('#quarter_1_22_23_peg_nt_m').val(0);
							// $('#quarter_1_22_23_citinova').val(0);

							$('#quarter_1_23_24_bripca').val(0);
							$('#quarter_1_23_24_peg_nt').val(0);
							$('#quarter_1_23_24_recita').val(0);
							$('#quarter_1_23_24_pari_combo').val(0);
							$('#quarter_1_23_24_peg_nt_m').val(0);
							// $('#quarter_1_23_24_citinova').val(0);
						}
					}
				}
			});
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