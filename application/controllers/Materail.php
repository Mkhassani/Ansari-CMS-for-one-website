<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class materail extends CI_Controller {


    public $id;
    public $name;
    public $lang_id;
    public $lang_type;
    public $price_unit;
    public $price;
    public $desc;
    public $state;
    public $m_category;
    public $type;
    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('auth')){
            redirect('user/logout');
        }
        $this->session->set_userdata('cl_page_title',tran('Products'));
        $this->lang->load('labels','en');
        $this->lang_type="m_lang";
        $this->id="m_id";
        $this->name="m_name";
        $this->lang_id="m_lang_id";
        $this->summery="m_summery";
        $this->desc="m_desc";
        $this->state="m_state";
        $this->m_category="m_category";
        $this->type="m_type";

    }



private function _upload_files($field){
    $id=$this->input->post('id');
    $files = array();
    foreach( $_FILES[$field] as $key => $all )
        foreach( $all as $i => $val )
            $files[$i][$key] = $val;

    $files_uploaded = array();
    for ($i=0; $i < count($files); $i++) { 
        $_FILES[$field] = $files[$i];
        if ($this->upload->do_upload($field)){
           $files_uploaded = $this->upload->data();
        $config['image_library'] = 'gd2';
        $config['source_image'] = $files_uploaded['full_path'];
        $config['file_name'] = 'ansari-up.com-'.$files_uploaded['file_name'];
        $config['new_image'] = "image/materail/".$id."/thumb/" . $config['file_name'];
        $config['maintain_ratio'] = false;
        $config['quality'] = "100%";
        $config['width'] = 260;
        $config['height'] = 195;
        $this->image_lib->initialize($config);
        $this->image_lib->resize();


        $config['image_library'] = 'gd2';
        $config['source_image'] = $files_uploaded['full_path'];
        $config['file_name'] = 'ansari-up.com-'.$files_uploaded['file_name'];
        $config['new_image'] = "image/materail/".$id."/" . $config['file_name'];
        $config['maintain_ratio'] = false;
        $config['quality'] = "100%";
        $config['width'] = 800;
        $config['height'] = 600;
        $this->image_lib->initialize($config);
        $this->image_lib->resize();



        unlink('image/materail/'.$id.'/'.$files_uploaded['file_name']);
           
        }

        else{
           
            $files_uploaded[$i] = null;
        }
    }
    return  $files_uploaded;
}

    public function add_more_image(){

    $id=$this->input->post('id');
if (!is_dir("image/materail/".$id."")) {
    mkdir("image/materail/".$id."",0777, true);
    mkdir("image/materail/".$id."/thumb",0777, true);
}
    $config['upload_path'] = "image/materail/".$id."";
    $config['allowed_types'] = 'gif|jpg|png';


    //...

    $this->load->library('upload',$config);

    if ($_FILES['more_image']) {

        $images= $this->_upload_files('more_image');

        redirect('materail/manage');
    } 
    }


    function update(){

/*
        $this->form_validation->set_rules('m_name' , null, 'alpha_numeric_spaces|required',
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

        $this->load->admin_template('admin_side/materail/materail_edit',$data);
        }else{
            
        
        $datas=array(
            $this->lang_id=>$this->materail_model->last_lang_id(),
            $this->lang_type=>$this->session->userdata('lang'),
            $this->name=>$this->db->escape_str($this->input->post('m_name')),
            $this->summery=>$this->db->escape_str($this->input->post('m_summery')),
            $this->type=>$this->db->escape_str($this->input->post('m_type'))
            );
        $wheres=array('m_id'=>$this->input->post('m_id'));

        $this->materail_model->update($datas,$wheres);

        redirect('materail/manage'); 
        }
    
    }
    function insert(){

/*
        $this->form_validation->set_rules('m_name' , null, 'alpha_numeric_spaces|required',
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

        $this->load->admin_template('admin_side/materail/add',$data);
        }else{
            
        
        $basic_info=array(
            $this->lang_id=>$this->materail_model->last_lang_id(),
            $this->lang_type=>$this->session->userdata('lang'),
            $this->name=>$this->db->escape_str($this->input->post('m_name')),
            $this->summery=>$this->db->escape_str($this->input->post('m_summery')),
            $this->m_category=>"product",
            $this->type=>$this->db->escape_str($this->input->post('m_type'))
            );

        $id=$this->materail_model->insert($basic_info);


            redirect('materail/featured_image/'.$id.'/'.$this->input->post('m_name')); 
         
        }
    
    }
    function add(){
        $data['fu_page_title']=tran('Add new article');
    	$this->load->admin_template('admin_side/materail/add',$data);
    }

    function featured_image($id){
        $data['fu_page_title']=tran('Please add an image!');
        $data['id']=$id;
        $this->load->admin_template('admin_side/materail/featured_image',$data);    
    }

//function for uploading the featured image
    function add_featured_image(){

    $id=$this->input->post('id');
    //$name=str_replace("%20","-",$this->input->post('name'));

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
        $config['width'] = 260;
        $config['height'] = 195;
        $this->image_lib->initialize($config);
        $this->image_lib->resize();


        $config['image_library'] = 'gd2';
        $config['source_image'] = $files_uploaded['full_path'];
        $config['file_name'] = 'ansari-up.com-'.$files_uploaded['file_ext'];
        $config['remove_spaces']=true;
        $config['new_image'] = "image/materail/".$id."/" . $config['file_name'];
        $config['maintain_ratio'] = false;
        $config['quality'] = "50%";
        $config['width'] = 800;
        $config['height'] = 600;
        $this->image_lib->initialize($config);
        $this->image_lib->resize();

        unlink('image/materail/'.$id.'/'.$files_uploaded['file_name']);  

       redirect('materail/manage');
    }else{
     echo    $this->upload->display_errors();
    }
}


    function gallery_image($id){
        $data['fu_page_title']=tran('Please add multiple image');
        $data['id']=$id;
        $this->load->admin_template('admin_side/materail/gallery_image',$data);    
    }

    function check_delete($id=10){
         delete_files('image/materail/'.$id, TRUE);
    }
    function crop_image(){


        $id=$this->input->post('id');
        $lang_id=$this->input->post('art_lang_id');
        if (!is_dir("image/materail/".$id."")) {
            mkdir("image/materail/".$id."",0777, true);
        }
        //wheb uploadin clear the folder
        if($this->input->post('edit_image')){
        delete_files('image/materail/'.$id, TRUE);
        }
          
        $config = array(
                'upload_path' => "image/materail/".$id."",
                'upload_url' => base_url() . "image/materail/".$id."",
                'allowed_types' => "gif|jpg|png|jpeg"
            );
            $this->load->library('upload', $config);

        if($this->upload->do_upload('featured_image')){
            
            $image_data = $this->upload->data();

            //   $image_data = $this->upload->data();
        $config['image_library'] = 'gd2';
        $config['source_image'] = $image_data['full_path'];
        $config['file_name'] = 'slideshow.jpg';
        $config['new_image'] = "image/materail/".$id."/" . $config['file_name'];
        $config['maintain_ratio'] = false;
        $config['quality'] = "100%";
        $config['width'] = 1500;
        $config['height'] = 600;
            
        
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
       
        $config['image_library'] = 'gd2';
        $config['source_image'] = $image_data['full_path'];
        $config['file_name'] = 'portfolio.jpg';
        $config['new_image'] = "image/materail/".$id."/" . $config['file_name'];
        $config['maintain_ratio'] = false;
        $config['quality'] = "100%";
        $config['width'] = 360;
        $config['height'] = 257;
            
        
        $this->image_lib->initialize($config);
        $this->image_lib->resize();



        $config["image_library"] = "gd2";
        $config["source_image"] = $image_data["full_path"];
        $config['file_name'] = 'newest.jpg';
        $config['new_image'] = "image/materail/".$id."/" . $config['file_name'];
        $config['maintain_ratio'] = false;
        $config['quality'] = "100%";
        $config['width'] = 300;
        $config['height'] = 300;
        /*$dim = (intval($upload_data["image_width"]) / intval($upload_data["image_height"])) - ($image_config['width'] / $image_config['height']);
        $image_config['master_dim'] = ($dim > 0)? "height" : "width";*/
         
        $this->load->library('image_lib');
        $this->image_lib->initialize($config);
 
if(!$this->image_lib->resize()){ //Resize image
    redirect("errorhandler"); //If error, redirect to an error page
}
        
            $img_data=$this->upload->data();
        redirect('materail/manage');
        }else{
            redirect('materail/featured_image/'.$id);
        }
    }

    function empty_image_folder($id){
         delete_files('image/materail/'.$id, TRUE);
         delete_files('image/materail/'.$id.'/thumb/', TRUE);
         return true;
    }

    function update_state($id,$state){
        $wheres=array('m_id'=>$id);
        $data=array('m_state'=>$state);
        $check=$this->materail_model->update($data,$wheres);
        if (!$check) {
            echo "Your state updated successfully";
        }else{
            echo "Some error happened ";
        }
    }
    
    function delete($id){
        $wheres=array('m_id'=>$id);
        $check=$this->materail_model->delete($wheres);
        if (!$check) {
           if(is_dir('image/materail/'.$id)){
            delete_files('image/materail/'.$id, TRUE);
            rmdir('image/materail/'.$id);
            }else{
                echo "Not exist";
            }
            echo "Successfully deleted the row";
        }else{
            echo "Some error happened ";
        }
    }

    function manage(){
        $data['fu_page_title']=tran("Manage Product");
    	$this->load->admin_template('admin_side/materail/manage',$data);
    }

    function materail_edit($id){
        $data['fu_page_title']=tran("Edit Product");
        $data['id']=$id;
        $this->load->admin_template('admin_side/materail/materail_edit',$data);
    }

}