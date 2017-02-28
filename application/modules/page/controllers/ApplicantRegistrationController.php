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
        ),
        array(
                'field' => 'conpassword',
                'label' => 'Confirm Password',
                'rules' => 'required'
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
                'field' => 'companycountry',
                'label' => 'Company Country',
                'rules' => 'required'
        ),
        array(
                'field' => 'companystreet',
                'label' => 'Company Street',
                'rules' => 'required'
        ),
        array(
                'field' => 'companybrgy',
                'label' => 'Company Baranggay',
                'rules' => 'required'
        ),
        array(
                'field' => 'companycity',
                'label' => 'Company City/Town',
                'rules' => 'required'
        ),
        array(
                'field' => 'companyprovince',
                'label' => 'Company Province',
                'rules' => 'required'
        ),
        array(
                'field' => 'companyzip',
                'label' => 'Company Zip Code',
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
    var $message_validation = array(
        array(
                'field' => 'inquiryname',
                'label' => 'Name',
                'rules' => 'required'
        ),
        array(
                'field' => 'inquirycontact',
                'label' => 'Contact',
                'rules' => 'required|numeric'
        ),
        array(
                'field' => 'inquiryemail',
                'label' => 'Email',
                'rules' => 'required|valid_email'
        ),
        array(
                'field' => 'inquirymessage',
                'label' => 'Message',
                'rules' => 'required'
        )
    );
    var $personalinfo_validation = array(
        array(
                'field' => 'birthday',
                'label' => 'Birthday',
                'rules' => 'required'
        ),
        array(
                'field' => 'country',
                'label' => 'Country',
                'rules' => 'required'
        ),
        array(
                'field' => 'street',
                'label' => 'Street',
                'rules' => 'required'
        ),
        array(
                'field' => 'brgy',
                'label' => 'Baranggay',
                'rules' => 'required'
        ),
        array(
                'field' => 'city',
                'label' => 'City/Town',
                'rules' => 'required'
        ),
        array(
                'field' => 'province',
                'label' => 'Province',
                'rules' => 'required'
        ),
        array(
                'field' => 'zip',
                'label' => 'Zip Code',
                'rules' => 'required|numeric'
        ),
        array(
                'field' => 'citizenship',
                'label' => 'Citizenship',
                'rules' => 'required'
        ),
        array(
                'field' => 'status',
                'label' => 'Status',
                'rules' => 'required|in_list[Single,Widow,Married,Divorced]'
        ),
        array(
                'field' => 'gender',
                'label' => 'Citizenship',
                'rules' => 'required|in_list[Female,Male]'
        )
	);

    public function personalinfo(){
        $this->templates->layout('personalinfo');
        $this->load->model("Page_model");

        $genderList=$this->Page_model->get_gender();
        $this->data->genderList=$genderList;
        $this->load->model("Page_model");

        $personstatusList=$this->Page_model->get_personstatus();
        $this->data->personstatusList=$personstatusList;

        $this->load->library('form_validation');
        $this->form_validation->set_rules($this->personalinfo_validation);
        /*$this->form_validation->set_rules(
                'inquiryconatct', 'Contact Number',
                'required|numeric',
                array(
                        'numeric'      => 'Invalid Phone Number.'
                )
        );
        $this->form_validation->set_rules('inquiryemail', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('inquiryname', 'Name', 'required');
        $this->form_validation->set_rules('inquirymessage', 'Message', 'required');
                   */


                if ($this->form_validation->run() == FALSE)
                {  
                    foreach($this->personalinfo_validation as $row) {
                            $this->data->$row['field']=$this->input->post($row['field']);
                            $fields[$row['field']]=$this->input->post($row['field']);
                        }
                    $this->templates->render('personalinfo',$this->data);
                }
                else
                {   

                        $birthday=$this->input->post('birthday');
                        $street=$this->input->post('street');
                        $brgy=$this->input->post('brgy');
                        $city=$this->input->post('city');
                        $province=$this->input->post('province');
                        $country=$this->input->post('country');
                        $zip=$this->input->post('zip');
                        $citizenship=$this->input->post('citizenship');
                        $status=$this->input->post('status');
                        $gender=$this->input->post('gender');
                        

                    foreach($this->personalinfo_validation as $row) {
                        $this->data->$row['field']=$this->input->post($row['field']);
                        $fields[$row['field']]=$this->input->post($row['field']);
                        }

                    $this->load->model("Page_model");
                    $register=$this->Page_model->savepersonalinfo($fields);
                    if($register) {
                        $this->templates->render('login',$this->data);
                        $completeRegistrationRes = "Your Personal Info has been successfully saved.";
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('" . $completeRegistrationRes ."');
                        window.location.href='" . base_url() . "page/login';" . "</SCRIPT>");
                    } else {
                        $this->templates->render('personalinfo',$this->data);
                        $completeRegistrationRes = "Message Sending Failed.";
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('" . $completeRegistrationRes ."');
                        window.location.href='". "personalinfo';" . "</SCRIPT>");
                    }
                    
                
                }
    }
	function handleRegistrationRequest() {
		//go to applicant registration form
		$display="applicantregister";
		$this->templates->layout('applicantregister');
	
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
		$this->form_validation->set_rules($this->applicant_validation);

        $this->form_validation->set_rules(
                'username', 'Username',
                'required|min_length[5]|max_length[12]|is_unique[accounts.username]',
                array(
                        'required'      => 'You have not provided %s.',
                        'is_unique'     => 'This %s already exists.'
                )
        );
        $this->form_validation->set_rules('password', 'Password',
            'required|min_length[5]',
                array(
                        'required'      => 'You have not provided %s.'
                )
        );
        $this->form_validation->set_rules('conpassword', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[accounts.email]');
        			
		foreach($this->applicant_validation as $row) {
            $this->data->$row['field']=NULL;
        }
	 		
        if ($this->input->post('submit') == NULL){

        }
        else {
           if($this->form_validation->run()){
                foreach($this->applicant_validation as $row) {
                    $this->data->$row['field']=$this->input->post($row['field']);
                    $fields[$row['field']]=$this->input->post($row['field']);
                }
                $fields = $this->input->post();
                $email = $fields["email"];
  
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
                                    window.location.href='" . base_url() . "page/ApplicantRegistrationController/personalinfo';" . "</SCRIPT>");
                                    
                        exit;
                        //redirect('/page/login');
                    } else{
                        $this->templates->render('applicantregister',$this->data);
                        $completeRegistrationRes = "Your Username or Password may be invalid. Please try again with a different one.";
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('" . $completeRegistrationRes ."');
                        window.location.href='" . "handleRegistrationRequest';" . "</SCRIPT>");
                        echo "foo is $isUserNameValid";
                    }
                } else if($status=='tentative'){
                    
                } else { 
                    
                }
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

        $this->form_validation->set_rules(
                'username', 'Username',
                'required|min_length[5]|max_length[12]|is_unique[accounts.username]',
                array(
                        'required'      => 'You have not provided %s.',
                        'is_unique'     => 'This %s already exists.'
                )
        );
        $this->form_validation->set_rules('password', 'Password',
            'required|min_length[5]',
                array(
                        'required'      => 'You have not provided %s.'
                )
        );
        $this->form_validation->set_rules('conpassword', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[accounts.email]');
                    
        foreach($this->applicant_validation as $row) {
            $this->data->$row['field']=NULL;
        }
            
        if ($this->input->post('submit') == NULL){

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
                        $registrationRes = $this->ApplicantRegistrationModel->doTentativeRegistration_2($fields); //valid user name
                    
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

		$this->load->model("Page_model");

        $collegeList=$this->Page_model->get_colleges();
        $this->data->collegeList=$collegeList;

		$this->load->model("Page_model");

        $statusList=$this->Page_model->get_status();
        $this->data->statusList=$statusList;

		$this->templates->layout('applicantpreregistration');
        $this->load->library('form_validation');


        $this->form_validation->set_rules($this->preapplicant_validation);
        $this->form_validation->set_rules('studentid', 'studentid', 'required|integer');
        $this->form_validation->set_rules('graduation', 'graduation', 'required|integer');

                if ($this->form_validation->run() == FALSE)
                {
                    foreach($this->preapplicant_validation as $row) {
                        $this->data->$row['field']=$this->input->post($row['field']);
                            $fields[$row['field']]=$this->input->post($row['field']);
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
                		$status=$this->input->post('status');
                		$contact=$this->input->post('contact');

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
            				/*print_r($contact);
            				die();*/
            				foreach($this->preapplicant_validation as $row) {
                            $this->data->$row['field']=$this->input->post($row['field']);
                            $fields[$row['field']]=$this->input->post($row['field']);
                        }
							$this->load->model("ApplicantRegistrationModel");
            				$this->ApplicantRegistrationModel->update_applicantrecords($fields,$check);
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
        
        $this->load->model("Page_model");

        $industryList=$this->Page_model->get_industry();
        $this->data->industryList=$industryList;
        
        $this->templates->layout('employerregister');
        $this->load->library('form_validation');

        $this->form_validation->set_rules(
                'companyzip', 'Company Zip Code',
                'required|integer',
                array(
                        'integer'      => 'Must only be integers.'
                )
        );
        $this->form_validation->set_rules(
                'companycontact', 'Company Contact',
                'required|numeric|is_unique[employerinfo.companycontact]',
                array(
                        'numeric'      => 'Invalid Phone Number.',
                        'is_unique'     => 'This %s already exists.'
                )
        );
        $this->form_validation->set_rules(
                'hrcontact', 'HR Contact',
                'numeric|is_unique[employerinfo.hrcontact]',
                array(
                        'numeric'      => 'Invalid Phone Number.',
                        'is_unique'     => 'This %s already exists.'
                )
        );
        $this->form_validation->set_rules(
                'companyyear', 'Company Year',
                'required|integer',
                array(
                        'integer'      => 'Must only be integers.'
                )
        );
        $this->form_validation->set_rules('companyemail', 'Company Email', 'required|valid_email|is_unique[employerinfo.companyemail]');
        $this->form_validation->set_rules('hremail', 'HR Email', 'valid_email|is_unique[employerinfo.hremail]');
        $this->form_validation->set_rules('companyname', 'HR Email', 'required');
        $this->form_validation->set_rules('companycountry', 'Company Country', 'required');
        $this->form_validation->set_rules('companystreet', 'Company Street', 'required');
        $this->form_validation->set_rules('companybrgy', 'Company Baranggay', 'required');
        $this->form_validation->set_rules('companycity', 'Company City/Town', 'required');
        $this->form_validation->set_rules('companyprovince', 'Company Province', 'required');
        $this->form_validation->set_rules('companyfounder', 'Company Founder', 'required');
        $this->form_validation->set_rules('companytype', 'Company Type', 'required');
                   

                if ($this->form_validation->run() == FALSE)
                {  
                    foreach($this->preemployer_validation as $row) {
                                    $this->data->$row['field']=$this->input->post($row['field']);
                                    $fields[$row['field']]=$this->input->post($row['field']);
                                }
                            $this->templates->render('employerregister',$this->data);
                }
                else
                {   

                    $this->form_validation->set_rules(
                            'companytype', 'Company Type',
                            'is_unique[industrylist.industry]',
                            array(
                                    'is_unique'     => 'This %s is invalid.'
                            )
                    );
                    if ($this->form_validation->run() == FALSE)
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
                        }
                        else{
                            $this->templates->render('login',$this->data);
                            $completeRegistrationRes = "Your company already have an account. Kindly try to login instead.";
                            echo ("<SCRIPT LANGUAGE='JavaScript'>
                            window.alert('" . $completeRegistrationRes ."');
                            window.location.href='" . base_url() . "/page/login';" . "</SCRIPT>");
                        }
                    }
                    elseif ($this->form_validation->run() == TRUE){
                        
                        $this->form_validation->set_rules(
                                'companytype', 'Company Type',
                                'max_length[1]',
                                array(
                                        'max_length'     => 'This %s is invalid.'
                                )
                        );
                        if ($this->form_validation->run() == FALSE)
                        {
                            foreach($this->preemployer_validation as $row) {
                                    $this->data->$row['field']=$this->input->post($row['field']);
                                    $fields[$row['field']]=$this->input->post($row['field']);
                                }
                            $this->templates->render('employerregister',$this->data);
                        }
                    }
                
                }
    }
    public function my_message_2(){
        if ($this->session->userdata('id'))
        {
            redirect('page/ApplicantRegistrationController/handleRegistrationRequest_emp');
        }
        $this->templates->layout('message_2');
        $this->load->library('form_validation');
        $this->form_validation->set_rules($this->message_validation);
        /*$this->form_validation->set_rules(
                'inquiryconatct', 'Contact Number',
                'required|numeric',
                array(
                        'numeric'      => 'Invalid Phone Number.'
                )
        );
        $this->form_validation->set_rules('inquiryemail', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('inquiryname', 'Name', 'required');
        $this->form_validation->set_rules('inquirymessage', 'Message', 'required');
                   */


                if ($this->form_validation->run() == FALSE)
                {  
                    foreach($this->message_validation as $row) {
                            $this->data->$row['field']=$this->input->post($row['field']);
                            $fields[$row['field']]=$this->input->post($row['field']);
                        }
                    $this->templates->render('message',$this->data);
                }
                else
                {   

                        $inquiryname=$this->input->post('inquiryname');
                        $inquirycontact=$this->input->post('inquirycontact');
                        $inquiryemail=$this->input->post('inquiryemail');
                        $inquirymessage=$this->input->post('inquirymessage');

                    foreach($this->message_validation as $row) {
                        $this->data->$row['field']=$this->input->post($row['field']);
                        $fields[$row['field']]=$this->input->post($row['field']);
                        }

                    $this->load->model("Page_model");
                    $register=$this->Page_model->saveinquiry($fields);
                    if($register) {
                        $this->templates->render('home',$this->data);
                        $completeRegistrationRes = "Your message has been successfully sent. Please check your email tomorrow for a response.";
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('" . $completeRegistrationRes ."');
                        window.location.href='". "../';" . "</SCRIPT>");
                    } else {
                        $this->templates->render('message_2',$this->data);
                        $completeRegistrationRes = "Message Sending Failed.";
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('" . $completeRegistrationRes ."');
                        window.location.href='". "my_message_2';" . "</SCRIPT>");
                    }
                    
                
                }
    }
	public function my_message(){
        if ($this->session->userdata('id'))
		{
			redirect('page/ApplicantRegistrationController/handleRegistrationRequest_emp');
		}
		$this->templates->layout('message');
        $this->load->library('form_validation');
        $this->form_validation->set_rules($this->message_validation);
        /*$this->form_validation->set_rules(
                'inquiryconatct', 'Contact Number',
                'required|numeric',
                array(
                        'numeric'      => 'Invalid Phone Number.'
                )
        );
        $this->form_validation->set_rules('inquiryemail', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('inquiryname', 'Name', 'required');
        $this->form_validation->set_rules('inquirymessage', 'Message', 'required');
                   */


                if ($this->form_validation->run() == FALSE)
                {  
                    foreach($this->message_validation as $row) {
                            $this->data->$row['field']=$this->input->post($row['field']);
                            $fields[$row['field']]=$this->input->post($row['field']);
                        }
                    $this->templates->render('message',$this->data);
                }
                else
                {	

                        $inquiryname=$this->input->post('inquiryname');
                        $inquirycontact=$this->input->post('inquirycontact');
                        $inquiryemail=$this->input->post('inquiryemail');
                        $inquirymessage=$this->input->post('inquirymessage');

                	foreach($this->message_validation as $row) {
                        $this->data->$row['field']=$this->input->post($row['field']);
                        $fields[$row['field']]=$this->input->post($row['field']);
                        }

                    $this->load->model("Page_model");
                    $register=$this->Page_model->saveinquiry($fields);
                    if($register) {
                        $this->templates->render('home',$this->data);
                        $completeRegistrationRes = "Your message has been successfully sent. Please check your email tomorrow for a response.";
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('" . $completeRegistrationRes ."');
                        window.location.href='". "../';" . "</SCRIPT>");
                    } else {
                        $this->templates->render('message',$this->data);
                        $completeRegistrationRes = "Message Sending Failed.";
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('" . $completeRegistrationRes ."');
                        window.location.href='". "preregistration_employer';" . "</SCRIPT>");
                    }
                    
		        
                }
	}

}