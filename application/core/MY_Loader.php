<?php

class MY_Loader extends CI_Loader {
    
    public function front_template($content, $vars = array(), $return = FALSE)
    {
        $this->view("front_side/common/header",$vars,$return);
        if($this->uri->segment(2)=='index' or $this->uri->segment(1)==''){
            $this->view("front_side/common/slider",$vars,$return);
        }
        $contents = $this->view($content, $vars, $return);
        $this->view("front_side/common/footer",$vars,$return);
        
        
        if ($return)
        {
            return $contents;
        }
    } 

    public function admin_template($content, $vars = array(), $return = FALSE)
    {
        $this->view('admin_side/permanent_parts/admin_header', $vars, $return);
        $this->view('admin_side/permanent_parts/admin_sidebar', $vars, $return); 
        $this->view('admin_side/permanent_parts/admin_main_js', $vars, $return);
        $this->view('admin_side/permanent_parts/admin_content_header', $vars, $return);
        $contents = $this->view($content, $vars, $return);
        
        $this->view('admin_side/permanent_parts/admin_footer', $vars, $return);

        if ($return)
        {
            return $contents;
        }
    }

    public function single_page($content, $vars = array(), $return = FALSE){

        $this->view('admin_side/permanent_parts/admin_head', $vars, $return); 
        $contents = $this->view($content, $vars, $return);
        $this->view('admin_side/permanent_parts/admin_foot', $vars, $return); 
        
        if ($return)
        {
            return $contents;
        }
    }
       
}