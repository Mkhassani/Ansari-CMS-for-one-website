<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class user extends CI_Controller {

    public $table;
    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('auth')){
            redirect('admin/logout');
        }
        $this->table=tran("user");
        $this->session->set_userdata('cl_page_title',tran('User'));
        $this->session->set_userdata('site_title','BroozMarket');
        
    }

    function update_password(){
        $this->form_validation->set_rules('old_password' , null, 'required|callback_check_old_password',
            array(
                'required'      => 'You have not provided name in name field'
        )
            );
       $this->form_validation->set_rules('new_password' , null, 'alpha_dash|required',
            array(
                'required'      => 'You have not provided name in name field',
                'alpha_dash'         =>tran('Please Use alpha-numeric characters, underscores or dashes')
        )
            );
        $this->form_validation->set_rules('new_rpassword', null, 'required|matches[new_password]',
            array(
                'required'      => 'You have not provided name in name field',
                'matches'         =>tran('Passwords do not much')
        )
            );
        if($this->form_validation->run()==false){

        $data['fu_page_title']="User porfile";
        $data['acount_tab']="active";
        $data['acount_pass_tab']="active";
        $data['id']=$this->input->post('id');;
        $this->load->admin_template('admin_side/user/user_profile',$data);
        }else{

        $password_data=array(
             'u_password'=>md5($this->db->escape_str($this->input->post('new_password')))
            );

        $password_wheres=array(
            'u_id'=>$this->input->post('id')
            );

        $check=$this->user_model->update($password_data,$password_wheres);
        $id=$this->input->post('id');
        redirect('user/user_profile/20');
            }

    }

    public function check_old_password($password)
        {
            $pass_con=array(
                'u_password'=>md5($this->db->escape_str($password)),
                'u_id'=>$this->session->userdata('u_id')
                );

                $check=$this->user_model->check_email_exist($pass_con);

                if (!$check)
                {
                        $this->form_validation->set_message('check_old_password', tran('This email already used by another user'));
                        return true;
                }
                else
                {
                        return TRUE;
                }
        }
    function signup(){

        $this->form_validation->set_rules('u_name' , null, 'alpha_numeric_spaces|required',
            array(
                'required'      => 'You have not provided name in name field',
                'alpha_numeric_spaces'         =>tran('please insert just alghabatic charecters')
        )
            );
       $this->form_validation->set_rules('u_lastname' , null, 'alpha_numeric_spaces|required',
            array(
                'required'      => 'You have not provided name in name field',
                'alpha_numeric_spaces'         =>tran('please insert just alghabatic charecters')
        )
            );
       $this->form_validation->set_rules('u_email' , null, 'valid_email|required|callback_check_email_exist',
            array(
                'required'      => 'You have not provided name in name field',
                'valid_email'         =>tran('please use an email address')
        )
            );
       $this->form_validation->set_rules('u_password' , null, 'alpha_dash|required',
            array(
                'required'      => 'You have not provided name in name field',
                'alpha_dash'         =>tran('Please Use alpha-numeric characters, underscores or dashes')
        )
            );
        $this->form_validation->set_rules('u_rpassword', null, 'required|matches[u_password]',
            array(
                'required'      => 'You have not provided name in name field',
                'matches'         =>tran('Passwords do not much')
        )
            );

       $this->form_validation->set_rules('ci_mobile' , null, 'is_natural|required',
            array(
                'required'      => 'You have not provided name in name field',
                'is_natural'         =>tran('Please Use Just numberic charecters')
        )
            );
       $this->form_validation->set_rules('ci_address' , null, 'required',
            array(
                'required'      => 'You have not provided name in name field'
        )
            );
        $this->form_validation->set_rules('ci_city', 'last city field' ,'required');

        if($this->form_validation->run()==false && $this->input->post('tnc')=='on'){

        $data['fu_page_title']="Add New User";
        $data['signup_form']="active";
        $this->load->single_page('admin_side/user/login',$data);
        }else{
            
        
        
        $basic_info=array(
            'u_lang_id'=>$this->user_model->last_lang_id(),
            'u_lang'=>$this->session->userdata('lang'),
            'u_name'=>$this->db->escape_str($this->input->post('u_name')),
            'u_lastname'=>$this->db->escape_str($this->input->post('u_lastname')),
            'u_email'=>$this->db->escape_str($this->input->post('u_email'))
            );

       $this->session->set_flashdata($this->user_model->insert($basic_info));

        $cantact_info=array(
            'ci_mobile'=>$this->db->escape_str($this->input->post('ci_mobile')),
            'ci_city'=>$this->input->post('ci_city'),
            'ci_address'=>$this->input->post('ci_address'),
            'ci_bu_id'=>$this->session->userdata('u_id'),
            'ci_bu_table'=>$this->table
            );
        $this->contact_info_model->insert($cantact_info);

        $data['request_email']=$this->input->post('u_email');
        $data['fu_page_title']="Login Form";
        $this->load->single_page('admin_side/user/acount_request_wiat',$data);   
        }


    }

    function update_form(){
   
        $data['fu_page_title']="Add New User";
        $this->load->admin_template('admin_side/user/update_form',$data);
    }

    function update(){

        $this->form_validation->set_rules('u_name' , null, 'alpha_numeric_spaces|required',
            array(
                'required'      => 'You have not provided name in name field',
                'alpha_numeric_spaces'         =>tran('please insert just alghabatic charecters')
        )
            );
       $this->form_validation->set_rules('u_lastname' , null, 'alpha_numeric_spaces|required',
            array(
                'required'      => 'You have not provided name in name field',
                'alpha_numeric_spaces'         =>tran('please insert just alghabatic charecters')
        )
            );
       $this->form_validation->set_rules('u_email' , null, 'valid_email|required',
            array(
                'required'      => 'You have not provided name in name field',
                'valid_email'         =>tran('please use an email address')
        )
            );
        $this->form_validation->set_rules('u_birth_date', 'last birth date field' ,'required');


       $this->form_validation->set_rules('ci_email' , null, 'valid_email|required',
            array(
                'required'      => 'You have not provided name in name field',
                'valid_email'         =>tran('please use an email address')
        )
            );
        $this->form_validation->set_rules('ci_city', 'last city field' ,'required');

        if($this->form_validation->run()==false){

        
        $data['fu_page_title']="Add New User";
        $data['acount_tab']="active";
        $data['acount_profile_tab']="active";
        $data['id']=$this->input->post('u_id');
        $this->load->admin_template('admin_side/user/user_profile',$data);
        }else{
    
        $basic_info=array(
            'u_name'=>$this->db->escape_str($this->input->post('u_name')),
            'u_lastname'=>$this->db->escape_str($this->input->post('u_lastname')),
            'u_email'=>$this->db->escape_str($this->input->post('u_email')),
            'u_birth_date'=>$this->input->post('u_birth_date')
            );
        $basic_wheres=array(
            'u_id'=>$this->input->post('u_id'));

        $this->user_model->update($basic_info,$basic_wheres);

        $cantact_info=array(
            'ci_phone'=>$this->db->escape_str($this->input->post('ci_phone')),
            'ci_mobile'=>$this->db->escape_str($this->input->post('ci_mobile')),
            'ci_city'=>$this->input->post('ci_city'),
            'ci_email'=>$this->input->post('ci_email'),
            'ci_address'=>$this->input->post('ci_address')
            );
        $contact_wheres=array(
            'ci_bu_id'=>$this->input->post('u_id'));
        
        $this->contact_info_model->update($cantact_info,$contact_wheres);
        $data['fu_page_title']="User Profile";
        $data['overview_tab']="active";
        $data['id']=$this->input->post('u_id');
        $id=$this->input->post('u_id');
        redirect('user/user_profile/'.$id);
        }


    }

    function insert(){

        $this->form_validation->set_rules('u_name' , null, 'alpha_numeric_spaces|required',
            array(
                'required'      => 'You have not provided name in name field',
                'alpha_numeric_spaces'         =>tran('please insert just alghabatic charecters')
        )
            );
       $this->form_validation->set_rules('u_lastname' , null, 'alpha_numeric_spaces|required',
            array(
                'required'      => 'You have not provided name in name field',
                'alpha_numeric_spaces'         =>tran('please insert just alghabatic charecters')
        )
            );
       $this->form_validation->set_rules('u_email' , null, 'valid_email|required|callback_check_email_exist',
            array(
                'required'      => 'You have not provided name in name field',
                'valid_email'         =>tran('please use an email address')
        )
            );
       $this->form_validation->set_rules('u_password' , null, 'alpha_dash|required',
            array(
                'required'      => 'You have not provided name in name field',
                'alpha_dash'         =>tran('Please Use alpha-numeric characters, underscores or dashes')
        )
            );
        $this->form_validation->set_rules('u_birth_date', 'last birth date field' ,'required');

       $this->form_validation->set_rules('ci_mobile' , null, 'is_natural|required',
            array(
                'required'      => 'You have not provided name in name field',
                'is_natural'         =>tran('Please Use Just numberic charecters')
        )
            );

        $this->form_validation->set_rules('ci_city', 'last city field' ,'required');

        if($this->form_validation->run()==false){

        
        $data['fu_page_title']="Add New User";
        $this->load->admin_template('admin_side/user/add',$data);
        }else{
            
        
        
        $basic_info=array(
            'u_lang_id'=>$this->user_model->last_lang_id(),
            'u_lang'=>$this->session->userdata('lang'),
            'u_name'=>$this->db->escape_str($this->input->post('u_name')),
            'u_lastname'=>$this->db->escape_str($this->input->post('u_lastname')),
            'u_email'=>$this->db->escape_str($this->input->post('u_email')),
            'u_password'=>md5($this->db->escape_str($this->input->post('u_password'))),
            'u_birth_date'=>$this->input->post('u_birth_date')
            );

    echo    $id=$this->user_model->insert($basic_info);
        $cantact_info=array(
            'ci_phone'=>$this->db->escape_str($this->input->post('ci_phone')),
            'ci_mobile'=>$this->db->escape_str($this->input->post('ci_mobile')),
            'ci_city'=>$this->input->post('ci_city'),
            'ci_address'=>$this->db->escape_str($this->input->post('ci_address')),
            'ci_bu_id'=>$id,
            'ci_bu_table'=>$this->table
            );
        $this->contact_info_model->insert($cantact_info);
                redirect('user/add_profile_image/'.$id);
        }


    }

    public function check_email_exist($email)
        {
            $email_con=array(
                'u_email'=>$email
                );

            $check=$this->user_model->check_email_exist($email_con);

                if ($check)
                {
                        $this->form_validation->set_message('check_email_exist', tran('This email already used by another user'));
                        return FALSE;
                }
                else
                {
                        return TRUE;
                }
        }

    function crop_image($id){
        $valid_exts = array('jpeg', 'jpg', 'png', 'gif');
        $max_file_size = 1024 * 1024; #200kb
         # image with # height
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ( isset($_FILES['image']) ) {
                if (! $_FILES['image']['error'] && $_FILES['image']['size'] < $max_file_size) {
                    $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
                    if (in_array($ext, $valid_exts)) {
                            $path = 'image/user/' .$id.'_.' . $ext;
                            $image_name=$id.'_.' . $ext;
                            $size = getimagesize($_FILES['image']['tmp_name']);
        
                            $x = (int) $_POST['x'];
                            $y = (int) $_POST['y'];
                            $w = (int) $_POST['w'] ? $_POST['w'] : $size[0];
                            $h = (int) $_POST['h'] ? $_POST['h'] : $size[1];
                            
                            $nw = $_POST['w'];
                            $nh = $_POST['h'];
                            $data = file_get_contents($_FILES['image']['tmp_name']);
                            $vImg = imagecreatefromstring($data);
                            $dstImg = imagecreatetruecolor($nw, $nh);
                            imagecopyresampled($dstImg, $vImg, 0, 0, $x, $y, $nw, $nh, $w, $h);
                            imagejpeg($dstImg, $path);
                         //   echo "<img src='base_url().$path' />";
                          //  $this->user_profile();
                            $data['fu_page_title']="Manage Your Profile";
                            $data['u_id']=$id;
                            $data=array(
                                'fu_page_title'=>tran('Manage Your Profile'),
                                'u_id'=>$id
                                );
                            $this->session->set_flashdata($data);
                            redirect('user/user_profile/'.$id);
                            
                        } else {
                            echo 'unknown problem!';
                        } 
                } else {
                    echo 'file is too small or large';
                }
            } else {
                echo 'file not set';
            }
        } else {
            echo 'bad request!';
        }
    }

    function update_state($id,$state){
        $wheres=array('u_id'=>$id);
        $data=array('u_state'=>$state);
        $check=$this->user_model->update($data,$wheres);
        if ($check) {
            echo "your state updated seccussfully";
        }else{
            echo "some error happened ";
        }
    }
    
    function delete($id){
        $wheres=array('u_id'=>$id);
        $check=$this->user_model->delete($wheres);
        if ($check) {
            echo "seccussfully deleted the row";
        }else{
            echo "some error happened ";
        }
    }
    function user_profile($id){
        $data['fu_page_title']=tran('Manage Your Profile');
        $data['id']=$id;
        $data['overview_tab']="active";
        $data['acount_profile_tab']="active";
    	$this->load->admin_template('admin_side/user/user_profile',$data);
    }



    function add(){

        $data['fu_page_title']=tran("Add New User");
        if(isset($_POST['user_image'])){
            $this->do_upload();
        }
   
        $this->load->admin_template('admin_side/user/add',$data);
    }

    function add_profile_image($id){

        $data['fu_page_title']=tran('Add Your Image Profile');
        $data['id']=$id;
       $this->load->admin_template('admin_side/user/add_profile_image',$data);
    }
    function manage(){
        $data['fu_page_title']=tran("Manage Users");
        $data['rows']=$this->user_model->get();
       $this->load->admin_template('admin_side/user/manage',$data);
    }
        function upload(){


           //echo $image_path['uploaded_image']= 
           $this->do_upload();
    
      //  $this->load->admin_template('admin_side/user/add',$image_path);
    }

    function add_set_blog(){
         $this->load->view('admin_side/blog/add_blog');
    }





    function user_lock(){
        $this->session->set_userdata('auth',false);

        $data['fu_page_title']="Login Form";
        $this->load->single_page('admin_side/user/user_lock',$data);
    }


    function do_upload(){

        $config=array(
            'upload_path' =>realpath('image'),
            'allowed_types'=> 'gif|jpg|png'
                        );
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload())
            {
            echo  $this->upload->display_errors();
    }
    $upload_data=$this->upload->data();

    return base_url()."image/".$upload_data['file_name'];
      
      
    }
    }