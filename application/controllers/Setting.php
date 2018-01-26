<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class setting extends CI_Controller {

    public $id;
    public $name;
    public $lang_id;
    public $lang_type;
    public $price_unit;
    public $price;
    public $desc;
    public $state;
    public $m_category;
    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('auth')){
            redirect('user/logout');
        }
        $this->session->set_userdata('cl_page_title',tran('Setting'));
        $this->lang->load('labels','en');
        $this->lang_type="m_lang";
        $this->id="m_id";
        $this->name="m_name";
        $this->lang_id="m_lang_id";
        $this->summery="m_summery";
        $this->desc="m_desc";
        $this->state="m_state";
        $this->m_category="m_category";
    }

    function index(){
        $data['fu_page_title']=tran("Manage Setting Of Your Website");
        $this->load->admin_template('admin_side/setting/index',$data);
    }

    function new_update_address(){

        $this->form_validation->set_rules('ci_email' , null, 'valid_email|required',
            array(
                'required'      => 'You have not provided name in name field',
                'valid_email'         =>tran('please use an email address')
        )
            );

        if($this->form_validation->run()==false){
        $data['fu_page_title']="Add New Materail";

        $this->load->admin_template('admin_side/setting/index',$data);
        }else{  
    if($this->input->post('ci_id')!=""){
        echo $this->input->post('ci_id');
        $update_info=array(
            'ci_phone'=>$this->db->escape_str($this->input->post('ci_phone')),
            'ci_mobile'=>$this->db->escape_str($this->input->post('ci_mobile')),
            'ci_email'=>$this->db->escape_str($this->input->post('ci_email')),
            'ci_city'=>$this->input->post('ci_city'),
            'ci_address'=>$this->db->escape_str($this->input->post('ci_address'))
            );

        $update_wheres=array('ci_id'=>$this->input->post('ci_id'));

        $this->contact_info_model->update($update_info,$update_wheres);
    }else{
        $insert_info=array(
            'ci_lang_id'=>$this->contact_info_model->last_lang_id(),
            'ci_lang'=>$this->session->userdata('lang'),
            'ci_phone'=>$this->db->escape_str($this->input->post('ci_phone')),
            'ci_mobile'=>$this->db->escape_str($this->input->post('ci_mobile')),
            'ci_email'=>$this->db->escape_str($this->input->post('ci_email')),
            'ci_city'=>$this->input->post('ci_city'),
            'ci_address'=>$this->db->escape_str($this->input->post('ci_address')),
            'ci_bu_table'=>'website'
            );
        $this->contact_info_model->insert($insert_info);
        }
               redirect('setting');
        }
    }
//function for uploading the featured image
    function add_logo(){

if (!is_dir("image/logo/")) {
    mkdir("image/logo/",0777, true);
}

    if(is_dir("image/logo/")){
      if ($handle = opendir("image/logo/")) {
          /* This is the correct way to loop over the directory. */
              while ($file = readdir($handle)) {
                if($file != "." && $file != ".."){
                $image_name=substr($file, 2);
                unlink('image/logo/'.$this->session->userdata('lang').$image_name);
               }
            }
        }
    }

    $config['upload_path'] = "image/logo/";
    $config['allowed_types'] = 'gif|jpg|png';

    $this->load->library('upload',$config);
         
        if($this->upload->do_upload('featured_image')){  
        $files_uploaded = $this->upload->data();

        $config['image_library'] = 'gd2';
        $config['source_image'] = $files_uploaded['full_path'];
        $config['file_name'] = $this->session->userdata('lang').$files_uploaded['file_name'];
        $config['new_image'] = "image/logo/" . $config['file_name'];
        $config['maintain_ratio'] = false;
        $config['quality'] = "60%";
        $config['width'] = 120;
        $config['height'] = 72;
        $this->image_lib->initialize($config);
        $this->image_lib->resize();

        unlink('image/logo/'.$files_uploaded['file_name']);

        redirect('setting');
    }
}
    function socail_acount_insert(){

        $data['fu_page_title']="Add New Materail";

        if($this->input->post('ca_id')!=""){
        $update_info=array(
            'ca_fb'=>$this->db->escape_str($this->input->post('fb')),
            'ca_tw'=>$this->db->escape_str($this->input->post('tw')),
            'ca_gp'=>$this->db->escape_str($this->input->post('gp')),
            );
        $update_wheres=array('ca_id'=>$this->input->post('ca_id'));
        $this->socail_acount_model->update($update_info,$update_wheres);
    }else{
        $insert_info=array(
            'ca_fb'=>$this->db->escape_str($this->input->post('fb')),
            'ca_tw'=>$this->db->escape_str($this->input->post('tw')),
            'ca_gp'=>$this->db->escape_str($this->input->post('gp')),
            );
        print_r($insert_info);
        $this->socail_acount_model->insert($insert_info);
    }
        
               redirect('setting');
    }
    

}
