<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApplicantRegistrationController extends Public_Controller {
   
	var $applicant_validation = array(
        array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required|min_length[5]|max_length[12]|is_unique[accounts.username]',
                array(
                        'required'      => 'You have not provided %s.',
                        'is_unique'     => 'This %s already exists.'
                )
        ),
        array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email|is_unique[accounts.email]'
        ),
        array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|min_length[5]',
                array(
                        'required'      => 'You have not provided %s.'
                )
        ),
        array(
                'field' => 'conpassword',
                'label' => 'Confirm Password',
                'rules' => 'required|matches[password]'
        )
    );
    var $preapplicant_validation = array(
        
        array(
                'field' => 'firstname',
                'label' => 'First Name',
                'rules' => 'required'
        ),
        array(
                'field' => 'middlename',
                'label' => 'Middle Name',
                'rules' => 'required'
        ),
        array(
                'field' => 'lastname',
                'label' => 'Last Name',
                'rules' => 'required'
        ),
        array(
                'field' => 'department',
                'label' => 'Department',
                'rules' => 'required'
        ),
        array(
                'field' => 'graduation',
                'label' => 'Year of Graduation',
                'rules' => 'required'
        ),
        array(
                'field' => 'studentid',
                'label' => 'Student ID',
                'rules' => 'required'
        ),
        array(
                'field' => 'contact',
                'label' => 'Contact Number',
                'rules' => 'required'
        ),
        array(
                'field' => 'status',
                'label' => 'Status',
                'rules' => 'required|in_list[Graduating,Alumni]'
        )
        
    );
    var $password_validation = array(
        
        array(
                'field' => 'firstname',
                'label' => 'First Name',
                'rules' => 'required'
        ),
        array(
                'field' => 'middlename',
                'label' => 'Middle Name',
                'rules' => 'required'
        ),
        array(
                'field' => 'lastname',
                'label' => 'Last Name',
                'rules' => 'required'
        ),
        array(
                'field' => 'department',
                'label' => 'Department',
                'rules' => 'required'
        ),
        array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required'
        ),
        array(
                'field' => 'studentid',
                'label' => 'Student ID',
                'rules' => 'required'
        ),
        array(
                'field' => 'contact',
                'label' => 'Contact Number',
                'rules' => 'required'
        ),
        array(
                'field' => 'status',
                'label' => 'Status',
                'rules' => 'required|in_list[Graduating,Alumni]'
        )
        
    );
    var $preemployer_validation = array(
        array(
                'field' => 'companyname',
                'label' => 'Company Name',
                'rules' => 'required'
        ),
        array(
                'field' => 'companytype',
                'label' => 'Company Type',
                'rules' => 'required'
        ),
        array(
                'field' => 'companycountry',
                'label' => 'Company Country',
                'rules' => 'required'
        ),
        array(
                'field' => 'companystreet',
                'label' => 'Company Street',
                'rules' => 'required'
        ),
        array(
                'field' => 'companybrgy',
                'label' => 'Company Baranggay',
                'rules' => 'required'
        ),
        array(
                'field' => 'companycity',
                'label' => 'Company City/Town',
                'rules' => 'required'
        ),
        array(
                'field' => 'companyprovince',
                'label' => 'Company Province',
                'rules' => 'required'
        ),
        array(
                'field' => 'companyzip',
                'label' => 'Company Zip Code',
                'rules' => 'required'
        ),
        array(
                'field' => 'companycontact',
                'label' => 'Company Contact',
                'rules' => 'required'
        ),
        array(
                'field' => 'companyemail',
                'label' => 'Company Email',
                'rules' => 'required'
        ),
        array(
                'field' => 'companyfounder',
                'label' => 'Company Founder',
                'rules' => 'required'
        ),
        array(
                'field' => 'companyyear',
                'label' => 'Company Year',
                'rules' => 'required'
        ),
        array(
                'field' => 'hrname',
                'label' => 'HR Name',
                'rules' => 'required'
        ),
        array(
                'field' => 'hrcontact',
                'label' => 'HR Contact',
                'rules' => 'required'
        ),
        array(
                'field' => 'hremail',
                'label' => 'HR Email',
                'rules' => 'required'
        )
    );
    var $message_validation = array(
        array(
                'field' => 'inquiryname',
                'label' => 'Name',
                'rules' => 'required'
        ),
        array(
                'field' => 'inquirycontact',
                'label' => 'Contact',
                'rules' => 'required|numeric'
        ),
        array(
                'field' => 'inquiryemail',
                'label' => 'Email',
                'rules' => 'required|valid_email'
        ),
        array(
                'field' => 'inquirymessage',
                'label' => 'Message',
                'rules' => 'required'
        )
    );
    var $photo_validation = array(
        array(
                'field' => 'userfile',
                'label' => 'Photo'
        ),
        array(
                'field' => 'expectation',
                'label' => 'Salary Expectation',
                'rules' => 'required|integer'
        ),
        array(
                'field' => 'yesno',
                'label' => 'Willingness to Work In Other Areas',
                'rules' => 'in_list[Yes,No]'
        ),
        array(
                'field' => 'fk_id',
                'label' => 'FK_ID'
        )
    );
    var $skills_validation = array(
        array(
                'field' => 'skills',
                'label' => 'Skills',
                'rules' => 'required'
        ),
        array(
                'field' => 'others',
                'label' => 'Others'
        ),
        array(
                'field' => 'spec',
                'label' => 'Specialization'
        ),
        array(
                'field' => 'fk_id',
                'label' => 'fk_id'
        )
    );
    var $personalinfo_validation = array(
        array(
                'field' => 'birthday',
                'label' => 'Birthday',
                'rules' => 'required'
        ),
        array(
                'field' => 'country',
                'label' => 'Country',
                'rules' => 'required'
        ),
        array(
                'field' => 'street',
                'label' => 'Street',
                'rules' => 'required'
        ),
        array(
                'field' => 'brgy',
                'label' => 'Baranggay',
                'rules' => 'required'
        ),
        array(
                'field' => 'city',
                'label' => 'City/Town',
                'rules' => 'required'
        ),
        array(
                'field' => 'province',
                'label' => 'Province',
                'rules' => 'required'
        ),
        array(
                'field' => 'zip',
                'label' => 'Zip Code',
                'rules' => 'required|numeric'
        ),
        array(
                'field' => 'citizenship',
                'label' => 'Citizenship',
                'rules' => 'required'
        ),
        array(
                'field' => 'status',
                'label' => 'Status',
                'rules' => 'required|in_list[Single,Widow,Married,Divorced]'
        ),
        array(
                'field' => 'gender',
                'label' => 'Citizenship',
                'rules' => 'required|in_list[Female,Male]'
        ),
        array(
                'field' => 'fk_id',
                'label' => 'fk_id'
        )
	);
    var $education_validation = array(
        array(
                'field' => 'course1',
                'label' => 'Course'
        ),
        array(
                'field' => 'course2',
                'label' => 'Course'
        ),
        array(
                'field' => 'course3',
                'label' => 'Course'
        ),
        array(
                'field' => 'school1',
                'label' => 'School'
        ),
        array(
                'field' => 'school2',
                'label' => 'School'
        ),
        array(
                'field' => 'school3',
                'label' => 'School'
        ),
        array(
                'field' => 'year1',
                'label' => 'Year',
                'rules' => 'integer|max_length[4]'
        ),
        array(
                'field' => 'year2',
                'label' => 'Year',
                'rules' => 'integer|max_length[4]'
        ),
        array(
                'field' => 'year3',
                'label' => 'Year',
                'rules' => 'integer|max_length[4]'
        ),
        array(
                'field' => 'certifications',
                'label' => 'Certifications',
                'rules' => 'required'
        ),
        array(
                'field' => 'fk_id',
                'label' => 'fk_id'
        )
    );
    var $work_validation = array(
        array(
                'field' => 'experience',
                'label' => 'Experience',
                'rules' => 'required|integer|max_length[4]'
        ),
        array(
                'field' => 'job1',
                'label' => 'Job Position',
                'rules' => 'required'
        ),
        array(
                'field' => 'job2',
                'label' => 'Job Position'
        ),
        array(
                'field' => 'job3',
                'label' => 'Job Position'
        ),
        array(
                'field' => 'job4',
                'label' => 'Job Position'
        ),
        array(
                'field' => 'job5',
                'label' => 'Job Position'
        ),
        array(
                'field' => 'job6',
                'label' => 'Job Position'
        ),
        array(
                'field' => 'job7',
                'label' => 'Job Position'
        ),
        array(
                'field' => 'company1',
                'label' => 'Company',
                'rules' => 'required'
        ),
        array(
                'field' => 'company2',
                'label' => 'Company'
        ),
        array(
                'field' => 'company3',
                'label' => 'Company'
        ),
        array(
                'field' => 'company4',
                'label' => 'Company'
        ),
        array(
                'field' => 'company5',
                'label' => 'Company'
        ),
        array(
                'field' => 'company6',
                'label' => 'Company'
        ),
        array(
                'field' => 'company7',
                'label' => 'Company'
        ),
        array(
                'field' => 'yearfrom1',
                'label' => 'Year',
                'rules' => 'required|integer|max_length[4]'
        ),
        array(
                'field' => 'yearfrom2',
                'label' => 'Year',
                'rules' => 'integer|max_length[4]'
        ),
        array(
                'field' => 'yearfrom3',
                'label' => 'Year',
                'rules' => 'integer|max_length[4]'
        ),
        array(
                'field' => 'yearfrom4',
                'label' => 'Year',
                'rules' => 'integer|max_length[4]'
        ),
        array(
                'field' => 'yearfrom5',
                'label' => 'Year',
                'rules' => 'integer|max_length[4]'
        ),
        array(
                'field' => 'yearfrom6',
                'label' => 'Year',
                'rules' => 'integer|max_length[4]'
        ),
        array(
                'field' => 'yearfrom7',
                'label' => 'Year',
                'rules' => 'integer|max_length[4]'
        ),
        array(
                'field' => 'yearto1',
                'label' => 'Year',
                'rules' => 'required|integer|max_length[4]'
        ),
        array(
                'field' => 'yearto2',
                'label' => 'Year',
                'rules' => 'integer|max_length[4]'
        ),
        array(
                'field' => 'yearto3',
                'label' => 'Year',
                'rules' => 'integer|max_length[4]'
        ),
        array(
                'field' => 'yearto4',
                'label' => 'Year',
                'rules' => 'integer|max_length[4]'
        ),
        array(
                'field' => 'yearto5',
                'label' => 'Year',
                'rules' => 'integer|max_length[4]'
        ),
        array(
                'field' => 'yearto6',
                'label' => 'Year',
                'rules' => 'integer|max_length[4]'
        ),
        array(
                'field' => 'yearto7',
                'label' => 'Year',
                'rules' => 'integer|max_length[4]'
        ),
        array(
                'field' => 'fk_id',
                'label' => 'fk_id'
        )
    );

    var $jobposting_validation = array(
        array(
                'field' => 'title',
                'label' => 'Title',
                'rules' => 'required'
        ),
        array(
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required'
        ),
        array(
                'field' => 'date',
                'label' => 'Date',
                'rules' => 'required'
        ),
        array(
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'required'
        ),
        array(
                'field' => 'location',
                'label' => 'City Area',
                'rules' => 'required'
        ),
        array(
                'field' => 'course',
                'label' => 'course',
                'rules' => 'required'
        ),
        array(
                'field' => 'yrsofexp',
                'label' => 'Years of Experience',
                'rules' => 'integer'
        ),
        array(
                'field' => 'salary',
                'label' => 'Salary',
                'rules' => 'integer',
                'rules' => 'required'
        ),
        array(
                'field' => 'contactno',
                'label' => 'Contact Number',
                'rules' => 'integer',
                'rules' => 'required'
        ),
        array(
                'field' => 'address',
                'label' => 'Complete Address',
                'rules' => 'required'
        ),
        array(
                'field' => 'skills',
                'label' => 'Skills',
                'rules' => 'required'
        )
    );


    //*GENERAL FUNCTIONS
    function handleConfirmationLinkVerification(){
        $confirmationKey = $this->input->get("confirmationKey");
        $this->load->model("ApplicantRegistrationModel");
        
        
        if($this->ApplicantRegistrationModel->doCompleteRegistration($confirmationKey)){
                $completeRegistrationRes = "Your account has been activated, you can now login to our site.";
        } else {
            $completeRegistrationRes = "Invalid confirmation token.";
        }
        
        
        echo ("<SCRIPT LANGUAGE='JavaScript'>
                            window.alert('" . $completeRegistrationRes ."');
                            window.location.href='" . base_url() . "/page/login';" . "</SCRIPT>");
        exit;
    }
    function handleConfirmationLinkVerification2(){
        $completeRegistrationRes = "Click ok to reach our site.";
        echo ("<SCRIPT LANGUAGE='JavaScript'>
                            window.alert('" . $completeRegistrationRes ."');
                            window.location.href='" . base_url() . "/page/reload_page';" . "</SCRIPT>");
        exit;
    }


    public function updateprofile()
    {   
        $identity=$this->session->userdata('username');
        $this->load->model("Page_model");
        $id = $this->Page_model->user_personalinfo($identity);
        $this->data->id=$id;
        $this->load->model("Page_model");
        $personal = $this->Page_model->get_userpi($id);
        $this->data->personal=$personal;
        /*foreach((array)$personal as $personal)
        {
            $street = $personal['street'];
            $brgy = $personal['brgy'];
            $city = $personal['city'];
            $province = $personal['province'];
            $country = $personal['country'];
            $zip = $personal['zip'];
            $birthday = $personal['birthday'];
            $citizenship = $personal['citizenship'];
            $status = $personal['status'];
            $gender = $personal['gender'];
        }
        $this->data->personal=$personal;*/
        

        $this->templates->layout('updateprofile');
        $this->load->model("Page_model");

        $genderList=$this->Page_model->get_gender();
        $this->data->genderList=$genderList;



        $this->load->model("Page_model");

        $personstatusList=$this->Page_model->get_personstatus();
        $this->data->personstatusList=$personstatusList;

        $this->load->library('form_validation');
        $this->form_validation->set_rules($this->personalinfo_validation);

        if ($this->input->post('submit2') == NULL){

        }
        else
        {   
            redirect('../ISEE/page/reload_page');
        }

        if ($this->form_validation->run() == FALSE)
        {  
            foreach($this->personalinfo_validation as $row)
            {
                $this->data->$row['field']=$this->input->post($row['field']);
                $fields[$row['field']]=$this->input->post($row['field']);
            }
            $this->templates->render('updateprofile',$this->data);
        }
        else
        {
            $birthday=$this->input->post('birthday');
            $street=$this->input->post('street');
            $brgy=$this->input->post('brgy');
            $city=$this->input->post('city');
            $province=$this->input->post('province');
            $country=$this->input->post('country');
            $zip=$this->input->post('zip');
            $citizenship=$this->input->post('citizenship');
            $status=$this->input->post('status');
            $gender=$this->input->post('gender');
            
            foreach($this->personalinfo_validation as $row)
            {
                $this->data->$row['field']=$this->input->post($row['field']);
                $fields[$row['field']]=$this->input->post($row['field']);
            }

            $fields['fk_id']=$id;

            $this->load->model("Page_model");
            $register=$this->Page_model->savepersonalinfo($fields);
            if($register==0)
            {
                $completeRegistrationRes = "Your Profile has been successfully updated.";
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('" . $completeRegistrationRes ."');" . "</SCRIPT>");
                redirect('page/reload_page');
                exit;
            }
            else
            {
                $this->templates->render('updateprofile',$this->data);
                $completeRegistrationRes = "Saving Failed.";
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('" . $completeRegistrationRes ."');
                window.location.href='". "updateprofile';" . "</SCRIPT>");

                exit;
            }
        }
        
    }
    public function personalinfo()
    {
        $this->templates->layout('personalinfo');
        $this->load->model("Page_model");

        $genderList=$this->Page_model->get_gender();
        $this->data->genderList=$genderList;
        $this->load->model("Page_model");

        $personstatusList=$this->Page_model->get_personstatus();
        $this->data->personstatusList=$personstatusList;

        $this->load->library('form_validation');
        $this->form_validation->set_rules($this->personalinfo_validation);
        if ($this->form_validation->run() == FALSE)
        {  
            foreach($this->personalinfo_validation as $row)
            {
                $this->data->$row['field']=$this->input->post($row['field']);
                $fields[$row['field']]=$this->input->post($row['field']);
            }
            $this->templates->render('personalinfo',$this->data);
        }
        else
        {   

            $birthday=$this->input->post('birthday');
            $street=$this->input->post('street');
            $brgy=$this->input->post('brgy');
            $city=$this->input->post('city');
            $province=$this->input->post('province');
            $country=$this->input->post('country');
            $zip=$this->input->post('zip');
            $citizenship=$this->input->post('citizenship');
            $status=$this->input->post('status');
            $gender=$this->input->post('gender');
            $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $end=substr($url, strrpos($url, '/') + 1);
            
            foreach($this->personalinfo_validation as $row)
            {
                $this->data->$row['field']=$this->input->post($row['field']);
                $fields[$row['field']]=$this->input->post($row['field']);
            }

            $fields['fk_id']='';
            $fields['fk_id']=$end;

            $this->load->model("Page_model");
            $register=$this->Page_model->savepersonalinfo($fields);
            if($register)
            {
                $this->templates->render('education',$this->data);
                $completeRegistrationRes = "Your Personal Info has been successfully saved.";
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('" . $completeRegistrationRes ."');" . "</SCRIPT>");
                redirect('page/ApplicantRegistrationController/education/'.$end);
            }
            else
            {
                $this->templates->render('personalinfo',$this->data);
                $completeRegistrationRes = "Message Sending Failed.";
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('" . $completeRegistrationRes ."');
                window.location.href='". "personalinfo';" . "</SCRIPT>");
            }
            
        
        }
    }
    public function education()
    {   
        $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $end=substr($url, strrpos($url, '/') + 1);
        
        $this->templates->layout('education');

        $this->load->library('form_validation');
        $this->form_validation->set_rules($this->education_validation);
        if ($this->input->post('submit2') == NULL){

        }
        else
        {
            $this->templates->render('skills',$this->data);
            redirect('page/ApplicantRegistrationController/skills/'.$end);
        }
        if ($this->input->post('submit') == NULL){

        $this->templates->render('education',$this->data);
        }
        else { 

            if ($this->form_validation->run() == FALSE)
            {  
                foreach($this->education_validation as $row)
                {
                    $this->data->$row['field']=$this->input->post($row['field']);
                    $fields[$row['field']]=$this->input->post($row['field']);
                }
                $this->templates->render('education',$this->data);
            }
            else
            {   

                $course1=$this->input->post('course1');
                $school1=$this->input->post('school1');
                $year1=$this->input->post('year1');
                $course2=$this->input->post('course2');
                $school2=$this->input->post('school2');
                $year2=$this->input->post('year2');
                $course3=$this->input->post('course3');
                $school3=$this->input->post('school3');
                $year3=$this->input->post('year3');
                $certifications=$this->input->post('certifications');
                $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                $end=substr($url, strrpos($url, '/') + 1);
                
                foreach($this->education_validation as $row)
                {
                    $this->data->$row['field']=$this->input->post($row['field']);
                    $fields[$row['field']]=$this->input->post($row['field']);
                }

                $fields['fk_id']='';
                $fields['fk_id']=$end;

                $this->load->model("Page_model");
                $register=$this->Page_model->saveeducation($fields);
                if($register)
                {
                    $this->templates->render('skills',$this->data);
                    $completeRegistrationRes = "Your Educational Background has been successfully saved.";
                    echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('" . $completeRegistrationRes ."');" . "</SCRIPT>");
                    redirect('page/ApplicantRegistrationController/skills/'.$end);
                }
                else
                {
                    $this->templates->render('education',$this->data);
                    $completeRegistrationRes = "Message Sending Failed.";
                    echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('" . $completeRegistrationRes ."');
                    window.location.href='". "education';" . "</SCRIPT>");
                }       
            }
        }
    }
    public function skills()
    {   
        $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $end=substr($url, strrpos($url, '/') + 1);
        $this->templates->layout('skills');
        $this->load->model("Page_model");

        $skillsList=$this->Page_model->get_skills();
        $this->data->skillsList=$skillsList;

        $this->load->library('form_validation');
        $this->form_validation->set_rules($this->skills_validation);

        if ($this->input->post('submit') == NULL)
        {
            
            $this->templates->render('skills',$this->data);
        }
        else
        { 
            if ($this->form_validation->run() == FALSE)
            {  
                foreach($this->skills_validation as $row)
                {
                    $this->data->$row['field']=$this->input->post($row['field']);
                    $fields[$row['field']]=$this->input->post($row['field']);
                }
                $this->templates->render('skills',$this->data);
            }
            else
            {   

                $skills=$this->input->post('skills');
                $others=$this->input->post('others');
                $spec=$this->input->post('spec');
                $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                $end=substr($url, strrpos($url, '/') + 1);
                
                foreach($this->skills_validation as $row)
                {
                    $this->data->$row['field']=$this->input->post($row['field']);
                    $fields[$row['field']]=$this->input->post($row['field']);
                }

                $fields['fk_id']='';
                $fields['fk_id']=$end;

                $this->load->model("Page_model");
                $register=$this->Page_model->saveskills($fields);
                if($register)
                {
                    $this->templates->render('work',$this->data);
                    $completeRegistrationRes = "Your Skills has been successfully saved.";
                    echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('" . $completeRegistrationRes ."');" . "</SCRIPT>");
                    redirect('page/ApplicantRegistrationController/work/'.$end);
                }
                else
                {
                    $this->templates->render('skills',$this->data);
                    $completeRegistrationRes = "Message Sending Failed.";
                    echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('" . $completeRegistrationRes ."');
                    window.location.href='". "skills';" . "</SCRIPT>");
                }
                
            
            }
        }
    }
    public function work()
    {   

        $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $end=substr($url, strrpos($url, '/') + 1);
        $this->templates->layout('work');
        $this->load->library('form_validation');
        $this->form_validation->set_rules($this->work_validation);

        if ($this->input->post('submit2') == NULL){

        }
        else
        {
            $this->templates->render('photo_upload',$this->data);
            redirect('page/ApplicantRegistrationController/photo_upload/'.$end);
        }
        if ($this->input->post('submit') == NULL){
            
            $this->templates->render('work',$this->data);
        }
        else
        { 
            if ($this->form_validation->run() == FALSE)
            {  
                foreach($this->work_validation as $row)
                {
                    $this->data->$row['field']=$this->input->post($row['field']);
                    $fields[$row['field']]=$this->input->post($row['field']);
                }
                $this->templates->render('work',$this->data);
            }
            else
            {   

                $experience=$this->input->post('experience');
                $job1=$this->input->post('job1');
                $job2=$this->input->post('job2');
                $job3=$this->input->post('job3');
                $job4=$this->input->post('job4');
                $job5=$this->input->post('job5');
                $job6=$this->input->post('job6');
                $job7=$this->input->post('job7');
                $company1=$this->input->post('company1');
                $company2=$this->input->post('company2');
                $company3=$this->input->post('company3');
                $company4=$this->input->post('company4');
                $company5=$this->input->post('company5');
                $company6=$this->input->post('company6');
                $company7=$this->input->post('company7');
                $yearfrom1=$this->input->post('yearfrom1');
                $yearfrom2=$this->input->post('yearfrom2');
                $yearfrom3=$this->input->post('yearfrom3');
                $yearfrom4=$this->input->post('yearfrom4');
                $yearfrom5=$this->input->post('yearfrom5');
                $yearfrom6=$this->input->post('yearfrom6');
                $yearfrom7=$this->input->post('yearfrom7');
                $yearto1=$this->input->post('yearto1');
                $yearto2=$this->input->post('yearto2');
                $yearto3=$this->input->post('yearto3');
                $yearto4=$this->input->post('yearto4');
                $yearto5=$this->input->post('yearto5');
                $yearto6=$this->input->post('yearto6');
                $yearto7=$this->input->post('yearto7');
                $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                $end=substr($url, strrpos($url, '/') + 1);
                
                foreach($this->work_validation as $row)
                {
                    $this->data->$row['field']=$this->input->post($row['field']);
                    $fields[$row['field']]=$this->input->post($row['field']);
                }

                $fields['fk_id']='';
                $fields['fk_id']=$end;

                $this->load->model("Page_model");
                $register=$this->Page_model->savework($fields);
                if($register)
                {
                    $this->templates->render('photo_upload',$this->data);
                    $completeRegistrationRes = "Your Working Background has been successfully saved.";
                    echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('" . $completeRegistrationRes ."');" . "</SCRIPT>");
                    redirect('page/ApplicantRegistrationController/photo_upload'.$end);
                }
                else
                {
                    $this->templates->render('work',$this->data);
                    $completeRegistrationRes = "Message Sending Failed.";
                    echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('" . $completeRegistrationRes ."');
                    window.location.href='". "work';" . "</SCRIPT>");
                }
                
            
            }
        }
    }
    public function photo_upload()
    {   
        $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $end=substr($url, strrpos($url, '/') + 1);
        $this->load->model("Page_model");

        $yesnoList=$this->Page_model->get_yesno();
        $this->data->yesnoList=$yesnoList;

        $this->templates->layout('photo_upload');

        $this->load->library('form_validation');
        $this->form_validation->set_rules($this->photo_validation);

        if ($this->input->post('submit') == NULL){
            
            $this->templates->render('photo_upload',$this->data);
        }
        else
        { 
            $expectation=$this->input->post('expectation');
            $yesno=$this->input->post('yesno');
            $userfile=$this->input->post('userfile');
            $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $end=substr($url, strrpos($url, '/') + 1);

            foreach($this->photo_validation as $row)
            {
                $this->data->$row['field']=$this->input->post($row['field']);
                $fields[$row['field']]=$this->input->post($row['field']);
            }

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
            $config['encrypt_name']         = TRUE; //to avoid replacing of files


            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile'))
            {
                $error = array('error' => $this->upload->display_errors());

                $fields['userfile']='';
                $fields['userfile']='uploads/profile.jpg';
            }

            else
            {
                $data = array('upload_data' => $this->upload->data());
                //save this to database
                $path = "uploads/".$data['upload_data']['file_name'];

                /* sample */
                /*echo "Path:".$path."<br/>"."<br/>With baseurl:".base_url($path)."<br/>";*/
                $path_userfile = $path;

                $fields['userfile']='';
                $fields['userfile']=$path_userfile;
            }

            $fields['fk_id']='';
            $fields['fk_id']=$end;
            $this->load->model("Page_model");
            $register=$this->Page_model->savephoto($fields);
            if($register)
            {
                $this->templates->render('resume',$this->data);
                $completeRegistrationRes = "Your Working Background has been successfully saved.";
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('" . $completeRegistrationRes ."');" . "</SCRIPT>");
                redirect('page/ApplicantRegistrationController/resume/'.$end);
            }
            else
            {
                $this->templates->render('photo_upload',$this->data);
                $completeRegistrationRes = "Message Sending Failed.";
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('" . $completeRegistrationRes ."');
                window.location.href='". "photo_upload';" . "</SCRIPT>");
            }
        }
    }
    public function resume() {

        $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $end=substr($url, strrpos($url, '/') + 1);
        
        $this->load->model("Page_model");

        
        $photo=$this->Page_model->get_photo($end);
        $this->data->photo=$photo;
        $basic=$this->Page_model->get_basicinfo($end);
        $this->data->basic=$basic;
        $personal=$this->Page_model->get_personal($end);
        $this->data->personal=$personal;
        $education=$this->Page_model->get_education($end);
        $this->data->education=$education;


        $this->templates->layout('resume');
        $this->templates->render('resume',$this->data);
    }
     public function jobposting()
    {   
        
        $this->templates->layout('jobposting');

        $this->load->library('form_validation');
        $this->form_validation->set_rules($this->jobposting_validation);
        if ($this->input->post('submit2') == NULL){

        }
        else
        {   
            redirect('../ISEE/page/reload_page');
        }
        if ($this->input->post('submit') == NULL)
        {
            
            $this->templates->render('jobposting',$this->data);
        }
        else
        { 
            if ($this->form_validation->run() == FALSE)
            {  
                foreach($this->jobposting_validation as $row)
                {
                    $this->data->$row['field']=$this->input->post($row['field']);
                    $fields[$row['field']]=$this->input->post($row['field']);
                }
                $this->templates->render('jobposting',$this->data);
            }
            else
            {   
                $name=$this->input->post('name');
                $title=$this->input->post('title');
                $description=$this->input->post('description');
                $location=$this->input->post('location');
                $course=$this->input->post('course');
                $yrsofexp=$this->input->post('yrsofexp');
                $salary=$this->input->post('salary');
                $contactno=$this->input->post('contactno');
                $address=$this->input->post('address');
                $skills=$this->input->post('skills');
                
                foreach($this->jobposting_validation as $row)
                {
                    $this->data->$row['field']=$this->input->post($row['field']);
                    $fields[$row['field']]=$this->input->post($row['field']);
                }

                $this->load->model("Page_model");
                $register=$this->Page_model->savejobposting($fields);
                if($register)
                {
                    $this->load->helper('url');
                    
                    unset($fields["submit"]);
                    $this->load->model("ApplicantRegistrationModel");
                    $pass_accountid = $this->ApplicantRegistrationModel->sendNotification($fields);

                    if ($pass_accountid == 1)
                    {
                        $this->templates->render('jobposting',$this->data);
                        $completeRegistrationRes = "You have successfully created a new job post.";

                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                                            window.alert('" . $completeRegistrationRes ."');" . "</SCRIPT>");
                        
                        redirect('../ISEE/page/reload_page');
                        exit;
                        
                    }
                   else
                   {
                        $this->templates->render('jobposting',$this->data);
                        $completeRegistrationRes = "There seem to be a problem sending a verification email to your address. Kindly try to register again.";
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                                            window.alert('" . $completeRegistrationRes ."');" . "</SCRIPT>");

                        redirect('page/ApplicantRegistrationController/jobposting');
                        exit;
                   }

                }
                else
                {
                    $this->templates->render('jobposting',$this->data);
                    $completeRegistrationRes = "Message Sending Failed.";
                    echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('" . $completeRegistrationRes ."');
                    window.location.href='". "jobposting;" . "</SCRIPT>");
                    exit;
                }
                
            
            }
        }
    }
    public function my_message_2(){
        if ($this->session->userdata('id'))
        {
            redirect('page/ApplicantRegistrationController/handleRegistrationRequest_emp');
        }
        $this->templates->layout('message_2');
        $this->load->library('form_validation');
        $this->form_validation->set_rules($this->message_validation);
        /*$this->form_validation->set_rules(
                'inquiryconatct', 'Contact Number',
                'required|numeric',
                array(
                        'numeric'      => 'Invalid Phone Number.'
                )
        );
        $this->form_validation->set_rules('inquiryemail', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('inquiryname', 'Name', 'required');
        $this->form_validation->set_rules('inquirymessage', 'Message', 'required');
                   */


                if ($this->form_validation->run() == FALSE)
                {  
                    foreach($this->message_validation as $row) {
                            $this->data->$row['field']=$this->input->post($row['field']);
                            $fields[$row['field']]=$this->input->post($row['field']);
                        }
                    $this->templates->render('message_2',$this->data);
                }
                else
                {   

                        $inquiryname=$this->input->post('inquiryname');
                        $inquirycontact=$this->input->post('inquirycontact');
                        $inquiryemail=$this->input->post('inquiryemail');
                        $inquirymessage=$this->input->post('inquirymessage');

                    foreach($this->message_validation as $row) {
                        $this->data->$row['field']=$this->input->post($row['field']);
                        $fields[$row['field']]=$this->input->post($row['field']);
                        }

                    $this->load->model("Page_model");
                    $register=$this->Page_model->saveinquiry($fields);
                    if($register) {
                        $this->templates->render('home',$this->data);
                        $completeRegistrationRes = "Your message has been successfully sent. Please check your email tomorrow for a response.";
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('" . $completeRegistrationRes ."');
                        window.location.href='". "../';" . "</SCRIPT>");
                    } else {
                        $this->templates->render('message_2',$this->data);
                        $completeRegistrationRes = "Message Sending Failed.";
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('" . $completeRegistrationRes ."');
                        window.location.href='". "my_message_2';" . "</SCRIPT>");
                    }
                    
                
                }
    }
    public function my_message(){
        if ($this->session->userdata('id'))
        {
            redirect('page/ApplicantRegistrationController/handleRegistrationRequest_emp');
        }
        $this->templates->layout('message');
        $this->load->library('form_validation');
        $this->form_validation->set_rules($this->message_validation);
                if ($this->form_validation->run() == FALSE)
                {  
                    foreach($this->message_validation as $row) {
                            $this->data->$row['field']=$this->input->post($row['field']);
                            $fields[$row['field']]=$this->input->post($row['field']);
                        }
                    $this->templates->render('message',$this->data);
                }
                else
                {   

                        $inquiryname=$this->input->post('inquiryname');
                        $inquirycontact=$this->input->post('inquirycontact');
                        $inquiryemail=$this->input->post('inquiryemail');
                        $inquirymessage=$this->input->post('inquirymessage');

                    foreach($this->message_validation as $row) {
                        $this->data->$row['field']=$this->input->post($row['field']);
                        $fields[$row['field']]=$this->input->post($row['field']);
                        }

                    $this->load->model("Page_model");
                    $register=$this->Page_model->saveinquiry($fields);
                    if($register) {
                        $this->templates->render('home',$this->data);
                        $completeRegistrationRes = "Your message has been successfully sent. Please check your email tomorrow for a response.";
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('" . $completeRegistrationRes ."');
                        window.location.href='". "../';" . "</SCRIPT>");
                    } else {
                        $this->templates->render('message',$this->data);
                        $completeRegistrationRes = "Message Sending Failed.";
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('" . $completeRegistrationRes ."');
                        window.location.href='". "preregistration_employer';" . "</SCRIPT>");
                    }
                    
                
                }
    }
    public function forgotpassword()
    {   

        $this->load->model("Page_model");
        $collegeList=$this->Page_model->get_colleges();
        $this->data->collegeList=$collegeList;

        $this->load->model("Page_model");
        $statusList=$this->Page_model->get_status();
        $this->data->statusList=$statusList;

        $this->templates->layout('forgotpassword');
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules($this->password_validation);
        $this->form_validation->set_rules('studentid', 'studentid', 'required|integer');
        if ($this->input->post('submit2') == NULL){
        }
        else
        {
            $this->templates->render('login',$this->data);
            redirect('page/login');
        }
        if ($this->form_validation->run()== FALSE)
        {  
            foreach($this->password_validation as $row)
            {
                $this->data->$row['field']=$this->input->post($row['field']);
                    $fields[$row['field']]=$this->input->post($row['field']);
            }
            $this->templates->render('forgotpassword',$this->data);
        }
        else
        {
            $firstname=$this->input->post('firstname');
            $middlename=$this->input->post('middlename');
            $lastname=$this->input->post('lastname');
            $department=$this->input->post('department');
            $username=$this->input->post('username');
            $studentid=$this->input->post('studentid');
            $status=$this->input->post('status');
            $contact=$this->input->post('contact');

            foreach($this->password_validation as $row)
            {
                $this->data->$row['field']=$this->input->post($row['field']);
            }

            $this->load->model("ApplicantRegistrationModel");
            $check=$this->ApplicantRegistrationModel->checkinput($firstname,$middlename,$lastname,$department,$studentid,$status,$contact,$username);
            
            if($check==1234567890)
            {                            
                $this->templates->render('forgotpassword',$this->data);
                $completeRegistrationRes = "No Matches Found. Please try again.";
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('" . $completeRegistrationRes ."');
                window.location.href='" . "forgotpassword';" . "</SCRIPT>");
                exit;
            } 
            elseif($check==0)
            {   
                $check=$this->ApplicantRegistrationModel->sendEmailPassword($studentid);                         
                $this->templates->render('page/login',$this->data);
                $completeRegistrationRes = "We have sent you an email containing your password. Kindly visit your email account and try logging in again";
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('" . $completeRegistrationRes ."');
                window.location.href='" . "../login';" . "</SCRIPT>");
                exit;
            }
            elseif($check==143)
            {                            
                $this->templates->render('forgotpassword',$this->data);
                $completeRegistrationRes = "Username is Incorrect. Please try again.";
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('" . $completeRegistrationRes ."');
                window.location.href='" . "forgotpassword';" . "</SCRIPT>");
                exit;
            } 
        }
    }



    public function preregistration_employer(){
        if ($this->session->userdata('id'))
        {
            redirect('page/ApplicantRegistrationController/handleRegistrationRequest_emp');
        }
        
        $this->load->model("Page_model");

        $industryList=$this->Page_model->get_industry();
        $this->data->industryList=$industryList;
        
        $this->templates->layout('employerregister');
        $this->load->library('form_validation');

        $this->form_validation->set_rules(
                'companyzip', 'Company Zip Code',
                'required|integer',
                array(
                        'integer'      => 'Must only be integers.'
                )
        );
        $this->form_validation->set_rules(
                'companycontact', 'Company Contact',
                'required|numeric|is_unique[employerinfo.companycontact]',
                array(
                        'numeric'      => 'Invalid Phone Number.',
                        'is_unique'     => 'This %s already exists.'
                )
        );
        $this->form_validation->set_rules(
                'hrcontact', 'HR Contact',
                'numeric|is_unique[employerinfo.hrcontact]',
                array(
                        'numeric'      => 'Invalid Phone Number.',
                        'is_unique'     => 'This %s already exists.'
                )
        );
        $this->form_validation->set_rules(
                'companyyear', 'Company Year',
                'required|integer',
                array(
                        'integer'      => 'Must only be integers.'
                )
        );
        $this->form_validation->set_rules('companyemail', 'Company Email', 'required|valid_email|is_unique[employerinfo.companyemail]');
        $this->form_validation->set_rules('hremail', 'HR Email', 'valid_email|is_unique[employerinfo.hremail]');
        $this->form_validation->set_rules('companyname', 'HR Email', 'required');
        $this->form_validation->set_rules('companycountry', 'Company Country', 'required');
        $this->form_validation->set_rules('companystreet', 'Company Street', 'required');
        $this->form_validation->set_rules('companybrgy', 'Company Baranggay', 'required');
        $this->form_validation->set_rules('companycity', 'Company City/Town', 'required');
        $this->form_validation->set_rules('companyprovince', 'Company Province', 'required');
        $this->form_validation->set_rules('companyfounder', 'Company Founder', 'required');
        $this->form_validation->set_rules('companytype', 'Company Type', 'required');
                   

                if ($this->form_validation->run() == FALSE)
                {  
                    foreach($this->preemployer_validation as $row) {
                                    $this->data->$row['field']=$this->input->post($row['field']);
                                    $fields[$row['field']]=$this->input->post($row['field']);
                                }
                            $this->templates->render('employerregister',$this->data);
                }
                else
                {   

                    $this->form_validation->set_rules(
                            'companytype', 'Company Type',
                            'is_unique[industrylist.industry]',
                            array(
                                    'is_unique'     => 'This %s is invalid.'
                            )
                    );
                    if ($this->form_validation->run() == FALSE)
                    {

                        $companyname=$this->input->post('companyname');
                        $companytype=$this->input->post('companytype');
                        $companyemail=$this->input->post('companyemail');
                        $companyyear=$this->input->post('companyyear');
                        
                        foreach($this->preemployer_validation as $row) {
                            $this->data->$row['field']=$this->input->post($row['field']);
                        }

                        $this->load->model("ApplicantRegistrationModel");
                        $check=$this->ApplicantRegistrationModel->checkpreregistration_emp($companyname,$companytype,$companyemail,$companyyear);
                        if($check==0) { 
                            foreach($this->preemployer_validation as $row) {
                            $this->data->$row['field']=$this->input->post($row['field']);
                            $fields[$row['field']]=$this->input->post($row['field']);
                            }

                            $this->load->model("Page_model");
                            $register=$this->Page_model->checkregistration($fields);

                            if($register) {
                                 redirect('page/ApplicantRegistrationController/handleRegistrationRequest_emp');
                            } else {
                                $this->templates->render('employerregister',$this->data);
                                $completeRegistrationRes = "Your company already have an account. Kindly try to login instead.";
                                echo ("<SCRIPT LANGUAGE='JavaScript'>
                                window.alert('" . $completeRegistrationRes ."');
                                window.location.href='". "preregistration_employer';" . "</SCRIPT>");
                            }
                        }
                        else{
                            $this->templates->render('login',$this->data);
                            $completeRegistrationRes = "Your company already have an account. Kindly try to login instead.";
                            echo ("<SCRIPT LANGUAGE='JavaScript'>
                            window.alert('" . $completeRegistrationRes ."');
                            window.location.href='" . base_url() . "/page/login';" . "</SCRIPT>");
                        }
                    }
                    elseif ($this->form_validation->run() == TRUE){
                        
                        $this->form_validation->set_rules(
                                'companytype', 'Company Type',
                                'max_length[1]',
                                array(
                                        'max_length'     => 'This %s is invalid.'
                                )
                        );
                        if ($this->form_validation->run() == FALSE)
                        {
                            foreach($this->preemployer_validation as $row) {
                                    $this->data->$row['field']=$this->input->post($row['field']);
                                    $fields[$row['field']]=$this->input->post($row['field']);
                                }
                            $this->templates->render('employerregister',$this->data);
                        }
                    }
                
                }
    }
	function handleRegistrationRequest_emp() {
		//go to applicant registration form
		$display="employer_register";
		$this->templates->layout('employer_register');
	
		$this->load->library('form_validation');
        $this->form_validation->set_rules($this->applicant_validation);
                    
        foreach($this->applicant_validation as $row) {
            $this->data->$row['field']=NULL;
        }
            
        if ($this->input->post('submit') == NULL){

        }
        else {
            if($this->form_validation->run()){
                foreach($this->applicant_validation as $row) {
                    $this->data->$row['field']=$this->input->post($row['field']);
                    $fields[$row['field']]=$this->input->post($row['field']);
                }
                $fields = $this->input->post();

                //get the email from the fields
                $email = $fields["email"];
                
                //validate email in DB
                
                //case 1: Email does not exist, Check userID if does not exist, do tentative registration. Send email confirmation.
                //case 2: Email exist but applicant's registration status is tentative. Show message, "Please check your email and click the confirmation link to complete registration."
                //case 3: Email exist and applicant's registration status is active. Show message, "Applicant account already exist."
                
                $this->load->model("ApplicantRegistrationModel");
                
                $status = $this->ApplicantRegistrationModel->verifyEmail($email);
                if($status == ''){//case 1 Email Does not exist
                    $isUserNameValid=$this->ApplicantRegistrationModel->isUserNameValid($fields["username"]);
                    if($isUserNameValid==true){ //check if userName exist in DB
                    
                        $this->load->helper('url');
                        
                        unset($fields["submit"]);
                        $registrationRes = $this->ApplicantRegistrationModel->doTentativeRegistration_2($fields); //valid user name
                    
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                                    window.alert('" . $registrationRes ."');
                                    window.location.href='" . base_url() . "/page/login';" . "</SCRIPT>");
                                    
                        exit;
                        //redirect('/page/login');
                    } else{
                        //invalid userName go to applicant registration form
                        //$this->templates->layout('employer_register');
                        //$this->templates->render('employer_register', $fields);
                        echo "foo is $isUserNameValid";
                    }
                } else if($status=='tentative'){
                    //case 2
                    //set message, go to view
                } else { 
                    //case 3
                    //set message go to view
                }
            }            
        }
		$this->templates->render($display,$this->data);
	}



    //*APPLICANT REGISTRATION
	public function preregistration_applicant()
    {
        if ($this->session->userdata('id'))
		{
			redirect('page/ApplicantRegistrationController/handleRegistrationRequest');
		}

		$this->load->model("Page_model");
        $collegeList=$this->Page_model->get_colleges();
        $this->data->collegeList=$collegeList;

		$this->load->model("Page_model");
        $statusList=$this->Page_model->get_status();
        $this->data->statusList=$statusList;

		$this->templates->layout('applicantpreregistration');
        $this->load->library('form_validation');


        $this->form_validation->set_rules($this->preapplicant_validation);
        $this->form_validation->set_rules('studentid', 'studentid', 'required|integer');
        $this->form_validation->set_rules('graduation', 'graduation', 'required|integer');
        
        if ($this->input->post('submit2') == NULL){
        }
        else
        {
            $this->templates->render('mainregistration',$this->data);
            redirect('page/mainregistration');
        }
        if ($this->form_validation->run() == FALSE)
        {
            foreach($this->preapplicant_validation as $row)
            {
                $this->data->$row['field']=$this->input->post($row['field']);
                    $fields[$row['field']]=$this->input->post($row['field']);
            }
            $this->templates->render('applicantpreregistration',$this->data);
        }
        else
        {  
            $firstname=$this->input->post('firstname');
            $middlename=$this->input->post('middlename');
            $lastname=$this->input->post('lastname');
            $department=$this->input->post('department');
            $graduation=$this->input->post('graduation');
            $studentid=$this->input->post('studentid');
            $status=$this->input->post('status');
            $contact=$this->input->post('contact');

            foreach($this->preapplicant_validation as $row)
            {
                $this->data->$row['field']=$this->input->post($row['field']);
            }

            $this->load->model("ApplicantRegistrationModel");
            $check=$this->ApplicantRegistrationModel->checkpreregistration($firstname,$middlename,$lastname,$department,$graduation,$studentid,$status,$contact);
            
            if($check==1234567890)
            {                            
                $this->templates->render('applicantpreregistration',$this->data);
                $completeRegistrationRes = "Your profile input is invalid. Please try again.";
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('" . $completeRegistrationRes ."');
                window.location.href='" . "preregistration_applicant';" . "</SCRIPT>");
                exit;
            } 
            elseif($check==0)
            {                            
                $this->templates->render('page/login',$this->data);
                $completeRegistrationRes = "You Already have an account. Please try logging in.";
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('" . $completeRegistrationRes ."');
                window.location.href='" . "../login';" . "</SCRIPT>");
                exit;
            } 
            else
            {
                redirect('page/ApplicantRegistrationController/handleRegistrationRequest/'.$studentid);
            }
        }      
	}
    function handleRegistrationRequest()
    {
        $this->templates->layout('applicantregister');
        $this->load->library('form_validation');
        $this->form_validation->set_rules($this->applicant_validation);
        if ($this->input->post('submit2') == NULL){
        }
        else
        {
            $this->templates->render('home',$this->data);
            redirect('page');
        }
        if ($this->form_validation->run()== FALSE)
        {  
            foreach($this->applicant_validation as $row)
            {
                $this->data->$row['field']=$this->input->post($row['field']);
                    $fields[$row['field']]=$this->input->post($row['field']);
            }
            $this->templates->render('applicantregister',$this->data);
        }
        else
        {
            foreach($this->applicant_validation as $row)
            {
                $this->data->$row['field']=$this->input->post($row['field']);
                $fields[$row['field']]=$this->input->post($row['field']);
            }
            $fields = $this->input->post();
            $email = $fields["email"];

            $this->load->model("ApplicantRegistrationModel");
            
            $status = $this->ApplicantRegistrationModel->verifyEmail($email);
            if($status == '')
            {
                $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                $end = substr($url, strrpos($url, '/') + 1);
                $username = $fields["username"];
                $isUserNameValid=$this->ApplicantRegistrationModel->isUserNameValid($username,$end);
                
                if($isUserNameValid==1)
                {
                    $this->load->helper('url');
                    
                    unset($fields["submit"]);
                    $pass_accountid = $this->ApplicantRegistrationModel->doTentativeRegistration($fields,$email,$end);
                    if ($pass_accountid == 1)
                    {
                        $this->templates->render('login',$this->data);
                        $completeRegistrationRes = "You have successfully created an account in our website. Kindly go to your email account now and check your verification mail to get started.";

                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                                            window.alert('" . $completeRegistrationRes ."');
                                            window.location.href='https://accounts.google.com/ServiceLogin?service=mail&passive=true&rm=false&continue=https://mail.google.com/mail/&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1';" . "</SCRIPT>");
                        exit;
                    }
                   else
                   {
                        $this->templates->render('applicantregister',$this->data);
                        $completeRegistrationRes = "There seem to be a problem sending a verification email to your address. Kindly try to register again.";
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                                            window.alert('" . $completeRegistrationRes ."');" . "</SCRIPT>");
                        exit;
                        redirect('page/ApplicantRegistrationController/handleRegistrationRequest/'.$end);
                   }
                }
                else
                {
                    $this->templates->render('applicantregister',$this->data);
                    $completeRegistrationRes = "Your Username may already be in use. Please try again with a different one.";
                    
                    echo ("<SCRIPT LANGUAGE='JavaScript'>
                                        window.alert('" . $completeRegistrationRes ."');" . "</SCRIPT>");
                    exit;
                    redirect('page/ApplicantRegistrationController/handleRegistrationRequest/'.$end);
                }
            }
            else if($status=='tentative')
            {
               $this->templates->render('login',$this->data);
                $completeRegistrationRes = "This email address already has an account. You only need to verify the email to be able to login.";

                echo ("<SCRIPT LANGUAGE='JavaScript'>
                                    window.alert('" . $completeRegistrationRes ."');
                                    window.location.href='https://accounts.google.com/ServiceLogin?service=mail&passive=true&rm=false&continue=https://mail.google.com/mail/&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1';" . "</SCRIPT>");
                exit; 
            }     
        }
    }

    
}
