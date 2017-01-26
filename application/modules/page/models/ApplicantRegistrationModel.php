<?php
if (!defined('BASEPATH'))
	exit('No direct access is allowed');

class ApplicantRegistrationModel extends CI_Model {
	
	//check if email exists and if exists return the status
	function verifyEmail($email) {
		
		$this->db->select('status');
		$this->db->from('accounts');
		$this->db->where('email', $email);
		$query = $this->db->get();
		$row = $query->result_array();
		
		if(empty($row)){
			return '';
		} else {
			return $row[0]['status'];
		}
	}
	
	function isUserNameValid($userName){
		$this->db->select('email');
		$this->db->from('accounts');
		$this->db->where('username', $userName);
		$query = $this->db->get();


		return empty($query->result());
	}
	function doTentativeRegistration($fields){
		$confirmationKey = $this->randStrGen();
		$fields['confirmationKey'] = $confirmationKey;
	
		$confirmationKey = $this->randStrGen();
		$fields['confirmationKey'] = $confirmationKey;
		$fields['status'] = 'tentative';
		if($affectedRecords=$this->db->insert('accounts', $fields)){
			if($this->sendEmail($fields['email'], $confirmationKey)){
				return "Please click the registration confirmation link sent to your email to complete the registration.";
			} else {
				return "Problem sending email, please try again later.";
			}
		} else {
			return "Unable to insert new record to table.";
		}
		
	}
	
	function doCompleteRegistration($confirmationKey){
		$data=array('confirmationKey'=>'','status'=>'active');
		$this->db->where('confirmationKey',$confirmationKey);
		$this->db->update('accounts',$data);
		if($this->db->affected_rows() > 0){
			return true;
		} else {
			return false;
		}
	}
	
	function randStrGen(){
		$result = "";
		$chars = "abcdefghijklmnopqrstuvwxyz0123456789";
		$charArray = str_split($chars);
		for($i = 0; $i < 15; $i++){
			$randItem = array_rand($charArray);
			$result .= "".$charArray[$randItem];
		}
		return $result;
	}
	
	function sendEmail($destinationEmail, $confirmationKey){
		
		
		// Configure email library
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.googlemail.com';
		$config['smtp_port'] = 465;
		$config['smtp_user'] = 'iseeproject2017@gmail.com';
		$config['smtp_pass'] = 'gazzebo123';
		
		// Load email library and passing configured values to email library
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		
		// Sender email address
		$this->email->from('iseeproject2017@gmail.com', '[NO-REPLY] - ISEE Jobs');
		// Receiver email address
		$this->email->to($destinationEmail);
		// Subject of email
		$this->email->subject('ISEE Account Registration Confirmation');
		// Message in email
		$confirmationLink = base_url('page/ApplicantRegistrationController/handleConfirmationLinkVerification?confirmationKey=' . $confirmationKey );
		$this->email->message('Please click this link to complete your account registration. ' . $confirmationLink );

		if($this->email->send()){
			return true;
		} else {
			//return show_error($this->email->print_debugger());
			return false;
		}
	}

}