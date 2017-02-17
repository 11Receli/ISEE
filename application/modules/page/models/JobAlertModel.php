<?php
if (!defined('BASEPATH'))
	exit('No direct access is allowed');

class JobAlertModel extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }
		
		//educationalbackgroundinfo.degree = jobadds.course
		//industrysubcategorylist.industrysubcategory = jobadds.title, jobadds.skills,jobadds.description
        function getSuggestedJobPostings(){
			$preference = $this->getJobAlertPreferences();
			
			if($preference['id']==''){
				return $this->getJobAdsByAccountProfile();
			} else {
				return $this->getJobAdsByPreferences($preference);
			}
        }
		
		function getJobAdsByPreferences($preference){
			$this->db->select('*');
			$this->db->from('jobadds');
			$this->db->where('salary >=', $preference['salary']);
			$this->db->where('yrsofexp >=', $preference['yrsofexp']);
			$this->db->like('location', $preference['location']);
			
			$result = $this->db->get()->result();
			return $result;
		}
		
		function getJobAdsByAccountProfile(){
			$industrySubCategory = $this->session->userdata('industrySubCategory');
			$industryCategory = $this->session->userdata('industryCategory');
			
			$this->db->select('*');
			$this->db->from('jobadds');
			$this->db->like('title', $industrySubCategory);
			$this->db->or_like('skills', $industrySubCategory); 
			$this->db->or_like('description', $industrySubCategory);
			$this->db->or_like('title', $industryCategory);
			$this->db->or_like('skills', $industryCategory); 
			$this->db->or_like('description', $industryCategory);
			
			$result = $this->db->get()->result();
			if(empty($result)){
				$emptyArray = array();;
				return $emptyArray;
			} else{
				return $result;
			}
		}
		
		function saveJobAlertPreferences($fields){
			//clean-up existing applicant profile
			$this->db->where('fk_id', $this->session->userdata('userid'));
			$this->db->delete('jobalertpreferences');
			
			$fields['fk_id'] = $this->session->userdata('userid');
			return $this->db->insert('jobalertpreferences', $fields);
		}
		
		function getJobAlertPreferences(){
			$this->db->select('*');
			$this->db->from('jobalertpreferences');
			$this->db->where('fk_id', $this->session->userdata('userid'));
			$result = $this->db->get()->result_array();
			if(empty($result)){
				return $this->getEmptyJobPreference();
			} else{
				return $result[0];
			}
			
		}
		
		
		function getEmptyJobPreference(){	
				return array(
					'id' => '',
					'location' => '',
					'salary' => '',
					'yrsofexp' => '',
					'industryid' => ''
				);
		} 
		
		function searchJobs($fields){
			
			$this->db->select('*');
			$this->db->from('jobadds');
			$this->db->where('salary >=', $fields['salary']);
			$this->db->where('yrsofexp >=', $fields['yrsofexp']);
			$this->db->like('location', $fields['location']);
			$this->db->like('title', $fields['title']);
			$result = $this->db->get()->result_array();
			return $result;
		}

}