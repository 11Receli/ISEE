<div class="well">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#jobAlert" data-toggle="tab">job alert</a></li>
		<li><a href="#preference" data-toggle="tab">job alert preferences</a></li>
		<li><a href="#search" data-toggle="tab">search job</a></li>
	</ul>
	<div id="profileTab" class="tab-content">
		<div class="tab-pane active in" id="jobAlert">
			<ul class="list-group">
				<?php foreach($jobs as $job): ?>
					<li class="list-group-item">
							<h4 class="section-heading"><?php echo $job->title; ?></h4>
							<p class="lead"><?php echo '<b>description: </b>' . $job->description; ?></p>
							<p class="lead"><?php echo '<b>skills: </b>' . $job->skills; ?>
							<p class="lead"><?php echo '<b>years of expirience: </b>' . $job->yrsofexp; ?>
							<p class="lead"><?php echo '<b>salary: </b>' . $job->salary; ?>
							<p class="lead"><?php echo '<b>job location: </b>' . $job->location; ?>
							<p class="lead"><?php echo '<b>visit us at: </b>' . $job->address; ?>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="tab-pane fade" id="preference">
			<?php echo form_open('page/JobAlertController/saveJobAlertPreferences','id="formSaveJobAlert"'); ?>
				<div class="container-fluid">
				<div class="col-md-2"></div>
				<div class="col-md-8 register">
				  <h2 class="form-signin-heading">Job Alert Preferences</h2>
				  <h3></h3>
				  
				  <div class="form-group">
					<?php echo form_label('job location:','location'); ?>
					<?php echo form_error('location'); ?><br/>
					<?php echo form_input('location',$jobAlertPreferences['location'],'class="form-control" id="location"'); ?>
				  </div>
				  
				  <div class="form-group">
					<?php echo form_label('salary:','salary'); ?>
					<?php echo form_error('salary'); ?><br/>
					<?php echo form_input('salary',$jobAlertPreferences['salary'],'class="form-control" id="salary"'); ?>
				  </div>
				  
				  <div class="form-group">
					<?php echo form_label('years of expirience:','yrsofexp'); ?>
					<?php echo form_error('c'); ?><br/>
					<?php echo form_input('yrsofexp',$jobAlertPreferences['yrsofexp'],'class="form-control" id="yrsofexp"'); ?>
				  </div>
				  
				  <div class="form-group">
					<?php echo form_label('Industry:','industryid'); ?>
					<?php echo form_error('industryid'); ?><br/>
					<?php echo form_dropdown('industryid', $industryList, $jobAlertPreferences['industryid'], 'id="industryid"'); ?>
				  </div>
				  
				  <button id='jobAlertPreferencesSubmit' type="submit" name="submit" class="btn btn-lg btn-primary" value="1">save</button>
					  
				</div>
				</div>
			<?php echo form_close(); ?>
		</div>
		<div class="tab-pane fade" id="search">
			<?php echo form_open('page/JobAlertController/searchJobs','id="formSearchJobs"'); ?>
				<div class="container-fluid">
				<div class="col-md-2"></div>
				<div class="col-md-8 register">
				  <h2 class="form-signin-heading">Job Search</h2>
				  <h3></h3>
				  
				  <div class="form-group">
					<?php echo form_label('job location:','location'); ?>
					<?php echo form_error('location'); ?><br/>
					<?php echo form_input('location','','class="form-control" id="location"'); ?>
				  </div>
				  
				  <div class="form-group">
					<?php echo form_label('salary:','salary'); ?>
					<?php echo form_error('salary'); ?><br/>
					<?php echo form_input('salary','','class="form-control" id="salary"'); ?>
				  </div>
				  
				  <div class="form-group">
					<?php echo form_label('years of expirience:','yrsofexp'); ?>
					<?php echo form_error('yrsofexp'); ?><br/>
					<?php echo form_input('yrsofexp','','class="form-control" id="yrsofexp"'); ?>
				  </div>
				  
				  <div class="form-group">
					<?php echo form_label('job title:','title'); ?>
					<?php echo form_error('title'); ?><br/>
					<?php echo form_input('title','','class="form-control" id="title"'); ?>
				  </div>
				  
				  <button id='jobSearchSubmit' type="submit" name="submit" class="btn btn-lg btn-primary" value="1">search</button>
					  
				</div>
				</div>
			<?php echo form_close(); ?>
			<div id='searchResult'>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$( document ).ready(function() {
		
		$( "#jobAlertPreferencesSubmit" ).click(function() {
			var form_data = {
				location: $('#formSaveJobAlert #location').val(),
				salary: $('#formSaveJobAlert #salary').val(),
				yrsofexp: $('#formSaveJobAlert #yrsofexp').val(),
				industryid: $('#formSaveJobAlert #industryid').val()
			};
			
			
			$.ajax({
				url: '<?php echo base_url('page/JobAlertController/saveJobAlertPreferences');?>',
				type: 'POST',
				data: form_data,
				success: function(result){
					alert('Job alert preferences successfully saved.');
				}
			})
			
			return false;
		});
	});
	
	$( document ).ready(function() {
		
		$( "#jobSearchSubmit" ).click(function() {
			var form_data = {
				location: $('#formSearchJobs #location').val(),
				salary: $('#formSearchJobs #salary').val(),
				yrsofexp: $('#formSearchJobs #yrsofexp').val(),
				title: $('#formSearchJobs #title').val()
			};
			
			
			$.ajax({
				url: '<?php echo base_url('page/JobAlertController/searchJobs');?>',
				type: 'GET',
				data: form_data,
				success: function(result){
					//alert(result);
					$('#searchResult').html('');
					$( '#searchResult' ).html(result);
				}
			})
			
			return false;
		});
	});
</script>