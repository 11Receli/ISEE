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
	public function index() {
 
        /*$students=array(
            array(
                    "name"=>"Ma. Nerissa M. Nicolas",
                    "image"=>"resources/images/users/01.jpg",
                    "course"=>"Bachelor of Science in Computer Science",
                    "graduation"=>"2015",
                    "achievements"=>"Magna Cum Laude",
                    "quote"=>"''Don't tell me that the sky is the limit for there are footsteps on the moon.''"
                ),
            );
        $this->data->students=$students;*/
        /*$id_1= "1";*/
        $id_1="1";
        $id_2="2";
        $id_3="4";
        $this->templates->layout('home');
        $this->load->model("Page_model");

        $home_achievers_1=$this->Page_model->home_achievers_1($id_1);
        $this->data->home_achievers_1=$home_achievers_1;
        $home_achievers_2=$this->Page_model->home_achievers_2($id_2);
        $this->data->home_achievers_2=$home_achievers_2;
        $home_achievers_3=$this->Page_model->home_achievers_3($id_3);
        $this->data->home_achievers_3=$home_achievers_3;

		
		$this->templates->render('home',$this->data);
	}

    public function achiever() {
        $this->load->model("Page_model");

        $students=$this->Page_model->get_achievers();
        $this->data->students=$students;
        $this->templates->layout('achiever');
        $this->templates->render('achiever',$this->data);
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
            				redirect('page');
            			}
                }
	}

	function logout(){
		session_destroy();
		redirect('page');
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
