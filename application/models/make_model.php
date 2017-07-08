<?php
class make_model extends CI_Model{
    //__construct
    public $data;
    //Constructor of abstract_userlogin_model
    public function __construct() {
       // $this->load->database();
    }

    function get(){
         $currency = $this->db->query("select make_master.*, product_type.name as product_type from make_master join product_type on product_type.id=make_master.product_type_id where make_master.is_active=1")->result();

        return $currency;
    }


    function getAll(){
        $query = $this->db->select('id,name')
                    ->get("make_master");
                    // echo  $this->db->last_query();
        $json = $query->result();
        return $json;
    }

    function getAllProductType(){
        $query = $this->db->select('id,name')
                    ->get("product_type");
                    // echo  $this->db->last_query();
        $json = $query->result();
        return $json;
    }

    function getAllModel(){
        $query = $this->db->select('id,name')
                    ->get("model_master");
                    // echo  $this->db->last_query();
        $json = $query->result();
        return $json;
    }

    function add($data){
        // $data=array('name'=>$name);
// print_r($data);
// // exit();
        $this->db->insert('make_master', $data); 
         // $currency = $this->db->query("select * from category")->result_array();
        // return $currency;
    }
    function get_by_id($id){
        // $data=array('id'=>$id);

         $currency = $this->db->query("select make_master.*,product_type.name as product_type from make_master join  product_type on product_type.id=make_master.product_type_id where make_master.id=$id ")->row_array();
         // $currency = $this->db->query("select * from category")->result_array();
        return $currency;
    }

  
     function edit($data,$id){
       // $data = array('id'=>$id);
       // $data = array('name'=>$name,'parent_id'=>$parent_id);
        $this->db->where('id',$id);
        return $this->db->update('make_master', $data);
    }

     function delete($id){
       // $data = array('id'=>$id);
        //  $this->db->delete('city', array('id' => $id));
        // if ($this->db->affected_rows() > 0)
        //     return TRUE;
        // return FALSE; 
         $condition = array(
        'is_active' => 0

        );

         $query = $this->db->update('make_master',$condition,array('id' => $id));
         //   print_r($query);
         // exit();
         if ($this->db->affected_rows() > 0)
            return 1;
        return 0;  
    }

    
    
    }


