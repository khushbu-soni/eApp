<?php
class order_model extends CI_Model{
    //__construct
    public $data;
    //Constructor of abstract_userlogin_model
    public function __construct() {
       // $this->load->database();
    }

    function get(){
         $currency = $this->db->query("select orders.*,customer.name as customer_name, customer.email from orders join orderitems on orderitems.order_id=orders.id join deals on deals.id=orderitems.product_id join dealtypes on dealtypes.id=deals.dealtype_id join customer on orders.customer_id=customer.id where orders.is_deleted=0 group by orders.id")->result();

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

         $currency = $this->db->query("select orders.*, dealtypes.name as dealtype,customer.name as customer_name, customer.email from orders join orderitems on orderitems.order_id=orders.id join deals on deals.id=orderitems.product_id join dealtypes on dealtypes.id=deals.dealtype_id join customer on orders.customer_id=customer.id where orders.is_deleted=0 and orders.id=$id")->row_array();
         // $currency = $this->db->query("select * from category")->result_array();
        return $currency;
    }

     function get_dealtype($id){
        // $data=array('id'=>$id);

         $currency = $this->db->query("select dealtypes.name as dealtype , dealtypes.id as dealtype_id from orders join orderitems on orderitems.order_id=orders.id join deals on deals.id=orderitems.product_id join dealtypes on dealtypes.id=deals.dealtype_id  where orders.is_deleted=0 and orders.id=$id")->row();
         // $currency = $this->db->query("select * from category")->result_array();
        return $currency;
    }

  function get_invoice_info($id){
        // $data=array('id'=>$id);

         $currency = $this->db->query("select orders.*,customer.name as customer_name, customer.email from orders join orderitems on orderitems.order_id=orders.id join customer on orders.customer_id=customer.id where orders.is_deleted=0 and orders.id=$id and orders.isInvoicEmail=1")->row_array();
         // $currency = $this->db->query("select * from category")->result_array();
        return $currency;
    }

function get_all_deliver(){
        // $data=array('id'=>$id);

         $currency = $this->db->query("select orders.*,customer.name as customer_name, customer.email from orders join orderitems on orderitems.order_id=orders.id join customer on orders.customer_id=customer.id where orders.is_deleted=0  and orders.isCouponPdfSend=1 group by orders.id")->result();
         // $currency = $this->db->query("select * from category")->result_array();
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


