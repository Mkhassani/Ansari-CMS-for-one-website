<?php 
class youtube_url_model extends CI_Model{

  public $table;
  public $url;
  public $id;
  public $state;
  public $foreign_id;
  public $lang_value;
  public function __construct()
    {
     parent::__construct();
     $this->table="youtube_url";
     $this->url="y_url";
     $this->id="y_id";
     $this->state="y_state";
     $this->foreign_id="y_m_id";

     $this->lang_value=$this->session->userdata('lang');
    }

    //get all rows of table
    function get(){
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
    }


    //updates data or array of data by condition or array of condition
    function update($data,$wheres){
      $str = $this->db->update($this->table, $data, $wheres);
    }
}
?>