<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApplicantProfileUpdateController extends Public_Controller {

	function handleProfileUpdate(){
		$this->load->model("ApplicantProfileUpdateModel");
		
		$this->data->industryList = $this->ApplicantProfileUpdateModel->getIndustryList();
		
		$this->data->personalInfo = $this->ApplicantProfileUpdateModel->getApplicantProfile('personalinfo');	
		$this->data->educationalBackgroundInfo = $this->ApplicantProfileUpdateModel->getApplicantProfile('educationalbackgroundinfo');
		$this->data->technicalSkillInfo = $this->ApplicantProfileUpdateModel->getApplicantProfile('technicalskillinfo');
	
		$this->data->industrySubCategoryList = $this->ApplicantProfileUpdateModel->getIndustrySubCategoryList($this->data->technicalSkillInfo['industryid']);
	
		//print_r($this->data->industrySubCategoryList);
		//exit;
		$this->templates->layout('profileUpdateView');
		$this->templates->render('profileUpdateView',$this->data);
		
	}
	
	function getIndustrySubCategoryList(){
		$selectedindustry = $this->input->get('selectedIndustry');
		
		$this->load->model("ApplicantProfileUpdateModel");
		$industrySubCategoryList = $this->ApplicantProfileUpdateModel->getIndustrySubCategoryList($selectedindustry);
		
		echo form_dropdown('jobid', $industrySubCategoryList, '', 'id="jobid"');
		
	}
	
	function savePersonalInfo(){		
		$this->saveApplicantProfile('personalinfo', 'personal information');
	}
	
	function saveEducationalBackgroundInfo(){		
		$this->saveApplicantProfile('educationalbackgroundinfo', 'educational background information');
	}
	
	function saveTechnicalSkillInfo(){		
		$this->saveApplicantProfile('technicalskillinfo', 'technical skill information');	}
	
	function saveApplicantProfile($tableName, $tableNameAlias){
		//get all the input fields from the form	
		$fields = $this->input->post();
		
		//remove submit button
		unset($fields["submit"]);
		
		//load model
		$this->load->model('ApplicantProfileUpdateModel');
		
		$affectedRow = $this->ApplicantProfileUpdateModel->saveApplicantProfile($fields, $tableName);
		if($affectedRow){
			echo($tableNameAlias . ' successfully saved.');
		} else {
			echo('Failed to update your ' . $tableNameAlias);
		}
	}
}