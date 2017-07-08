<?php
class dealtype_model extends CI_Model{
    //__construct
    public $data;
    //Constructor of abstract_userlogin_model
    public function __construct() {
       // $this->load->database();
    }

    function get(){
         $currency = $this->db->query("select * from dealtypes where is_deleted=0")->result();

        return $currency;
    }


    // function getActive(){
    //      $currency = $this->db->query("select * from dealtypes where status=1")->result();

    //     return $currency;
    // }
   

    function add($data){
        // $data=array('name'=>$name,'parent_id'=>$parent_id);

        $this->db->insert('dealtypes', $data); 
         // $currency = $this->db->query("select * from category")->result_array();
        // return $currency;
    }
    function get_by_id($id){
        // $data=array('id'=>$id);

         $currency = $this->db->query("select * from dealtypes where id=$id and is_deleted=0")->row_array();
         // $currency = $this->db->query("select * from category")->result_array();
        return $currency;
    }

    function get_by_name($name){
        // $data=array('id'=>$id);

         $currency = $this->db->query("select * from category where name='$name' and is_deleted=0")->row_array();
         // $currency = $this->db->query("select * from category")->result_array();
        return $currency;
    }
     function edit($data,$id){
       // $data = array('id'=>$id);
       // $data = array('name'=>$name,'parent_id'=>$parent_id);
        $this->db->where('id',$id);
        return $this->db->update('dealtypes', $data);
    }

     function delete($id){
       // $data = array('id'=>$id);
        //  $this->db->delete('dealtypes', array('id' => $id));
        // if ($this->db->affected_rows() > 0)
        //     return TRUE;
        // return FALSE; 

         $condition = array(
        'is_deleted' => 1

        );

         $query = $this->db->update('dealtypes',$condition,array('id' => $id));
         //   print_r($query);
         // exit();
         if ($this->db->affected_rows() > 0)
            return 1;
        return 0;  
    }

    function markEnable($id){
        $currency = $this->db->query("update merchants set status=1 where id=$id")->row_array();
         // $currency = $this->db->query("select * from category")->result_array();
        return $currency;
    }
    function markDisable($id){
        $currency = $this->db->query("update merchants set status=0 where id=$id")->row_array();
         // $currency = $this->db->query("select * from category")->result_array();
        return $currency;
    }
    }


