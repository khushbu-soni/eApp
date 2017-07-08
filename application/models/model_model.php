<?php
class model_model extends CI_Model{
    //__construct
    public $data;
    //Constructor of abstract_userlogin_model
    public function __construct() {
       // $this->load->database();
    }

    function get(){
         $currency = $this->db->query("select model_master.*, make_master.name as make from model_master join make_master on make_master.id=model_master.make_id where model_master.is_active=1")->result();

        return $currency;
    }


    

    function add($data){
        // $data=array('name'=>$name);
// print_r($data);
// // exit();
        $this->db->insert('model_master', $data); 
         // $currency = $this->db->query("select * from category")->result_array();
        // return $currency;
    }
    function get_by_id($id){
        // $data=array('id'=>$id);

         $currency = $this->db->query("select model_master.*,make_master.name as make from model_master join  make_master on make_master.id=model_master.make_id where model_master.id=$id ")->row_array();
         // $currency = $this->db->query("select * from category")->result_array();
        return $currency;
    }

  
     function edit($data,$id){
       // $data = array('id'=>$id);
       // $data = array('name'=>$name,'parent_id'=>$parent_id);
        $this->db->where('id',$id);
        return $this->db->update('model_master', $data);
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

         $query = $this->db->update('model_master',$condition,array('id' => $id));
         //   print_r($query);
         // exit();
         if ($this->db->affected_rows() > 0)
            return 1;
        return 0;  
    }

    
    
    }


