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
<title>Vipca - Vortioxetine 5, 10, 20 mg Tablets</title>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body class="bgbrca" style="background: #eeeeee;">
<div class="container">
	<div class="row">
		<div class="col-md-12"><img src="images/vipca.png" class="vipca" alt="logo"></div>
	</div>
</div>

<div class="container">
	<form method="POST" action="../handler/survey_form_handler.php">
		<input type="hidden" name="brand" value="VIPCA">
		<input type="hidden" name="dr_id" value="<?php echo $_GET['id']; ?>">
		<div class="row">
			<div class="col-md-12 mb-4"><!-----1---->
				<div class="borderline" style="border-top: 8px solid #525252;">
					<label>1) What percentage of your patients are prescribed Vortioxetine?</label>
					<span>*</span>					
					<input type="hidden" name="question1" value="1) What percentage of your patients are prescribed Vortioxetine?">
					<div class="col-md-12 partial p-0 question1">
						<label><input type="checkbox" value="<25%" name="answer1[]" required> <25%</label>
						<label><input type="checkbox" value="25-50%" name="answer1[]" required>25-50%</label>
						<label><input type="checkbox" value="50-75%" name="answer1[]" required>50-75%</label>
						<label><input type="checkbox" value=">75%" name="answer1[]" required>>75%</label>						
					</div>		
				</div>				
			</div><!-----1-end--->

			<div class="col-md-12 mb-4"><!-----2---->
				<div class="borderline border-acrross">
					<label>2) What is the age group of patients that you prescribe Vortioxetine to in your practice?</label>
					<span>*</span>					
					<input type="hidden" name="question2" value="2) What is the age group of patients that you prescribe Vortioxetine to in your practice?">
					<div class="col-md-12 partial p-0 question2">
						<label><input type="checkbox" value="Young Adults (19-25Y)" name="answer2[]" required> Young Adults (19-25Y)</label>
						<label><input type="checkbox" value="Middle-aged Adults (26-59Y)" name="answer2[]" required> Middle-aged Adults (26-59Y)</label>
						<label><input type="checkbox" value="Elderly (>60Y)" name="answer2[]" required> Elderly (>60Y)</label>						
					</div>		
				</div>				
			</div><!----2-end--->

			<div class="col-md-12 mb-4"><!----3---->
				<div class="borderline border-acrross">
					<label>3) Have your patients tried other Antidepressants prior to initiation with Vortioxetine?</label>
					<span>*</span>					
					<input type="hidden" name="question3" value="3) Have your patients tried other Antidepressants prior to initiation with Vortioxetine?">
					<div class="col-md-12 partial p-0 question3">
						<label><input type="checkbox" value="Yes" name="answer3[]" required> Yes</label>
						<label><input type="checkbox" value="No" name="answer3[]"> No</label>						
					</div>		
				</div>				
			</div><!----3-end--->


			<div class="col-md-12 mb-4"><!----4---->
				<div class="borderline border-acrross">
					<label>4) If you do NOT routinely prescribe Vortioxetine, please choose a reason from the following choices:</label>
					<span>*</span>					
					<input type="hidden" name="question4" value="4) If you do NOT routinely prescribe Vortioxetine, please choose a reason from the following choices:">
					<div class="col-md-12 partial p-0 question4">
						<label><input type="checkbox" value="Currently lack of familiarity with the literature on Vortioxetine." name="answer4[]" required> Currently lack of familiarity with the literature on Vortioxetine.</label>
						<label><input type="checkbox" value="Feel there is not enough evidence to support their routine use in clinical practice." name="answer4[]" required> Feel there is not enough evidence to support their routine use in clinical practice.</label>
						<label><input type="checkbox" value="Believe the efficacy of Vortioxetine to treat MDD is inferior to or does not provide additional benefit over standard therapeutics." name="answer4[]" required> Believe the efficacy of Vortioxetine to treat MDD is inferior to, or does not provide additional benefit over standard therapeutics.</label>
						<label><input type="checkbox" value="Other" name="answer4[]" required> Other: <input type="text" name="other4"></label>						
					</div>		
				</div>				
			</div><!----4-end--->

			<div class="col-md-12 mb-4"><!----5---->
				<div class="borderline border-acrross">
					<label>5) What sources of information prompted your prescription of Vortioxetine in clinical practice? (Choose all that apply).</label>
					<span>*</span>					
					<input type="hidden" name="question5" value="5) What sources of information prompted your prescription of Vortioxetine in clinical practice? (Choose all that apply).">
					<div class="col-md-12 partial p-0 question5">
						<label><input type="checkbox" value="Continuing Medical Education" name="answer5[]" required> Continuing Medical Education</label>
						<label><input type="checkbox" value="Original Research Articles" name="answer5[]" required> Original Research Articles</label>
						<label><input type="checkbox" value="Review Articles" name="answer5[]" required> Review Articles</label>
						<label><input type="checkbox" value="Clinical Care Guidelines" name="answer5[]" required> Clinical Care Guidelines</label>
						<label><input type="checkbox" value="Internet Sources (UpToDate-Cochrane database-Medline etc.)" name="answer5[]" required> Internet Sources (UpToDate®,Cochrane database,Medline etc.)</label>
						<label><input type="checkbox" value="Peer Practice Patterns" name="answer5[]" required> Peer Practice Patterns</label>
						<label><input type="checkbox" value="Other" name="answer5[]" required> Other: <input type="text" name="other5"></label>						
					</div>		
				</div>				
			</div><!----5-end--->

			<div class="col-md-12 mb-4"><!----6---->
				<div class="borderline border-acrross">
					<label>6) Check all indications for which you routinely prescribe Vortioxetine.</label>
					<span>*</span>					
					<input type="hidden" name="question6" value="6) Check all indications for which you routinely prescribe Vortioxetine.">
					<div class="col-md-12 partial p-0 question6">
						<label><input type="checkbox" value="Major Depressive Disorder" name="answer6[]" required> Major Depressive Disorder</label>
						<label><input type="checkbox" value="Generalized Anxiety Disorder" name="answer6[]" required> Generalized Anxiety Disorder</label>
						<label><input type="checkbox" value="Chronic Neuropathic Pain" name="answer6[]" required> Chronic Neuropathic Pain</label>
						<label><input type="checkbox" value="Bipolar Disorder" name="answer6[]" required> Bipolar Disorder</label>
						<label><input type="checkbox" value="Cognitive Enhancement in Major depression" name="answer6[]" required> Cognitive Enhancement in Major depression</label>
					</div>		
				</div>				
			</div><!----6-end--->


			<div class="col-md-12 mb-4"><!----7---->
				<div class="borderline border-acrross">
					<label>7) What is your preference for initiating Vortioxetine treatment?</label>
					<span>*</span>					
					<input type="hidden" name="question7" value="7) What is your preference for initiating Vortioxetine treatment?">
					<div class="col-md-12 partial p-0 question7">
						<label><input type="checkbox" value="Add-on/ Concomitant" name="answer7[]" required> Add-on/ Concomitant</label>
						<label><input type="checkbox" value="Monotherapy" name="answer7[]" required> Monotherapy</label>						
					</div>		
				</div>				
			</div><!----7-end--->

			<div class="col-md-12 mb-4"><!----8---->
				<div class="borderline border-acrross">
					<label>8) What is the average duration of Vortioxetine treatment each patient receives in your clinical practice?</label>
					<span>*</span>					
					<input type="hidden" name="question8" value="8) What is the average duration of Vortioxetine treatment each patient receives in your clinical practice?">
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
									<tr class="bgcolor1 question8">
										<td>Select</td>
										<td class="text-center"><input type="checkbox" value="0-3 mths" name="answer8[]" required></td>
										<td class="text-center"><input type="checkbox" value="3-6 mths" name="answer8[]" required></td>
										<td class="text-center"><input type="checkbox" value="6-9 mths" name="answer8[]" required></td>
										<td class="text-center"><input type="checkbox" value="9-12 mths" name="answer8[]" required></td>
										<td class="text-center"><input type="checkbox" value=">1 Yr" name="answer8[]" required></td>
									</tr>									
								</tbody>
							</table>
						</div>
					<!-- <div class="col-md-12 partial p-0">
						<label><input type="checkbox" name=""> 5mg once daily</label>
						<label><input type="checkbox" name=""> 10mg once daily</label>
						<label><input type="checkbox" name=""> 15mg once daily</label>
						<label><input type="checkbox" name=""> 20mg once daily</label>											
					</div> -->		
				</div>				
			</div><!----8-end--->


			<div class="col-md-12 mb-4"><!----9---->
				<div class="borderline border-acrross">
					<label>9) At which point of time with Vortioxetine  you  usually find visible improvement in depression symptoms?</label>
					<span>*</span>					
					<input type="hidden" name="question9" value="9) At which point of time with Vortioxetine  you  usually find visible improvement in depression symptoms?">
					<div class="pregabalin pregaweek">
							<table class="table-responsive" width="100%" cellpadding="1" cellspacing="0">
								<thead>
									<tr>
										<th class="firstcol"></th>
										<th class="text-center">0-2 weeks</th>
										<th class="text-center">2-4 weeks</th>
										<th class="text-center">4-6 weeks</th>
										<th class="text-center">6-8 weeks</th>
										<th class="text-center">>8 weeks</th>
									</tr>
								</thead>
								<tbody>
									<tr class="bgcolor1 question9">
										<td>Select</td>
										<td class="text-center"><input type="checkbox" value="0-2 weeks" name="answer9[]" required></td>
										<td class="text-center"><input type="checkbox" value="2-4 weeks" name="answer9[]" required></td>
										<td class="text-center"><input type="checkbox" value="4-6 weeks" name="answer9[]" required></td>
										<td class="text-center"><input type="checkbox" value="6-8 weeks" name="answer9[]" required></td>
										<td class="text-center"><input type="checkbox" value=">8 weeks" name="answer9[]" required></td>
									</tr>									
								</tbody>
							</table>
						</div>
					<!-- <div class="col-md-12 partial p-0">
						<label><input type="checkbox" name=""> 5mg once daily</label>
						<label><input type="checkbox" name=""> 10mg once daily</label>
						<label><input type="checkbox" name=""> 15mg once daily</label>
						<label><input type="checkbox" name=""> 20mg once daily</label>											
					</div> -->		
				</div>				
			</div><!----9-end--->

			<div class="col-md-12 mb-4"><!----6---->
				<div class="borderline border-acrross">
					<label>10) What is the usual starting dose of Vortioxetine initiated for patients in your practice?.</label>
					<span>*</span>					
					<input type="hidden" name="question10" value="10) What is the usual starting dose of Vortioxetine initiated for patients in your practice?.">
					<div class="col-md-12 partial p-0 question10">
						<label><input type="checkbox" value="5mg once daily" name="answer10[]" required> 5mg once daily</label>
						<label><input type="checkbox" value="10mg once daily" name="answer10[]" required> 10mg once daily</label>
						<label><input type="checkbox" value="15mg once daily" name="answer10[]" required> 15mg once daily</label>
						<label><input type="checkbox" value="20mg once daily" name="answer10[]" required> 20mg once daily</label>						
					</div>		
				</div>				
			</div><!----10-end--->
			
			<div class="col-md-12 mb-4"><!----11---->
				<div class="borderline border-acrross">
					<label>11) At  what maintenance dose do you find Vortioxetine efficacious?.</label>
					<span>*</span>					
					<input type="hidden" name="question11" value="11) At  what maintenance dose do you find Vortioxetine efficacious?.">
					<div class="col-md-12 partial p-0 question11">
						<label><input type="checkbox" value="10 mg/day" name="answer11[]" required> 10 mg/day</label>
						<label><input type="checkbox" value="20 mg/day" name="answer11[]" required> 20 mg/day</label>
						<label><input type="checkbox" value=">20 mg/day" name="answer11[]" required> >20 mg/day</label>						
					</div>		
				</div>				
			</div><!----11-end--->

			<div class="col-md-12 mb-4"><!----12---->
				<div class="borderline border-acrross">
					<label>12) What is the overall advantage of  Vortioxetine therapy when compared to other antidepressants as per your clinical experience?</label>
					<span>*</span>					
					<input type="hidden" name="question12" value="12) What is the overall advantage of  Vortioxetine therapy when compared to other antidepressants as per your clinical experience?">
					<div class="col-md-12 partial p-0 question12">
						<label><input type="checkbox" value="Rapid symptom control" name="answer12[]" required> Rapid symptom control</label>
						<label><input type="checkbox" value="Better Tolerability" name="answer12[]" required> Better Tolerability</label>
						<label><input type="checkbox" value="Improved Cognitive Function" name="answer12[]" required> Improved Cognitive Function</label>						
						<label><input type="checkbox" value="Lesser Chance of Drug-Drug interaction" name="answer12[]" required> Lesser Chance of Drug-Drug interaction</label>				
						<label><input type="checkbox" value="Better remission rate" name="answer12[]" required> Better remission rate</label>						
						<label><input type="checkbox" value="All of the above" name="answer12[]" required> All of the above</label>						
					</div>		
				</div>				
			</div><!----12-end--->

			<div class="col-md-12 mb-4"><!----13---->
				<div class="borderline border-acrross">
					<label>13) What all parameters in the cognitive domain  do you observe a positive impact of Vortioxetine in? (Kindly tick one or more relevant box)</label>
					<span>*</span>					
					<input type="hidden" name="question13" value="13) What all parameters in the cognitive domain  do you observe a positive impact of Vortioxetine in? (Kindly tick one or more relevant box)">
					<div class="col-md-12 partial p-0">
						<div class="pregabalin">
							<table class="table-responsive vipcatable" width="100%" cellpadding="1" cellspacing="0">
								<thead>
									<tr>
										<th class="firstcol"></th>
										<th class="text-center">Vortioxetine</th>										
									</tr>
								</thead>
								<tbody>
									<tr class="bgcolor1 question13">
										<td>Cognitive Domain</td>
										<td class="text-center"><input type="checkbox" value="Cognitive Domain-Vortioxetine" name="answer13[]" required></td>	
									</tr>
									<tr class="bgcolor1 question13">
										<td>Attention</td>
										<td class="text-center"><input type="checkbox" value="Attention-Vortioxetine" name="answer13[]" required></td>	
									</tr>
									<tr class="bgcolor1 question13">
										<td>Processing Speed</td>
										<td class="text-center"><input type="checkbox" value="Processing Speed-Vortioxetine" name="answer13[]" required></td>	
									</tr>									
									<tr class="bgcolor1 question13">
										<td>Executive function</td>
										<td class="text-center"><input type="checkbox" value="Executive function-Vortioxetine" name="answer13[]" required></td>	
									</tr>
									<tr class="bgcolor1 question13">
										<td>Learning</td>
										<td class="text-center"><input type="checkbox" value="Learning-Vortioxetine" name="answer13[]" required></td>	
									</tr>
									<tr class="bgcolor1 question13">
										<td>Memory</td>
										<td class="text-center"><input type="checkbox" value="Memory-Vortioxetine" name="answer13[]" required></td>	
									</tr>
								</tbody>
							</table>
						</div>				
					</div>		
				</div>				
			</div><!----13-end--->

			<div class="col-md-12 mb-4"><!----14---->
				<div class="borderline border-acrross">
					<label>14) What are your observations regarding TEAEs (Treatment Emergent Adverse Events) following Vortioxetine treatment?</label>
					<span>*</span>					
					<input type="hidden" name="question14" value="14) What are your observations regarding TEAEs (Treatment Emergent Adverse Events) following Vortioxetine treatment?">
					<div class="col-md-12 partial p-0 question14">
						<label><input type="checkbox" value="CNS related side effects (Dizziness)" name="answer14[]" required> CNS related side effects (Dizziness)</label>
						<label><input type="checkbox" value="Insomnia" name="answer14[]" required> Insomnia</label>
						<label><input type="checkbox" value="Weight Gain" name="answer14[]" required> Weight Gain</label>						
						<label><input type="checkbox" value="GIT complaints(Nausea-Vomiting-Diarrhea)" name="answer14[]" required> GIT complaints(Nausea,Vomiting,Diarrhea)</label>				
						<label><input type="checkbox" value="Increased risk of suicidal thoughts & behaviour" name="answer14[]" required> Increased risk of suicidal thoughts & behaviour</label>						
						<label><input type="checkbox" value="Sexual function Impairment" name="answer14[]" required> Sexual function Impairment</label>						
						<label><input type="checkbox" value="Other" name="answer14[]" required> Other: <input type="text" name="other14"></label>						
					</div>		
				</div>				
			</div><!----14-end--->

			<div class="col-md-12 mb-4"><!----6---->
				<div class="borderline border-acrross">
					<label>15) Sexual dysfunction, such as decreased libido, abnormal orgasm, delayed ejaculation, and erectile dysfunction, are well-known side effects of SSRIs and SNRIs. What do you feel about incidence of sexual dysfunction  in vortioxetine as compared to other antidepressants?</label>
					<span>*</span>					
					<input type="hidden" name="question15" value="15) Sexual dysfunction, such as decreased libido, abnormal orgasm, delayed ejaculation, and erectile dysfunction, are well-known side effects of SSRIs and SNRIs. What do you feel about incidence of sexual dysfunction  in vortioxetine as compared to other antidepressants?">
					<div class="col-md-12 partial p-0 question15">
						<label><input type="checkbox" value="More" name="answer15[]" required> More</label>
						<label><input type="checkbox" value="Less" name="answer15[]" required> Less</label>
						<label><input type="checkbox" value="Similar" name="answer15[]" required> Similar</label>						
					</div>		
				</div>				
			</div><!----6-end--->

			<div class="col-md-12 mb-4"><!----7---->
				<div class="borderline border-acrross">
					<label>16) What is the retention rate for patients on Vortioxetine treatment in your practice?</label>
					<span>*</span>					
					<input type="hidden" name="question16" value="16) What is the retention rate for patients on Vortioxetine treatment in your practice?">
					<div class="col-md-12 partial p-0 question16">
						<label><input type="checkbox" value="<25%" name="answer16[]" required> <25%</label>
						<label><input type="checkbox" value="25-50%" name="answer16[]" required> 25-50%</label>									
						<label><input type="checkbox" value="50-75%" name="answer16[]" required> 50-75%</label>
						<label><input type="checkbox" value=">75%" name="answer16[]" required> >75%</label>	
					</div>		
				</div>				
			</div><!----7-end--->


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
					<input type="submit" value="SUBMIT" name="vipca_submit">
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

    var requiredCheckboxes11 = $('.question11 :checkbox[required]');
    	requiredCheckboxes11.change(function() {
        if(requiredCheckboxes11.is(':checked')) {
            requiredCheckboxes11.removeAttr('required');
        } else {
            requiredCheckboxes11.attr('required', 'required');
        }
    });

    var requiredCheckboxes12 = $('.question12 :checkbox[required]');
    	requiredCheckboxes12.change(function() {
        if(requiredCheckboxes12.is(':checked')) {
            requiredCheckboxes12.removeAttr('required');
        } else {
            requiredCheckboxes12.attr('required', 'required');
        }
    });

   var requiredCheckboxes13 = $('.question13 :checkbox[required]');
    	requiredCheckboxes13.change(function() {
        if(requiredCheckboxes13.is(':checked')) {
            requiredCheckboxes13.removeAttr('required');
        } else {
            requiredCheckboxes13.attr('required', 'required');
        }
    });

    var requiredCheckboxes14 = $('.question14 :checkbox[required]');
    	requiredCheckboxes14.change(function() {
        if(requiredCheckboxes14.is(':checked')) {
            requiredCheckboxes14.removeAttr('required');
        } else {
            requiredCheckboxes14.attr('required', 'required');
        }
    });

    var requiredCheckboxes15 = $('.question15 :checkbox[required]');
    	requiredCheckboxes15.change(function() {
        if(requiredCheckboxes15.is(':checked')) {
            requiredCheckboxes15.removeAttr('required');
        } else {
            requiredCheckboxes15.attr('required', 'required');
        }
    });

    var requiredCheckboxes16 = $('.question16 :checkbox[required]');
    	requiredCheckboxes16.change(function() {
        if(requiredCheckboxes16.is(':checked')) {
            requiredCheckboxes16.removeAttr('required');
        } else {
            requiredCheckboxes16.attr('required', 'required');
        }
    });
});
</script>
</html>