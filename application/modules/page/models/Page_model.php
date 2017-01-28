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
            }
        function checkregistration($fields){
            $this->db->insert('employerinfo',$fields);
            return $this->db->insert_id();
        }

        function get_achievers() {
            $achievers=$this->db->get('achievers');
            return $achievers->result();
        }
}