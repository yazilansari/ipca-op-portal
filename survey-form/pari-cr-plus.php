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
<title>Pari Cr Plus - Paroxetine Prolnged Release 12.5mg + Clonazepam 0.5mg Tablets</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body class="bgbrca" style="background: #e9f1f1;">
<div class="container">
	<div class="row">
		<div class="col-md-12"><img src="images/paricrpluslogo.jpg" class="bripcalogo" alt="paricrpluslogo"></div>
	</div>
</div>

<div class="container">
	<form method="POST" action="../handler/survey_form_handler.php">
		<input type="hidden" name="brand" value="PARI CR PLUS">
		<input type="hidden" name="dr_id" value="<?php echo $_GET['id']; ?>">
		<div class="row">
			<div class="col-md-12 mb-4"><!-----1---->
				<div class="borderline" style="border-top: 8px solid #1e7777;">
					<label>1) What percentage of your practice consist of anxiety disorders?</label>
					<span>*</span>					
					<input type="hidden" name="question1" value="1) What percentage of your practice consist of anxiety disorders?">
					<div class="col-md-12 partial p-0">
						<label><input type="radio" value="0-10%" name="answer1" required> 0-10%</label>
						<label><input type="radio" value="10-30%" name="answer1" required> 10-30%</label>
						<label><input type="radio" value="30-50%" name="answer1" required> 30-50%</label>
						<label><input type="radio" value="More than 50%" name="answer1" required> More than 50%</label>						
					</div>		
				</div>				
			</div><!-----1-end--->

			<div class="col-md-12 mb-4"><!-----2---->
				<div class="borderline border-acrross">
					<label>2) Paroxetine as an anti-depressant is preferred in treatment of which of the following conditions?</label>
					<span>*</span>					
					<input type="hidden" name="question2" value="2) Paroxetine as an anti-depressant is preferred in treatment of which of the following conditions?">
					<div class="col-md-12 partial p-0">
						<label><input type="radio" value="Major Depression" name="answer2" required> Major Depression</label>
						<label><input type="radio" value="Obsessive-Compulsive Disorder" name="answer2" required> Obsessive-Compulsive Disorder</label>
						<label><input type="radio" value="Panic Disorder" name="answer2" required> Panic Disorder</label>
						<label><input type="radio" value="Social Anxiety" name="answer2" required> Social Anxiety</label>						
						<label><input type="radio" value="Post-Traumatic Stress Disorder" name="answer2" required> Post-Traumatic Stress Disorder</label>
						<label><input type="radio" value="Generalized Anxiety Disorder" name="answer2" required> Generalized Anxiety Disorder</label>						
					</div>		
				</div>				
			</div><!----2-end--->

			<div class="col-md-12 mb-4"><!----3---->
				<div class="borderline border-acrross">
					<label>3) Which of the following treatments do you prefer as an add on to SSRI therapy?</label>
					<span>*</span>					
					<input type="hidden" name="question3" value="3) Which of the following treatments do you prefer as an add on to SSRI therapy?">
					<div class="col-md-12 partial p-0">
						<label><input type="radio" value="TCAs" name="answer3" required> TCAs</label>
						<label><input type="radio" value="Benzodiazepines" name="answer3" required> Benzodiazepines</label>
						<label><input type="radio" value="Valproate" name="answer3" required> Valproate</label>
						<label><input type="radio" value="CBT" name="answer3" required> CBT</label>						
					</div>		
				</div>				
			</div><!----3-end--->


			<div class="col-md-12 mb-4"><!----4---->
				<div class="borderline border-acrross">
					<label>4) In which of the below drugs showing no complete response, do you recommend augmentation therapy?</label>
					<span>*</span>					
					<input type="hidden" name="question4" value="4) In which of the below drugs showing no complete response, do you recommend augmentation therapy?">
					<div class="col-md-12 partial p-0">
						<label><input type="radio" value="Benzodiazepines" name="answer4" required> Benzodiazepines</label>
						<label><input type="radio" value="Buspirone" name="answer4" required> Buspirone</label>
						<label><input type="radio" value="Beta Blockers" name="answer4" required> Beta Blockers</label>
						<label><input type="radio" value="Tricyclic Antidepressants" name="answer4" required> Tricyclic Antidepressants</label>						
						<label><input type="radio" value="Valproate Sodium" name="answer4" required> Valproate Sodium</label>						
					</div>		
				</div>				
			</div><!----4-end--->

			<div class="col-md-12 mb-4"><!----5---->
				<div class="borderline border-acrross">
					<label>5) Why is combined Paroxetine and Clonazepam treatment compared to Paroxetine monotherapy for panic disorder more advantageous?</label>
					<span>*</span>					
					<input type="hidden" name="question5" value="5) Why is combined Paroxetine and Clonazepam treatment compared to Paroxetine monotherapy for panic disorder more advantageous?">
					<div class="col-md-12 partial p-0">
						<label><input type="radio" value="A rapid reduction of symptoms in Mixed Anxiety Depressive Disorder" name="answer5" required> A rapid reduction of symptoms in Mixed Anxiety Depressive Disorder</label>
						<label><input type="radio" value="More rapid response than with the SSRI alone" name="answer5" required> More rapid response than with the SSRI alone</label>
						<label><input type="radio" value="Benzodiazepine taper after a few weeks may provide early benefit" name="answer5" required > Benzodiazepine taper after a few weeks may provide early benefit</label>
						<label><input type="radio" value="Avoid the potential adverse consequences of long-term combination therapy" name="answer5" required> Avoid the potential adverse consequences of long-term combination therapy</label>	
						<label><input type="radio" value="All of the above." name="answer5" required> All of the above.</label>						
					</div>		
				</div>				
			</div><!----5-end--->

			<div class="col-md-12 mb-4"><!----6---->
				<div class="borderline border-acrross">
					<label>6) Co-administration of Benzodiazepine and antidepressant treatment produces which of the following effects?</label>
					<span>*</span>					
					<input type="hidden" name="question6" value="6) Co-administration of Benzodiazepine and antidepressant treatment produces which of the following effects?">
					<div class="col-md-12 partial p-0">
						<label><input type="radio" value="Increased adverse effects" name="answer6" required> Increased adverse effects</label>
						<label><input type="radio" value="Patient reluctance to discontinue Benzodiazepine" name="answer6" required> Patient reluctance to discontinue Benzodiazepine</label>
						<label><input type="radio" value="Benzodiazepine withdrawal symptoms" name="answer6" required> Benzodiazepine withdrawal symptoms</label>
						<label><input type="radio" value="Any other" name="answer6" required> Any other</label>										
					</div>		
				</div>				
			</div><!----6-end--->

			<div class="col-md-12 mb-4"><!----7---->
				<div class="borderline border-acrross">
					<label>7) Clonazepam together with Escitalopram increases which of the below side effects:</label>
					<span>*</span>					
					<input type="hidden" name="question7" value="7) Clonazepam together with Escitalopram increases which of the below side effects:">
					<div class="col-md-12 partial p-0">
						<label><input type="radio" value="Dizziness" name="answer7" required> Dizziness</label>
						<label><input type="radio" value="Drowsiness" name="answer7" required> Drowsiness</label>
						<label><input type="radio" value="Confusion" name="answer7" required> Confusion</label>
						<label><input type="radio" value="Difficulty Concentrating" name="answer7" required> Difficulty Concentrating</label>	
						<label><input type="radio" value="Elderly, may also experience impairment in thinking, judgment, and motor coordination." name="answer7" required> Elderly, may also experience impairment in thinking, judgment, and motor coordination.</label>										
					</div>		
				</div>				
			</div><!----7-end--->

			<div class="col-md-12 mb-4"><!----8---->
				<div class="borderline border-acrross">
					<label>8) Where do you prefer bilayer technology of Paroxetine + Clonazepam (Pari CR Plus & Pari CR Forte)?</label>
					<span>*</span>					
					<input type="hidden" name="question8" value="8) Where do you prefer bilayer technology of Paroxetine + Clonazepam (Pari CR Plus & Pari CR Forte)?">
					<div class="col-md-12 partial p-0">
						<label><input type="radio" value="Rapid relief of anxiety symptoms" name="answer8" required> Rapid relief of anxiety symptoms</label>
						<label><input type="radio" value="Lesser adverse events" name="answer8" required> Lesser adverse events</label>
						<label><input type="radio" value="Better patient compliance" name="answer8" required> Better patient compliance</label>
						<label><input type="radio" value="Any other" name="answer8" required> Any other</label>											
					</div>		
				</div>				
			</div><!----8-end--->

			<div class="col-md-12 mb-4"><!----9---->
				<div class="borderline border-acrross">
					<label>9) How do you rate the bilayer technology of Paroxetine + Clonazepam in Mixed Anxiety Depressive Disorder as a therapeutic modality?</label>
					<span>*</span>					
					<input type="hidden" name="question9" value="9) How do you rate the bilayer technology of Paroxetine + Clonazepam in Mixed Anxiety Depressive Disorder as a therapeutic modality?">
					<div class="col-md-12 partial p-0">
						<label><input type="radio" value="Excellent" name="answer9" required> Excellent</label>
						<label><input type="radio" value="Good" name="answer9" required> Good</label>
						<label><input type="radio" value="Satisfactory" name="answer9" required> Satisfactory</label>
						<label><input type="radio" value="Poor" name="answer9" required> Poor</label>											
					</div>		
				</div>				
			</div><!----9-end--->


			<div class="col-md-12 mb-4"><!----10---->
				<div class="borderline border-acrross">
					<label>10) For how long do you recommend Paroxetine + Clonazepam in Mixed Anxiety Depressive Disorder patients?</label>
					<span>*</span>					
					<input type="hidden" name="question10" value="10) For how long do you recommend Paroxetine + Clonazepam in Mixed Anxiety Depressive Disorder patients?">
					<div class="col-md-12 partial p-0">
						<label><input type="radio" value="1-2 months" name="answer10" required> 1-2 months</label>
						<label><input type="radio" value="3-4 months" name="answer10"> 3-4 months</label>
						<label><input type="radio" value="4-6 months" name="answer10"> 4-6 months</label>
						<label><input type="radio" value="More than 6 months" name="answer10"> More than 6 months</label>											
					</div>		
				</div>				
			</div><!----10-end--->

			<div class="col-md-12 mb-4"><!----10---->
				<div class="submitbtn">
					<input type="submit" value="SUBMIT" name="pari_submit">
				</div>
			</div>
		</div>
	</form>
</div>	

</body>
<script src="js/jquery.3.6.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>