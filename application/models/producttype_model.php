<?php
class producttype_model extends CI_Model{
    //__construct
    public $data;
    //Constructor of abstract_userlogin_model
    public function __construct() {
       // $this->load->database();
    }

    function get(){
         $currency = $this->db->query("select * from product_type where is_active=1 ")->result();

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
        $data=array('name'=>$name,'is_active'=>0);

        $this->db->insert('product_type', $data); 
         // $currency = $this->db->query("select * from category")->result_array();
        // return $currency;
    }
    function get_by_id($id){
        // $data=array('id'=>$id);

         $currency = $this->db->query("select * from product_type where id=$id")->row_array();
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
       $data = array('name'=>$name);
        $this->db->where('id',$id);
        print_r($data);
        return $this->db->update('product_type', $data);
    }

     function delete($id){
       // $data = array('id'=>$id);
        //  $this->db->delete('category', array('id' => $id));
        // if ($this->db->affected_rows() > 0)
        //     return TRUE;
        // return FALSE;   
         $condition = array(
        'is_active' => 0

        );

         $query = $this->db->update('product_type',$condition,array('id' => $id));
         //   print_r($query);
         // exit();
         if ($this->db->affected_rows() > 0)
            return 1;
        return 0;
    }

    
    
    }


