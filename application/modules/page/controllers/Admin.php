<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Admin_Controller {

	public function index() {
		$this->load->view('welcome_message');
	}
}
