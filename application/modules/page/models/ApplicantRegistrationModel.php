<?php
if (!defined('BASEPATH'))
	exit('No direct access is allowed');

class ApplicantRegistrationModel extends CI_Model {
	
	//*APPLICANT REGISTRATION
    function checkpreregistration($firstname,$middlename,$lastname,$department,$graduation,$studentid,$status,$contact){
		$this->db->select('id');
		$this->db->from('applicantrecords');
		$this->db->where('firstname', $firstname );
		$this->db->where('middlename', $middlename );
		$this->db->where('lastname', $lastname );
		$this->db->where('department', $department );
		$this->db->where('graduation', $graduation );
		$this->db->where('studentid', $studentid );

		$check = $this->db->get()->result();

		if(empty($check)){
			return 1234567890;
		}
		else
		{
			$this->db->select('username');
			$this->db->from('accounts');
			$this->db->where('id', $studentid );

			$check = $this->db->get()->result();

			if(empty($check))
			{
				
				$data=array('status'=>$status);
				$this->db->where('studentid', $studentid);
				$this->db->update('applicantrecords', $data);
				$data=array('contact'=>$contact);
				$this->db->where('studentid', $studentid);
				$this->db->update('applicantrecords', $data);
				return 143;
			}
			else
			{
				return 0;
			}
		}
    }
    function update_applicantrecords($fields,$check){
        $this->db->where('id', $check);
		$this->db->delete('applicantrecords');
        $this->db->insert('applicantrecords',$fields);
        return $this->db->insert_id();
    }
	function doTentativeRegistration($fields,$email,$end){
		$confirmationKey = $this->randStrGen();
		
			$this->load->library('email');
			$config = Array(
			     'protocol' => 'smtp',
			     'smtp_host' => 'ssl://smtp.googlemail.com',
			     'smtp_port' => 465,
			     'smtp_user' => 'iseedyciweb@gmail.com', // change it to yours
			     'smtp_pass' => 'iseedyciweb2017', // change it to yours
			     'mailtype' => 'html',
			     'charset' => 'iso-8859-1'
			  );

			  $confirmationLink = base_url('page/ApplicantRegistrationController/handleConfirmationLinkVerification?confirmationKey=' . $confirmationKey );

			  $this->email->initialize($config);
			  $this->load->library('email');
			  $this->email->set_newline("\r\n");
			  $this->email->from('iseedyciweb@gmail.com', "Admin Team");
			  $this->email->to($email);  
			  $this->email->subject("ISEE Account Registration Confirmation");
			  $this->email->message("Dear User,\nPlease click on below URL or paste into your browser to verify your Email Address\n\n".$confirmationLink."\n"."\n\nThanks\nAdmin Team");
			  echo $this->email->print_debugger();
			  $result = $this->email->send();

			if($result == ''){
				return 0;	
			} else {

				$fields['confirmationKey'] = $confirmationKey;
				$fields['status'] = 'tentative';
				$fields['userlevel'] = 'employee';
				$fields['id'] = $end;
                $this->db->insert('accounts', $fields);

                return 1;
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



	//*GENERAL FUNCTIONS FOR REGISTRATION
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
	function isUserNameValid($username,$end){
		$this->db->select('email');
		$this->db->from('accounts');
		$this->db->where('username', $username);
		$check = $this->db->get()->result();
		if(empty($check))
		{
			return 1;
		}
		else
		{
			return 143;
		}		
	}
	function checkinput($firstname,$middlename,$lastname,$department,$studentid,$status,$contact,$username){
		$this->db->select('id');
		$this->db->from('applicantrecords');
		$this->db->where('firstname', $firstname );
		$this->db->where('middlename', $middlename );
		$this->db->where('lastname', $lastname );
		$this->db->where('department', $department );
		$this->db->where('studentid', $studentid );
		$this->db->where('contact', $contact );

		$check = $this->db->get()->result();

		if(empty($check)){
			return 1234567890;
		}
		else
		{
			$this->db->select('id');
			$this->db->from('accounts');
			$this->db->where('username', $username );
			$this->db->where('id', $studentid );

			$check = $this->db->get()->result();

			if(empty($check))
			{	
				return 143;
			}
			else
			{
				$data=array('status'=>$status);
				$this->db->where('studentid', $studentid);
				$this->db->update('applicantrecords', $data);
				return 0;
			}
		}
    }
	function sendEmailPassword($studentid){
		$this->db->select('email');
		$this->db->from('accounts');
		$this->db->where('id', $studentid);
		$query = $this->db->get();
		$row = $query->result_array();
		$email = implode(" ",$row[0]);
		
		$this->db->select('password');
		$this->db->from('accounts');
		$this->db->where('id', $studentid);
		$query = $this->db->get();
		$wow = $query->result_array();
		$password = implode(" ",$wow[0]);

		$confirmationKey = $this->randStrGen();
	
		$this->load->library('email');
		$config = Array(
		     'protocol' => 'smtp',
		     'smtp_host' => 'ssl://smtp.googlemail.com',
		     'smtp_port' => 465,
		     'smtp_user' => 'iseedyciweb@gmail.com', // change it to yours
		     'smtp_pass' => 'iseedyciweb2017', // change it to yours
		     'mailtype' => 'html',
		     'charset' => 'iso-8859-1'
		  );

		  $this->email->initialize($config);
		  $this->load->library('email');
		  $this->email->set_newline("\r\n");
		  $this->email->from('iseedyciweb@gmail.com', "Admin Team");
		  $this->email->to($email);  
		  $this->email->subject("ISEE Password Forgot");
		  $this->email->message("Dear User,\n Here is your password:\n\n".$password."\n"."\n\nKeep it in mind. Thanks\n -Admin Team");
		  echo $this->email->print_debugger();
		  $result = $this->email->send();

		if($result == ''){
			return 0;	
		} else {
            return 1;
		}	
    }



	//*EMPLOYER REGISTRATION
    function checkpreregistration_emp($companyname,$companytype,$companyemail,$companyyear){
		$this->db->select('id');
		$this->db->from('employerinfo');
		$this->db->where('companyname', $companyname );
		$this->db->where('companytype', $companytype );
		$this->db->where('companyyear', $companyyear );
		$this->db->where('companyemail', $companyemail );

		$check = $this->db->get()->result();

		if(empty($check)){
			$this->db->select('id');
			$this->db->from('employerinfo');
			$this->db->where('companyname', $companyname );

			$check = $this->db->get()->result();

			if(empty($check)){
				$this->db->select('id');
				$this->db->from('employerinfo');
				$this->db->where('companyemail', $companyemail );

				$check = $this->db->get()->result();

				if(empty($check)){
					return 0;
				} else {
					return $check[0]->id;	
				}
			} else {
				return $check[0]->id;	
			}
		} else {
			return $check[0]->id;	
		}
    }
    function sendNotification($fields){
    		$this->db->select('email');
			$this->db->from('accounts');
			$this->db->where('userlevel', 'employee' );
			$query = $this->db->get();
			$row = $query->result_array();
			$email = implode(" ",$row[0]);
			$confirmationKey = $this->randStrGen();
		
			$this->load->library('email');
			$config = Array(
			     'protocol' => 'smtp',
			     'smtp_host' => 'ssl://smtp.googlemail.com',
			     'smtp_port' => 465,
			     'smtp_user' => 'iseedyciweb@gmail.com', // change it to yours
			     'smtp_pass' => 'iseedyciweb2017', // change it to yours
			     'mailtype' => 'html',
			     'charset' => 'iso-8859-1'
			  );

			  $confirmationLink = base_url('page/ApplicantRegistrationController/handleConfirmationLinkVerification2?confirmationKey=' . $confirmationKey );
			  $name = $fields['name'];
			  $title = $fields['title'];


			  $this->email->initialize($config);
			  $this->load->library('email');
			  $this->email->set_newline("\r\n");
			  $this->email->from('iseedyciweb@gmail.com', "Admin Team");
			  $this->email->to($email);  
			  $this->email->subject("ISEE Account Registration Confirmation");
			  $this->email->message("Dear User,\nThere are new jobs posted in the site created by: ".$name. ", Job opening: ".$title. ". Check it out by clicking this\n\n".$confirmationLink."\n"."\n\nThanks\nAdmin Team");
			  echo $this->email->print_debugger();
			  $result = $this->email->send();

			if($result == ''){
				return 0;	
			} else {

                return 1;
			}	
	}


    //*LANDING PAGE APPLICANT
    function checkpersonalinfo($identity){
    	$this->db->select('id');
		$this->db->from('accounts');
		$this->db->where('username', $identity );
		$check = $this->db->get();
		$row = $check->result_array();
		$id = implode(" ",$row[0]);

		if(empty($id)){

		}
		else
		{
			$this->db->select('id');
			$this->db->from('personalinfo');
			$this->db->where('fk_id', $id );
			$check = $this->db->get()->result();

			if(empty($check)){
				return 0;
			}
			else
			{
				return 1;
			}
		}
    }
    function checkeducation($identity){
    	$this->db->select('id');
		$this->db->from('accounts');
		$this->db->where('username', $identity );
		$check = $this->db->get();
		$row = $check->result_array();
		$id = implode(" ",$row[0]);

		if(empty($id)){

		}
		else
		{
			$this->db->select('id');
			$this->db->from('education');
			$this->db->where('fk_id', $id );
			$check = $this->db->get()->result();
			
			if(empty($check)){
				return 0;
			}
			else
			{
				return 1;
			}
		}
    }
    function checkwork($identity){
    	$this->db->select('id');
		$this->db->from('accounts');
		$this->db->where('username', $identity );
		$check = $this->db->get();
		$row = $check->result_array();
		$id = implode(" ",$row[0]);

		if(empty($id)){

		}
		else
		{
			$this->db->select('id');
			$this->db->from('work');
			$this->db->where('fk_id', $id );
			$check = $this->db->get()->result();
			
			if(empty($check)){
				return 0;
			}
			else
			{
				return 1;
			}
		}
    }
    function checkskill($identity){
    	$this->db->select('id');
		$this->db->from('accounts');
		$this->db->where('username', $identity );
		$check = $this->db->get();
		$row = $check->result_array();
		$id = implode(" ",$row[0]);

		if(empty($id)){

		}
		else
		{
			$this->db->select('id');
			$this->db->from('skills');
			$this->db->where('fk_id', $id );
			$check = $this->db->get()->result();
			
			if(empty($check)){
				return 0;
			}
			else
			{
				return 1;
			}
		}
    }




}