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
        //select successful students

        //this is sample only, result from model
        /*
        array(
            "key"=>"value"
        ) is equal to

        $array["key"]="value"

        how to call the value of row in array?
        echo $array["key"]
        */
        /*$username=$this->input->post('username');
        $password=$this->input->post('password');*/

        /*foreach($this->achievers_load as $row) {
                $this->data->students=$row['field'];
            }
        

        $this->load->model("Page_model");
        $check=$this->Page_model->achieversfetch($fields);*/
        $students=array(
            array(
                    "name"=>"Ma. Nerissa M. Nicolas",
                    "image"=>"resources/images/users/01.jpg",
                    "course"=>"Bachelor of Science in Computer Science",
                    "graduation"=>"2015",
                    "achievements"=>"Magna Cum Laude",
                    "quote"=>"''Don't tell me that the sky is the limit for there are footsteps on the moon.''"
                ),
            );
        $this->data->students=$students;

		$this->templates->layout('home');
		$this->templates->render('home',$this->data);
	}

    public function achiever() {
        $this->load->model("Page_model");
        /*$students=array(
            array(
                    "name"=>"Ma. Nerissa M. Nicolas",
                    "image"=>"resources/images/users/01.jpg",
                    "course"=>"Bachelor of Science in Computer Science",
                    "year"=>"2015",
                    "achievements"=>"Magna Cum Laude",
                    "quote"=>"''Don't tell me that the sky is the limit for there are footsteps on the moon.''"
                ),
            );
        */
        $students=$this->Page_model->get_achievers();
        $this->data->students=$students;
        $this->templates->layout('achiever');
        $this->templates->render('achiever',$this->data);
    }

	public function registration(){
        $display="registermain";
        $this->templates->layout('registermain');
	
		$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
		 $this->form_validation->set_rules($this->company_validation);
			
			foreach($this->company_validation as $row) {
	            $this->data->$row['field']=NULL;
	        }

	 		
            if ($this->input->post('submit') == NULL)
            {
            		/*
            	die();
					gumawa ako ng $this->data->fieldname tapos ipinasa ko sa view
					ang mangyayari dyan, pag punta mo sa view, naka variable na agad yung 
					field.
					Example:
					array(
			                'field' => 'companyname',
			                'label' => 'Company Name',
			                'rules' => 'required'
			        )

			        pag punta mo sa view, naka ganito na yan, $companyname
			        baka dyan ka nag unknown variable

					*/
            		
            }
            else {		
            	//check ng code mo yung nasunod yung rules (form validation)
     
                    if($this->form_validation->run()){
                        foreach($this->company_validation as $row) {
                            $this->data->$row['field']=$this->input->post($row['field']);
                            $fields[$row['field']]=$this->input->post($row['field']);
                          /*echo $row['field']."<br>";*/
                        }
                        /*echo "<pre>";
                        print_r($fields);
                        die();
                        */
                        /*$companyname=$fields['companyname'];
                        $companytype=$fields['companytype'];
                        $companyaddress=$fields['companyaddress'];
                        $companycontact=$fields['companycontact'];
                        $companyemail=$fields['companyemail'];
                        $companyfounder=$fields['companyfounder'];
                        $companyyear=$fields['companyyear'];
                        $hrname=$fields['hrname'];
                        $hrcontact=$fields['hrcontact'];
                        $hremail=$fields['hremail'];
                        $positions=$fields['positions'];*/

                        $this->load->model("Page_model");
/*                        $register=$this->Page_model->checkregistration($companyname,$companytype,$companyaddress,$companycontact,$companyemail,$companyfounder,$companyyear,$hrname,$hrcontact,$hremail,$positions);*/
                        $register=$this->Page_model->checkregistration($fields);

                        if($register) {
                            redirect();
                            //$this->templates->layout('home');
                            //$display="home";


                            //redirect kung san page mo gusto
                        } else {
                            echo "registration failed";
                        }
                        //echo validation_errors()
                    } else {
                        /*echo validation_errors();*/
                        
                    }

            		

            		/* 
					dito na ngayon malalagay yung pagtawag mo sa model
            		example:
            		$this->load->model("Page_model");
        			$check=$this->Page_model->checklogin($username,$password);
        			
        			tapos maglalagay ka ng if() para icheck mo kung nagsave sa database

        			parang ganto, 
        			if($check) {
						//redirect kung san page mo gusto
        			} else {
						echo "registration failed";
        			}



        			*/
        			

        			/*echo "<pre>";
        			print_r($fields);
        			echo "</pre>";
        			die();
        			*/

        			//yung <pre> para lang maayos or magkaroon ng spacing yung pag print_r mo


        			
            }
            /*print_r($this->data);*/
		
		$this->templates->render($display,$this->data);
	}

	public function login() {
		//set layout as login
		//-location of layout for login: application/views/templates/layouts/site/login.php
		//$this->input->post('username') == $_POST['username']
		/*$username=$this->input->post('username');
		echo $username;
		die();
		*/
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
                        //$this->load->view('myform');
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
            			if(count($check)>0) {
            				//set session
            				$this->session->set_userdata('username',$username);
            				redirect('page');
            				//get session
            				/*echo $this->session->userdata('username');*/
            			} else {

                            $this->templates->notify="Incorrect Username or password.";
                            $this->templates->render('login',$this->data);

            			}
                        //$this->load->view('formsuccess');
                }
                

		//$this->templates->render([Page filename]) ---> use for show page, replace [Page filename]
		//with content you want to display located in modules/page/views
	}

	function logout(){
		session_destroy();
		redirect('page');
	}

	public function test_page() {
		//log here
		$x=0;
		$y=1;
		$z=$x+$y;
		
		//use $this->data->[variable name/object name] to transfer value here (from controller) to view
		//you can also call model here @ controller
		//check the page/views/test_page.php to see how to display the values
		$this->data->addition=$z;
		$this->data->test_string='Hello World';

		//the default layout for page: default -->location: application/views/templates/layouts/site
		//if you did not set the $this->templates->layout(['file name']), it will automatically set as default
		$this->templates->render('test_page',$this->data);
	}
}
