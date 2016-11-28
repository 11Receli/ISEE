<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sample extends Public_Controller {

	public function index() {
		$this->templates->render('default');
	}
}
