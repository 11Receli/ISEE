<?php
if (!defined('BASEPATH'))
	exit('No direct access is allowed');

class Page_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }

        function checklogin($username,$password){
			$this->db->select('id');
			$this->db->from('accounts');
			$this->db->where('username', $username );
			$this->db->where('password', $password );
			$this->db->where('status', 'active' );
			
			$result = $this->db->get()->result();
			
			if(empty($result)){
				return 0;
			} else {
				$this->storeSessionInfo($result[0]->id);
				return $result[0]->id;
			}
        }

        function checkregistration($fields){
            $this->db->insert('employerinfo',$fields);
            return $this->db->insert_id();
        }
		
		private function storeSessionInfo($accountID){
			$this->session->set_userdata('degree', $this->getDegree($accountID));
			$this->session->set_userdata('industrySubCategory', $this->getIndustrySubCategory($accountID));
			$industryID = $this->getIndustryID($accountID);
			$this->session->set_userdata('industryID', $industryID);
			$this->session->set_userdata('industryCategory', $this->getIndustry($industryID));
		} 
		
		private function getDegree($fk_id){
			$this->db->select('degree');
			$this->db->from('educationalbackgroundinfo');
			$this->db->where('fk_id', $fk_id); //fk_id = account.id
			
			$result = $this->db->get()->result();
			
			if(empty($result)){
				return '';
			} else {
				return $result[0]->degree;
			}
		}
		
		private function getIndustry($industryID){
			
			$this->db->select('industry');
			$this->db->from('industrylist');
			$this->db->where('id', $industryID);
			
			$result = $this->db->get()->result();
			
			if(empty($result)){
				return '';
			} else {
				return $result[0]->industry;
			}
		}
		
		private function getIndustrySubCategory($accountID){
		
			$jobID = $this->getJobID($accountID);
			
			$this->db->select('industrysubcategory');
			$this->db->from('industrysubcategorylist');
			$this->db->where('pk_id', $jobID);
			
			$result = $this->db->get()->result();
			
			if(empty($result)){
				return '';
			} else {
				return $result[0]->industrysubcategory;
			}
		}
		
		private function getJobID($accountID){
			$this->db->select('jobid');
			$this->db->from('technicalskillinfo');
			$this->db->where('fk_id', $accountID);
			
			$result = $this->db->get()->result();
			
			if(empty($result)){
				return '';
			} else {
				return $result[0]->jobid;
			}
		}
		
		private function getIndustryID($accountID){
			$this->db->select('industryid');
			$this->db->from('technicalskillinfo');
			$this->db->where('fk_id', $accountID);
			
			$result = $this->db->get()->result();
			
			if(empty($result)){
				return '';
			} else {
				return $result[0]->industryid;
			}
		}
		
		function home_achievers_1($id_1){
            $home_achievers_1="SELECT * FROM `achievers` WHERE `id`='".$id_1."' LIMIT 1";
                $the_achievers=$this->db->query($home_achievers_1);/*
                $achievers=$this->db->get('achievers');*/
                return $the_achievers->result();
            }
        function home_achievers_2($id_2){
            $home_achievers_2="SELECT * FROM `achievers` WHERE `id`='".$id_2."' LIMIT 1";
                $the_achievers=$this->db->query($home_achievers_2);/*
                $achievers=$this->db->get('achievers');*/
                return $the_achievers->result();
            }
        function home_achievers_3($id_3){
            $home_achievers_3="SELECT * FROM `achievers` WHERE `id`='".$id_3."' LIMIT 1";
                $the_achievers=$this->db->query($home_achievers_3);/*
                $achievers=$this->db->get('achievers');*/
                return $the_achievers->result();
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
