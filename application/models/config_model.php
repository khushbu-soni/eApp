<?php
class config_model extends CI_Model{
    //__construct
    public $data;
    //Constructor of abstract_userlogin_model
    public function __construct() {
       // $this->load->database();
    }

    function get(){
         $config = $this->db->query("select * from  configruation ")->result();

        return $config;
    }


   function updateConfig($data,$id){
        $this->db->where('id',$id);
        return $this->db->update('configruation', $data);
    }

    function get_by_id($id){
         $config = $this->db->query("select * from  configruation where id=$id")->row_array();

        return $config;
    }

    }


