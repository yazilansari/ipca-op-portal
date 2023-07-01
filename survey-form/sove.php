<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
<title>Ipca | Innovex - Zolpidem Clinical Practice Documentation</title>
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
		<input type="hidden" name="brand" value="SOVE">
		<input type="hidden" name="dr_id" value="<?php echo $_GET['id']; ?>">
		<div class="row">
			<div class="col-md-12 mb-4"><!-----1---->
				<div class="borderline" style="border-top: 8px solid #525252;">
					<label>1) What is primary cause of insomnia do you observe in your clinical practice?</label>
					<span>*</span>					
					<input type="hidden" name="question1" value="1) What is primary cause of insomnia do you observe in your clinical practice?">
					<div class="col-md-12 partial p-0 question1">
						<label><input type="checkbox" name="answer1[]" value="A. Anxiety & Depression" required> A. Anxiety & Depression</label>
						<label><input type="checkbox" name="answer1[]" value="B. Metabolic disorders" required>B. Metabolic disorders</label>
						<label><input type="checkbox" name="answer1[]" value="C. Bipolar disorders" required>C. Bipolar disorders</label>
						<label><input type="checkbox" name="answer1[]" value="Other" required>Other: <input type="text" name="other1"></label>						
					</div>		
				</div>				
			</div><!-----1-end--->

			<div class="col-md-12 mb-4"><!-----2---->
				<div class="borderline border-acrross">
					<label>2) What would be your first choice of molecule in the Management of Insomnia?</label>
					<span>*</span>					
					<input type="hidden" name="question2" value="2) What would be your first choice of molecule in the Management of Insomnia?">
					<div class="col-md-12 partial p-0 question2">
						<label><input type="checkbox" name="answer2[]" value="A. Zolpidem" required> A. Zolpidem</label>
						<label><input type="checkbox" name="answer2[]" value="B. Clonazepam" required> B. Clonazepam</label>
						<label><input type="checkbox" name="answer2[]" value="C. Alprazolam" required> C. Alprazolam</label>						
						<label><input type="checkbox" name="answer2[]" value="Other" required> Other: <input type="text" name="other2"></label>				
					</div>		
				</div>				
			</div><!----2-end--->


			<div class="col-md-12 mb-4"><!----3---->
				<div class="borderline border-acrross">
					<label>3) Which strength do you prescribe of Zolpidem to treat the adult age & elder age group of patients in the management of Insomnia ? </label>
					<span>*</span>					
					<input type="hidden" name="question3_5_mg" value="3) Which strength do you prescribe of Zolpidem to treat the adult age & elder age group of patients in the management of Insomnia ? (5 mg)">
					<input type="hidden" name="question3_10_mg" value="3) Which strength do you prescribe of Zolpidem to treat the adult age & elder age group of patients in the management of Insomnia ? (10 mg)">
					<input type="hidden" name="question3_625_mg" value="3) Which strength do you prescribe of Zolpidem to treat the adult age & elder age group of patients in the management of Insomnia ? (6.25 mg)">
					<input type="hidden" name="question3_125_mg" value="3) Which strength do you prescribe of Zolpidem to treat the adult age & elder age group of patients in the management of Insomnia ? (12.5 mg)">
					<div class="col-md-12 partial p-0">
						<div class="pregabalin">
							<table class="table-responsive vipcatable" width="100%" cellpadding="1" cellspacing="0">
								<thead>
									<tr>
										<th class="firstcol"></th>
										<th class="text-center">Adult age</th>
										<th class="text-center">Elderly age</th>
									</tr>
								</thead>
								<tbody>
									<tr class="bgcolor1 question31">
										<td>5 mg</td>
										<td class="text-center"><input type="checkbox" value="Adult age" name="answer3_5_mg[]" required></td>
										<td class="text-center"><input type="checkbox" value="Elderly age" name="answer3_5_mg[]" required></td>
									</tr>
									<tr class="bgcolor1 question32">
										<td>10 mg</td>
										<td class="text-center"><input type="checkbox" value="Adult age" name="answer3_10_mg[]" required></td>
										<td class="text-center"><input type="checkbox" value="Elderly age" name="answer3_10_mg[]" required></td>
									</tr>
									<tr class="bgcolor1 question33">
										<td>6.25 mg</td>
										<td class="text-center"><input type="checkbox" value="Adult age" name="answer3_625_mg[]" required></td>
										<td class="text-center"><input type="checkbox" value="Elderly age" name="answer3_625_mg[]" required></td>
									</tr>
									<tr class="bgcolor1 question34">
										<td>12.5 mg</td>
										<td class="text-center"><input type="checkbox" value="Adult age" name="answer3_125_mg[]" required></td>
										<td class="text-center"><input type="checkbox" value="Elderly age" name="answer3_125_mg[]" required></td>
									</tr>									
								</tbody>
							</table>
						</div>				
					</div>		
				</div>				
			</div><!----3-end--->

			<div class="col-md-12 mb-4"><!----4---->
				<div class="borderline border-acrross">
					<label>4) What Percentage of patients suffering from insomnia, do you see in your clinical practice?</label>
					<span>*</span>					
					<input type="hidden" name="question4" value="4) What Percentage of patients suffering from insomnia, do you see in your clinical practice?">
					<div class="col-md-12 partial p-0 question4">
						<label><input type="checkbox" name="answer4[]" value="<25%" required> <25%</label>
						<label><input type="checkbox" name="answer4[]" value="25-50 %" required> 25-50 %</label>
						<label><input type="checkbox" name="answer4[]" value="50-75 %" required> 50-75 %</label>
						<label><input type="checkbox" name="answer4[]" value=">75%" required> >75%</label>						
					</div>		
				</div>				
			</div><!----4-end--->

			<div class="col-md-12 mb-4"><!----5---->
				<div class="borderline border-acrross">
					<label>5) What would be the ideal duration therapy of zolpidem in the management of InsomnIa?</label>
					<span>*</span>					
					<input type="hidden" name="question5" value="5) What would be the ideal duration therapy of zolpidem in the management of InsomnIa?">
					<div class="col-md-12 partial p-0 question5">
						<label><input type="checkbox" name="answer5[]" value="0-2 Weeks" required> 0-2 Weeks</label>
						<label><input type="checkbox" name="answer5[]" value="2-4 Weeks" required> 2-4 Weeks</label>									
						<label><input type="checkbox" name="answer5[]" value="4-6 Weeks" required> 4-6 Weeks</label>						
						<label><input type="checkbox" name="answer5[]" value="6-8 Weeks" required> 6-8 Weeks</label>						
					</div>		
				</div>				
			</div><!----7-end--->

			<div class="col-md-12 mb-4"><!----8---->
				<div class="borderline border-acrross">
					<label>6) Doctor in what type of insomnia problem do you prefer extended release formulation of Zolpidem ?
					</label>
					<span>*</span>					
					<input type="hidden" name="question6" value="6) Doctor in what type of insomnia problem do you prefer extended release formulation of Zolpidem ?">
					<div class="col-md-12 partial p-0 question6">
						<label><input type="checkbox" name="answer6[]" value="Sleep initiation" required> Sleep initiation</label>
						<label><input type="checkbox" name="answer6[]" value="Sleep maintenance" required> Sleep maintenance</label>
						<label><input type="checkbox" name="answer6[]" value="Sleep initiation and Maintenance" required> Sleep initiation and Maintenance</label>
						<label><input type="checkbox" name="answer6[]" value="Other" required> Other: <input type="text" name="other6"></label>											
					</div>		
				</div>				
			</div><!----8-end--->

			<div class="col-md-12 mb-4"><!----9---->
				<div class="borderline border-acrross">
					<label>7) In which of the following age group of patients often come with problem of insomnia in your clinical practice ?</label>
					<span>*</span>					
					<input type="hidden" name="question7" value="7) In which of the following age group of patients often come with problem of insomnia in your clinical practice ?">
					<div class="col-md-12 partial p-0 question7">
						<label><input type="checkbox" name="answer7[]" value="<25 yrs" required> <25 yrs</label>							
						<label><input type="checkbox" name="answer7[]" value="25 -50 yrs" required> 25 -50 yrs</label>											
						<label><input type="checkbox" name="answer7[]" value="50-75 yrs" required> 50-75 yrs</label>											
						<label><input type="checkbox" name="answer7[]" value="Above 75 yrs" required> Above 75 yrs</label>									
					</div>		
				</div>				
			</div><!----9-end--->

			<div class="col-md-12 mb-4"><!----10---->
				<div class="borderline border-acrross">
					<label>8) What benefits have you observed with Zolpidem formulation in your clinical practice?</label>
					<span>*</span>					
					<input type="hidden" name="question8" value="8) What benefits have you observed with Zolpidem formulation in your clinical practice?">
					<div class="col-md-12 partial p-0 question8">
						<label><input type="checkbox" name="answer8[]" value="Better Patient Compliance" required> Better Patient Compliance</label>
						<label><input type="checkbox" name="answer8[]" value="Better sleep" required> Better sleep</label>
						<label><input type="checkbox" name="answer8[]" value="Lesser Side Effect" required> Lesser Side Effect</label>									
						<label><input type="checkbox" name="answer8[]" value="Other" required> Other: <input type="text" name="other8"></label>									
					</div>		
				</div>				
			</div><!----10-end--->
			<!----10---->
			<!-- <div class="col-md-12 mb-4">
				<div class="borderline border-acrross">
					<label>8) What benefits have you observed with Zolpidem formulation in your clinical practice?</label>
					<span>*</span>					

					<div class="pregabalin pregaweek">
							<table class="table-responsive" width="100%" cellpadding="1" cellspacing="0">
								<thead>
									<tr>
										<th class="firstcol"></th>
										<th class="text-center">0-4 weeks</th>
										<th class="text-center">4-8 weeks</th>
										<th class="text-center">8-12 weeks</th>
										<th class="text-center">12-24 weeks</th>
										<th class="text-center">>24 weeks</th>
									</tr>
								</thead>
								<tbody>
									<tr class="bgcolor1">
										<td>Kindly tick the appropriate box</td>
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
			<!----10-end--->

			<div class="col-md-12 mb-4"><!----9---->
				<div class="borderline border-acrross">
					<label>9) List the molecules name that you have seen drug -drug interaction with Zolpidem?</label>
					<span>*</span>					
					<input type="hidden" name="question9" value="9) List the molecules name that you have seen drug -drug interaction with Zolpidem?">
					<div class="col-md-12 partial partial2 p-0">
						<input type="text" placeholder="Your answer" name="answer9" required>						
					</div>		
				</div>				
			</div><!----9-end--->

			<div class="col-md-12 mb-4"><!----10---->
				<div class="borderline border-acrross">
					<label>10) Which molecules do you commonly co-prescribe with Zolpidem?</label>
					<span>*</span>					
					<input type="hidden" name="question10" value="10) Which molecules do you commonly co-prescribe with Zolpidem?">
					<div class="col-md-12 partial partial2 p-0">
						<input type="text" placeholder="Your answer" name="answer10" required>						
					</div>		
				</div>				
			</div><!----10-end--->			

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
					<input type="submit" value="SUBMIT" name="sove_submit">
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

    var requiredCheckboxes31 = $('.question31 :checkbox[required]');
    	requiredCheckboxes31.change(function() {
        if(requiredCheckboxes31.is(':checked')) {
            requiredCheckboxes31.removeAttr('required');
        } else {
            requiredCheckboxes31.attr('required', 'required');
        }
    });

    var requiredCheckboxes32 = $('.question32 :checkbox[required]');
    	requiredCheckboxes32.change(function() {
        if(requiredCheckboxes32.is(':checked')) {
            requiredCheckboxes32.removeAttr('required');
        } else {
            requiredCheckboxes32.attr('required', 'required');
        }
    });

    var requiredCheckboxes33 = $('.question33 :checkbox[required]');
    	requiredCheckboxes33.change(function() {
        if(requiredCheckboxes33.is(':checked')) {
            requiredCheckboxes33.removeAttr('required');
        } else {
            requiredCheckboxes33.attr('required', 'required');
        }
    });

    var requiredCheckboxes34 = $('.question34 :checkbox[required]');
    	requiredCheckboxes34.change(function() {
        if(requiredCheckboxes34.is(':checked')) {
            requiredCheckboxes34.removeAttr('required');
        } else {
            requiredCheckboxes34.attr('required', 'required');
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