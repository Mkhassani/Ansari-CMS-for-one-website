<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class admin extends CI_Controller {

   
    function __construct()
    {

        parent::__construct();
        $this->switch_lang();
        $this->session->set_userdata('site_title',tran('BroozMarket'));
        $this->session->set_userdata('cl_page_title',tran('Admin'));
        
    }
     public function switch_lang(){

        if ($this->uri->segment(3)=="") {
          $lang="fa";
        }else{
          $lang=$this->uri->segment(3);
        }
        if(! $this->session->userdata('lang')){
            $this->session->set_userdata(array('lang' => $lang ,'admin_lang'=> '-rtl','country_name'=>'AF','_admin_lang'=> '_rtl', 'switch_lang'=>"English", 'second_lang'=>"en"));
          //  redirect('');
        }
    if($lang=='en' || $lang=='fa'){
        if(@ $lang=='en'){
     
            $this->session->set_userdata(array('lang' => $lang ,'admin_lang'=> '','country_name'=>'US','_admin_lang'=> '', 'switch_lang'=>"دری", 'second_lang'=>"fa"));
            
          //  redirect('');
        }
        if(@ $lang=='fa'){
            $this->session->set_userdata(array('lang' => $lang ,'admin_lang'=> '-rtl','country_name'=>'AF','_admin_lang'=> '_rtl', 'switch_lang'=>"English", 'second_lang'=>"en"));
          //  redirect('');
        }
    }
        

    
    }
    function index(){
        if(!$this->session->userdata('auth')){
            redirect('admin/logout');
        }
        $data['fu_page_title']=tran("Home");

    	//$this->load->admin_template('admin_side/index',$data);
         $data['fu_page_title']=tran("Manage Product");
        $this->load->admin_template('admin_side/materail/manage',$data);
    }
    function single_materail(){
       
    	$this->load->front_template('front_side/single_materail');
    }
    function logout(){
        session_destroy();
        $this->session->set_userdata('site_title','BroozMarket');
        $data['fu_page_title']="Login Form";
        $this->load->single_page('admin_side/user/login',$data);
    }
    function check_login(){

       echo  $check=$this->user_model->check_login($this->db->escape_str($this->input->post('u_email')),
            $this->db->escape_str(md5($this->input->post('u_password'))));
        if($check){
           redirect('admin/index');
        }else{
           redirect('admin/logout');
        }
    }
    function reset_request(){
        $data['request_email']=$this->input->post('request_email');
        $data['fu_page_title']="Login Form";
        $this->load->single_page('admin_side/user/reset_request',$data);   
    }
    }