<?php
class location_model extends CI_Model{
    //__construct
    public $data;
    //Constructor of abstract_userlogin_model
    public function __construct() {
       // $this->load->database();
    }

    function get(){
         $currency = $this->db->query("select * from location")->result();

        return $currency;
    }


    // function getActive(){
    //      $currency = $this->db->query("select * from location where status=1")->result();

    //     return $currency;
    // }

    function get_sub(){
         $currency = $this->db->query("select c.id,c.name as sub_category,sub_c.name as parent_category from category c  join category sub_c on c.parent_id=sub_c.id")->result();

        return $currency;
    }

    function add($name){
        $data=array('name'=>$name);

        $this->db->insert('location', $data); 
         // $currency = $this->db->query("select * from category")->result_array();
        // return $currency;
    }
    function get_by_id($id){
        // $data=array('id'=>$id);

         $currency = $this->db->query("select * from location where id=$id")->row_array();
         // $currency = $this->db->query("select * from category")->result_array();
        return $currency;
    }

    function get_by_name($name){
        // $data=array('id'=>$id);

         $currency = $this->db->query("select * from category where name='$name'")->row_array();
         // $currency = $this->db->query("select * from category")->result_array();
        return $currency;
    }
     function edit($id,$name,$parent_id=0){
       // $data = array('id'=>$id);
       $data = array('name'=>$name,'parent_id'=>$parent_id);
        $this->db->where('id',$id);
        return $this->db->update('category', $data);
    }

     function delete($id){
       // $data = array('id'=>$id);
         $this->db->delete('location', array('id' => $id));
        if ($this->db->affected_rows() > 0)
            return TRUE;
        return FALSE;   
    }

    
    
    }


