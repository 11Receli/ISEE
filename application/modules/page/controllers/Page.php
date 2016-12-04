<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends Public_Controller {

	public function index() {
		$this->templates->layout('home');
		$this->templates->render('home');
	}

	public function login() {
		//set layout as login
		//-location of layout for login: application/views/templates/layouts/site/login.php
		//
		$this->templates->layout('login');

		//$this->templates->render([Page filename]) ---> use for show page, replace [Page filename]
		//with content you want to display located in modules/page/views
		$this->templates->render('login');
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
