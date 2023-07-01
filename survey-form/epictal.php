<?php
	include '../handler/conn.php';
	if(!isset($_GET['id']) || empty($_GET['id'])) {
		header('Location: ../doctor_list.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ipca | innovex - Levetiracetam Clinical Practice Documentation</title>
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
		<input type="hidden" name="brand" value="EPICTAL CPD">
		<input type="hidden" name="dr_id" value="<?php echo $_GET['id']; ?>">
		<div class="row">
			<div class="col-md-12 mb-4"><!-----1---->
				<div class="borderline" style="border-top: 8px solid #525252;">
					<label>1) For which of the following indication do you prefer Levetiracetam ?</label>
					<span>*</span>					
					<input type="hidden" name="question1" value="1) For which of the following indication do you prefer Levetiracetam ?">
					<div class="col-md-12 partial p-0 question1">
						<label><input type="checkbox" value="Partial seizure" name="answer1[]" required> Partial seizure</label>
						<label><input type="checkbox" value="Myclonic seizure" name="answer1[]" required> Myclonic seizure</label>
						<label><input type="checkbox" value="Tonic-clonic seizure" name="answer1[]" required> Tonic-clonic seizure</label>
						<label><input type="checkbox" value="Juvenile seizure" name="answer1[]" required> Juvenile seizure</label>						
						<label><input type="checkbox" value="Other" name="answer1[]" required> Other: <input type="text" name="other1"></label>						
					</div>		
				</div>				
			</div><!-----1-end--->

			<div class="col-md-12 mb-4"><!-----2---->
				<div class="borderline border-acrross">
					<label>2) In which age group do you prescribe Levetiracetam the most ?</label>
					<span>*</span>					
					<input type="hidden" name="question2" value="2) In which age group do you prescribe Levetiracetam the most ?">
					<div class="col-md-12 partial p-0 question2">
						<label><input type="checkbox" value="0 - 10 years" name="answer2[]" required> 0 - 10 years</label>
						<label><input type="checkbox" value="10-20 years" name="answer2[]" required> 10-20 years</label>
						<label><input type="checkbox" value="20-30 years" name="answer2[]" required> 20-30 years</label>						
						<label><input type="checkbox" value="30-40 years" name="answer2[]" required> 30-40 years</label>						
						<label><input type="checkbox" value="40 years & above" name="answer2[]" required> 40 years & above</label>						
					</div>		
				</div>				
			</div><!----2-end--->

			<div class="col-md-12 mb-4"><!----3---->
				<div class="borderline border-acrross">
					<label>3) In which type of patient do you prefer to prescribe Levetiracetam the most ( Tick wherever applicable) </label>
					<span>*</span>					
					<input type="hidden" name="question3" value="3) In which type of patient do you prefer to prescribe Levetiracetam the most ( Tick wherever applicable)">
					<div class="col-md-12 partial p-0 question3">
						<label><input type="checkbox" value="Adult Female" name="answer3[]" required> Adult Female</label>
						<label><input type="checkbox" value="Adult Male" name="answer3[]" required> Adult Male</label>						
						<label><input type="checkbox" value="Geriatric patient" name="answer3[]" required> Geriatric patient</label>						
						<label><input type="checkbox" value="Pediatric patient" name="answer3[]" required> Pediatric patient</label>						
					</div>		
				</div>				
			</div><!----3-end--->


			<div class="col-md-12 mb-4"><!----4---->
				<div class="borderline border-acrross">
					<label>4) What is the starting dose of Levetiracetam in adults and teens above 16 years and older in your practice? </label>
					<span>*</span>					
					<input type="hidden" name="question4" value="4) What is the starting dose of Levetiracetam in adults and teens above 16 years and older in your practice?">
					<div class="col-md-12 partial p-0 question4">
						<label><input type="checkbox" value="200 mg B.I.D" name="answer4[]" required> 200 mg B.I.D</label>
						<label><input type="checkbox" value="250 mg B.I.D" name="answer4[]" required> 250 mg B.I.D</label>
						<label><input type="checkbox" value="500 mg B.I.D" name="answer4[]" required> 500 mg B.I.D</label>
						<label><input type="checkbox" value="500 mg daily" name="answer4[]" required> > 500 mg daily</label>						
					</div>		
				</div>				
			</div><!----4-end--->

			<div class="col-md-12 mb-4"><!----5---->
				<div class="borderline border-acrross">
					<label>5) In which of the following aspects do you find Levetiracetam better as compared to newer AED like Brivaracetam? (Tick wherever applicable)</label>
					<span>*</span>					
					<input type="hidden" name="question5" value="5) In which of the following aspects do you find Levetiracetam better as compared to newer AED like Brivaracetam? (Tick wherever applicable)">
					<div class="col-md-12 partial p-0 question5">
						<label><input type="checkbox" value="Rapid Seizure Management" name="answer5[]" required> Rapid Seizure Management</label>
						<label><input type="checkbox" value="Safety profile" name="answer5[]" required> Safety profile</label>
						<label><input type="checkbox" value="Patient compliance" name="answer5[]" required> Patient compliance</label>
						<label><input type="checkbox" value="Pediatric epilepsy" name="answer5[]" required> Pediatric epilepsy</label>
						<label><input type="checkbox" value="Other" name="answer5[]" required> Other: <input type="text" name="other5"></label>						
					</div>		
				</div>				
			</div><!----5-end--->

			<div class="col-md-12 mb-4"><!----6---->
				<div class="borderline border-acrross">
					<label>6) In which of the following aspects do you find Brivaracetam better than Levetiracetam?</label>
					<span>*</span>					
					<input type="hidden" name="question6" value="6) In which of the following aspects do you find Brivaracetam better than Levetiracetam?">
					<div class="col-md-12 partial p-0 question6">
						<label><input type="checkbox" value="Rapid Seizure Management" name="answer6[]" required> Rapid Seizure Management</label>
						<label><input type="checkbox" value="Safety profile" name="answer6[]" required> Safety profile</label>
						<label><input type="checkbox" value="Patient compliance" name="answer6[]" required> Patient compliance</label>
						<label><input type="checkbox" value="Pediatric epilepsy" name="answer6[]" required> Pediatric epilepsy</label>
						<label><input type="checkbox" value="Other" name="answer6[]" required> Other: <input type="text" name="other6"></label>
					</div>		
				</div>				
			</div><!----6-end--->


			<div class="col-md-12 mb-4"><!----7---->
				<div class="borderline border-acrross">
					<label>7) What is the % of patients on Levetiracetam treatment are noncompliant ?</label>
					<span>*</span>					
					<input type="hidden" name="question7" value="7) What is the % of patients on Levetiracetam treatment are noncompliant ?">
					<div class="col-md-12 partial p-0 question7">
						<label><input type="checkbox" value="< 25 %" name="answer7[]" required> < 25 %</label>
						<label><input type="checkbox" value="25 -50 %" name="answer7[]" required> 25 -50 %</label>						
						<label><input type="checkbox" value="50 - 75 %" name="answer7[]" required> 50 - 75 %</label>						
						<label><input type="checkbox" value="> 75 %" name="answer7[]" required> > 75 %</label>						
					</div>		
				</div>				
			</div><!----7-end--->

			<div class="col-md-12 mb-4"><!----8---->
				<div class="borderline border-acrross">
					<label>8) What are the common reasons for non compliance of treatment in Epilepsy ?</label>
					<span>*</span>					
					<input type="hidden" name="question8" value="8) What are the common reasons for non compliance of treatment in Epilepsy ?">
					<div class="col-md-12 partial p-0">
						<input type="text" placeholder="Your answer" name="answer8" required> 
					</div>		
				</div>				
			</div><!----8-end--->

			<div class="col-md-12 mb-4"><!----9---->
				<div class="borderline border-acrross">
					<label>9) Which molecules do you commonly co- prescribe with Levetiracetam ?</label>
					<span>*</span>					
					<input type="hidden" name="question9" value="9) Which molecules do you commonly co- prescribe with Levetiracetam ?">
					<div class="col-md-12 partial p-0">
						<input type="text" placeholder="Your answer" name="answer9" required> 
					</div>		
				</div>				
			</div><!----9-end--->

			<div class="col-md-12 mb-4"><!----10---->
				<div class="borderline border-acrross">
					<label>10) Do you prefer to prescribe Levetiracetam RTU (Ready to Use injection) infusion ?</label>
					<span>*</span>					
					<input type="hidden" name="question10" value="10) Do you prefer to prescribe Levetiracetam RTU (Ready to Use injection) infusion ?">
					<div class="col-md-12 partial p-0">
						<label><input type="radio" value="Yes" name="answer10" required> Yes</label>
						<label><input type="radio" value="No" name="answer10" required> No</label>
					</div>		
				</div>				
			</div><!----10-end--->

			<div class="col-md-12 mb-4"><!----11---->
				<div class="borderline border-acrross">
					<label>11) Do you prescribe vitamin B6 along Levetiracetam for mood management ?</label>
					<span>*</span>					
					<input type="hidden" name="question11" value="11) Do you prescribe vitamin B6 along Levetiracetam for mood management ?">
					<div class="col-md-12 partial p-0">
						<label><input type="radio" value="Yes" name="answer11" required> Yes</label>
						<label><input type="radio" value="No" name="answer11" required> No</label>
					</div>		
				</div>				
			</div><!----11-end--->

			<div class="col-md-12 mb-4"><!----12---->
				<div class="borderline border-acrross">
					<label>12) What is the most common advice you give to PWE and their caregivers ?</label>
					<span>*</span>					
					<input type="hidden" name="question12" value="12) What is the most common advice you give to PWE and their caregivers ?">
					<div class="col-md-12 partial p-0">
						<input type="text" placeholder="Your answer" name="answer12" required> 
					</div>		
				</div>				
			</div><!----9-end--->
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
					<input type="submit" value="SUBMIT" name="epictal_submit">
				</div>
			</div>
		</div>
	</form>
</div>	

</body>
<script src="js/jquery.3.6.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	var requiredCheckboxes1 = $('.question1 :checkbox[required]');
    	requiredCheckboxes1.change(function() {
        if(requiredCheckboxes1.is(':checked')) {
            requiredCheckboxes1.removeAttr('required');
        } else {
            requiredCheckboxes1.attr('required', 'required');
        }
    });

    var requiredCheckboxes2 = $('.question2 :checkbox[required]');
    	requiredCheckboxes2.change(function() {
        if(requiredCheckboxes2.is(':checked')) {
            requiredCheckboxes2.removeAttr('required');
        } else {
            requiredCheckboxes2.attr('required', 'required');
        }
    });

    var requiredCheckboxes3 = $('.question3 :checkbox[required]');
    	requiredCheckboxes3.change(function() {
        if(requiredCheckboxes3.is(':checked')) {
            requiredCheckboxes3.removeAttr('required');
        } else {
            requiredCheckboxes3.attr('required', 'required');
        }
    });

    var requiredCheckboxes4 = $('.question4 :checkbox[required]');
    	requiredCheckboxes4.change(function() {
        if(requiredCheckboxes4.is(':checked')) {
            requiredCheckboxes4.removeAttr('required');
        } else {
            requiredCheckboxes4.attr('required', 'required');
        }
    });

    var requiredCheckboxes5 = $('.question5 :checkbox[required]');
    	requiredCheckboxes5.change(function() {
        if(requiredCheckboxes5.is(':checked')) {
            requiredCheckboxes5.removeAttr('required');
        } else {
            requiredCheckboxes5.attr('required', 'required');
        }
    });

    var requiredCheckboxes6 = $('.question6 :checkbox[required]');
    	requiredCheckboxes6.change(function() {
        if(requiredCheckboxes6.is(':checked')) {
            requiredCheckboxes6.removeAttr('required');
        } else {
            requiredCheckboxes6.attr('required', 'required');
        }
    });

    var requiredCheckboxes7 = $('.question7 :checkbox[required]');
    	requiredCheckboxes7.change(function() {
        if(requiredCheckboxes7.is(':checked')) {
            requiredCheckboxes7.removeAttr('required');
        } else {
            requiredCheckboxes7.attr('required', 'required');
        }
    });
});
</script>
</html>