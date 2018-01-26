<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class video_gallery extends CI_Controller {


    public $id;
    public $name;
    public $lang_id;
    public $lang_type;
    public $price_unit;
    public $price;
    public $desc;
    public $state;
    public $m_category;

    public $url;
    public $m_id;
    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('auth')){
            redirect('user/logout');
        }
        $this->session->set_userdata('cl_page_title',tran('Photo Gallery'));
        $this->lang->load('labels','en');
        $this->lang_type="m_lang";
        $this->id="m_id";
        $this->name="m_name";
        $this->lang_id="m_lang_id";
        $this->summery="m_summery";
        $this->desc="m_desc";
        $this->state="m_state";
        $this->m_category="m_category";

        $this->url="y_url";
        $this->m_id="y_m_id";

    }

    function index(){
        $data['fu_page_title']=tran("Manage Photo Gallery");
        $this->load->admin_template('admin_side/video_gallery/index',$data);
    }

    function update(){

/*        $this->form_validation->set_rules('m_name' , null, 'alpha_numeric_spaces|required',
            array(
                'required'      => 'You have not provided name in name field',
                'alpha_numeric_spaces'         =>tran('please insert just alghabatic charecters')
        )
            );*/
        $this->form_validation->set_rules('m_summery' , null, 'required',
            array(
                'required'      => 'You have not provided name in name field'
        )
            );

        if($this->form_validation->run()==false){
        $data['fu_page_title']="Add New Materail";

        $this->load->admin_template('admin_side/photo_gallery/edit',$data);
        }else{
            
        $datas=array(
            $this->name=>$this->db->escape_str($this->input->post('m_name')),
            $this->summery=>$this->db->escape_str($this->input->post('m_summery'))
            );
        $wheres=array('m_id'=>$this->input->post('m_id'));

        $this->materail_model->update($datas,$wheres);

        redirect('video_gallery/index'); 
        }
    
    }
    function insert(){
/*        $this->form_validation->set_rules('m_name' , null, 'alpha_numeric_spaces|required',
            array(
                'required'      => 'You have not provided name in name field',
                'alpha_numeric_spaces'         =>tran('please insert just alghabatic charecters')
        )
            );*/
        $this->form_validation->set_rules('m_summery' , null, 'required',
            array(
                'required'      => 'You have not provided name in name field'
        )
            );
        $this->form_validation->set_rules('y_url' , null, 'required',
            array(
                'required'      => 'You have not provided name in name field'
        )
            );
        
        if($this->form_validation->run()==false){
        $data['fu_page_title']="Add New Materail";
        $this->load->admin_template('admin_side/video_gallery/add',$data);
        }else{
            
        
        $basic_info=array(
            $this->lang_id=>$this->materail_model->last_lang_id(),
            $this->lang_type=>$this->session->userdata('lang'),
            $this->name=>$this->db->escape_str($this->input->post('m_name')),
            $this->summery=>$this->db->escape_str($this->input->post('m_summery')),
            $this->m_category=>"video_gallery"
            );

        $id=$this->materail_model->insert($basic_info);

        $url_info=array(
            $this->url=>$this->db->escape_str($this->input->post('y_url')),
            $this->m_id=>$id
            );
        $this->youtube_url_model->insert($url_info);

            redirect('video_gallery/gallery_video/'.$id); 
        }
    
    }
    function extra_url_insert($id){
        $this->form_validation->set_rules('y_url' , null, 'required',
            array(
                'required'      => 'You have not provided name in name field'
        )
            );
        
        if($this->form_validation->run()==false){
        $data['fu_page_title']="Add New Materail";
        $data['id']=$id;
        $this->load->admin_template('admin_side/video_gallery/gallery_video',$data);
        }else{
        $url_info=array(
            $this->url=>$this->db->escape_str($this->input->post('y_url')),
            $this->m_id=>$id
            );
        $this->youtube_url_model->insert($url_info);

            redirect('video_gallery/gallery_video/'.$id); 
        }   
    }
    function add(){
        $data['fu_page_title']=tran("Add New Photo Gallery");
    	$this->load->admin_template('admin_side/video_gallery/add',$data);
    }

    function gallery_video($id){
        $data['fu_page_title']=tran("add group of images");
        $data['id']=$id;
        $this->load->admin_template('admin_side/video_gallery/gallery_video',$data);    
    }

    function delete_video_url($y_id,$id){
        $wheres=array('y_id'=>$y_id);
        $this->youtube_url_model->delete($wheres);
        redirect('video_gallery/gallery_video/'.$id); 
    }

    function check_delete($id=10){
         delete_files('image/materail/'.$id, TRUE);
    }

    function update_state($id,$state){
        $wheres=array('m_id'=>$id);
        $data=array('m_state'=>$state);
        $check=$this->materail_model->update($data,$wheres);
        if ($check) {
            echo "your state updated seccussfully";
        }else{
            echo "some error happened ";
        }
    }
    
    function delete($id){
        $wheres=array('m_id'=>$id);
        $check=$this->materail_model->delete($wheres);
        if (!$check) {
            $youtube_wheres=array('y_m_id'=>$id);
            $this->youtube_url_model->delete($youtube_wheres);
            echo tran('Seccussfully Deleted');
        }else{
            echo "some error happened ";
        }
    }

    function edit($id){
        $data['fu_page_title']=tran("Edit Materail");
        $data['id']=$id;
        $this->load->admin_template('admin_side/video_gallery/edit',$data);
    }

}