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
<title>Bripca - Brivaracetam</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body class="bgbrca">
<div class="container">
	<div class="row">
		<div class="col-md-12"><img src="images/bripcalogo.png" class="bripcalogo" alt="logo"></div>
	</div>
</div>

<div class="container">
	<form method="POST" action="../handler/survey_form_handler.php">
		<input type="hidden" name="brand" value="BRIPCA">
		<input type="hidden" name="dr_id" value="<?php echo $_GET['id']; ?>">
		<div class="row">
			<div class="col-md-12 mb-4"><!-----1---->
				<div class="borderline">
					<label>1) Please select all indications for which you routinely prescribe Brivaracetam</label>
					<span>*</span>					
					<input type="hidden" name="question1" value="1) Please select all indications for which you routinely prescribe Brivaracetam">
					<div class="col-md-12 partial p-0 question1">
						<label><input type="checkbox" value="Partial Onset (Focal) Seizures" name="answer1[]" required> Partial Onset (Focal) Seizures</label>
						<label><input type="checkbox" value="Generalized Tonic Clonic Seizures" name="answer1[]" required> Generalized Tonic Clonic Seizures</label>
						<label><input type="checkbox" value="Myoclonic Epilepsy" name="answer1[]" required> Myoclonic Epilepsy</label>
						<label><input type="checkbox" value="Refractory epilepsy" name="answer1[]" required> Refractory epilepsy</label>
						<label><input type="checkbox" value="Others" name="answer1[]" required> Others</label>
					</div>		
				</div>				
			</div><!-----1-end--->

			<div class="col-md-12 mb-4"><!-----2---->
				<div class="borderline border-acrross">
					<label>2) What is the usual starting dose of Tab Brivaracetam initiated for patients in your practice?</label>
					<span>*</span>					
					<input type="hidden" name="question2" value="2) What is the usual starting dose of Tab Brivaracetam initiated for patients in your practice?">
					<div class="col-md-12 partial p-0 question2">
						<label><input type="checkbox" value="25 msg B.I.D" name="answer2[]" required> 25 msg B.I.D</label>
						<label><input type="checkbox" value="50 mg B.I.D" name="answer2[]" required> 50 mg B.I.D</label>
						<label><input type="checkbox" value="100 mg B.I.D" name="answer2[]" required> 100 mg B.I.D</label>
						<label><input type="checkbox" value="200 mg daily" name="answer2[]" required> > 200 mg daily</label>						
					</div>		
				</div>				
			</div><!----2-end--->

			<div class="col-md-12 mb-4"><!----3---->
				<div class="borderline border-acrross">
					<label>3) What is the usual maintenance dose of Tab Brivaracetam for patients in your practice?</label>
					<span>*</span>					
					<input type="hidden" name="question3" value="3) What is the usual maintenance dose of Tab Brivaracetam for patients in your practice?">
					<div class="col-md-12 partial p-0 question3">
						<label><input type="checkbox" value="25 mg B.I.D" name="answer3[]" required> 25 mg B.I.D</label>
						<label><input type="checkbox" value="50 mg B.I.D" name="answer3[]" required> 50 mg B.I.D</label>
						<label><input type="checkbox" value="100 mg B.I.D" name="answer3[]" required> 100 mg B.I.D</label>
						<label><input type="checkbox" value="200 mg daily" name="answer3[]" required> > 200 mg daily</label>						
					</div>		
				</div>				
			</div><!----3-end--->


			<div class="col-md-12 mb-4"><!----4---->
				<div class="borderline border-acrross">
					<label>4) How many patients have you shifted from Levetiracetam to Brivaracetam?</label>
					<span>*</span>					
					<input type="hidden" name="question4" value="4) How many patients have you shifted from Levetiracetam to Brivaracetam?">
					<div class="col-md-12 partial p-0 question4">
						<label><input type="checkbox" value="< 25%" name="answer4[]" required> < 25%</label>
						<label><input type="checkbox" value="20-50%" name="answer4[]" required> 20-50%</label>
						<label><input type="checkbox" value="50-75%" name="answer4[]" required> 50-75%</label>
						<label><input type="checkbox" value=" > 75%" name="answer4[]" required> > 75%</label>						
					</div>		
				</div>				
			</div><!----4-end--->

			<div class="col-md-12 mb-4"><!----5---->
				<div class="borderline border-acrross">
					<label>5) What is the reason for Switch to Brivaracetam?</label>
					<span>*</span>					
					<input type="hidden" name="question5" value="5) What is the reason for Switch to Brivaracetam?">
					<div class="col-md-12 partial p-0 question5">
						<label><input type="checkbox" value="Better efficacy" name="answer5[]" required> Better efficacy</label>
						<label><input type="checkbox" value="Better Side effect profile" name="answer5[]" required> Better Side effect profile</label>
						<label><input type="checkbox" value="Better Patient Compliance" name="answer5[]" required> Better Patient Compliance</label>
						<label><input type="checkbox" value="Others" name="answer5[]" required> Others</label>						
					</div>		
				</div>				
			</div><!----5-end--->

			<div class="col-md-12 mb-4"><!----6---->
				<div class="borderline border-acrross">
					<label>6) What are the benefits you have observed with Brivaracetam as compared to Levetiracetam?</label>
					<span>*</span>					
					<input type="hidden" name="question6" value="6) What are the benefits you have observed with Brivaracetam as compared to Levetiracetam?">
					<div class="col-md-12 partial p-0 question6">
						<label><input type="checkbox" value="Better Patient Compliance" name="answer6[]" required> Better Patient Compliance</label>
						<label><input type="checkbox" value="Lesser Side Effects" name="answer6[]" required> Lesser Side Effects</label>
						<label><input type="checkbox" value="Rapid Seizure Control" name="answer6[]" required> Rapid Seizure Control</label>
						<label><input type="checkbox" value="Better Efficacy" name="answer6[]" required> Better Efficacy</label>						
						<label><input type="checkbox" value="No Benefit" name="answer6[]" required> No Benefit</label>						
					</div>		
				</div>				
			</div><!----6-end--->

			<div class="col-md-12 mb-4"><!----7---->
				<div class="borderline border-acrross">
					<label>7) In which of the following patients do you commonly use Brivaracetam injection?</label>
					<span>*</span>					
					<input type="hidden" name="question7" value="7) In which of the following patients do you commonly use Brivaracetam injection?">
					<div class="col-md-12 partial p-0 question7">
						<label><input type="checkbox" value="Status Epilepticus" name="answer7[]" required> Status Epilepticus</label>
						<label><input type="checkbox" value="Head Trauma" name="answer7[]" required> Head Trauma</label>
						<label><input type="checkbox" value="Brain Tumor" name="answer7[]" required> Brain Tumor</label>
						<label><input type="checkbox" value="Others" name="answer7[]" required> Others</label>											
					</div>		
				</div>				
			</div><!----7-end--->

			<div class="col-md-12 mb-4"><!----8---->
				<div class="borderline border-acrross">
					<label>8) In which of the following patient group do you commonly use Brivaracetam Syrup?</label>
					<span>*</span>					
					<input type="hidden" name="question8" value="8) In which of the following patient group do you commonly use Brivaracetam Syrup?">
					<div class="col-md-12 partial p-0 question8">
						<label><input type="checkbox" value="Age less than five years" name="answer8[]" required> Age less than five years</label>
						<label><input type="checkbox" value="Poor compliance to tablet" name="answer8[]" required> Poor compliance to tablet</label>
						<label><input type="checkbox" value="Patient with Ryles tube" name="answer8[]" required> Patient with Ryles tube</label>
						<label><input type="checkbox" value="Others" name="answer8[]" required> Others</label>											
					</div>		
				</div>				
			</div><!----8-end--->

			<div class="col-md-12 mb-4"><!----9---->
				<div class="borderline border-acrross">
					<label>9) In which of the following conditions you use Brivaracetam syrup?</label>
					<span>*</span>					
					<input type="hidden" name="question9" value="9) In which of the following conditions you use Brivaracetam syrup?">
					<div class="col-md-12 partial p-0 question9">
						<label><input type="checkbox" value="Benign rolandic epilepsy (BRE)" name="answer9[]" required> Benign rolandic epilepsy (BRE)</label>
						<label><input type="checkbox" value="Childhood absence epilepsy (CAE)" name="answer9[]" required> Childhood absence epilepsy (CAE)</label>
						<label><input type="checkbox" value="Juvenile myoclonic epilepsy (JME)" name="answer9[]" required> Juvenile myoclonic epilepsy (JME)</label>
						<label><input type="checkbox" value="Infantile spasms (or West syndrome)" name="answer9[]" required> Infantile spasms (or West syndrome)</label>				
						<label><input type="checkbox" value="Lennox-Gastaut syndrome (LGS)" name="answer9[]" required> Lennox-Gastaut syndrome (LGS)</label>				
						<label><input type="checkbox" value="Others" name="answer9[]" required> Others</label>											
					</div>		
				</div>				
			</div><!----9-end--->


			<div class="col-md-12 mb-4"><!----10---->
				<div class="borderline border-acrross">
					<label>10) What is the retention rate for patients on Brivaracetam treatment in your practice?</label>
					<span>*</span>					
					<input type="hidden" name="question10" value="10) What is the retention rate for patients on Brivaracetam treatment in your practice?">
					<div class="col-md-12 partial p-0 question10">
						<label><input type="checkbox" value="< 25%" name="answer10[]" required> < 25%</label>
						<label><input type="checkbox" value="25 - 50%" name="answer10[]" required> 25 - 50%</label>
						<label><input type="checkbox" value="50 - 75%" name="answer10[]" required> 50 - 75%</label>
						<label><input type="checkbox" value="> 75%" name="answer10[]" required> > 75%</label>											
					</div>		
				</div>				
			</div><!----10-end--->

			<div class="col-md-12 mb-4"><!----10---->
				<div class="submitbtn">
					<input type="submit" value="SUBMIT" name="bripca_submit">
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

    var requiredCheckboxes8 = $('.question8 :checkbox[required]');
    	requiredCheckboxes8.change(function() {
        if(requiredCheckboxes8.is(':checked')) {
            requiredCheckboxes8.removeAttr('required');
        } else {
            requiredCheckboxes8.attr('required', 'required');
        }
    });

    var requiredCheckboxes9 = $('.question9 :checkbox[required]');
    	requiredCheckboxes9.change(function() {
        if(requiredCheckboxes9.is(':checked')) {
            requiredCheckboxes9.removeAttr('required');
        } else {
            requiredCheckboxes9.attr('required', 'required');
        }
    });

    var requiredCheckboxes10 = $('.question10 :checkbox[required]');
    	requiredCheckboxes10.change(function() {
        if(requiredCheckboxes10.is(':checked')) {
            requiredCheckboxes10.removeAttr('required');
        } else {
            requiredCheckboxes10.attr('required', 'required');
        }
    });
});
</script>
</html>