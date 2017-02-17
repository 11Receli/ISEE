<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JobAlertController extends Public_Controller {

	function getSuggestedJobPostings(){
		$this->load->model("JobAlertModel");
		$jobs = $this->JobAlertModel->getSuggestedJobPostings();
		echo $jobs;
		exit;
	}
	
	function saveJobAlertPreferences(){
		//get all the input fields from the form	
		$fields = $this->input->post();
		
		//remove submit button
		unset($fields["submit"]);
		
		//load model
		$this->load->model('JobAlertModel');
		
		$affectedRow = $this->JobAlertModel->saveJobAlertPreferences($fields);
		if($affectedRow){
			return 'Job alert preferences successfully saved.';
		} else {
			return 'Failed to update your job alert preferences.';
		}
		
	}
	
	function getJobAlertPreferences(){
		$this->load->model("JobAlertModel");
		
		return $this->JobAlertModel->getJobAlertPreferences();
	}
	
	function searchJobs(){
		$fields = $this->input->get();
		$this->load->model("JobAlertModel");
		$jobs = $this->JobAlertModel->searchJobs($fields);
		
		
		$msg='<div id="profileTab" class="tab-content">
		<div class="tab-pane active in" id="jobAlert">
			<ul class="list-group">';

				foreach((array)$jobs as $job){
					$msg .= '<li class="list-group-item">
							<h4 class="section-heading">' . $job['title'] .'</h4>
							<p class="lead"><b>description: </b>' . $job['description'] .'</p>
							<p class="lead"><b>skills: </b>' . $job['skills'] .'</p>
							<p class="lead"><b>years of expirience: </b>' . $job['yrsofexp'] . '</p>
							<p class="lead"><b>salary: </b>' . $job['salary'] . '</p>
							<p class="lead"><b>job location: </b>' . $job['location'] . '</p>
							<p class="lead"><b>visit us at: </b>' . $job['address'] . '</p>
					</li>';
				}
			$msg .=  '</ul>
		</div>';
		echo $msg;
		
	}
}