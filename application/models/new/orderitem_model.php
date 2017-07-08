<?php
class orderitem_model extends CI_Model{
    //__construct
    public $data;
    //Constructor of abstract_userlogin_model
    public function __construct() {
       // $this->load->database();
    }

    function get(){
         $currency = $this->db->query("select orderitems.*, deals.name as product_name from orderitems join deals on deals.id=orderitems.product_id where orderitems.is_deleted=0")->result();

        return $currency;
    }

    function sumOfSubtotals($id){
         $currency = $this->db->query("select sum(orderitems.sub_total) as sub_total from orderitems join deals on deals.id=orderitems.product_id join orders on orders.id=orderitems.order_id where orderitems.order_id=$id and orderitems.is_deleted=0")->row();
        
        return $currency;
    }

    function sumOfTotalTax($id){
         $currency = $this->db->query("select sum(orderitems.tax_amount) as tax_amount from orderitems join deals on deals.id=orderitems.product_id join orders on orders.id=orderitems.order_id where orderitems.order_id=$id and orderitems.is_deleted=0")->row();
        
        return $currency;
    }

    function sumOfTotalDiscount($id){
         $currency = $this->db->query("select sum(orderitems.discount_amount) as discount_amount from orderitems join deals on deals.id=orderitems.product_id join orders on orders.id=orderitems.order_id where orderitems.order_id=$id and orderitems.is_deleted=0")->row();
        
        return $currency;
    }

    function sumOfGrandTotal($id){
         $currency = $this->db->query("select sum(orderitems.row_total) as total from orderitems join deals on deals.id=orderitems.product_id join orders on orders.id=orderitems.order_id where orderitems.order_id=$id and orderitems.is_deleted=0")->row();
        
        return $currency;
    }

    

    function add($data){
        // $data=array('name'=>$name);

        $this->db->insert('country', $data); 
         // $currency = $this->db->query("select * from category")->result_array();
        // return $currency;
    }

    function get_name($id){
        // $data=array('id'=>$id);

         $currency = $this->db->query("select name from country where id=$id")->row_array();
         // $currency = $this->db->query("select * from category")->result_array();
        return $currency;
    }

    function get_by_id($id){
        // $data=array('id'=>$id);

         $currency = $this->db->query("select orderitems.*, deals.name as product_name from orderitems join deals on deals.id=orderitems.product_id join orders on orders.id=orderitems.order_id where orderitems.order_id=$id and orderitems.is_deleted=0")->result();
         // $currency = $this->db->query("select * from category")->result_array();
         // echo $this->db->last_query();
        return $currency;
    }

  
     function edit($data,$id){
       // $data = array('id'=>$id);
       // $data = array('name'=>$name,'parent_id'=>$parent_id);
        $this->db->where('id',$id);
        return $this->db->update('country', $data);
    }

     function delete($id){
       // $data = array('id'=>$id);
         $this->db->delete('country', array('id' => $id));
        if ($this->db->affected_rows() > 0)
            return TRUE;
        return FALSE;   
    }

    
    
    }


