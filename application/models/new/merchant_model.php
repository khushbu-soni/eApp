<?php
class merchant_model extends CI_Model{
    //__construct
    public $data;
    //Constructor of abstract_userlogin_model
    public function __construct() {
       // $this->load->database();
    }

    function get(){
         $currency = $this->db->query("select * from merchants")->result();

        return $currency;
    }

    function getActive(){
         $currency = $this->db->query("select * from merchants where status=1")->result();

        return $currency;
    }

    function get_name($id){
        // $data=array('id'=>$id);

         $currency = $this->db->query("select name from merchants where id=$id")->row_array();
         // $currency = $this->db->query("select * from category")->result_array();
        return $currency;
    }

    function get_sub(){
         $currency = $this->db->query("select c.id,c.name as sub_category,sub_c.name as parent_category from category c  join category sub_c on c.parent_id=sub_c.id")->result();

        return $currency;
    }

    function add($data){
        // $data=array('name'=>$name,'parent_id'=>$parent_id);

        $this->db->insert('merchants', $data); 
         // $currency = $this->db->query("select * from category")->result_array();
        // return $currency;
    }
    function get_by_id($id){
        // $data=array('id'=>$id);

         $currency = $this->db->query("select * from merchants where id=$id")->row_array();
         // $currency = $this->db->query("select * from category")->result_array();
        return $currency;
    }

    function get_by_name($name){
        // $data=array('id'=>$id);

         $currency = $this->db->query("select * from category where name='$name'")->row_array();
         // $currency = $this->db->query("select * from category")->result_array();
        return $currency;
    }
     function edit($data,$id){
       // $data = array('id'=>$id);
       // $data = array('name'=>$name,'parent_id'=>$parent_id);
        $this->db->where('id',$id);
        return $this->db->update('merchants', $data);
    }

     function delete($id){
       // $data = array('id'=>$id);
         $this->db->delete('merchants', array('id' => $id));
        if ($this->db->affected_rows() > 0)
            return TRUE;
        return FALSE;   
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

    function check_merchant($username,$password){

     $query = $this->db->get_where('merchants', array(
                    'username' =>$username,
                    'password' =>$password,
                    'is_deleted'=>0,
                    'status'=>1,
                        )
                );

        if ($query->num_rows() > 0){
            //set necessary session variables
            $user = $query->row();
                
            // $this->session->set_userdata('merchant_id', $merchant->id);
            return $user;
    }else{
        return 0;
    }

    }


    public function get_product()
    {
        $this->db->select('product.*, category.name as cat_name, retailer.name as ret_name');
        $this->db->from('product');
        $this->db->join('category', 'category.id = product.category_id','left');
        $this->db->join('retailer', 'retailer.id = product.retailer_id','left');
        $this->db->where('product.is_deleted',0);
        $query = $this->db->get()->result();
        /*echo $this->db->last_query();
        print_r($query);
        exit();


        $sql = $this->db->query("select * from product")->result();*/
        return $query;
    }

    public function get_location()
    {
        $sql = $this->db->get('location')->result();
        /*print_r($sql);
        exit();*/
        return $sql;
    }

    public function get_category()
    {
        $sql = $this->db->get('category')->result();
        return $sql;
    }

    public function insert_product()
    {
        $img_name = preg_replace('/[ ()]/s', '', $_FILES['img']['name']);
        $barcode = preg_replace('/[ ()]/s', '', $_FILES['barcode']['name']);
        
        $title = $this->input->post('title');
        $location = $this->input->post('location');
        $category = $this->input->post('category');
        $initial_qty = $this->input->post('initial_qty');
        $remaining_qty = $this->input->post('remaining_qty');
        $actual_price = $this->input->post('actual_price');
        $discount_per = $this->input->post('discount_per');
        //$discount_price = $this->input->post('discount_price');
        $sold_limit = $this->input->post('sold_limit');
        $additional_info = $this->input->post('additional_info');
        $policies = $this->input->post('policies');
        $what_you_get = $this->input->post('what_you_get');
        $description = $this->input->post('description');
        $is_active = $this->input->post('is_active');
        $is_featured = $this->input->post('is_featured');
        $sku = $this->input->post('sku');
        /*echo $is_featured;
        exit();*/

        $disc_per = 100 - $discount_per;
        $new_discount_per = $disc_per/100;
        /*echo $new_discount_per;
        exit();*/
        $discount_price = $actual_price * $new_discount_per;

        if($is_featured == 'on')
        {
            $is_featured = '0';
        }
        else
        {
            $is_featured = '1';
        }
        $data = array(
            'title' => $title,
            'location_id' => $location,
            'category_id' => $category,
            'initial_qty' => $initial_qty,
            'remaining_qty' => $remaining_qty,
            'actual_price' => $actual_price,
            'discount_per' => $discount_per,
            'discount_price' => $discount_price,
            'sold_limit' => $sold_limit,
            'image' => $img_name,
            'additional_info' => $additional_info,
            'policies' => $policies,
            'what_you_get' => $what_you_get,
            'description' => $description,
            'added_on' => date("Y-m-d"),
            'is_active' => $is_active,
            'is_featured' => $is_featured,
            'sku' => $sku,
            'barcode' => $barcode,
            'is_deleted' => 0

            );
        $sql = $this->db->insert('product', $data); 

        if($sql)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function update_product()
    {
        $product_id = $this->input->post('product_id');
        $img_name = preg_replace('/[ ()]/s', '', $_FILES['img']['name']);
        $barcode = preg_replace('/[ ()]/s', '', $_FILES['barcode']['name']);

        /*echo $img_name;
        exit();*/
        
        $title = $this->input->post('title');
        $location = $this->input->post('location');
        $category = $this->input->post('category');
        $initial_qty = $this->input->post('initial_qty');
        $remaining_qty = $this->input->post('remaining_qty');
        $actual_price = $this->input->post('actual_price');
        $discount_per = $this->input->post('discount_per');
        //$discount_price = $this->input->post('discount_price');
        $sold_limit = $this->input->post('sold_limit');
        $additional_info = $this->input->post('additional_info');
        $policies = $this->input->post('policies');
        $what_you_get = $this->input->post('what_you_get');
        $description = $this->input->post('description');
        $is_active = $this->input->post('is_active');
        $is_featured = $this->input->post('is_featured');
        $sku = $this->input->post('sku');
        /*echo $is_featured;
        exit();*/


        $disc_per = 100 - $discount_per;
        $new_discount_per = $disc_per/100;
        /*echo $new_discount_per;
        exit();*/
        $discount_price = $actual_price * $new_discount_per;

        if($is_featured == 'on')
        {
            $is_featured = '0';
        }
        else
        {
            $is_featured = '1';
        }
        $data = array(
            'title' => $title,
            'location_id' => $location,
            'category_id' => $category,
            'initial_qty' => $initial_qty,
            'remaining_qty' => $remaining_qty,
            'actual_price' => $actual_price,
            'discount_per' => $discount_per,
            'discount_price' => $discount_price,
            'sold_limit' => $sold_limit,
            'image' => $img_name,
            'additional_info' => $additional_info,
            'policies' => $policies,
            'what_you_get' => $what_you_get,
            'description' => $description,
            'added_on' => date("Y-m-d"),
            'is_active' => $is_active,
            'is_featured' => $is_featured,
            'sku' => $sku,
            'barcode' => $barcode,
            'is_deleted' => 0

            );
        $sql = $this->db->where('id',$product_id)->update('product', $data); 

        if($sql)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function get_product_details($id)
    {
        $query = $this->db->where('id',$id)->get('product');
        //print_r($query->row());
        return $query->row();
    }

    public function location($loc_id)
    {
        $sql = $this->db->where('id',$loc_id)->get('location');
        /*print_r($sql->row());
        exit();*/
        return $sql->row();
    }

    public function category($cat_id)
    {
        $sql = $this->db->where('id', $cat_id)->get('category');
        return $sql->row();
    }

    public function delete_product($id)
    {
        $data = array(
            'is_deleted' => '1',
            );
        $sql = $this->db->where('id',$id)->update('product', $data);
        if($sql)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /*public function enable($id)
    {
        $currency = $this->db->query("update product set is_active=1 where id=$id")->row_array();
         // $currency = $this->db->query("select * from category")->result_array();
        return $currency;
    }

    public function disable($id)
    {
        $currency = $this->db->query("update product set is_active=0 where id=$id")->row_array();
         // $currency = $this->db->query("select * from category")->result_array();
        return $currency;
    }

    public function unmark_featured($id)
    {
        $currency = $this->db->query("update product set is_featured=0 where id=$id")->row_array();
         // $currency = $this->db->query("select * from category")->result_array();
        return $currency;
    }

    public function mark_featured($id)
    {
        $currency = $this->db->query("update product set is_featured=1 where id=$id")->row_array();
         // $currency = $this->db->query("select * from category")->result_array();
        return $currency;
    }*/
}


