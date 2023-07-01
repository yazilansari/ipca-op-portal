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
<title>Peg-NT - Pregablin 75mg + Nortriptyline 10mg film coated Tablets</title>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body class="bgbrca" style="background: #eeeeee;">
<div class="container">
	<div class="row">
		<div class="col-md-12"><img src="images/peg-nt.png" class="vipca" alt="logo"></div>
	</div>
</div>

<div class="container">
	<form method="POST" action="../handler/survey_form_handler.php">
		<input type="hidden" name="brand" value="PEG NT">
		<input type="hidden" name="dr_id" value="<?php echo $_GET['id']; ?>">
		<div class="row">
			<div class="col-md-12 mb-4"><!-----1---->
				<div class="borderline" style="border-top: 8px solid #525252;">
					<label>1) What is the frequency of different neuropathic pain syndromes that you come across in your clinical practice ?</label>
					<span>*</span>					
					<input type="hidden" value="1) What is the frequency of different neuropathic pain syndromes that you come across in your clinical practice ?" name="question1">
					<div class="col-md-12 partial p-0 question1">
						<label><input type="checkbox" value="Diabetic Neuropathy" name="answer1[]" required> Diabetic Neuropathy</label>
						<label><input type="checkbox" value="Guillain-Barre Syndrome" name="answer1[]" required>Guillain-Barre Syndrome</label>
						<label><input type="checkbox" value="Entrapment Neuropathy" name="answer1[]" required>Entrapment Neuropathy</label>
						<label><input type="checkbox" value="Leprous or Hansen Neuropathy" name="answer1[]" required>Leprous or Hansen Neuropathy</label>
						<label><input type="checkbox" value="Drug/Toxin-Induced Neuropathy" name="answer1[]" required>Drug/Toxin-Induced Neuropathy</label>
						<label><input type="checkbox" value="Alcoholic/Nutritional Neuropathy" name="answer1[]" required>Alcoholic/Nutritional Neuropathy</label>
						<label><input type="checkbox" value="HIV-associated Neuropathy" name="answer1[]" required>HIV-associated Neuropathy</label>
						<label><input type="checkbox" value="Chronic persistent post surgical pain" name="answer1[]" required>Chronic persistent post surgical pain</label>
						<label><input type="checkbox" value="Ichronic Inflammatory Demyelinating Neuropathy" name="answer1[]" required>Ichronic Inflammatory Demyelinating Neuropathy</label>
						<label><input type="checkbox" value="Other" name="answer1[]" required>Other: <input type="text" name="other1"></label>
					</div>		
				</div>				
			</div><!-----1-end--->

			<div class="col-md-12 mb-4"><!-----2---->
				<div class="borderline border-acrross">
					<label>2) Which mode of treatment do you commonly prefer for patients with Neuropathic Pain in your clinical practice?</label>
					<span>*</span>					
					<input type="hidden" value="2) Which mode of treatment do you commonly prefer for patients with Neuropathic Pain in your clinical practice?" name="question2">
					<div class="col-md-12 partial p-0 question2">
						<label><input type="checkbox" value="Monotherapy" name="answer2[]" required> Monotherapy</label>
						<label><input type="checkbox" value="Combination therapy with two drugs" name="answer2[]" required> Combination therapy with two drugs</label>
						<label><input type="checkbox" value="Combination therapy with more than two drugs" name="answer2[]" required> Combination therapy with more than two drugs</label>						
					</div>		
				</div>				
			</div><!----2-end--->

			<div class="col-md-12 mb-4"><!----3---->
				<div class="borderline border-acrross">
					<label>3) What are the first-line drugs you routinely prescribe as monotherapy to initiate treatment in therapy naive patients?</label>
					<span>*</span>					
					<input type="hidden" value="3) What are the first-line drugs you routinely prescribe as monotherapy to initiate treatment in therapy naive patients?" name="question3">
					<div class="col-md-12 partial p-0 question3">
						<label><input type="checkbox" value="Tricyclic Antidepressants (Amitriptyline, Nortriptyline)" name="answer3[]" required> Tricyclic Antidepressants (Amitriptyline, Nortriptyline)</label>
						<label><input type="checkbox" value="Gabapentinoids ( Pregabalin, Gabapentin )" name="answer3[]" required> Gabapentinoids ( Pregabalin, Gabapentin )</label>						
						<label><input type="checkbox" value="Serotonin Norepinephrine Reuptake Inhibitors (Duloxetine, Venlafaxine)" name="answer3[]" required> Serotonin Norepinephrine Reuptake Inhibitors (Duloxetine, Venlafaxine)</label>						
					</div>		
				</div>				
			</div><!----3-end--->


			<div class="col-md-12 mb-4"><!----4---->
				<div class="borderline border-acrross">
					<label>4) What are the combination treatments that you usually prescribe for Neuropathic Pain?</label>
					<span>*</span>					
					<input type="hidden" value="4) What are the combination treatments that you usually prescribe for Neuropathic Pain?" name="question4">
					<div class="col-md-12 partial p-0 question4">
						<label><input type="checkbox" value="Pregabalin with Nortriptyline" name="answer4[]" required> Pregabalin with Nortriptyline</label>
						<label><input type="checkbox" value="Gabapentin with Nortriptyline" name="answer4[]" required> Gabapentin with Nortriptyline</label>
						<label><input type="checkbox" value="Paracetamol with Tramadol" name="answer4[]" required> Paracetamol with Tramadol</label>
						<label><input type="checkbox" value="Pregabalin or Gabapentin combined with opioids" name="answer4[]" required> Pregabalin or Gabapentin combined with opioids</label>
						<label><input type="checkbox" value="Tricyclic antidepressants combined with morphine" name="answer4[]" required> Tricyclic antidepressants combined with morphine</label>
						<label><input type="checkbox" value="Tricyclic antidepressants combined with Fluphenazine" name="answer4[]" required> Tricyclic antidepressants combined with Fluphenazine</label>
						<label><input type="checkbox" value="N-methyl-D-aspartate (NMDA) receptor blockers combined with other analgesics" name="answer4[]" required> N-methyl-D-aspartate (NMDA) receptor blockers combined with other analgesics</label>
						<label><input type="checkbox" value="Topical agents" name="answer4[]" required> Topical agents</label>
						<label><input type="checkbox" value="Other" name="answer4[]" required> Other: <input type="text" name="other4"></label>						
					</div>		
				</div>				
			</div><!----4-end--->

			<div class="col-md-12 mb-4"><!----5---->
				<div class="borderline border-acrross">
					<label>5) What percentage of your patients is prescribed Pregabalin +Nortriptyline? [PUT A TICK]</label>
					<span>*</span>					
					<input type="hidden" value="5) What percentage of your patients is prescribed Pregabalin +Nortriptyline? (<25%)" name="question5_below_25">
					<input type="hidden" value="5) What percentage of your patients is prescribed Pregabalin +Nortriptyline? (25-50%)" name="question5_25_50">
					<input type="hidden" value="5) What percentage of your patients is prescribed Pregabalin +Nortriptyline? (50-75%)" name="question5_50_75">
					<input type="hidden" value="5) What percentage of your patients is prescribed Pregabalin +Nortriptyline? (>75%)" name="question5_above_75">
					<div class="col-md-12 partial p-0">
						<div class="pregabalin">
							<table class="table-responsive" width="100%" cellpadding="1" cellspacing="0">
								<thead>
									<tr>
										<th class="firstcol"></th>
										<th class="text-center">Pregabalin (75mg)+Nortriptyline (10mg)</th>
										<th class="text-center">Pregabalin (50mg)+Nortriptyline (10mg)</th>
									</tr>
								</thead>
								<tbody>
									<tr class="bgcolor1">
										<td><25%</td>
										<td class="text-center"><input type="radio" value="Pregabalin (75mg)+Nortriptyline (10mg)" name="answer5_below_25" required></td>
										<td class="text-center"><input type="radio" value="Pregabalin (50mg)+Nortriptyline (10mg)" name="answer5_below_25" required></td>
									</tr>
									<tr class="bgcolor1">
										<td>25-50%</td>
										<td class="text-center"><input type="radio" value="Pregabalin (75mg)+Nortriptyline (10mg)" name="answer5_25_50" required></td>
										<td class="text-center"><input type="radio" value="Pregabalin (50mg)+Nortriptyline (10mg)" name="answer5_25_50" required></td>
									</tr>
									<tr class="bgcolor1">
										<td>50-75%</td>
										<td class="text-center"><input type="radio" value="Pregabalin (75mg)+Nortriptyline (10mg)" name="answer5_50_75" required></td>
										<td class="text-center"><input type="radio" value="Pregabalin (50mg)+Nortriptyline (10mg)" name="answer5_50_75" required></td>
									</tr>
									<tr class="bgcolor1">
										<td>>75%</td>
										<td class="text-center"><input type="radio" value="Pregabalin (75mg)+Nortriptyline (10mg)" name="answer5_above_75" required></td>
										<td class="text-center"><input type="radio" value="Pregabalin (50mg)+Nortriptyline (10mg)" name="answer5_above_75" required></td>
									</tr>									
								</tbody>
							</table>
						</div>				
					</div>		
				</div>				
			</div><!----5-end--->

			<div class="col-md-12 mb-4"><!----6---->
				<div class="borderline border-acrross">
					<label>6) Check all indications for which you routinely prescribe Pregabalin (50mg) +Nortriptyline (10mg)</label>
					<span>*</span>					
					<input type="hidden" value="6) Check all indications for which you routinely prescribe Pregabalin (50mg) +Nortriptyline (10mg)" name="question6">
					<div class="col-md-12 partial p-0 question6">
						<label><input type="checkbox" value="Diabetic Neuropathy" name="answer6[]" required> Diabetic Neuropathy</label>
						<label><input type="checkbox" value="Post Herpetic Neuralgia" name="answer6[]" required> Post Herpetic Neuralgia</label>
						<label><input type="checkbox" value="Fibromyalgia" name="answer6[]" required> Fibromyalgia</label>
						<label><input type="checkbox" value="Spinal cord Injury" name="answer6[]" required> Spinal cord Injury</label>
						<label><input type="checkbox" value="Cancer Related Neuropathic Pain" name="answer6[]" required> Cancer Related Neuropathic Pain</label>		
						<label><input type="checkbox" value="Other" name="answer6[]" required> Other: <input type="text" name="other6"></label>					
					</div>		
				</div>				
			</div><!----6-end--->

			<div class="col-md-12 mb-4"><!----7---->
				<div class="borderline border-acrross">
					<label>7) What is the reason for Switching to Pregabalin (50mg) + Nortriptyline (10mg)?</label>
					<span>*</span>					
					<input type="hidden" value="7) What is the reason for Switching to Pregabalin (50mg) + Nortriptyline (10mg)?" name="question7">
					<div class="col-md-12 partial p-0 question7">
						<label><input type="checkbox" value="Better efficacy" name="answer7[]" required> Better efficacy</label>
						<label><input type="checkbox" value="Better Patient Compliance" name="answer7[]" required> Better Patient Compliance</label>
						<label><input type="checkbox" value="Better Side effect profile" name="answer7[]" required> Better Side effect profile</label>
						<label><input type="checkbox" value="Other" name="answer7[]" required> Other: <input type="text" name="other7"></label>	
					</div>		
				</div>				
			</div><!----7-end--->

			<div class="col-md-12 mb-4"><!----8---->
				<div class="borderline border-acrross">
					<label>8) In which of the following age group you usually prescribe Pregabalin (50mg) + Nortriptyline (10mg)?</label>
					<span>*</span>					
					<input type="hidden" value="8) In which of the following age group you usually prescribe Pregabalin (50mg) + Nortriptyline (10mg)?" name="question8">
					<div class="col-md-12 partial p-0 question8">
						<label><input type="checkbox" value="<25 years" name="answer8[]" required> <25 years</label>
						<label><input type="checkbox" value="25-50 years" name="answer8[]" required> 25-50 years</label>
						<label><input type="checkbox" value="50-75 years" name="answer8[]" required> 50-75 years</label>
						<label><input type="checkbox" value=">75 years" name="answer8[]" required> >75 years</label>											
						<label><input type="checkbox" value="Other" name="answer8[]" required> Other: <input type="text" name="other8"></label>											
					</div>		
				</div>				
			</div><!----8-end--->

			<div class="col-md-12 mb-4"><!----9---->
				<div class="borderline border-acrross">
					<label>9) What are the benefits you have observed with Pregabalin (50mg) +Nortriptyline (10mg) as compared to Pregabalin (75mg) +Nortriptyline (10mg)?</label>
					<span>*</span>					
					<input type="hidden" value="9) What are the benefits you have observed with Pregabalin (50mg) +Nortriptyline (10mg) as compared to Pregabalin (75mg) +Nortriptyline (10mg)?" name="question9">
					<div class="col-md-12 partial p-0 question9">
						<label><input type="checkbox" value="Better Patient Compliance" name="answer9[]" required> Better Patient Compliance</label>
						<label><input type="checkbox" value="Lesser Side Effects" name="answer9[]" required> Lesser Side Effects</label>
						<label><input type="checkbox" value="Rapid Pain Control" name="answer9[]" required> Rapid Pain Control</label>
						<label><input type="checkbox" value="Better Efficacy" name="answer9[]" required> Better Efficacy</label>
						<label><input type="checkbox" value="No Benefit" name="answer9[]" required> No Benefit</label>											
					</div>		
				</div>				
			</div><!----9-end--->


			<div class="col-md-12 mb-4"><!----10---->
				<div class="borderline border-acrross">
					<label>10) What is the usual starting dose of Vortioxetine initiated for patients in your practice?</label>
					<span>*</span>					
					<input type="hidden" value="10) What is the usual starting dose of Vortioxetine initiated for patients in your practice?" name="question10">
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
									<tr class="bgcolor1 question10">
										<td>Kindly tick the appropriate box</td>
										<td class="text-center"><input type="checkbox" value="0-4 weeks" name="answer10[]" required></td>
										<td class="text-center"><input type="checkbox" value="4-8 weeks" name="answer10[]" required></td>
										<td class="text-center"><input type="checkbox" value="8-12 weeks" name="answer10[]" required></td>
										<td class="text-center"><input type="checkbox" value="12-24 weeks" name="answer10[]" required></td>
										<td class="text-center"><input type="checkbox" value=">24 weeks" name="answer10[]" required></td>
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
			</div><!----10-end--->


			<div class="col-md-12 mb-4"><!----11---->
				<div class="borderline border-acrross">
					<label>11) At which point of time with Pregabalin(50mg)+Nortriptyline (10mg) you usually find visible improvement in pain control (>30% responder rate) ?</label>
					<span>*</span>					
					<input type="hidden" value="11) At which point of time with Pregabalin(50mg)+Nortriptyline (10mg) you usually find visible improvement in pain control (>30% responder rate) ?" name="question11">
					<div class="pregabalin pregaweek">
							<table class="table-responsive" width="100%" cellpadding="1" cellspacing="0">
								<thead>
									<tr>
										<th class="firstcol"></th>
										<th class="text-center">0-2 weeks</th>
										<th class="text-center">2-4 weeks</th>
										<th class="text-center">4-6 weeks</th>
										<th class="text-center">>6 weeks</th>										
									</tr>
								</thead>
								<tbody>
									<tr class="bgcolor1 question11">
										<td>Kindly tick the appropriate box</td>
										<td class="text-center"><input type="checkbox" value="0-2 weeks" name="answer11[]" required></td>
										<td class="text-center"><input type="checkbox" value="2-4 weeks" name="answer11[]" required></td>
										<td class="text-center"><input type="checkbox" value="4-6 weeks" name="answer11[]" required></td>
										<td class="text-center"><input type="checkbox" value=">6 weeks" name="answer11[]" required></td>										
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
			</div><!----11-end--->

			<div class="col-md-12 mb-4"><!----11---->
				<div class="borderline border-acrross">
					<label>12) What is the change in pain frequency observed after initiation of Pregabalin(50mg) +Nortriptyline (10mg) treatment at follow-up? (Kindly tick the appropriate box)</label>
					<span>*</span>					
					<input type="hidden" value="12) What is the change in pain frequency observed after initiation of Pregabalin(50mg) +Nortriptyline (10mg) treatment at follow-up? (Kindly tick the appropriate box) (0-4 weeks)" name="question12_0_4_weeks">
					<input type="hidden" value="12) What is the change in pain frequency observed after initiation of Pregabalin(50mg) +Nortriptyline (10mg) treatment at follow-up? (Kindly tick the appropriate box) (4-8 weeks)" name="question12_4_8_weeks">
					<input type="hidden" value="12) What is the change in pain frequency observed after initiation of Pregabalin(50mg) +Nortriptyline (10mg) treatment at follow-up? (Kindly tick the appropriate box) (8-12 weeks)" name="question12_8_12_weeks">
					<input type="hidden" value="12) What is the change in pain frequency observed after initiation of Pregabalin(50mg) +Nortriptyline (10mg) treatment at follow-up? (Kindly tick the appropriate box) (12-24 weeks)" name="question12_12_24_weeks">
					<input type="hidden" value="12) What is the change in pain frequency observed after initiation of Pregabalin(50mg) +Nortriptyline (10mg) treatment at follow-up? (Kindly tick the appropriate box) (>24 weeks)" name="question12_above_24_weeks">
					<div class="pregabalin pregaweek">
							<table class="table-responsive" width="100%" cellpadding="1" cellspacing="0">
								<thead>
									<tr>
										<th></th>
										<th class="text-center firstcol" colspan="4">Change in pain Frequency</th>
									</tr>
									<tr>
										<th class="firstcol"></th>
										<th class="text-center"><25%</th>
										<th class="text-center">25-50%</th>
										<th class="text-center">50-75%</th>
										<th class="text-center">Complete Pain Remission</th>										
									</tr>
								</thead>
								<tbody>
									<tr class="bgcolor1 question121">
										<td>0-4 weeks</td>
										<td class="text-center"><input type="checkbox" value="<25%" name="answer12_0_4_weeks[]" required></td>
										<td class="text-center"><input type="checkbox" value="25-50%" name="answer12_0_4_weeks[]" required></td>
										<td class="text-center"><input type="checkbox" value="50-75%" name="answer12_0_4_weeks[]" required></td>
										<td class="text-center"><input type="checkbox" value="Complete Pain Remission" name="answer12_0_4_weeks[]" required></td>										
									</tr>	
									<tr class="bgcolor1 question122">
										<td>4-8 weeks</td>
										<td class="text-center"><input type="checkbox" value="<25%" name="answer12_4_8_weeks[]" required></td>
										<td class="text-center"><input type="checkbox" value="25-50%" name="answer12_4_8_weeks[]" required></td>
										<td class="text-center"><input type="checkbox" value="50-75%" name="answer12_4_8_weeks[]" required></td>
										<td class="text-center"><input type="checkbox" value="Complete Pain Remission" name="answer12_4_8_weeks[]" required></td>										
									</tr>	
									<tr class="bgcolor1 question123">
										<td>8-12 weeks</td>
										<td class="text-center"><input type="checkbox" value="<25%" name="answer12_8_12_weeks[]" required></td>
										<td class="text-center"><input type="checkbox" value="25-50%" name="answer12_8_12_weeks[]" required></td>
										<td class="text-center"><input type="checkbox" value="50-75%" name="answer12_8_12_weeks[]" required></td>
										<td class="text-center"><input type="checkbox" value="Complete Pain Remission" name="answer12_8_12_weeks[]" required></td>										
									</tr>	
									<tr class="bgcolor1 question124">
										<td>12-24 weeks</td>
										<td class="text-center"><input type="checkbox" value="<25%" name="answer12_12_24_weeks[]" required></td>
										<td class="text-center"><input type="checkbox" value="25-50%" name="answer12_12_24_weeks[]" required></td>
										<td class="text-center"><input type="checkbox" value="50-75%" name="answer12_12_24_weeks[]" required></td>
										<td class="text-center"><input type="checkbox" value="Complete Pain Remission" name="answer12_12_24_weeks[]" required></td>										
									</tr>
									<tr class="bgcolor1 question125">
										<td>>24 weeks</td>
										<td class="text-center"><input type="checkbox" value="<25%" name="answer12_bove_24_weeks[]" required></td>
										<td class="text-center"><input type="checkbox" value="25-50%" name="answer12_bove_24_weeks[]" required></td>
										<td class="text-center"><input type="checkbox" value="50-75%" name="answer12_bove_24_weeks[]" required></td>
										<td class="text-center"><input type="checkbox" value="Complete Pain Remission" name="answer12_bove_24_weeks[]" required></td>										
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
			</div><!----11-end--->

			<div class="col-md-12 mb-4"><!----13---->
				<div class="borderline border-acrross">
					<label>13) What are your observations regarding TEAEs (Treatment Emergent Adverse Events) following Pregabalin(50mg) +Nortriptyline(10mg) treatment?</label>
					<span>*</span>					
					<input type="hidden" value="13) What are your observations regarding TEAEs (Treatment Emergent Adverse Events) following Pregabalin(50mg) +Nortriptyline(10mg) treatment?" name="question13">
					<div class="col-md-12 partial p-0 question13">
						<label><input type="checkbox" value="Sedation/drowsiness" name="answer13[]" required> Sedation/drowsiness</label>
						<label><input type="checkbox" value="Dizziness/giddiness" name="answer13[]" required> Dizziness/giddiness</label>
						<label><input type="checkbox" value="Lower extremity edema/Weight Gain" name="answer13[]" required> Lower extremity edema/Weight Gain</label>
						<label><input type="checkbox" value="Suicidal thinking and behavior" name="answer13[]" required> Suicidal thinking and behavior</label>			
						<label><input type="checkbox" value="No side effects" name="answer13[]" required> No side effects</label>			
						<label><input type="checkbox" value="Other" name="answer13[]" required> Other <input type="text" name="other13"></label>			
					</div>		
				</div>				
			</div><!----13-end--->

			<div class="col-md-12 mb-4"><!----14---->
				<div class="borderline border-acrross">
					<label>14) List any drugs you have commonly observed drug interactions with Pregabalin (50mg)+ Nortriptyline (10mg) in clinical practice ?</label>
					<span>*</span>					
					<input type="hidden" value="14) List any drugs you have commonly observed drug interactions with Pregabalin (50mg)+ Nortriptyline (10mg) in clinical practice ?" name="question14">
					<div class="col-md-12 partial partial2 p-0">
						<input type="text" placeholder="Your answer" name="answer14" required>						
					</div>		
				</div>				
			</div><!----14-end--->

			<div class="col-md-12 mb-4"><!----15---->
				<div class="borderline border-acrross">
					<label>15) What is the retention rate for patients on Pregabalin (50mg) +Nortriptyline (10mg) treatment in your practice</label>
					<span>*</span>					
					<input type="hidden" value="15) What is the retention rate for patients on Pregabalin (50mg) +Nortriptyline (10mg) treatment in your practice" name="question15">
					<div class="col-md-12 partial p-0 question15">
						<label><input type="checkbox" value="<25%" name="answer15[]" required> <25%</label>
						<label><input type="checkbox" value="25-50%" name="answer15[]" required> 25-50%</label>
						<label><input type="checkbox" value="50-75%" name="answer15[]" required> 50-75%</label>									
						<label><input type="checkbox" value=">75" name="answer15[]" required> >75</label>									
					</div>		
				</div>				
			</div><!----15-end--->

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
					<input type="submit" value="SUBMIT" name="peg_submit">
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

    var requiredCheckboxes121 = $('.question121 :checkbox[required]');
    	requiredCheckboxes121.change(function() {
        if(requiredCheckboxes121.is(':checked')) {
            requiredCheckboxes121.removeAttr('required');
        } else {
            requiredCheckboxes121.attr('required', 'required');
        }
    });

    var requiredCheckboxes122 = $('.question122 :checkbox[required]');
    	requiredCheckboxes122.change(function() {
        if(requiredCheckboxes122.is(':checked')) {
            requiredCheckboxes122.removeAttr('required');
        } else {
            requiredCheckboxes122.attr('required', 'required');
        }
    });

    var requiredCheckboxes123 = $('.question123 :checkbox[required]');
    	requiredCheckboxes123.change(function() {
        if(requiredCheckboxes123.is(':checked')) {
            requiredCheckboxes123.removeAttr('required');
        } else {
            requiredCheckboxes123.attr('required', 'required');
        }
    });

    var requiredCheckboxes124 = $('.question124 :checkbox[required]');
    	requiredCheckboxes124.change(function() {
        if(requiredCheckboxes124.is(':checked')) {
            requiredCheckboxes124.removeAttr('required');
        } else {
            requiredCheckboxes124.attr('required', 'required');
        }
    });

    var requiredCheckboxes125 = $('.question125 :checkbox[required]');
    	requiredCheckboxes125.change(function() {
        if(requiredCheckboxes125.is(':checked')) {
            requiredCheckboxes125.removeAttr('required');
        } else {
            requiredCheckboxes125.attr('required', 'required');
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

    var requiredCheckboxes15 = $('.question15 :checkbox[required]');
    	requiredCheckboxes15.change(function() {
        if(requiredCheckboxes15.is(':checked')) {
            requiredCheckboxes15.removeAttr('required');
        } else {
            requiredCheckboxes15.attr('required', 'required');
        }
    });
});
</script>
</html>