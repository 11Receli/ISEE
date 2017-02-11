<?php
if (!defined('BASEPATH'))
	exit('No direct access is allowed');

class ApplicantProfileUpdateModel extends CI_Model {
		
		function getIndustryList(){
			$result = $this->db->get('industrylist');
			return $this->getResultAsArray($result, 'id', 'industry');
		}
		
		function getIndustrySubCategoryList($selectedindustry){
			//$result = $this->db->get_where('industrysubcategorylist', array('id' => $selectedindustry));
			
			
			$this->db->select('*');
			$this->db->from('industrysubcategorylist');
			$this->db->where('id', $selectedindustry );
			$result = $this->db->get();
			return $this->getResultAsArray($result, 'pk_id', 'industrysubcategory');
		}
		
		function getApplicantProfile($tableName){
			$this->db->select('*');
			$this->db->from($tableName);
			$this->db->where('fk_id', $this->session->userdata('userid'));
			$result = $this->db->get()->result_array();
			if(empty($result)){
				/*getEmptyAplicantProfile($tableName);*/
			}else{
				return $result[0];
			}
		}
		
			
		function getResultAsArray($result, $value, $text){
			$return = array();
			
			if($result->num_rows() > 0) {
				foreach($result->result_array() as $row) {
					$return[$row[$value]] = $row[$text];
				}
			}
			
			return $return;
		}
		
		function saveApplicantProfile($fields, $tableName){
			
			//clean-up existing applicant profile
			$this->db->where('fk_id', $this->session->userdata('userid'));
			$this->db->delete($tableName);
			
			$fields['fk_id'] = $this->session->userdata('userid');
			return $this->db->insert($tableName, $fields);
			
		}
		
		function getEmptyAplicantProfile($tableName){
			if($tableName == 'personalinfo') {
				return array(
					'citizenship' => '',
					'status' => '',
					'age' => '',
					'gender' => '',
					'address' => '',
					'birthday' => ''
				);
			} else if($tableName == 'educationalbackgroundinfo'){
				return array(
					'schoolhs' => '',
					'datehs' => '',
					'degree' => '',
					'schoolcol' => '',
					'datecol' => '',
					'certifications' => '',
					'seminars' => '',
					'gwa' => ''
				);
			} else {
				return array(
					'industryid' => '',
					'jobid' => '',
					'specialization' => ''
				);
			}
			
		}
}