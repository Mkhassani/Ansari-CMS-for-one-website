<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class slideshow extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('auth')){
            redirect('user/logout');
        }
        $this->session->set_userdata('cl_page_title',tran('slideshow'));
    }

    function index(){
        $data['fu_page_title']=tran("Manage Slidshow");
        $this->load->admin_template('admin_side/slideshow/index',$data);
    }

    function delete_slideshow_image(){

        unlink('image/slideshow/'.$this->uri->segment(3));
        unlink('image/slideshow/thumb/'.$this->uri->segment(3));

        $data['fu_page_title']="Manage Slidshow";
        redirect('slideshow',$data); 
    }

    function add_slideshow_image(){

        $config['upload_path'] = "image/slideshow";
        $config['allowed_types'] = 'gif|jpg|png';


    //...

    $this->load->library('upload',$config);

    if ($_FILES['more_image']) {

        $images= $this->_upload_files('more_image');

        $data['fu_page_title']="Manage Slidshow";
        redirect('slideshow',$data);   
    }

}

private function _upload_files($field){

  $files = array();

    if ($handle = opendir("image/slideshow/thumb/")) {
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
        $config['file_name'] = 'ansari-up.com-'.$file_number.$files_uploaded['file_ext'];
        $config['remove_spaces']=true;
        $config['new_image'] = "image/slideshow/thumb/" . $config['file_name'];
        $config['maintain_ratio'] = false;
        $config['quality'] = "100%";
        $config['width'] = 250;
        $config['height'] = 90;
        $this->image_lib->initialize($config);
        $this->image_lib->resize();

        $config['image_library'] = 'gd2';
        $config['source_image'] = $files_uploaded['full_path'];
        $config['file_name'] = 'ansari-up.com-'.$file_number.$files_uploaded['file_ext'];
        $config['remove_spaces']=true;
        $config['new_image'] = "image/slideshow/" . $config['file_name'];
        $config['maintain_ratio'] = false;
        $config['quality'] = "50%";
        $config['width'] = 1024;
        $config['height'] = 360;
        $this->image_lib->initialize($config);
        $this->image_lib->resize();

        unlink('image/slideshow/'.$files_uploaded['file_name']);     
        }

        else{
           
            $files_uploaded[$i] = null;
        }
    }
    return  $files_uploaded;
}

}
