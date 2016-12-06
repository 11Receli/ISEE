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

	public function index() {
		$this->templates->layout('home');
		$this->templates->render('home');
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
            				echo "failed";
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
