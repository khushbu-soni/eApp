<?php
class product_model extends CI_Model{
    //__construct
    public $data;
    //Constructor of abstract_userlogin_model
    public function __construct() {
       // $this->load->database();
    }

    function get(){
         $currency = $this->db->query("select * from items")->result();

         /*echo "<pre>";
         print_r($currency);
         exit();*/
        return $currency;
    }

     function getModel($brand_id){
         $modelData = $this->db->query("SELECT m.name FROM `items` i join model_master m on m.id=i.model_id WHERE brand_id=$brand_id")->result();

         /*echo "<pre>";
         print_r($currency);
         exit();*/
        return $modelData;
    }
    

     function getBrandId($brand){
         $modelData = $this->db->query("SELECT id FROM `brand_master`  WHERE name like '%".$brand."%'")->result();

         /*echo "<pre>";
         print_r($currency);
         exit();*/
        return $modelData;
    }

    function getAllData(){
    $query = $this->db->query("SELECT img.id,img.name as image,im.id,sm.name as state, cm.name as city,pt.name as product_type,mm.name as make, mom.name as model, fm.name as fueltype,bm.name as brand,am.name as AH, wm.name as warrenty , pr.name as prorata,im.model_name,im.product_code,im.mrp,im.with_old_battery_mrp,im.without_old_battery_mrp,im.discount,im.description,im.key_benefits,im.key_features from items as im join
        
        city_master as cm on  cm.id=im.city_id join
        state_master as sm on sm.id =cm.state_id  join
         images as img on img.product_id=im.id join
        product_type as pt on pt.id=im.product_type_id join
        make_master as mm on mm.id=im.make_id join
        model_master as mom on mom.id=im.model_id join
        fuel_type as fm on fm.id=im.fuel_type join
        brand_master as bm on bm.id=im.brand_id join
        AH_master as am on am.id=im.ah_id join
        warrenty_master as wm on wm.id=warrenty_id join

        prorata_master as pr on pr.id=prorata_id
        
        
   ");

    return $query->result();
}
 
 function getBySearch($data){
    // print_r($data);
    $q="SELECT img.id,img.name as image,im.id,sm.name as state, cm.name as city,pt.name as product_type,mm.name as make, mom.name as model, fm.name as fueltype,bm.name as brand,am.name as AH, wm.name as warrenty , pr.name as prorata,im.model_name,im.product_code,im.mrp,im.with_old_battery_mrp,im.without_old_battery_mrp,im.discount,im.description,im.key_benefits,im.key_features from items as im join
        
        city_master as cm on  cm.id=im.city_id join
        state_master as sm on sm.id =cm.state_id  join
         images as img on img.product_id=im.id join
        product_type as pt on pt.id=im.product_type_id join
        make_master as mm on mm.id=im.make_id join
        model_master as mom on mom.id=im.model_id join
        fuel_type as fm on fm.id=im.fuel_type join
        brand_master as bm on bm.id=im.brand_id join
        AH_master as am on am.id=im.ah_id join
        warrenty_master as wm on wm.id=warrenty_id join

        prorata_master as pr on pr.id=prorata_id
       ";
    if(!empty($data)){

        $q.=" where ";
         if(!empty($data['fuel']) and $data['fuel']!="Select Fuel Type")
            $q.=" im.fuel_type=".$data['fuel']." and";
         if(!empty($data['brand_id']) and $data['brand_id']!="Select Brand")
             $q.=" im.brand_id=".$data['brand_id']." and";
         if(!empty($data['ah_id']) and $data['ah_id']!="Select AH")
           $q.=" im.ah_id=".$data['ah_id']." and";
             if(!empty($data['warrenty_id']) and $data['warrenty_id']!="Warrenty")
               $q.=" im.warrenty_id=".$data['warrenty_id']." and";
           if(!empty($data['product_type_id']) and $data['product_type_id']!="Warrenty")
               $q.=" im.product_type_id=".$data['product_type_id']." and";
           if(!empty($data['make_id']) and $data['make_id']!="Select Make")
               $q.=" im.make_id=".$data['make_id']." and";
           ;
           if(!empty($data['product_type_id']) and $data['product_type_id']!="Select Product")
               $q.=" im.product_type_id=".$data['product_type_id']." and";
    }
    // rtrim($q," and");
    $q=substr($q, 0, -3);
    // echo $q;
    // $q.=" limit 10";

    $query = $this->db->query($q);

    return $query->result();
}

function getByFilter($data){
    $q="SELECT img.id,img.name as image,im.id,sm.name as state, cm.name as city,pt.name as product_type,mm.name as make, mom.name as model, fm.name as fueltype,bm.name as brand,am.name as AH, wm.name as warrenty , pr.name as prorata,im.model_name,im.product_code,im.mrp,im.with_old_battery_mrp,im.without_old_battery_mrp,im.discount,im.description,im.key_benefits,im.key_features from items as im join
        
        city_master as cm on  cm.id=im.city_id join
        state_master as sm on sm.id =cm.state_id  join
         images as img on img.product_id=im.id join
        product_type as pt on pt.id=im.product_type_id join
        make_master as mm on mm.id=im.make_id join
        model_master as mom on mom.id=im.model_id join
        fuel_type as fm on fm.id=im.fuel_type join
        brand_master as bm on bm.id=im.brand_id join
        AH_master as am on am.id=im.ah_id join
        warrenty_master as wm on wm.id=warrenty_id join

        prorata_master as pr on pr.id=prorata_id
       ";
    if(!empty($data)){
        $q.=" where ";
         if(!empty($data['product_type_id']))
            $q.=" im.product_type_id=".$data['product_type_id']." and";
         if(!empty($data['make_id']) or !empty($data['model_id']) )
             if(!empty($data['model_id']) and $data['model_id']!="Select Model") 
           $q.=" im.make_id=".$data['make_id']." and";
         
         if(!empty($data['model_id']) or !empty($data['model_id']))
            if(!empty($data['model_id']) and $data['model_id']!="Select Model") 
             $q.=" im.model_id=".$data['model_id']." and";
         
         if (!empty($data['brand_id'])) {
             $q.=" im.brand_id=".$data['brand_id']." and";
         }

         if (!empty($data['make'])) {
             $q.=" im.make_id=".$data['make']." and";
         }
             
    }
    // rtrim($q," and");
    $q=substr($q, 0, -3);
    // echo $q;
    // $q.=" limit 100";

    $query = $this->db->query($q);

    return $query->result();
}
     function get_images_by_deal($deal_id){
         $currency = $this->db->query("select * from images where deal_id=$deal_id")->result();


        return $currency;
    }
function getImageName($id){
         $currency = $this->db->query("select name from images where id=$id")->row_array();
        return $currency;
    }

   

    function add($data){
        
        // $data=array('name'=>$name,'parent_id'=>$parent_id);
        // $search_string=$data['']
        $this->db->insert('deals', $data); 

         // $currency = $this->db->query("select * from category")->result_array();
        // return $currency;
    }

    function addImage($data){
        // $data=array('name'=>$name,'parent_id'=>$parent_id);

        $this->db->insert('images', $data); 
         // $currency = $this->db->query("select * from category")->result_array();
        // return $currency;
    }
    function get_by_id($id){
        // $data=array('id'=>$id);

         $currency = $this->db->query("select * from items where id=$id")->row_array();
         // $currency = $this->db->query("select * from category")->result_array();
        return $currency;
    }

    function getAllById($id){

        

        $query = $this->db->query(" SELECT img.id,img.name as image,sm.name as state, cm.name as city,pt.name as product_type,mm.name as make, mom.name as model, fm.name as fueltype,bm.name as brand,am.name as AH, wm.name as warrenty , pr.name as prorata,im.model_name,im.product_code,im.mrp,im.with_old_battery_mrp,im.without_old_battery_mrp,im.discount ,
            im.discount,im.description,im.key_benefits,im.key_features,im.recomanded_for from items as im join
        
        city_master as cm on  cm.id=im.city_id join
        state_master as sm on sm.id =cm.state_id  join
        images as img on img.product_id=im.id join
        product_type as pt on pt.id=im.product_type_id join
        make_master as mm on mm.id=im.make_id join
        model_master as mom on mom.id=im.model_id join
        fuel_type as fm on fm.id=im.fuel_type join
        brand_master as bm on bm.id=im.brand_id join
        AH_master as am on am.id=im.ah_id join
        warrenty_master as wm on wm.id=warrenty_id join

        prorata_master as pr on pr.id=prorata_id
        
        where im.id=$id
   ");

    return $query->result();
    }

    function get_by_country($cid){
        // $data=array('id'=>$id);

         $currency = $this->db->query("select * from deals where country_id=$cid")->result();
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
        return $this->db->update('items', $data);
    }

     function delete($id){
       // $data = array('id'=>$id);
         $this->db->delete('deals', array('id' => $id));
        if ($this->db->affected_rows() > 0)
            return TRUE;
        return FALSE;   
    }

    function deleteImage($id){
       // $data = array('id'=>$id);
         $this->db->delete('images', array('id' => $id));
        if ($this->db->affected_rows() > 0)
            return TRUE;
        return FALSE;   
    }

    function markEnable($id){
        $currency = $this->db->query("update deals set status=1 where id=$id")->row_array();
        return $currency;
    }

    function markFeatured($id){
        $currency = $this->db->query("update deals set is_featured=1 where id=$id")->row_array();
        return $currency;
    }

    function unmarkFeatured($id){
        $currency = $this->db->query("update deals set is_featured=0 where id=$id")->row_array();
        return $currency;
    }
    function markDisable($id){
        $currency = $this->db->query("update deals set status=0 where id=$id")->row_array();
        return $currency;
    }

    public function display_home($id)
    {
        $data = array(
               'display_on_home' => 0
            );
        $this->db->where('id', $id);
        return $this->db->update('deals', $data); 
    }

    public function display_not_home($id)
    {
        $data = array(
               'display_on_home' => 1
            );
        $this->db->where('id', $id);
        return $this->db->update('deals', $data);
    }

    public function get_deal()
    {
        /*$this->db->select('deals.*, images.name as img_name, images.deal_id as deal_id, deals.name as deal_name');
        $this->db->from('deals');
        $this->db->join('images', 'images.deal_id = deals.id');*/

        return $this->db->where('display_on_home',1)->get('deals')->result();
    }

    public function get_offer($merchant_id,$subcategory_id)
    {
        $array = array('merchant_id' => $merchant_id, 'subcategory_id' => $subcategory_id);
        return $this->db->where($array)->get('deals')->result();

    }

    public function get_details($id)
    {
        return $this->db->where('id', $id)->get('deals')->row();
    }

    public function get_image($id)
    {
        return $this->db->where('id', $id)->get('deals')->row();
    }

    public function get_image_name($id)
    {
        return $this->db->where('deal_id',$id)->get('images')->result();
    }

    public function get_image_by_name($id)
    {
             return $this->db->where('deal_id', $id)->get('images', 1)->result();
        // return $this->db->where('deal_id',$id)->get('images')->result();
    }

    

    
}


