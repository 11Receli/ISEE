<div id="content">
          <h1>CodeIgniter Image Upload</h1><br>
          <h4 id="loading" style="display: none;">loading...</h4>
          
          <hr><hr id="line"> 
            <div id="selectImage">
              <label>Select Your Image or File</label><br>
              <?php echo form_open_multipart('upload_controller/do_upload');?>
              
              <?php echo "<input type='file' name='userfile' size='20' id='file'/>"; ?>

              <?php echo "<input type='submit' name='submit' value='Upload' class='submit'/> ";?>
            </div>
          <?php echo "</form>"?>

          $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $print_r($error);
                        die();
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        
                        $print_r($data);
                        die();
                }