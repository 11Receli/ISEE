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
    


    //*HOME
	public function index() {
        $display="home";
        $this->templates->layout('home');

        $id_1="1";
        $id_2="2";
        $id_3="4";
        $this->load->model("Page_model");

        $latest_article=$this->Page_model->get_latest_article();
        $this->data->latest_article=$latest_article;
        $this->templates->render($display,$this->data);
	}


    //*SUB PAGES
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
    public function article() {
        $this->load->model("Page_model");

        $latest_article=$this->Page_model->get_latest_article();
        $this->data->latest_article=$latest_article;
        $this->templates->layout('article');
        $this->templates->render('article',$this->data);
    }
    public function about_2() {
        $this->load->model("Page_model");

        $team=$this->Page_model->get_team();
        $this->data->team=$team;
        $this->templates->layout('about_2');
        $this->templates->render('about_2',$this->data);
    }
    public function article_2() {
        $this->load->model("Page_model");

        $latest_article=$this->Page_model->get_latest_article();
        $this->data->latest_article=$latest_article;
        $this->templates->layout('article_2');
        $this->templates->render('article_2',$this->data);
    }


    //*VIEW PROFILE ON APPLICANT
    public function resume2() {
        
        $end=$this->session->userdata('username');
        $this->load->model("Page_model");

        $stdid=$this->Page_model->getid($end);
            if($stdid == 0)
            {

            }
            else
            {
                $stdid=$this->Page_model->getstdid($end);
            }
            $basic=$this->Page_model->get_basicinfo($stdid);
            $this->data->basic=$basic;
            $personal=$this->Page_model->get_personal($stdid);
            $this->data->personal=$personal;
            $education=$this->Page_model->get_education($stdid);
            $this->data->education=$education;
            $this->templates->layout('resume');
            $this->templates->render('resume',$this->data);
    }


    //*MAIN REGISTRATION
    public function mainregistration(){
        $display="mainregistration";
        $this->templates->layout('mainregistration');

        $accounttype=$this->input->post('accounttype');

        $this->load->library('form_validation');
        $this->form_validation->set_rules($this->mainlogin_validation);
        if ($this->input->post('submit2') == NULL){
        }
        else
        {
            $this->templates->render('home',$this->data);
            redirect('page');
        }

        if ($this->input->post('submit') == NULL){
        }
        else
        {
            if ($this->form_validation->run() == FALSE)
            {
                foreach($this->mainlogin_validation as $row) 
                {
                    $this->data->$row['field']="";
                }
            }
            else
            {
                if ($accounttype == "TRUE")
                {
                    redirect('page/ApplicantRegistrationController/preregistration_employer');
                }
                elseif ($accounttype == "FALSE")
                {
                    redirect('page/ApplicantRegistrationController/preregistration_applicant');
                }   
            }
        }

        $this->templates->render($display,$this->data);
    }


    //*LOGIN PROCESS
    public function reload_page(){
        if ($this->session->userdata('username'))
        {
                $identity=$this->session->userdata('username'); 
                $this->load->model("Page_model");
                $userlevel=$this->Page_model->check_userlevel_again($identity);
                
                if($userlevel=='employee') { 
                    //*Personal Info Check
                    $this->load->model("ApplicantRegistrationModel");
                    $personal = $this->data->jobs=$this->ApplicantRegistrationModel->checkpersonalinfo($identity);
                    if ($personal==0){
                        $tagpi = 'You have no personal information yet.';
                    }
                    else
                    {  
                        $tagpi = 'Keep your personal information up to date.';
                    }
                    
                    $this->data->tagpi=$tagpi; 

                    //*Educational background Check
                    $this->load->model("ApplicantRegistrationModel");
                    $education = $this->data->jobs=$this->ApplicantRegistrationModel->checkeducation($identity);
                    if ($education==0){
                        $tagedu = 'You have no educational background yet.';
                    }
                    else
                    {  
                        $tagedu = 'Keep your educational background up to date.';
                    }
                    
                    $this->data->tagedu=$tagedu; 

                    //*Work Check
                    $this->load->model("ApplicantRegistrationModel");
                    $work = $this->data->jobs=$this->ApplicantRegistrationModel->checkwork($identity);
                    if ($work==0){
                        $tagwork = 'You have no working background yet.';
                    }
                    else
                    {  
                        $tagwork = 'Keep your working background up to date.';
                    }
                    
                    $this->data->tagwork=$tagwork; 

                    //*Skill Check
                    $this->load->model("ApplicantRegistrationModel");
                    $skill = $this->data->jobs=$this->ApplicantRegistrationModel->checkskill($identity);
                    if ($skill==0){
                        $tagskill = 'You have no skill information yet.';
                    }
                    else
                    {  
                        $tagskill = 'Keep your skill information up to date.';
                    }
                    
                    $this->data->tagskill=$tagskill; 


                    $this->load->model("Page_model");
                    $jobs = $this->Page_model->get_jobs();
                    $this->data->jobs=$jobs;
                    /*$this->load->model("JobAlertModel");
                    $this->data->jobs=$this->JobAlertModel->getSuggestedJobPostings();
                            
                    $this->load->model("ApplicantProfileUpdateModel");
                    $this->data->industryList = $this->ApplicantProfileUpdateModel->getIndustryList();

                    $this->data->jobAlertPreferences = $this->JobAlertModel->getJobAlertPreferences();*/
                    
                    $this->templates->layout('employee');
                    $this->templates->render('employee',$this->data);
                }
                elseif($userlevel=='employer') {                         

                    $this->load->model("Page_model");
                    $jobs = $this->Page_model->get_jobs();
                    $this->data->jobs=$jobs;
                    $applicants = $this->Page_model->get_applicants();
                    $this->data->applicants=$applicants;
                    /*$this->load->model("JobAlertModel");
                    $this->data->jobs=$this->JobAlertModel->getSuggestedJobPostings();
                            
                    $this->load->model("ApplicantProfileUpdateModel");
                    $this->data->industryList = $this->ApplicantProfileUpdateModel->getIndustryList();

                    $this->data->jobAlertPreferences = $this->JobAlertModel->getJobAlertPreferences();*/
                    
                    
                    $this->templates->layout('employer');
                    $this->templates->render('employer',$this->data);
                }
                elseif($userlevel=='admin') {                         
                        
                    $this->load->model("JobAlertModel");
                    $this->data->jobs=$this->JobAlertModel->getSuggestedJobPostings();
                            
                    $this->load->model("ApplicantProfileUpdateModel");
                    $this->data->industryList = $this->ApplicantProfileUpdateModel->getIndustryList();
                            
                            
                    $this->data->jobAlertPreferences = $this->JobAlertModel->getJobAlertPreferences();
                    
                    $this->templates->layout('admin');
                    $this->templates->render('admin',$this->data);
                }
        }
    }
	public function login() {
		

		$this->templates->layout('login');
        $this->load->library('form_validation');


        $this->form_validation->set_rules($this->login_validation);

                if ($this->form_validation->run() == FALSE)
                {
                    foreach($this->login_validation as $row) {
                        $this->data->$row['field']=$this->input->post($row['field']);
                            $fields[$row['field']]=$this->input->post($row['field']);
                    }
                	$this->templates->render('login',$this->data);
                }
                else
                {		
                		$username=$this->input->post('username');
                		$password=$this->input->post('password');

                        foreach($this->login_validation as $row) {
                            
                            $this->data->$row['field']=$this->input->post($row['field']);
                                $fields[$row['field']]=$this->input->post($row['field']);
                        }

            			$this->load->model("Page_model");
            			$check=$this->Page_model->checklogin($username,$password);
            			if($check==0) {            				
                            $this->templates->notify="Incorrect Username or password.";
                            $this->templates->render('login',$this->data);
            			} else {
                            $this->session->set_userdata('username',$username);
                            $this->session->set_userdata('userid',$check);

                            $identity=$check;
                            $this->load->model("Page_model");
                            $userlevel=$this->Page_model->check_userlevel($identity);
                            redirect('page/reload_page');
            				/*$this->session->set_userdata('username',$username);
							$this->session->set_userdata('userid',$check);

                            $identity=$check; 

                            $this->load->model("Page_model");
                            $userlevel=$this->Page_model->check_userlevel($identity);

                            if($userlevel=='employee') { 
                                $this->load->model("JobAlertModel");
                                $this->data->jobs=$this->JobAlertModel->getSuggestedJobPostings();
                                        
                                $this->load->model("ApplicantProfileUpdateModel");
                                $this->data->industryList = $this->ApplicantProfileUpdateModel->getIndustryList();
  
                                $this->data->jobAlertPreferences = $this->JobAlertModel->getJobAlertPreferences();
                                
                                $this->templates->layout('employee');
                                $this->templates->render('employee',$this->data);
                            }
                            elseif($userlevel=='employer') {                         
                                    
                                $this->load->model("JobAlertModel");
                                $this->data->jobs=$this->JobAlertModel->getSuggestedJobPostings();
                                        
                                $this->load->model("ApplicantProfileUpdateModel");
                                $this->data->industryList = $this->ApplicantProfileUpdateModel->getIndustryList();
                                        
                                        
                                $this->data->jobAlertPreferences = $this->JobAlertModel->getJobAlertPreferences();
                                
                                $this->templates->layout('employer');
                                $this->templates->render('employer',$this->data);
                            }
                            elseif($userlevel=='admin') {                         
                                    
                                $this->load->model("JobAlertModel");
                                $this->data->jobs=$this->JobAlertModel->getSuggestedJobPostings();
                                        
                                $this->load->model("ApplicantProfileUpdateModel");
                                $this->data->industryList = $this->ApplicantProfileUpdateModel->getIndustryList();
                                        
                                        
                                $this->data->jobAlertPreferences = $this->JobAlertModel->getJobAlertPreferences();
                                
                                $this->templates->layout('admin');
                                $this->templates->render('admin',$this->data);
                            }*/

            			}
                }
	}


    //*LOGOUT
	function logout(){
		session_destroy();
		redirect('page');
	}


    //*SAMPLES C/O KUYA LEM
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
}