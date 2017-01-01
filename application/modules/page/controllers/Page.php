<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends Public_Controller {
var $validation = array(
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
		$this->templates->layout('home');
		$this->templates->render('home');
	}
	public function registration(){
		$this->templates->layout('default');
	
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
            		$this->form_validation->run();

            		foreach($this->company_validation as $row) {
            			$this->data->$row['field']=$this->input->post($row['field']);
            			$fields[]=$this->input->post($row['field']);
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
            print_r($this->data);
		
		$this->templates->render('registermain',$this->data);
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

        $this->form_validation->set_rules($this->validation);

                if ($this->form_validation->run() == FALSE)
                {
                		$this->templates->render('login');
                        //$this->load->view('myform');
                }
                else
                {		
                		$username=$this->input->post('username');
                		$password=$this->input->post('password');

            			$this->load->model("Page_model");
            			$check=$this->Page_model->checklogin($username,$password);
            			if(count($check)>0) {
            				//set session
            				$this->session->set_userdata('username',$username);
            				redirect('page');
            				//get session
            				/*echo $this->session->userdata('username');*/
            			} else {
                            redirect('page/login');
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
