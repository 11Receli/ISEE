<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends Public_Controller {

	public function login() {
		//set layout as login
		//-location of layout for login: application/views/templates/layouts/site/login.php
		//
		$this->templates->layout('login');

		//$this->templates->render([Page filename]) ---> use for show page, replace [Page filename]
		//with content you want to display located in modules/page/views
		$this->templates->render('login');
	}
}
