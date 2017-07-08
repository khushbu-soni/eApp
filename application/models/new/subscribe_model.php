<?php
class subscribe_model extends CI_Model{
    //__construct
    public $data;
    //Constructor of abstract_userlogin_model
    public function __construct() {
       // $this->load->database();
    }

    function get(){
         $currency = $this->db->query("select * from subscribe")->result();

        return $currency;
    }


    

    function add($data){
        // $data=array('name'=>$name);
// print_r($data);
// // exit();
        $this->db->insert('city', $data); 
         // $currency = $this->db->query("select * from category")->result_array();
        // return $currency;
    }

    function get_name($id){
        // $data=array('id'=>$id);

         $currency = $this->db->query("select name from city where id=$id")->row_array();
         // $currency = $this->db->query("select * from category")->result_array();
        return $currency;
    }

    function get_by_id($id){
        // $data=array('id'=>$id);

         $currency = $this->db->query("select city.*,country.name as country_name,state.name as state_name from city join country on country.id=city.country_id join state on state.id=city.state_id where city.id=$id")->row_array();
         // $currency = $this->db->query("select * from category")->result_array();
        return $currency;
    }

  
     function edit($data,$id){
       // $data = array('id'=>$id);
       // $data = array('name'=>$name,'parent_id'=>$parent_id);
        $this->db->where('id',$id);
        return $this->db->update('city', $data);
    }

     function delete($id){
       // $data = array('id'=>$id);
         $this->db->delete('city', array('id' => $id));
        if ($this->db->affected_rows() > 0)
            return TRUE;
        return FALSE;   
    }

    
    
    }


