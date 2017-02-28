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
        function check_userlevel($identity){
			$this->db->select('userlevel');
			$this->db->from('accounts');
			$this->db->where('id', $identity );
			
			$userlevel = $this->db->get()->result();

			if(empty($userlevel)){
				return 0;
			} else {
				$this->storeSessionInfo($userlevel[0]->userlevel);
				return $userlevel[0]->userlevel;
			}
        }
        function check_userlevel_again($identity){
			$this->db->select('userlevel');
			$this->db->from('accounts');
			$this->db->where('username', $identity );
			
			$userlevel = $this->db->get()->result();

			if(empty($userlevel)){
				return 0;
			} else {
				$this->storeSessionInfo($userlevel[0]->userlevel);
				return $userlevel[0]->userlevel;
			}
        }

        function checkregistration($fields){
            $this->db->insert('employerinfo',$fields);
            return $this->db->insert_id();
        }
        function saveinquiry($fields){
            $this->db->insert('inquiries',$fields);
            return $this->db->insert_id();
        }
        function savepersonalinfo($fields){
            $this->db->insert('personalinfo',$fields);
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
		
		function get_latest_article(){/*
            $home_achievers_1="SELECT MAX(id) FROM `articles`";
            $id_1=$home_achievers_1;*/
            $query="SELECT * FROM articles";
                $article=$this->db->query($query);/*
                $achievers=$this->db->get('achievers');*/
                return $article->last_row('array');
            }

        function get_achievers() {
            $achievers=$this->db->get('achievers');
            return $achievers->result();
        }
        function get_team() {
            $team=$this->db->get('authors');
            return $team->result();
        }/*
        function get_article() {
            $article=$this->db->get('articles');
            return $article->result();
        }*/
        function get_colleges() {
            $collegeList=$this->db->get('collegelist');
            return $collegeList->result();
        }
        function get_status() {
            $statusList=$this->db->get('statuslist');
            return $statusList->result();
        }
        function get_industry() {
            $industryList=$this->db->get('industrylist');
            return $industryList->result();
        }
        function get_gender() {
            $genderList=$this->db->get('genderlist');
            return $genderList->result();
        }
        function get_personstatus() {
            $personstatusList=$this->db->get('personstatuslist');
            return $personstatusList->result();
        }
}
