<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class advertisement extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->lang->load('labels','en');
        $this->session->set_userdata('cl_page_title',tran("Advertisement"));
    }

    function add(){

    	$data['fu_page_title']="Add & Set & Manage";
    	$this->load->admin_template('admin_side/advertisement/add',$data);
    }

    function manage(){
    	
    	$data['fu_page_title']="Add & Set & Manage";
    	$this->load->admin_template('admin_side/advertisement/manage',$data);
    }
}