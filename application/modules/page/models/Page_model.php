<?php
if (!defined('BASEPATH'))
	exit('No direct access is allowed');

class Page_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }

        function checklogin($username,$password){
        	$query="SELECT * FROM `accounts` WHERE `username`='".$username."' AND `password`='".$password."' LIMIT 1";
	        	$runquery=$this->db->query($query);
	        	return $runquery->result();
	        	/*print_r($runquery->result());*/
        	//echo $this->db->last_query();
      	/*$this->db->get_where('accounts',array('username'=>$username,'password'=>$password));
      	echo $this->db->last_query();*/
        }

}