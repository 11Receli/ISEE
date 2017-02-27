<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends Public_Controller {
var $login_validation = array(
        array(
                'field' => 'username',
                'label' => 'Username',
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

var $achievers_load = array(
        array(
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required'
        ),
        array(
                'field' => 'achievements',
                'label' => 'Achievements',
                'rules' => 'required'
        ),
        array(
                'field' => 'work',
                'label' => 'Work',
                'rules' => 'required'
        ),
        array(
                'field' => 'company',
                'label' => 'Company',
                'rules' => 'required'
        ),
        array(
                'field' => 'years',
                'label' => 'Years',
                'rules' => 'required'
        ),
        array(
                'field' => 'quote',
                'label' => 'Quote',
                'rules' => 'required'
        ),
        array(
                'field' => 'course',
                'label' => 'Course',
                'rules' => 'required'
        ),
        array(
                'field' => 'graduation',
                'label' => 'Graduation',
                'rules' => 'required'
        )
	);

var $mainlogin_validation = array(
        array(
                'field' => 'accounttype',
                'label' => 'Account Type',
                'rules' => 'required'
        )
    );
var $company_validation = array(
        array(
                'field' => 'companyname',
                'label' => 'Company Name',
                'rules' => 'required'
        ),
        array(
                'field' => 'companytype',
                'label' => 'Company Type',
                'rules' => 'required',
                'errors' => array(
                'required' => 'You must provide a %s.',
                )
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
        ),
        array(
                'field' => 'positions',
                'label' => 'Position',
                'rules' => 'required'
        )
	);

var $inquiry_validation = array(
        array(
                'field' => 'inquiryname',
                'label' => 'Inquiry Name',
                'rules' => 'required'
        ),
        array(
                'field' => 'inquiryemail',
                'label' => 'Inquiry Email',
                'rules' => 'required',
                'errors' => array(
                'required' => 'You must provide a %s.',
                )
        ),
        array(
                'field' => 'inquirycontact',
                'label' => 'Inquiry Contact',
                'rules' => 'required'
        ),
        array(
                'field' => 'inquirymessage',
                'label' => 'Inquiry Message',
                'rules' => 'required'
        )
    );
	public function index() {

        $id_1="1";
        $id_2="2";
        $id_3="4";
        $this->templates->layout('home');
        $this->load->model("Page_model");

        $latest_article=$this->Page_model->get_latest_article();
        $this->data->latest_article=$latest_article;
        /*$this->data->home_achievers_1=$home_achievers_1;
        $home_achievers_2=$this->Page_model->home_achievers_2($id_2);
        $this->data->home_achievers_2=$home_achievers_2;
        $home_achievers_3=$this->Page_model->home_achievers_3($id_3);
        $this->data->home_achievers_3=$home_achievers_3;*/

		
		$this->templates->render('home',$this->data);
	}

    public function achiever() {
        $this->load->model("Page_model");

        $students=$this->Page_model->get_achievers();
        $this->data->students=$students;
        $this->templates->layout('achiever');
        $this->templates->render('achiever',$this->data);
    }
    public function about() {
        $this->load->model("Page_model");

        $team=$this->Page_model->get_team();
        $this->data->team=$team;
        $this->templates->layout('about');
        $this->templates->render('about',$this->data);
    }

    public function mainregistration(){
        $display="mainregistration";
        $this->templates->layout('mainregistration');

        $accounttype=$this->input->post('accounttype');

        $this->load->library('form_validation');
        $this->form_validation->set_rules($this->mainlogin_validation);

                if ($this->form_validation->run() == FALSE)
                {
                    foreach($this->mainlogin_validation as $row) {
                        $this->data->$row['field']="";
                    }/*
                        $this->templates->render('page/mainregistration',$this->data);*/
                }
                else{
                    if ($accounttype == "TRUE"){
                        redirect('page/ApplicantRegistrationController/preregistration_employer');
                    }
                    elseif ($accounttype == "FALSE"){
                        /*redirect('page/ApplicantRegistrationController/handleRegistrationRequest');*/
                        redirect('page/ApplicantRegistrationController/preregistration_applicant');
                    }   
                }
                /*
                elseif ($this->form_validation->run() == TRUE) {
                    if ($this->mainlogin_validation as $row == "Employer"){
                        
                    }
                    elseif ($this->mainlogin_validation as $row == "Job Applicant"){
                        
                    }
                    else{
                            foreach($this->mainlogin_validation as $row) {
                            $this->data->$row['field']="";
                        }
                    }
                }*/

        $this->templates->render($display,$this->data);
    }

	public function registration(){
        $display="employerregister";
        $this->templates->layout('employerregister');
	
		$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
		 $this->form_validation->set_rules($this->company_validation);
			
			foreach($this->company_validation as $row) {
	            $this->data->$row['field']=NULL;
	        }

	 		
            if ($this->input->post('submit') == NULL)
            {

            		
            }
            else {		

                    if($this->form_validation->run()){
                        foreach($this->company_validation as $row) {
                            $this->data->$row['field']=$this->input->post($row['field']);
                            $fields[$row['field']]=$this->input->post($row['field']);
                        }

                        $this->load->model("Page_model");
                        $register=$this->Page_model->checkregistration($fields);

                        if($register) {
                            redirect();
                        } else {
                            echo "registration failed";
                        }
                    } else {
                        
                    }
            }
		$this->templates->render($display,$this->data);
	}

	public function login() {
		if ($this->session->userdata('username'))
		{
			redirect('page');
		}

		$this->templates->layout('login');
        $this->load->library('form_validation');


        $this->form_validation->set_rules($this->login_validation);

                if ($this->form_validation->run() == FALSE)
                {
                    foreach($this->login_validation as $row) {
                        $this->data->$row['field']="";
                    }
                		$this->templates->render('login',$this->data);
                }
                else
                {		
                		$username=$this->input->post('username');
                		$password=$this->input->post('password');

                        foreach($this->login_validation as $row) {
                            $this->data->$row['field']=$this->input->post($row['field']);
                        }

            			$this->load->model("Page_model");
            			$check=$this->Page_model->checklogin($username,$password);
            			if($check==0) {            				
                            $this->templates->notify="Incorrect Username or password.";
                            $this->templates->render('login',$this->data);
            			} else {
							//set session
            				$this->session->set_userdata('username',$username);
							$this->session->set_userdata('userid',$check);
            				$this->load->model("JobAlertModel");
					$this->data->jobs=$this->JobAlertModel->getSuggestedJobPostings();
							
					$this->load->model("ApplicantProfileUpdateModel");
					$this->data->industryList = $this->ApplicantProfileUpdateModel->getIndustryList();
							
							
					$this->data->jobAlertPreferences = $this->JobAlertModel->getJobAlertPreferences();
							
					$this->templates->layout('home');
					$this->templates->render('home',$this->data);
            			}
                }
	}

	function logout(){
		session_destroy();
		redirect('page');
	}
    public function search_applicant() {
        if($this->input->post()) {
            $inputs=$this->input->post();
            $query=$this->db->like($inputs)->get('applicant_view');
            $result=$query->result(); 
            $this->data->result=$result;
            $this->templates->render('search_result',$this->data);
        } else {
            $this->templates->render('applicant_home',$this->data);
        }
    }
	public function test_page() {
		$x=0;
		$y=1;
		$z=$x+$y;
		$this->data->addition=$z;
		$this->data->test_string='Hello World';
		$this->templates->render('test_page',$this->data);
	}
    public function inquiry(){
        $display="page";
        $this->templates->layout('page');
    
        $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
         $this->form_validation->set_rules($this->inquiry_validation);
            
            foreach($this->inquiry_validation as $row) {
                $this->data->$row['field']=NULL;
            }

            
            if ($this->input->post('submit') == NULL)
            {       
            }
            else {      

                    if($this->form_validation->run()){
                        foreach($this->inquiry_validation as $row) {
                            $this->data->$row['field']=$this->input->post($row['field']);
                            $fields[$row['field']]=$this->input->post($row['field']);
                        }

                        $this->load->model("Page_model");
                        $register=$this->Page_model->saveinquiry($fields);

                        if($register) {
                            redirect();
                        } else {
                            echo "registration failed";
                        }
                    } else {
                        
                    }
            }
        $this->templates->render($display,$this->data);
    }
}
