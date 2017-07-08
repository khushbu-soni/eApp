<?php
class category_model extends CI_Model{
    //__construct
    public $data;
    //Constructor of abstract_userlogin_model
    public function __construct() {
       // $this->load->database();
    }

    function get_parent(){
         $currency = $this->db->query("select * from category where parent_id=0 and is_deleted=0")->result();

        return $currency;
    }

    function get_sub(){
         $currency = $this->db->query("select c.id,c.name as sub_category,sub_c.name as parent_category from category c  join category sub_c on c.parent_id=sub_c.id where c.is_deleted=0")->result();

        return $currency;
    }

    function get_main_category(){
         $currency = $this->db->query("select id, name from category where parent_id=0 and is_deleted=0")->result();

        return $currency;
    }

    function add($name,$parent_id=0){
        $data=array('name'=>$name,'parent_id'=>$parent_id,'is_deleted'=>0);

        $this->db->insert('category', $data); 
         // $currency = $this->db->query("select * from category")->result_array();
        // return $currency;
    }
    function get_by_id($id){
        // $data=array('id'=>$id);

         $currency = $this->db->query("select * from category where id=$id and is_deleted=0")->row_array();
         // $currency = $this->db->query("select * from category")->result_array();
        return $currency;
    }

    function get_by_name($name){
        // $data=array('id'=>$id);

         $currency = $this->db->query("select * from category where name='$name' and is_deleted=0")->row_array();
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
        //  $this->db->delete('category', array('id' => $id));
        // if ($this->db->affected_rows() > 0)
        //     return TRUE;
        // return FALSE;   
         $condition = array(
        'is_deleted' => 1

        );

         $query = $this->db->update('category',$condition,array('id' => $id));
         //   print_r($query);
         // exit();
         if ($this->db->affected_rows() > 0)
            return 1;
        return 0;
    }

    
    
    }


