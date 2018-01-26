<?php 
class user_model extends CI_Model{

  public $table;
  public $id;
  public $name;
  public $lastname;
  public $password;
  public $email;
  public $lang_id;
  public $lang;
  public $state;
  public $lang_value;
  public function __construct()
    {
     parent::__construct();
     $this->table="user";
     $this->id="u_id";
     $this->name="u_name";
     $this->lastname="u_lastname";
     $this->password="u_password";
     $this->email="u_email";
     $this->lang_id="u_lang_id";
     $this->lang="u_lang";
     $this->state="u_state";

     $this->lang_value=$this->session->userdata('lang');
    }


}