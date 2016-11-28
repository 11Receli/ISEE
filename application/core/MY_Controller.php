<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require APPPATH . "third_party/MX/Controller.php";

class Public_Controller extends MX_Controller {
    public $data=array();
    function __construct() {
        parent::__construct();
        $this->data = new StdClass();
        $ci = & get_instance();
        $ci->data=$this->data;

        $partials=array(
                array("field"=>"head","path"=>"head"),
                array("field"=>"header","path"=>"nav"),
                array("field"=>"footer","path"=>"footer"),
                array("field"=>"scripts","path"=>"scripts")
            );

        $this->templates->partials($partials)->type('site')->layout('default');
    }

}

class Admin_Controller extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->data = new StdClass();
        //$ci = & get_instance();
        $partials=array(
                array("field"=>"head","path"=>"head"),
                array("field"=>"header","path"=>"nav"),
                array("field"=>"footer","path"=>"footer"),
                array("field"=>"scripts","path"=>"scripts")
            );
        $this->templates->partials($partials)->type('admin')->layout('default');
    }

}

?>