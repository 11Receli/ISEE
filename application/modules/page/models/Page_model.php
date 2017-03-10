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
        function getid($end){
			$this->db->select('id');
			$this->db->from('accounts');
			$this->db->where('username', $end );
			
			$result = $this->db->get()->result();
			
			if(empty($result)){
				return 0;
			} else {
				$this->storeSessionInfo($result[0]->id);
				return $result[0]->id;
			}
        }
        function getstdid($stdid){
			$this->db->select('studentid');
			$this->db->from('applicantrecords');
			$this->db->where('accountid', $stdid );
			
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

	        	$this->db->select('id');
				$this->db->from('personalinfo');
				$this->db->where('fk_id', $fields['fk_id'] );

				$check = $this->db->get()->result();

				if(empty($check))
				{	
					$this->db->insert('personalinfo',$fields);
            		return $this->db->insert_id();

				return 0;
				}
				else
				{

				
				$data=array('street'=>$fields['street']);
				$this->db->where('fk_id', $fields['fk_id']);
				$this->db->update('personalinfo', $data);

				
        		$data=array('brgy'=>$fields['brgy']);
        		$this->db->where('fk_id', $fields['fk_id']);
				$this->db->update('personalinfo', $data);

        		$data=array('city'=>$fields['city']);
        		$this->db->where('fk_id', $fields['fk_id']);
				$this->db->update('personalinfo', $data);

        		$data=array('province'=>$fields['province']);
        		$this->db->where('fk_id', $fields['fk_id']);
				$this->db->update('personalinfo', $data);

        		$data=array('country'=>$fields['country']);
        		$this->db->where('fk_id', $fields['fk_id']);
				$this->db->update('personalinfo', $data);

        		$data=array('zip'=>$fields['zip']);
        		$this->db->where('fk_id', $fields['fk_id']);
				$this->db->update('personalinfo', $data);

        		$data=array('citizenship'=>$fields['citizenship']);
        		$this->db->where('fk_id', $fields['fk_id']);
				$this->db->update('personalinfo', $data);

        		$data=array('birthday'=>$fields['birthday']);
        		$this->db->where('fk_id', $fields['fk_id']);
				$this->db->update('personalinfo', $data);

        		$data=array('status'=>$fields['status']);
        		$this->db->where('fk_id', $fields['fk_id']);
				$this->db->update('personalinfo', $data);

        		$data=array('gender'=>$fields['gender']);
				$this->db->where('fk_id', $fields['fk_id']);
				$this->db->update('personalinfo', $data);
				return 0;
				}
        		
        }
        function saveeducation($fields){
            $this->db->insert('education',$fields);
            return $this->db->insert_id();
        }
        function saveskills($fields){
            $this->db->insert('skills',$fields);
            return $this->db->insert_id();
        }
        function savework($fields){
            $this->db->insert('work',$fields);
            return $this->db->insert_id();
        }
        function savephoto($fields){
            $this->db->insert('salaryphoto',$fields);
            return $this->db->insert_id();
        }
        function savejobposting($fields){
            $this->db->insert('jobadds',$fields);
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
        }



        function user_personalinfo($identity) {
        	$this->db->select('id');
			$this->db->from('accounts');
			$this->db->where('username', $identity );
			$result = $this->db->get()->result();
			
			if(empty($result)){
				return 0;
			} else {
				$this->storeSessionInfo($result[0]->id);
				return $result[0]->id;
			}
        }
        function get_userpi($id) {
        	$personal=$this->db->where('fk_id',$id)->get('personalinfo');
			
				return $personal->result();
			
			/*$this->db->select('*');
			$this->db->from('personalinfo');
			$this->db->where('fk_id', $id);
			$result = $this->db->get()->result_array();
			return $result;*/
        }
        function get_jobs() {

        	$jobs=$this->db->get('jobadds');
				return $jobs->result();

        print_r($jobs);
        die();
			
        }
        function get_applicants() {
        	$applicants=$this->db->where('status','Graduating')->get('applicantrecords');
				return $applicants->result();

        print_r($jobs);
        die();
			
        }
        function get_photo($end) {

        	$photo=$this->db->where('fk_id',$end)->get('salaryphoto');
				return $photo->result();
        }
        function get_basicinfo($end) {
        	$basic=$this->db->where('studentid', $end)->get('applicantrecords');
			return $basic->result();
        }
        function get_personal($end) {
        	$personal=$this->db->where('fk_id', $end)->get('personalinfo');
			return $personal->result();
        }
        function get_education($end) {
        	$education=$this->db->where('fk_id', $end)->get('education');
			return $education->result();
        }


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
        function get_skills() {
            $skillsList=$this->db->get('skillslist');
            return $skillsList->result();
        }
        function get_yesno() {
            $yesnoList=$this->db->get('yesnolist');
            return $yesnoList->result();
        }
}
