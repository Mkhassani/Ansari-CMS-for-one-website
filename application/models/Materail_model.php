<?php 
class materail_model extends CI_Model{

  public $table;
  public $id;
  public $name;
  public $summery;
  public $desc;
  public $lang_id;
  public $lang;
  public $state;
  public function __construct()
    {
     parent::__construct();
     $this->table="materail";
     $this->id="m_id";
     $this->name="m_name";
     $this->summery="m_summery";
     $this->desc="m_desc";
     $this->lang_id="m_lang_id";
     $this->lang="m_lang";
     $this->state="m_state";

     $this->lang_value=$this->session->userdata('lang');
    }

    //get all rows of table
    function get(){
     // $this->db->order_by($this->id,'desc');
      $this->db->where($this->lang,$this->session->userdata('lang'));
      $query=$this->db->get($this->table);
      return $query->result();
    }

    //get data from table by condition or array of condition
    function get_where($wheres){
      //$query = $this->db->get_where('mytable', array('id' => $id), $limit, $offset);
     // $this->db->where($this->lang,$this->session->userdata('lang'));
      $query=$this->db->order_by($this->id,'desc')->get_where($this->table, $wheres);
      return $query->result();
    }
    function get_where_limit($wheres,$limit){
      //$query = $this->db->get_where('mytable', array('id' => $id), $limit, $offset);
     // $this->db->where($this->lang,$this->session->userdata('lang'));
      $query=$this->db->order_by($this->id,'desc')->get_where($this->table, $wheres,$limit);
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
      //return $str;
    }

    function check_blog_exist($wheres){
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
       return $value->{$this->id};
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


    }
?>