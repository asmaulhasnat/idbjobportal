<!DOCTYPE HTML>
<html>
	<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel">
				    <div class="panel-heading"><i class="glyphicon glyphicon-eye-open icon-padding"></i>View Resume</div>
					
				    <div class="panel-body">
						<span style="font-weight:bold;margin-left:19px;">Download Resume:</span>
						<a href="#" class="BDJInstruction"  onClick="convert_word();ga('send', 'event', 'DowloadCv(bdjobsFormate)', 'click', 'Doc', 1);"><img src="http://mybdjobs.bdjobs.com/mybdjobs/images/Word.gif" Title="save cv in word"  width="18" height="15" hspace="4" vspace="10" align="absmiddle" /></a> 
						<div class="well">
						<div class="table-responsive">
							<table border="0" cellpadding="0" cellspacing="0" align="center" width="750" >
								<tr>
									<td colspan="6">
										<table border="0" align="center" cellpadding="0" cellspacing="0" width="100%">
											<tr>
												<td width="73%" height="" align="left" valign="bottom" class="">
												<!--Applicant's Name:-->
												{{ $personalDetails->name }}
												</td>											
												<td width="27%" rowspan="2" align="right" valign="bottom">
												<!--Photograph:-->												
													<table width="140" height="140" border="0" align="center" cellpadding="0" cellspacing="7" bgcolor="#dadce1">
														<tr> 
														<td width="126" height="135" align="center" bgcolor="#e2e4e5" valign="middle"> 
														<img src="https://cdn2.iconfinder.com/data/icons/rcons-users-color/32/boy-512.png" width="124" height="135">
														</td>
														</tr>
													</table>												
												</td>
											</tr>									
											<tr>
												<td align="left" valign="middle">
												<!--Contact Address:-->												
													 Address: {{ $personalDetails->jobseeker_current_address }}
												<!--Home Phone:-->												
													 <br />
													 Mobile No 1: {{ $personalDetails->jobseeker_phone1 }}
												<!--Office Phone:-->												
													 <br />
													 Mobile No 2 : {{ $personalDetails->jobseeker_phone2 }}
												<!--Email:-->												
													 <br />		
													 e-mail : {{ $personalDetails->jobseeker_email }}, {{ $personalDetails->jobseeker_email2 }}
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
							<!---------------
							CAREER OBJECTIVE:
							---------------!-->
								<table border="0" cellpadding="0" cellspacing="0" align="center" width="750">	
									<tr>
										<td colspan="6" style="border-bottom:1px solid #000000;">&nbsp;</td>
									</tr>									  
									<tr>
										<td colspan="6">&nbsp;</td>
									</tr>									 
									<tr>
										<td colspan="6" class="BDJHeadline01"><U>Career Objective:</U></td>
									</tr>									 
									<tr>
										<td colspan="6" align="left" style="padding-left:5px;" class="">{{ $career->career_objective }}</td>
									</tr>		
								</table>

							<!--------------
							CAREER SUMMARY :
							--------------!-->

							<!---------------------
							SPECIAL QUALIFICATION :
							---------------------!-->
							 <table border="0" cellpadding="0" cellspacing="0" style="margin-top:3px;" align="center" width="750">	
								 <tr>
									<td colspan="6" class=""><U>Special Qualification:</U></td>
								 </tr>							
								 <tr>
									 <td colspan="6" align="left" style="padding-left:5px;" class="BDJNormalText01">
										<ul>
										@foreach($extraActivities as $extraActivity)
											<li>{{ $extraActivity }}</li>
										@endforeach	
										</ul>
									 </td>
								 </tr>
							 </table>
								
						<!-------------------------------------------
						EMPLOYMENT HISTORY, TOTAL YEAR OF EXPERIENCE:
						--------------------------------------------->
							
						<!----------------------
						'ACADEMIC QUALIFICATION:
						------------------------>
						<table border="0" cellpadding="0" style="margin-top:3px;" cellspacing="0" align="center" width="750">
						 	<tr>
							 	<td colspan="6" class=""><U>Academic Qualification:</U></td>
							</tr>
						
							<tr>
								<td colspan="6" align="left" style="padding-left:5px;" class="">
							<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="border:1px solid #666666">
								<tr class="">
									<td width="20%" align="center" style="border-right:1px solid #666666"><STRONG>Exam Title</STRONG></td>
									<td width="20%" align="center" style="border-right:1px solid #666666"><STRONG>Concentration/Major</STRONG></td>
									<td width="20%" align="center" style="border-right:1px solid #666666"><STRONG>Institute</STRONG></td>
									<td width="12.5%" align="center" style="border-right:1px solid #666666"><STRONG>Result</STRONG></td>
									<td width="12.5%" align="center" style="border-right:1px solid #666666"><STRONG>Pas.Year</STRONG></td>
									<td width="15%" align="center"><STRONG>Duration</STRONG></td>
								</tr>

					      	@foreach($academics as $academic) 
						        <tr class="">
									<!--Exam Title:-->
								    <td width="20%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
										{{ $academic->name }}
										&nbsp;
									</td>
								    <!--Concentration/Major:-->
									<td width="20%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
										{{ $academic->groupname }}
										&nbsp;
									</td>
								    <!--Institute:-->
									<td width="20%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
										{{ $academic->institute }}	
										&nbsp;				
									</td>
								    <!--Result:-->
									<td width="12.5%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
										{{ $academic->result }}
										&nbsp;					
									</td>
								    <!--Passing Year:-->					
									<td width="12.5%" style="border-right:1px solid #666666;border-top:1px solid #666666;" align="center">
									    {{ $academic->passing_year }}
										&nbsp;
								    </td>			
									<!--Duration:-->
									<td width="15%" style="border-top:1px solid #666666" align="center">
										{{ $academic->duration }}
										&nbsp;					
									</td>				
						        
								</tr>
						        @endforeach							 
							 </table> 
							 </td>
							 </tr>
						 </table>

<!--------
TRAINING:
-------!-->
<table border="0" cellpadding="0" cellspacing="0" align="center" width="750" style="margin-top:3px;">
	 <tr>
	 <td colspan="6" class="BDJHeadline01"><U>Training Summary:</U></td>
	 </tr>

	 <tr>
	 <td colspan="6" align="left" style="padding-left:5px;" class="BDJNormalText01">
	 <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="border:1px solid #666666">
	 	 <tr class="BDJNormalText02">
		 <td width="19%" align="center" style="border-right:1px solid #666666"><STRONG>Training Title</STRONG></td>
		 <td width="19%" align="center" style="border-right:1px solid #666666"><STRONG>Topic</STRONG></td>
		 <td width="15%" align="center" style="border-right:1px solid #666666"><STRONG>Institute</STRONG></td>
		 <td width="15%" align="center" style="border-right:1px solid #666666"><STRONG>Country</STRONG></td>
		 <td width="15%" align="center" style="border-right:1px solid #666666"><STRONG>Location</STRONG></td>
		 <td width="2%" align="center" style="border-right:1px solid #666666"><STRONG>Year</STRONG></td>
		 <td width="15%" align="center"><STRONG>Duration</STRONG></td>
		 </tr>
		    @foreach($trainings as $training)
			   <tr class="BDJNormalText02">
			   <td width="15%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
			   {{ $training->training_title }}
			   &nbsp;
			   </td>
			   <td width="15%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666; padding-left:1px;">
			  {{ $training->topic }}
			   &nbsp;			   
			   </td>
			   <td width="15%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
			   {{ $training->institute }}
			   &nbsp;
			   </td>
			   <td width="15%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
			   {{ $training->country }}
			   &nbsp;
			   </td>
			   <td width="15%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
			   {{ $training->location }}
			   &nbsp;
			   </td>
			   <td width="10%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
			   {{ $training->year }}
			   &nbsp;
			   </td>
			   <td width="15%" align="center" style="border-top:1px solid #666666;">
			   {{ $training->duration }}
			   &nbsp;
			   </td>
			   </tr>
			   @endforeach
		 
	 </table>
	 </td>
	 </tr>
	 </table>

<!--------------------------
PROFESSIONAL QUALIFICATION:
--------------------------->
	
<!---------------------------------
CAREER AND APPLICATION INFORMATION:
------------------------------------>
			<table border="0" cellpadding="0" cellspacing="0" align="center" width="750" style="margin-top:3px;">
			<!--
			Career and Application Information:
			-->
				<tr>
					<td colspan="6" class="BDJHeadline01"><U>Career and Application Information:</U></td>
				</tr>

				<tr>
					<td colspan="6" align="left" class="BDJNormalText01">
						<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
						<!--Looking For:-->

							<tr class="BDJNormalText03">
								<td width="32%" align="left" style="padding-left:5px;">Looking For</td>
								<td width="2%" align="center">:</td>
								<td width="66%" align="left">{{ $career->lookingfor }}</td>
							</tr>

						<!--Available For:-->

							<tr class="BDJNormalText03">
								<td width="32%" align="left" style="padding-left:5px;">Available  For</td>
								<td width="2%" align="center">:</td>
								<td width="66%" align="left">{{ $career->availablefor }}</td>
							</tr>

						<!--Present Salary:-->

						<!--Expected Salary:-->

						<!--Preferred Job Category:-->
							<tr class="BDJNormalText03">
								<td width="32%" align="left" style="padding-left:5px;">Preferred  Job Category</td>
								<td width="2%" align="center">:</td>
								<td width="66%" align="left">{{ $career->preferred_job_category }}</td>
							</tr>
						<!--Preferred District:-->

							<tr class="BDJNormalText03">
								<td width="32%" align="left" style="padding-left:5px;">Preferred  District </td>
								<td width="2%" align="center">:</td>
								<td width="66%" align="left">{{ $career->preferred_district }}</td>
							</tr>

						<!--Preferred Country:-->

							<tr class="BDJNormalText03">
								<td width="32%" align="left" style="padding-left:5px;">Preferred  Division </td>
								<td width="2%" align="center">:</td>
								<td width="66%" align="left">{{ $career->preferred_division }}</td>
							</tr>

						<!--Preferred Organization Types:-->

							<tr class="BDJNormalText03">
								<td width="32%" align="left" style="padding-left:5px;" valign="top">Preferred  Organization Types</td>
								<td width="2%" align="center" valign="top">:</td>
								<td width="66%" align="left">{{ $career->preferred_organization_type }}</td>
							</tr>

						</table>
					</td>
				</tr>
			</table>


<!--
Specialization:
-->

<!--
EXTRA CURRICULAR ACTIVITIES, LANGUAGE PROFICIENCY:
-->

<!--
Language Proficiency:
-->

<!--
PERSONAL DETAILS:
--> 	<table border="0" cellpadding="0" cellspacing="0" align="center" width="750" style="margin-top:3px;">
		<!--
		Personal Details
		-->
			<tr>
				<td colspan="6" class="BDJHeadline01"><U>Personal Details :</U></td>
			</tr>

			<tr>
				<td colspan="6" align="left" class="BDJNormalText01">
				<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
			<!--Fathers Name:-->

					<tr class="BDJNormalText03">
						<td width="32%" align="left" style="padding-left:5px;">Father's Name </td>
						<td width="2%" align="center">:</td>
						<td width="66%" align="left">{{ $personalDetails->jobseeker_father_name }}</td>
					</tr>

			<!--Mothers Name:-->

					<tr class="BDJNormalText03">
						<td width="32%" align="left" style="padding-left:5px;">Mother's Name </td>
						<td width="2%" align="center">:</td>
						<td width="66%" align="left">{{ $personalDetails->jobseeker_mother_name }}</td>
					</tr>

			<!--Date of Birth:-->
					<tr class="BDJNormalText03">
						<td width="32%" align="left" style="padding-left:5px;">Date  of Birth</td>
						<td width="2%" align="center">:</td>
						<td width="66%" align="left">{{ $personalDetails->jobseeker_dob }}</td>
					</tr>
			<!--Gender:-->
					<tr class="BDJNormalText03">
						<td width="32%" align="left" style="padding-left:5px;">Gender</td>
						<td width="2%" align="center">:</td>
						<td width="66%" align="left">{{ $personalDetails->jobseeker_gender }}</td>
					</tr>
			<!--Marital Status:-->
					<tr class="BDJNormalText03">
						<td width="32%" align="left" style="padding-left:5px;">Marital  Status </td>
						<td width="2%" align="center">:</td>
						<td width="66%" align="left">{{ $personalDetails->jobseeker_maritalstatus }}</td>
					</tr>
			<!--Nationality:-->
					<tr class="BDJNormalText03">
						<td align="left" style="padding-left:5px;">Nationality</td>
						<td align="center">:</td>
						<td align="left">{{ $personalDetails->jobseeker_nationality }}</td>
					</tr>

					<tr class="BDJNormalText03">
						<td align="left" style="padding-left:5px;">National Id No.</td>
						<td align="center">:</td>
						<td align="left">{{ $personalDetails->jobseeker_national_id_no }}</td>
					</tr>

			<!--Religion:-->

					<tr class="BDJNormalText03">
						<td align="left" style="padding-left:5px;">Religion</td>
						<td align="center">:</td>
						<td align="left">{{ $personalDetails->jobseeker_religion }}</td>
					</tr>

			<!--Permanent Address:-->

					<tr class="BDJNormalText03">
						<td align="left" style="padding-left:5px;">Permanent  Address</td>
						<td align="center">:</td>
						<td align="left">{{ $personalDetails->jobseeker_permanent_address }}</td>
					</tr>

			<!--Current Location:-->
					<tr class="BDJNormalText03">
						<td align="left" style="padding-left:5px;">Current  Location</td>
						<td align="center">:</td>
						<td align="left">{{ $personalDetails->jobseeker_current_address }}</td>
					</tr>
				</table>

				</td>
			</tr>
		</table>
	
<!--
REFERENCE:
-->
						
						
						</div>
						</div>
				    </div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>