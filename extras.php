
                /*print_r($runquery->result());*/
            //echo $this->db->last_query();
        /*$this->db->get_where('accounts',array('username'=>$username,'password'=>$password));
        echo $this->db->last_query();*/
        }
/*        function achieversfetch($fields){
            $query="SELECT * FROM `achievers` WHERE `id`='1'";
                $runquery=$this->db->query($query);
                return $runquery->result();
        }*/

        /*function checkregistration($companyname,$companytype,$companyaddress,$companycontact,$companyemail,$companyfounder,$companyyear,$hrname, $hrcontact,$hremail,$positions){*/
            /*$query="INSERT INTO `employerinfo` (`name`, `type`, `location`, `contact`, `email`, `owner`, `year`, `hrperson`, `hrcontact`, `hremail`, `positions`) VALUES ('".$companyname."','".$companytype."','".$companyaddress."','".$companycontact."','".$companyemail."','".$companyfounder."','".$companyyear."','".$hrname."','".$hrcontact."','".$hremail."','".$positions."')";
                $goquery=$this->db->query($query);*/
                /*
                print_r($goquery->result());*/
            //echo $this->db->last_query();
        /*$this->db->get_where('accounts',array('username'=>$username,'password'=>$password));
        echo $this->db->last_query();*/
               //select successful students

        //this is sample only, result from model
        /*
        array(
            "key"=>"value"
        ) is equal to

        $array["key"]="value"

        how to call the value of row in array?
        echo $array["key"]
        */
        /*$username=$this->input->post('username');
        $password=$this->input->post('password');*/

        /*foreach($this->achievers_load as $row) {
                $this->data->students=$row['field'];
            }
        

        $this->load->model("Page_model");
        $check=$this->Page_model->achieversfetch($fields);*/
                /*$students=array(
            array(
                    "name"=>"Ma. Nerissa M. Nicolas",
                    "image"=>"resources/images/users/01.jpg",
                    "course"=>"Bachelor of Science in Computer Science",
                    "year"=>"2015",
                    "achievements"=>"Magna Cum Laude",
                    "quote"=>"''Don't tell me that the sky is the limit for there are footsteps on the moon.''"
                ),
            );
        */
                            /*
                die();
                    gumawa ako ng $this->data->fieldname tapos ipinasa ko sa view
                    ang mangyayari dyan, pag punta mo sa view, naka variable na agad yung 
                    field.
                    Example:
                    array(
                            'field' => 'companyname',
                            'label' => 'Company Name',
                            'rules' => 'required'
                    )

                    pag punta mo sa view, naka ganito na yan, $companyname
                    baka dyan ka nag unknown variable

                    */
                                    //check ng code mo yung nasunod yung rules (form validation)
     
                          /*echo $row['field']."<br>";*/


                        /*echo "<pre>";
                        print_r($fields);
                        die();
                        */
                        /*$companyname=$fields['companyname'];
                        $companytype=$fields['companytype'];
                        $companyaddress=$fields['companyaddress'];
                        $companycontact=$fields['companycontact'];
                        $companyemail=$fields['companyemail'];
                        $companyfounder=$fields['companyfounder'];
                        $companyyear=$fields['companyyear'];
                        $hrname=$fields['hrname'];
                        $hrcontact=$fields['hrcontact'];
                        $hremail=$fields['hremail'];
                        $positions=$fields['positions'];*/

/*                        $register=$this->Page_model->checkregistration($companyname,$companytype,$companyaddress,$companycontact,$companyemail,$companyfounder,$companyyear,$hrname,$hrcontact,$hremail,$positions);*/

                            //$this->templates->layout('home');
                            //$display="home";


                            //redirect kung san page mo gusto

                        //echo validation_errors()

                        /*echo validation_errors();*/


                    

                    /* 
                    dito na ngayon malalagay yung pagtawag mo sa model
                    example:
                    $this->load->model("Page_model");
                    $check=$this->Page_model->checklogin($username,$password);
                    
                    tapos maglalagay ka ng if() para icheck mo kung nagsave sa database

                    parang ganto, 
                    if($check) {
                        //redirect kung san page mo gusto
                    } else {
                        echo "registration failed";
                    }



                    */
                    

                    /*echo "<pre>";
                    print_r($fields);
                    echo "</pre>";
                    die();
                    */

                    //yung <pre> para lang maayos or magkaroon ng spacing yung pag print_r mo


                    
            /*print_r($this->data);*/
        
        //set layout as login
        //-location of layout for login: application/views/templates/layouts/site/login.php
        //$this->input->post('username') == $_POST['username']
        /*$username=$this->input->post('username');
        echo $username;
        die();
        */

                        //$this->load->view('myform');

                            //set session

                            //get session
                            /*echo $this->session->userdata('username');*/

                        //$this->load->view('formsuccess');

                

        //$this->templates->render([Page filename]) ---> use for show page, replace [Page filename]
        //with content you want to display located in modules/page/views

        //log here

        
        //use $this->data->[variable name/object name] to transfer value here (from controller) to view
        //you can also call model here @ controller
        //check the page/views/test_page.php to see how to display the values
        

        //the default layout for page: default -->location: application/views/templates/layouts/site
        //if you did not set the $this->templates->layout(['file name']), it will automatically set as default