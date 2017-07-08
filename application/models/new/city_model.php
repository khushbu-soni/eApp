<?php
class city_model extends CI_Model{
    //__construct
    public $data;
    //Constructor of abstract_userlogin_model
    public function __construct() {
       // $this->load->database();
    }

    function get(){
         $currency = $this->db->query("select city.*,country.name as country_name, state.name as state_name from city join country on country.id=city.country_id join state on state.id=city.state_id where city.is_deleted=0")->result();

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
    function get_by_id($id){
        // $data=array('id'=>$id);

         $currency = $this->db->query("select city.*,country.name as country_name,state.name as state_name from city join country on country.id=city.country_id join state on state.id=city.state_id where city.id=$id and city.is_deleted=0")->row_array();
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
        //  $this->db->delete('city', array('id' => $id));
        // if ($this->db->affected_rows() > 0)
        //     return TRUE;
        // return FALSE; 
         $condition = array(
        'is_deleted' => 1

        );

         $query = $this->db->update('city',$condition,array('id' => $id));
         //   print_r($query);
         // exit();
         if ($this->db->affected_rows() > 0)
            return 1;
        return 0;  
    }

    
    
    }


