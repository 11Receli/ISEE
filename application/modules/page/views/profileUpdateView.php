<div class="well">
    <ul class="nav nav-tabs" style="padding-top:50px">
      <li class="active"><a href="#personalInfo" data-toggle="tab">Personal Info</a></li>
      <li><a href="#educationalBackground" data-toggle="tab">Educational Background</a></li>
	  <li><a href="#technicalSkills" data-toggle="tab">Technical Skills</a></li>
    </ul>
    <div id="profileTab" class="tab-content">
      <div class="tab-pane active in" id="personalInfo">
			<?php echo form_open('pag+6e/ApplicantProfileUpdateController/savePersonalInfo','class="formPersonalInfo"'); ?>
				<div class="container-fluid">
				<div class="col-md-2"></div>
				<div class="col-md-8 register">
				  <h2 class="form-signin-heading">Personal Information</h2> 
				  <h3></h3>
				  
				  <div class="form-group">
					<?php echo form_label('Birthday:','birthday'); ?>
					<?php echo form_error('birthday'); ?>
					<?php echo form_input('birthday',$personalInfo['birthday'],'class="form-control" id="birthday"'); ?>
				  </div>
				  
				  <div class="form-group">
					<?php echo form_label('Citizenship:','citizenship'); ?>
					<?php echo form_error('citizenship'); ?>
					<?php echo form_input('citizenship',$personalInfo['citizenship'],'class="form-control" id="citizenship"'); ?>
				  </div>
				  
				  <div class="form-group">
					<?php echo form_label('Status:','status'); ?>
					<?php echo form_error('status'); ?>
					<?php echo form_input('status',$personalInfo['status'],'class="form-control" id="status"'); ?>
				  </div>
				  
				  <div class="form-group">
					<?php echo form_label('Age:','age'); ?>
					<?php echo form_error('age'); ?>
					<?php echo form_input('age',$personalInfo['age'],'class="form-control" id="age"'); ?>
				  </div>
				  
				  <div class="form-group">
					<?php echo form_label('Gender:','gender'); ?>
					<?php echo form_error('gender'); ?>
					<?php echo form_input('gender',$personalInfo['gender'],'class="form-control" id="gender"'); ?>
				  </div>
				  
				  <div class="form-group">
					<?php echo form_label('Address:','address'); ?>
					<?php echo form_error('address'); ?>
					<?php echo form_input('address',$personalInfo['address'],'class="form-control" id="address"'); ?>
				  </div>
				  
				  <button id="personalInfoSubmit" type="submit" name="submit" class="btn btn-lg btn-primary" value="1">save</button>
					  
				</div>
				</div>
			<?php echo form_close(); ?>
      </div>
      <div class="tab-pane fade" id="educationalBackground">
			 <?php echo form_open('page/ApplicantProfileUpdateController/saveEducationalBackgroundInfo','class="formEducationalBackground"'); ?>
			<div class="container-fluid">
			<div class="col-md-2"></div>
			<div class="col-md-8 register">
			  <h2 class="form-signin-heading">Educational Background</h2>  
			  <h3 class="form-signin-heading">High School</h3> 
			  <div class="form-group">
				<?php echo form_label('School:','schoolHS'); ?>
				<?php echo form_error('schoolHS'); ?>
				<?php echo form_input('schoolHS',$educationalBackgroundInfo['schoolhs'],'class="form-control" id="schoolHS"'); ?>
			  </div>
			  
			  <div class="form-group">
				<?php echo form_label('Date:','dateHS'); ?>
				<?php echo form_error('dateHS'); ?>
				<?php echo form_input('dateHS',$educationalBackgroundInfo['datehs'],'class="form-control" id="dateHS"'); ?>
			  </div>
			  <h3 class="form-signin-heading">College</h3>			  
			  <div class="form-group">
				<?php echo form_label('Degree:','degree'); ?>
				<?php echo form_error('degree'); ?>
				<?php echo form_input('degree',$educationalBackgroundInfo['degree'],'class="form-control" id="degree"'); ?>
			  </div>

			  <div class="form-group">
				<?php echo form_label('School:','schoolCol'); ?>
				<?php echo form_error('schoolCol'); ?>
				<?php echo form_input('schoolCol',$educationalBackgroundInfo['schoolcol'],'class="form-control" id="schoolCol"'); ?>
			  </div>
			  
			  <div class="form-group">
				<?php echo form_label('Date:','dateCol'); ?>
				<?php echo form_error('dateCol'); ?>
				<?php echo form_input('dateCol',$educationalBackgroundInfo['datecol'],'class="form-control" id="dateCol"'); ?>
			  </div>
			  
			  <h3 class="form-signin-heading">Others</h3>
			  
			  <div class="form-group">
				<?php echo form_label('Certifications:','certifications'); ?>
				<?php echo form_error('certifications'); ?>
				<?php echo form_input('certifications',$educationalBackgroundInfo['certifications'],'class="form-control" id="certifications"'); ?>
			  </div>
			  
			  <div class="form-group">
				<?php echo form_label('Seminars attended:','seminars'); ?>
				<?php echo form_error('seminars'); ?>
				<?php echo form_input('seminars',$educationalBackgroundInfo['seminars'],'class="form-control" id="seminars"'); ?>
			  </div>
			  
			  <div class="form-group">
				<?php echo form_label('GWA:','gwa'); ?>
				<?php echo form_error('gwa'); ?>
				<?php echo form_input('gwa',$educationalBackgroundInfo['gwa'],'class="form-control" id="gwa"'); ?>
			  </div>
			  
			  
			  <button id='educationalBackgroundSubmit' type="submit" name="submit" class="btn btn-lg btn-primary" value="1">save</button>
				  
			</div>
			</div>
		<?php echo form_close(); ?>
      </div>
  
		<div class="tab-pane fade" id="technicalSkills">
			<?php echo form_open('page/ApplicantProfileUpdateController/saveTechnicalSkillInfo','class="formTechnicalSkills"'); ?>
				<div class="container-fluid">
				<div class="col-md-2"></div>
				<div class="col-md-8 register">
				  <h2 class="form-signin-heading">Technical Skills</h2>
				  <h3></h3>
				  
				  <div class="form-group">
					<?php echo form_label('Industry:','industryid'); ?>
					<?php echo form_error('industryid'); ?><br/>
					<?php echo form_dropdown('industryid', $industryList, $technicalSkillInfo['industryid'], 'id="industryid"'); ?>
				  </div>
				  
				  <div class="form-group">
					<?php echo form_label('Job:','jobid'); ?>
					<?php echo form_error('jobid'); ?><br/>
					<div id="jobDiv"><?php echo form_dropdown('jobid', $industrySubCategoryList, '', 'id="jobid"'); ?></div>
				  </div>
				  
				  <div class="form-group">
					<?php echo form_label('Others/specialization:','specialization'); ?>
					<?php echo form_error('specialization'); ?>
					<?php echo form_input('specialization',$technicalSkillInfo['specialization'],'class="form-control" id="specialization"'); ?>
				  </div>
				  
				  <button id='technicalSkillsInfoSubmit' type="submit" name="submit" class="btn btn-lg btn-primary" value="1">save</button>
					  
				</div>
				</div>
			<?php echo form_close(); ?>
      </div>
  </div>
  
  <script type="text/javascript">
	$( document ).ready(function() {
		$( "#industryid" ).change(function() {
			
			
			var form_data = {
				selectedIndustry: $(this).find(":selected").val()
			};
			
			$.ajax({
				url: '<?php echo base_url('page/ApplicantProfileUpdateController/getIndustrySubCategoryList');?>',
				type: 'GET',
				data: form_data,
				success: function(result){
					$( "#jobDiv" ).replaceWith('<div id="jobDiv">' + result + '</div>');
				}
			})
		});
		
		$( "#personalInfoSubmit" ).click(function() {
			var form_data = {
				birthday: $('#birthday').val(),
				citizenship: $('#citizenship').val(),
				status: $('#status').val(),
				age: $('#age').val(),
				gender: $('#gender').val(),
				address: $('#address').val()
			};
			
			$.ajax({
				url: '<?php echo base_url('page/ApplicantProfileUpdateController/savePersonalInfo');?>',
				type: 'POST',
				data: form_data,
				success: function(result){
					alert(result);
				}
			})
			
			return false;
		});
		
		$( "#educationalBackgroundSubmit" ).click(function() {
			var form_data = {
				schoolHS: $('#schoolHS').val(),
				dateHS: $('#dateHS').val(),
				degree: $('#degree').val(),
				schoolCol: $('#schoolCol').val(),
				dateCol: $('#dateCol').val(),
				certifications: $('#certifications').val(),
				seminars: $('#seminars').val(),
				gwa: $('#gwa').val()
			};
			
			
			$.ajax({
				url: '<?php echo base_url('page/ApplicantProfileUpdateController/saveEducationalBackgroundInfo');?>',
				type: 'POST',
				data: form_data,
				success: function(result){
					alert(result);
				}
			})
			
			return false;
		});
		
		$( "#technicalSkillsInfoSubmit" ).click(function() {
			var form_data = {
				industryid: $('#industryid').val(),
				jobid: $('#jobid').val(),
				specialization: $('#specialization').val()
			};
			
			
			$.ajax({
				url: '<?php echo base_url('page/ApplicantProfileUpdateController/saveTechnicalSkillInfo');?>',
				type: 'POST',
				data: form_data,
				success: function(result){
					alert(result);
				}
			})
			
			return false;
		});
		
	});
  </script>