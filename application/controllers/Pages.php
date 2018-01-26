<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class pages extends CI_Controller {
    function __construct() {
        parent::__construct();
            $this->switch_lang();
    }
     public function switch_lang(){


        
        
        if(! $this->session->userdata('lang')){
            $lang="fa";
           $this->session->set_userdata(array('lang' => $lang ,'admin_lang'=> '-rtl','country_name'=>'AF','_admin_lang'=> '_rtl', 'switch_lang'=>"English", 'second_lang'=>"en"));
          //  redirect('');
        }else{
            $lang=$this->uri->segment(3);
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
    public function index() {
        
            $this->load->front_template("front_side/pages/home");
    }

    public function products(){
    	$this->load->front_template("front_side/pages/products");
    }

    public function about(){
    	$this->load->front_template("front_side/pages/about");
    }

    public function contact(){
    	$this->load->front_template("front_side/pages/contact");
    }

    public function photo_gallery(){
    	$this->load->front_template("front_side/pages/photo_gallery");
    }

    public function video_gallery(){
    	$this->load->front_template("front_side/pages/video_gallery");
    }

    public function get_photos($id){
        $data['id'] = $id;
        $this->load->view('front_side/pages/get_photos', $data);
    }

    public function get_videos($id){
        $data['id'] = $id;
        $this->load->view('front_side/pages/get_videos', $data);
    }

    public function get_abouts($id){
        $data['id'] = $id;
        $this->load->view('front_side/pages/get_abouts', $data);
    }

    public function read_more($id){
        $rows = $this->materail_model->get_where(array('m_id'=>$id));
        $data['rows'] = $rows;
        $this->load->front_template('front_side/pages/about', $data);
    }
}

?>