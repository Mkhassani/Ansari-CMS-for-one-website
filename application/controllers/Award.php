<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class award extends CI_Controller {

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
        $this->session->set_userdata('cl_page_title',tran('Award'));
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
        $data['fu_page_title']=tran('Manage Awards');
        $this->load->admin_template('admin_side/award/index',$data);
    }

    function add(){

        $data['fu_page_title']=tran('Add new article');
        $this->load->admin_template('admin_side/award/add',$data);
    }

    function insert(){


      /*  $this->form_validation->set_rules('m_name' , null, 'alpha_numeric_spaces|required',
            array(
                'required'      => tran('Please type a title!'),
                'alpha_numeric_spaces'         =>tran('You can use just alphabet, numeric, and spaces!')
        )
            );*/
        $this->form_validation->set_rules('m_summery' , null, 'required',
            array(
                'required'      => tran('Please type a summery!')
        )
            );


        if($this->form_validation->run()==false){
        $data['fu_page_title']=tran('Add new article');

        $this->load->admin_template('admin_side/award/add',$data);
        }else{
            
        
        $basic_info=array(
            $this->lang_id=>$this->materail_model->last_lang_id(),
            $this->lang_type=>$this->session->userdata('lang'),
            $this->name=>$this->db->escape_str($this->input->post('m_name')),
            $this->summery=>$this->db->escape_str($this->input->post('m_summery')),
            $this->m_category=>"award"
            );

       echo  $id=$this->materail_model->insert($basic_info);
        $this->session->set_flashdata('id',$id);
        //here ti redirects to the form and manage part more images to article
           redirect('award/featured_image');  
         
        }
    
    }
//this form for featured image 
    function featured_image(){
        $data['fu_page_title']=tran('Please add an image!');
        $data['id']=$this->session->flashdata('id');
        $this->load->admin_template('admin_side/award/featured_image',$data);
    }

//function for uploading the featured image
    function add_featured_image(){

    $id=$this->input->post('id');
    $name=str_replace("%20","-",$this->input->post('name'));

    if($this->uri->segment(3)=="update"){
        delete_files('image/materail/'.$id.'/', TRUE);
        delete_files('image/materail/'.$id.'/thumb/', TRUE);
    }

    if (!is_dir("image/materail/".$id."")) {
    mkdir("image/materail/".$id."",0777, true);
    }
    if (!is_dir("image/materail/".$id."/thumb")) {
    mkdir("image/materail/".$id."/thumb",0777, true);
    }

    $config['upload_path'] = "image/materail/".$id."";
    $config['allowed_types'] = 'gif|jpg|png';

    $this->load->library('upload',$config);
        if($this->upload->do_upload('featured_image')){
           $files_uploaded = $this->upload->data();

        $config['image_library'] = 'gd2';
        $config['source_image'] = $files_uploaded['full_path'];
        $config['file_name'] = 'ansari-up.com-'.$files_uploaded['file_ext'];
        $config['remove_spaces']=true;
        $config['new_image'] = "image/materail/".$id."/thumb/" . $config['file_name'];
        $config['maintain_ratio'] = false;
        $config['width'] = 72;
        $config['height'] = 72;
        $this->image_lib->initialize($config);
        $this->image_lib->resize();


        $config['image_library'] = 'gd2';
        $config['source_image'] = $files_uploaded['full_path'];
        $config['file_name'] = 'ansari-up.com-'.$files_uploaded['file_ext'];
        $config['remove_spaces']=true;
        $config['new_image'] = "image/materail/".$id."/" . $config['file_name'];
        $config['maintain_ratio'] = false;
        $config['quality'] = "50%";
        $config['width'] = 743;
        $config['height'] = 356;
        $this->image_lib->initialize($config);
        $this->image_lib->resize();

        unlink('image/materail/'.$id.'/'.$files_uploaded['file_name']);  

       redirect('award/index');
    }else{
     echo    $this->upload->display_errors();
    }
}


//this is the update form of data and also it loads image manager

	function edit($id){

	    $data['fu_page_title']=tran('Edit article');
        $data['id']=$id;
        $this->load->admin_template('admin_side/award/edit',$data);	
	}
//this is the function of update form of data
    function update(){

        $this->form_validation->set_rules('m_id' , null, 'required',
            array(
                'required'      => tran('Please type a title!')
        )
            );
       /* $this->form_validation->set_rules('m_name' , null, 'alpha_numeric_spaces|required',
            array(
                'required'      => tran('Please type a title!'),
                'alpha_numeric_spaces'         =>tran('You can use just alphabet, numeric, and spaces!')
        )
            );*/
        $this->form_validation->set_rules('m_summery' , null, 'required',
            array(
                'required'      => tran('Please type a summery!')
        )
            );
        


        if($this->form_validation->run()==false){
        $data['fu_page_title']=tran('Edit article');
        $this->load->admin_template('admin_side/award/edit',$data);
        }else{
            
        
        $datas=array(
            $this->lang_id=>$this->materail_model->last_lang_id(),
            $this->lang_type=>$this->session->userdata('lang'),
            $this->name=>$this->db->escape_str($this->input->post('m_name')),
            $this->summery=>$this->db->escape_str($this->input->post('m_summery')),
            $this->m_category=>"award"
            );
        $wheres=array('m_id'=>$this->input->post('m_id'));

        $this->materail_model->update($datas,$wheres);

        redirect('award/index'); 
        }
    
    }
    function empty_image_folder($id){
         delete_files('image/materail/'.$id, TRUE);
         delete_files('image/materail/'.$id.'/thumb/', TRUE);
    }
//function for uploading the featured image
    function update_featured_image(){

     $id=$this->input->post('id');
     $this->empty_image_folder($id);

if (!is_dir("image/materail/".$id."")) {
    mkdir("image/materail/".$id."",0777, true);
}
if (!is_dir("image/materail/".$id."/thumb")) {
    mkdir("image/materail/".$id."/thumb",0777, true);
}

    $config['upload_path'] = "image/materail/".$id."";
    $config['allowed_types'] = 'gif|jpg|png';


    //...

    $this->load->library('upload',$config);


         
        if($this->upload->do_upload('featured_image')){
            
           $files_uploaded = $this->upload->data();

        $config['image_library'] = 'gd2';
        $config['source_image'] = $files_uploaded['full_path'];
        $config['file_name'] = 'ansari-up.com-'.$files_uploaded['file_name'];
        $config['new_image'] = "image/materail/".$id."/thumb/" . $config['file_name'];
        $config['maintain_ratio'] = false;
        $config['quality'] = "100%";
        $config['width'] = 72;
        $config['height'] = 72;
        $this->image_lib->initialize($config);
        $this->image_lib->resize();


        $config['image_library'] = 'gd2';
        $config['source_image'] = $files_uploaded['full_path'];
        $config['file_name'] = 'ansari-up.com-'.$files_uploaded['file_name'];
        $config['new_image'] = "image/materail/".$id."/" . $config['file_name'];
        $config['maintain_ratio'] = false;
        $config['quality'] = "100%";
        $config['width'] = 743;
        $config['height'] = 356;
        $this->image_lib->initialize($config);
        $this->image_lib->resize();

        unlink('image/materail/'.$id.'/'.$files_uploaded['file_name']);

        redirect('award/index');
    }
}

}
