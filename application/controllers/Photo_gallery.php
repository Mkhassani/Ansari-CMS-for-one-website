<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class photo_gallery extends CI_Controller {


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
        $this->session->set_userdata('cl_page_title',tran('Video Gallery'));
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
        $data['fu_page_title']=tran("Manage Photo Gallery");
        $this->load->admin_template('admin_side/photo_gallery/index',$data);
    }

private function _upload_files($field,$name){
    $id=$this->input->post('id');
    $name=str_replace("%20","-",$name);
    $files = array();

    if ($handle = opendir("image/materail/".$id."/thumb/")) {
        $file_number=0;
    /* This is the correct way to loop over the directory. */
    while (false !== ($file = readdir($handle))) {
         $file_number+=1;
    }
}
    foreach( $_FILES[$field] as $key => $all )
        foreach( $all as $i => $val )
            $files[$i][$key] = $val;

    $files_uploaded = array();
    for ($i=0; $i < count($files); $i++) {                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
        $_FILES[$field] = $files[$i];
        if ($this->upload->do_upload($field)){
           $files_uploaded = $this->upload->data();
           $file_number+=1;
        $config['image_library'] = 'gd2';
        $config['source_image'] = $files_uploaded['full_path'];
        $config['file_name'] = 'ansari-up.com-'.$name.'_'.$file_number.$files_uploaded['file_ext'];
        $config['remove_spaces']=true;
        $config['new_image'] = "image/materail/".$id."/thumb/" . $config['file_name'];
        $config['maintain_ratio'] = false;
        $config['quality'] = "100%";
        $config['width'] = 72;
        $config['height'] = 72;
        $this->image_lib->initialize($config);
        $this->image_lib->resize();

        $config['image_library'] = 'gd2';
        $config['source_image'] = $files_uploaded['full_path'];
        $config['file_name'] = 'ansari-up.com-'.$name.'_'.$file_number.$files_uploaded['file_ext'];
        $config['remove_spaces']=true;
        $config['new_image'] = "image/materail/".$id."/" . $config['file_name'];
        $config['maintain_ratio'] = false;
        $config['quality'] = "50%";
        $config['width'] = 743;
        $config['height'] = 356;
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
        $name=$this->input->post('name');
if (!is_dir("image/materail/".$id."")) {
    mkdir("image/materail/".$id."",0777, true);
    mkdir("image/materail/".$id."/thumb",0777, true);
}
    $config['upload_path'] = "image/materail/".$id."";
    $config['allowed_types'] = 'gif|jpg|png';

    $this->load->library('upload',$config);

    if ($_FILES['more_image']) {

        $images= $this->_upload_files('more_image',$name);

        redirect('photo_gallery/index');
    } 
    }
    function update(){


/*        $this->form_validation->set_rules('m_name' , null, 'alpha_numeric_spaces|required',
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
        $data['fu_page_title']="Add New Materail";

        $this->load->admin_template('admin_side/photo_gallery/edit',$data);
        }else{
            
        
        $datas=array(
            $this->lang_id=>$this->materail_model->last_lang_id(),
            $this->lang_type=>$this->session->userdata('lang'),
            $this->name=>$this->db->escape_str($this->input->post('m_name')),
            $this->summery=>$this->db->escape_str($this->input->post('m_summery'))
            );
        $wheres=array('m_id'=>$this->input->post('m_id'));

        $this->materail_model->update($datas,$wheres);

        redirect('photo_gallery/index'); 
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
        $data['fu_page_title']="Add new article";

        $this->load->admin_template('admin_side/photo_gallery/add',$data);
        }else{
            
        
        $basic_info=array(
            $this->lang_id=>$this->materail_model->last_lang_id(),
            $this->lang_type=>$this->session->userdata('lang'),
            $this->name=>$this->db->escape_str($this->input->post('m_name')),
            $this->summery=>$this->db->escape_str($this->input->post('m_summery')),
            $this->m_category=>"photo_gallery"
            );

        $id=$this->materail_model->insert($basic_info);
            $name=$this->input->post('m_name');

            redirect('photo_gallery/gallery_image/'.$id.'/'.$name); 
         
        }
    
    }
    function add(){
        $data['fu_page_title']=tran('Add new photo gallery');
    	$this->load->admin_template('admin_side/photo_gallery/add',$data);
    }

    function featured_image($id,$directory){
        $data['fu_page_title']="Add featured image";
        $data['id']=$id;
        $this->load->admin_template('admin_side/materail/featured_image',$data);    
    }

    function gallery_image($id){
        $data['fu_page_title']=tran('Add image');
        $data['id']=$id;
        $this->load->admin_template('admin_side/photo_gallery/gallery_image',$data);    
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
    
    function delete_image($id,$name){

           if(is_dir('image/materail/'.$id)){
            unlink('image/materail/'.$id.'/'.$name);
            unlink('image/materail/'.$id.'/thumb/'.$name);
            }else{
                echo tran('Directory Not Exist');
            }
            redirect('photo_gallery/edit/'.$id);
    }

    function edit($id){
        $data['fu_page_title']=tran("Edit Photo Gallery");
        $data['id']=$id;
        $this->load->admin_template('admin_side/photo_gallery/edit',$data);
    }

}