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

    //get all rows of table
    function get(){
      $this->db->order_by($this->id,'desc');
      $query=$this->db->get($this->table);
      return $query->result();
    }



    //get data from table by condition or array of condition
    function get_where($wheres){
      //$query = $this->db->get_where('mytable', array('id' => $id), $limit, $offset);
      $query=$this->db->get_where($this->table, $wheres);
      return $query->result();
    }

    //deletes data from table by condtion or array of condition
    function delete($wheres){
      $this->db->delete($this->table,$wheres);
    }

    //inset array of data to table
    function insert($data){
          $this->db->insert($this->table,$data);
          return $this->last_id();
    }


    //updates data or array of data by condition or array of condition
    function update($data,$wheres){
      $str = $this->db->update($this->table, $data, $wheres);
      return $str;
    }

    function check_email_exist($wheres){
      //$query = $this->db->get_where('mytable', array('id' => $id), $limit, $offset);
      $query=$this->db->get_where($this->table, $wheres);
      $result=$query->num_rows();
      if($result==0){
        return false;
      }else{
        return true;
      }
    }

    // get the lang_id for inserting new row or translation to exist row 
    function get_lang_id($id=2){
    	$this->db->select($this->lang_id);
    	$this->db->from($this->table);
    	$this->db->where($this->id, $id);
    	$query=$this->db->get();
    	
    	$result=$query->result();
    	$errors=array_filter($result);
    	if(empty($errors)){
    		if($this->check_empty()==0){
          return 1;
        }else{
          return $this->last_lang_id();
        }
    	}else{
      foreach ($result as $key => $value) {
       return ++$value->{$this->lang_id};
      }
    	}
    }

    //check tha table if is empty or not
    function check_empty(){
      return $this->db->count_all($this->table);
    }

    //get the last lang_id of table to be increased and insert new row
    function last_lang_id(){

      $this->db->select($this->lang_id);
      $this->db->from($this->table);
      $this->db->limit(1);
      $this->db->order_by($this->id, "desc");
      $query=$this->db->get();
      $result=$query->result();
      if(empty($result)){
          return 1;
        }else{
      foreach ($result as $key => $value) {
       return ++$value->{$this->lang_id};
      }

    }
  }

    function last_id(){

      $this->db->select($this->id);
      $this->db->from($this->table);
      $this->db->limit(1);
      $this->db->order_by($this->id, "desc");
      $query=$this->db->get();
      $result=$query->result();
      if(empty($result)){
          return 1;
        }else{
      foreach ($result as $key => $value) {
       return $value->{$this->id}++;
      }
    }
}

    function last_row(){

      $this->db->select('*');
      $this->db->from($this->table);
      $this->db->limit(1);
      $this->db->order_by($this->id, "desc");
      $query=$this->db->get();
      $result=$query->row_array();
      return $result;
    }

    function check_login($email,$password){
/*echo $email."<br>";
echo $password."<br>";*/

     $sql = "SELECT * FROM $this->table WHERE u_email= ? AND u_password = ?";
        $query=$this->db->query($sql, array( $email, $password));

        $row=$query->num_rows();
        $result=$query->result();

        if($row!=0){
          $this->session->set_userdata($query->row_array());
          $this->session->set_userdata('auth',true);
          return true;
        }elseif($row==0){

            $array=array(
                'u_id'=>0
            );
          $this->session->set_userdata($array);
          $this->session->set_userdata('auth',false);
          return false;
        }
      }
    }
?>