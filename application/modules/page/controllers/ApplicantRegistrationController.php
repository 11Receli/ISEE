<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApplicantRegistrationController extends Public_Controller {

	function handleRegistrationRequestSubmit() {
	
		//get all the input fields from the form	
		$fields = $this->input->post();
		
		//get the email from the fields
		$email = $fields["email"];
		
		//validate email in DB
		
		//case 1: Email does not exist, Check userID if does not exist, do tentative registration. Send email confirmation.
		//case 2: Email exist but applicant's registration status is tentative. Show message, "Please check your email and click the confirmation link to complete registration."
		//case 3: Email exist and applicant's registration status is active. Show message, "Applicant account already exist."
		
		$this->load->model("ApplicantRegistrationModel");
		
		$status = $this->ApplicantRegistrationModel->verifyEmail($email);
		if($status == ''){//case 1 Email Does not exist
			$isUserNameValid=$this->ApplicantRegistrationModel->isUserNameValid($fields["userName"]);
			if($isUserNameValid==true){ //check if userName exist in DB
			
				$this->load->helper('url');
				
				unset($fields["submit"]);
				$registrationRes = $this->ApplicantRegistrationModel->doTentativeRegistration($fields); //valid user name
			
				echo ("<SCRIPT LANGUAGE='JavaScript'>
							window.alert('" . $registrationRes ."');
							window.location.href='" . base_url() . "/page/login';" . "</SCRIPT>");
							
				exit;
				//redirect('/page/login');
			} else{
				//invalid userName go to applicant registration form
				//$this->templates->layout('applicantRegistrationView');
				//$this->templates->render('applicantRegistrationView', $fields);
				echo "foo is $isUserNameValid";
			}
		} else if($status=='tentative'){
			//case 2
			//set message, go to view
		} else { 
			//case 3
			//set message go to view
		}
	}
	
	function handleRegistrationRequest() {
		//go to applicant registration form
		$this->templates->layout('applicantRegistrationView');
		$this->templates->render('applicantRegistrationView',$this->data);
	}
	
	function handleConfirmationLinkVerification(){
		$confirmationKey = $this->input->get("confirmationKey");
		$this->load->model("ApplicantRegistrationModel");
		
		
		if($this->ApplicantRegistrationModel->doCompleteRegistration($confirmationKey)){
				$completeRegistrationRes = "Your account has been activated, you can now login to our site.";
		} else {
			$completeRegistrationRes = "Invalid confirmation token.";
		}
		
		
		echo ("<SCRIPT LANGUAGE='JavaScript'>
							window.alert('" . $completeRegistrationRes ."');
							window.location.href='" . base_url() . "/page/login';" . "</SCRIPT>");
		exit;
	}
}
