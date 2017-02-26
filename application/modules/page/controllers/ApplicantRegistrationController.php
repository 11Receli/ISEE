<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApplicantRegistrationController extends Public_Controller {
	var $applicant_validation = array(
        array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required'
        ),
        array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
        ),
        array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                        'required' => 'You must provide a %s.',
                )
        )
    );
    var $preapplicant_validation = array(
        
        array(
                'field' => 'firstname',
                'label' => 'First Name',
                'rules' => 'required'
        ),
        array(
                'field' => 'middlename',
                'label' => 'Middle Name',
                'rules' => 'required'
        ),
        array(
                'field' => 'lastname',
                'label' => 'Last Name',
                'rules' => 'required'
        ),
        array(
                'field' => 'department',
                'label' => 'Department',
                'rules' => 'required'
        ),
        array(
                'field' => 'graduation',
                'label' => 'Year of Graduation',
                'rules' => 'required'
        ),
        array(
                'field' => 'studentid',
                'label' => 'Student ID',
                'rules' => 'required'
        ),
        array(
                'field' => 'contact',
                'label' => 'Contact Number',
                'rules' => 'required'
        ),
        array(
                'field' => 'status',
                'label' => 'Status',
                'rules' => 'required'
        )
        
    );
    var $preemployer_validation = array(
        array(
                'field' => 'companyname',
                'label' => 'Company Name',
                'rules' => 'required'
        ),
        array(
                'field' => 'companytype',
                'label' => 'Company Type',
                'rules' => 'required'
        ),
        array(
                'field' => 'companyaddress',
                'label' => 'Company Address',
                'rules' => 'required'
        ),
        array(
                'field' => 'companycontact',
                'label' => 'Company Contact',
                'rules' => 'required'
        ),
        array(
                'field' => 'companyemail',
                'label' => 'Company Email',
                'rules' => 'required'
        ),
        array(
                'field' => 'companyfounder',
                'label' => 'Company Founder',
                'rules' => 'required'
        ),
        array(
                'field' => 'companyyear',
                'label' => 'Company Year',
                'rules' => 'required'
        ),
        array(
                'field' => 'hrname',
                'label' => 'HR Name',
                'rules' => 'required'
        ),
        array(
                'field' => 'hrcontact',
                'label' => 'HR Contact',
                'rules' => 'required'
        ),
        array(
                'field' => 'hremail',
                'label' => 'HR Email',
                'rules' => 'required'
        )
	);

/*	function handleRegistrationRequestSubmit() {
	
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
				//$this->templates->layout('applicantregister');
				//$this->templates->render('applicantregister', $fields);
				echo "foo is $isUserNameValid";
			}
		} else if($status=='tentative'){
			//case 2
			//set message, go to view
		} else { 
			//case 3
			//set message go to view
		}
	}*/
	
	function handleRegistrationRequest() {
		//go to applicant registration form
		$display="applicantregister";
		$this->templates->layout('applicantregister');
	
		$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
		 $this->form_validation->set_rules($this->applicant_validation);
			
			foreach($this->applicant_validation as $row) {
	            $this->data->$row['field']=NULL;
	        }

	 		
            if ($this->input->post('submit') == NULL)
            {

            		
            }
            else {		

                    if($this->form_validation->run()){
                        foreach($this->applicant_validation as $row) {
                            $this->data->$row['field']=$this->input->post($row['field']);
                            $fields[$row['field']]=$this->input->post($row['field']);
                        }
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
							$isUserNameValid=$this->ApplicantRegistrationModel->isUserNameValid($fields["username"]);
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
								//$this->templates->layout('applicantregister');
								//$this->templates->render('applicantregister', $fields);
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
                    else {
                        
                    }
            }
		$this->templates->render($display,$this->data);
	}

	function handleRegistrationRequest_emp() {
		//go to applicant registration form
		$display="employer_register";
		$this->templates->layout('employer_register');
	
		$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
		 $this->form_validation->set_rules($this->applicant_validation);
			
			foreach($this->applicant_validation as $row) {
	            $this->data->$row['field']=NULL;
	        }

	 		
            if ($this->input->post('submit') == NULL)
            {

            		
            }
            else {		

                    if($this->form_validation->run()){
                        foreach($this->applicant_validation as $row) {
                            $this->data->$row['field']=$this->input->post($row['field']);
                            $fields[$row['field']]=$this->input->post($row['field']);
                        }
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
							$isUserNameValid=$this->ApplicantRegistrationModel->isUserNameValid($fields["username"]);
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
								//$this->templates->layout('employer_register');
								//$this->templates->render('employer_register', $fields);
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
                    else {
                        
                    }
            }
		$this->templates->render($display,$this->data);
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


	public function preregistration_applicant(){
        if ($this->session->userdata('id'))
		{
			redirect('page/ApplicantRegistrationController/handleRegistrationRequest');
		}

		$this->templates->layout('applicantpreregistration');
        $this->load->library('form_validation');


        $this->form_validation->set_rules($this->preapplicant_validation);

                if ($this->form_validation->run() == FALSE)
                {
                    foreach($this->preapplicant_validation as $row) {
                        $this->data->$row['field']="";
                    }
                		$this->templates->render('applicantpreregistration',$this->data);
                }
                else
                {	
               
		            	$firstname=$this->input->post('firstname');
                		$middlename=$this->input->post('middlename');
                		$lastname=$this->input->post('lastname');
                		$department=$this->input->post('department');
                		$graduation=$this->input->post('graduation');
                		$studentid=$this->input->post('studentid');

                        foreach($this->preapplicant_validation as $row) {
                            $this->data->$row['field']=$this->input->post($row['field']);
                        }

						$this->load->model("ApplicantRegistrationModel");
            			$check=$this->ApplicantRegistrationModel->checkpreregistration($firstname,$middlename,$lastname,$department,$graduation,$studentid);
            			if($check==0) {            				
                            
                            $this->templates->render('applicantpreregistration',$this->data);
                            $completeRegistrationRes = "Your profile input is invalid. Please try again.";
                            echo ("<SCRIPT LANGUAGE='JavaScript'>
							window.alert('" . $completeRegistrationRes ."');
							window.location.href='" . "preregistration_applicant';" . "</SCRIPT>");
                            /*print_r($check);*/
            			} else {
							
            				redirect('page/ApplicantRegistrationController/handleRegistrationRequest');
            				 /*print_r($check);*/
            			}

		        
                }
	}
	public function preregistration_employer(){
        if ($this->session->userdata('id'))
		{
			redirect('page/ApplicantRegistrationController/handleRegistrationRequest_emp');
		}

		$this->templates->layout('employerregister');
        $this->load->library('form_validation');


        $this->form_validation->set_rules($this->preemployer_validation);

                if ($this->form_validation->run() == FALSE)
                {
                    foreach($this->preemployer_validation as $row) {
                        $this->data->$row['field']="";
                    }
                		$this->templates->render('employerregister',$this->data);
                }
                else
                {	
               
		            	$companyname=$this->input->post('companyname');
		            	$companytype=$this->input->post('companytype');
		            	$companyemail=$this->input->post('companyemail');
		            	$companyyear=$this->input->post('companyyear');
		            	

                        foreach($this->preemployer_validation as $row) {
                            $this->data->$row['field']=$this->input->post($row['field']);
                        }

						$this->load->model("ApplicantRegistrationModel");
            			$check=$this->ApplicantRegistrationModel->checkpreregistration_emp($companyname,$companytype,$companyemail,$companyyear);
            			if($check==0) {

            				foreach($this->preemployer_validation as $row) {
                            $this->data->$row['field']=$this->input->post($row['field']);
                            $fields[$row['field']]=$this->input->post($row['field']);
                        }

                        $this->load->model("Page_model");
                        $register=$this->Page_model->checkregistration($fields);

                        if($register) {
                             redirect('page/ApplicantRegistrationController/handleRegistrationRequest_emp');
                        } else {
                            $this->templates->render('employerregister',$this->data);
                            $completeRegistrationRes = "Your company already have an account. Kindly try to login instead.";
                            echo ("<SCRIPT LANGUAGE='JavaScript'>
							window.alert('" . $completeRegistrationRes ."');
							window.location.href='". "preregistration_employer';" . "</SCRIPT>");
                        }
                            
            			} else {
							
							$this->templates->render('login',$this->data);
                            $completeRegistrationRes = "Your company already have an account. Kindly try to login instead.";
                            echo ("<SCRIPT LANGUAGE='JavaScript'>
							window.alert('" . $completeRegistrationRes ."');
							window.location.href='" . base_url() . "/page/login';" . "</SCRIPT>");
            			}
		        
                }
	}






}