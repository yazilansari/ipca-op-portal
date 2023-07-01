<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ipca | innovex - Pregabalin Clinical Practice Documentation</title>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body class="bgbrca" style="background: #eeeeee;">
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3"><img src="images/ipca-innovex.png" class="ipca" alt="logo"></div>
	</div>
</div>

<div class="container">
	<form method="POST" action="../handler/survey_form_handler.php">
		<input type="hidden" name="brand" value="PEG SR">
		<input type="hidden" name="dr_id" value="<?php echo $_GET['id']; ?>">
		<div class="row">
			<div class="col-md-12 mb-4"><!-----1---->
				<div class="borderline" style="border-top: 8px solid #525252;">
					<label>1) What is the frequency of different neuropathic pain syndroms that you come across in your clinical practice ?</label>
					<span>*</span>					
					<input type="hidden" name="question1" value="1) What is the frequency of different neuropathic pain syndroms that you come across in your clinical practice ?">
					<div class="col-md-12 partial p-0">
						<label><input type="radio" name="answer1" value="Diabetic Neuropathy" required> Diabetic Neuropathy</label>
						<label><input type="radio" name="answer1" value="Peripheral Neuropathy" required> Peripheral Neuropathy</label>
						<label><input type="radio" name="answer1" value="Alcoholic Neuropathy" required> Alcoholic Neuropathy</label>
						<label><input type="radio" name="answer1" value="Other" required> Other (Please Specify) <input type="text" name="other1"></label>						
					</div>		
				</div>				
			</div><!-----1-end--->

			<div class="col-md-12 mb-4"><!-----2---->
				<div class="borderline border-acrross">
					<label>2) What would be your first choice of molecule in the Management of Neuropathic Pain in your clinical practice ?</label>
					<span>*</span>					
					<input type="hidden" name="question2" value="2) What would be your first choice of molecule in the Management of Neuropathic Pain in your clinical practice ?">
					<div class="col-md-12 partial p-0">
						<label><input type="radio" name="answer2" value="Gabapentin" required> Gabapentin</label>
						<label><input type="radio" name="answer2" value="Pregabalin" required> Pregabalin</label>
						<label><input type="radio" name="answer2" value="Duleoxerine" required> Duleoxerine</label>						
						<label><input type="radio" name="answer2" value="Pregabalin with Combinations" required> Pregabalin with Combinations</label>								
					</div>		
				</div>				
			</div><!----2-end--->

			<div class="col-md-12 mb-4"><!----3---->
				<div class="borderline border-acrross">
					<label>3) Which strength do you prescribe of Pregabalin to treat the management of Neuropahic pain ?</label>
					<span>*</span>					
					<input type="hidden" name="question3" value="3) Which strength do you prescribe of Pregabalin to treat the management of Neuropahic pain ?">
					<div class="col-md-12 partial p-0">
						<label><input type="radio" name="answer3" value="25 mg" required> 25 mg</label>
						<label><input type="radio" name="answer3" value="50 mg" required> 50 mg</label>						
						<label><input type="radio" name="answer3" value="75 mg" required> 75 mg</label>						
						<label><input type="radio" name="answer3" value="150 mg" required> 150 mg</label>						
					</div>		
				</div>				
			</div><!----3-end--->


			<div class="col-md-12 mb-4"><!----4---->
				<div class="borderline border-acrross">
					<label>4) What Percentage of patients you prescribed Pregabalin + Methylcobalamin in the Diabetic Neuropathic Pain?</label>
					<span>*</span>					
					<input type="hidden" name="question4" value="4) What Percentage of patients you prescribed Pregabalin + Methylcobalamin in the Diabetic Neuropathic Pain?">
					<div class="col-md-12 partial p-0">
						<label><input type="radio" name="answer4" value="<25%" required> <25%</label>
						<label><input type="radio" name="answer4" value="25-50 %" required>  25-50 %</label>
						<label><input type="radio" name="answer4" value="50-75 %" required> 50-75 %</label>
						<label><input type="radio" name="answer4" value=">75%" required> >75%</label>						
					</div>		
				</div>				
			</div><!----4-end--->

			<div class="col-md-12 mb-4"><!----5---->
				<div class="borderline border-acrross">
					<label>5) What would be the ideal duration of therapy in the management of Neuropathic pain ?</label>
					<span>*</span>					
					<input type="hidden" name="question5" value="5) What would be the ideal duration of therapy in the management of Neuropathic pain ?">
					<div class="col-md-12 partial p-0">
						<label><input type="radio" name="answer5" value="0-4 Weeks" required> 0-4 Weeks</label>
						<label><input type="radio" name="answer5" value="4-8 Weeks" required> 4-8 Weeks</label>
						<label><input type="radio" name="answer5" value="8-12 Weeks" required> 8-12 Weeks</label>
						<label><input type="radio" name="answer5" value="12-24 Weeks" required> 12-24 Weeks</label>	
					</div>		
				</div>				
			</div><!----5-end--->

			<div class="col-md-12 mb-4"><!----6---->
				<div class="borderline border-acrross">
					<label>6) Doctor would you like to prefer sustained release formulation of Pregabalin in the management of neuropathic pain ?</label>
					<span>*</span>					
					<input type="hidden" name="question6" value="6) Doctor would you like to prefer sustained release formulation of Pregabalin in the management of neuropathic pain ?">
					<div class="col-md-12 partial p-0">
						<label><input type="radio" name="answer6" value="Yes" required> Yes</label>
						<label><input type="radio" name="answer6" value="No" required> No</label>
						<label>If Yes (Please specify reason ) <input type="text" name="answer61"></label>
						<label><input type="radio" name="answer6" value="Other" required> Other </label>
					</div>		
				</div>				
			</div><!----6-end--->


			<div class="col-md-12 mb-4"><!----7---->
				<div class="borderline border-acrross">
					<label>7) In which of the following age group you usually prescribe Pregabalin and Pregabalin + Mehylcobalamin ?</label>
					<span>*</span>					
					<input type="hidden" name="question7" value="7) In which of the following age group you usually prescribe Pregabalin and Pregabalin + Mehylcobalamin ?">
					<div class="col-md-12 partial p-0">
						<label><input type="radio" name="answer7" value="<25 yrs" required> <25 yrs</label>
						<label><input type="radio" name="answer7" value="25-50 yrs" required> 25-50 yrs</label>						
						<label><input type="radio" name="answer7" value="50-75 yrs" required> 50-75 yrs</label>						
						<label><input type="radio" name="answer7" value="Above 75 yrs" required> Above 75 yrs</label>						
					</div>		
				</div>				
			</div><!----7-end--->

			<div class="col-md-12 mb-4"><!----8---->
				<div class="borderline border-acrross">
					<label>8) What benefits have you observed with Pregabalin 75 Mg Sustained release formulation in your clinical practice?</label>
					<span>*</span>					
					<input type="hidden" name="question8" value="8) What benefits have you observed with Pregabalin 75 Mg Sustained release formulation in your clinical practice?">
					<div class="col-md-12 partial p-0">
						<label><input type="radio" name="answer8" value="Better Patient Compliance" required> Better Patient Compliance</label>						
						<label><input type="radio" name="answer8" value="Better Pain Relief" required> Better Pain Relief</label>						
						<label><input type="radio" name="answer8" value="Lesser Side Effect" required> Lesser Side Effect</label>						
						<label><input type="radio" name="answer8" value="Other" required> Any Other (Please Specify) <input type="text" name="other8"></label>						
					</div>		
				</div>				
			</div><!----8-end--->

			<div class="col-md-12 mb-4"><!----9---->
				<div class="borderline border-acrross">
					<label>9) List the molecules name that you have seen drug -drug interaction with Pregabalin?</label>
					<span>*</span>					
					<input type="hidden" name="question9" value="9) List the molecules name that you have seen drug -drug interaction with Pregabalin?">
					<div class="col-md-12 partial p-0">
						<input type="text" placeholder="Your answer" name="answer9" required> 
					</div>		
				</div>				
			</div><!----9-end--->

			<div class="col-md-12 mb-4"><!----10---->
				<div class="borderline border-acrross">
					<label>10) Which molecules commonly co-prescribe with Pregabalin?</label>
					<span>*</span>					
					<input type="hidden" name="question10" value="10) Which molecules commonly co-prescribe with Pregabalin?">
					<div class="col-md-12 partial p-0">
						<input type="text" placeholder="Your answer" name="answer10" required> 
					</div>		
				</div>				
			</div><!----10-end--->

			
			<!----8---->
			<!-- <div class="col-md-12 mb-4">
				<div class="borderline border-acrross">
					<label>8) What is the average duration of Vortioxetine treatment each patient receives in your clinical practice?</label>
					<span>*</span>					

					<div class="pregabalin pregaweek">
							<table class="table-responsive" width="100%" cellpadding="1" cellspacing="0">
								<thead>
									<tr>
										<th class="firstcol"></th>
										<th class="text-center">0-3 mths</th>
										<th class="text-center">3-6 mths</th>
										<th class="text-center">6-9 mths</th>
										<th class="text-center">9-12 mths</th>
										<th class="text-center">>1 Yr</th>
									</tr>
								</thead>
								<tbody>
									<tr class="bgcolor1">
										<td>Select</td>
										<td class="text-center"><input type="checkbox" ></td>
										<td class="text-center"><input type="checkbox" ></td>
										<td class="text-center"><input type="checkbox" ></td>
										<td class="text-center"><input type="checkbox" ></td>
										<td class="text-center"><input type="checkbox" ></td>
									</tr>									
								</tbody>
							</table>
						</div>						
				</div>				
			</div> -->
			<!----8-end--->


			


			<!----16---->
			<!-- <div class="col-md-12 mb-4">
				<div class="borderline border-acrross">
					<label>16) What is the retention rate for patients on Vortioxetine treatment in your practice?</label>
					<span>*</span>					

					<div class="col-md-12 partial p-0">
						<label><input type="checkbox" name="" required> <25%</label>
						<label><input type="checkbox" name=""> 25-50%</label>
						<label><input type="checkbox" name=""> 50-75%</label>									
						<label><input type="checkbox" name=""> >75%</label>									
					</div>		
				</div>				
			</div> -->
			<!----16-end--->

			<div class="col-md-12 mb-4"><!----10---->
				<div class="submitbtn">
					<input type="submit" value="SUBMIT" name="peg_sr_submit">
				</div>
			</div>
		</div>
	</form>
</div>	

</body>
<script src="js/jquery.3.6.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>