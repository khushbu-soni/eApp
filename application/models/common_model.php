<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Common_model extends CI_Model
{
 
    function isExist($name,$table){
        $query = $this->db->query("SELECT id as count FROM $table where name like '%$name%'");
        $json = $query->result();
        // print_r($json);
        if(!empty($json)){

            $r=$json[0];
        return $r->count ;
        }else{

            return 0;
        }
    }   

 function getAllData(){
    $query = $this->db->query(" SELECT im.id,sm.name as state, cm.name as city,pt.name as product_type,mm.name as make, mom.name as model, fm.name as fueltype,bm.name as brand,am.name as AH, wm.name as warrenty , pr.name as prorata,im.model_name,im.product_code,im.mrp,im.with_old_battery_mrp,im.without_old_battery_mrp,im.discount from items as im join
        
        city_master as cm on  cm.id=im.city_id join
        state_master as sm on sm.id =cm.state_id join
        
        product_type as pt on pt.id=im.product_type_id join
        make_master as mm on mm.id=im.make_id join
        model_master as mom on mom.id=im.model_id join
        fuel_type as fm on fm.id=im.fuel_type join
        brand_master as bm on bm.id=im.brand_id join
        AH_master as am on am.id=im.ah_id join
        warrenty_master as wm on wm.id=warrenty_id join
        prorata_master as pr on pr.id=prorata_id
        limit 100
   ");
                
    return $query->result();
            // print_r($json);
    
    }   


 function getAllPageData($limit){
    $from=1;
    for($i=1;$i<$i;$i++){
        if($limit==$i){
            $from=$limit*100+$i;
            break;
        }
    }

    $query="SELECT im.id,sm.name as state, cm.name as city,pt.name as product_type,mm.name as make, mom.name as model, fm.name as fueltype,bm.name as brand,am.name as AH, wm.name as warrenty , pr.name as prorata,im.model_name,im.product_code,im.mrp,im.with_old_battery_mrp,im.without_old_battery_mrp,im.discount from items as im join
        
        city_master as cm on  cm.id=im.city_id join
        state_master as sm on sm.id =cm.state_id join
        
        product_type as pt on pt.id=im.product_type_id join
        make_master as mm on mm.id=im.make_id join
        model_master as mom on mom.id=im.model_id join
        fuel_type as fm on fm.id=im.fuel_type join
        brand_master as bm on bm.id=im.brand_id join
        AH_master as am on am.id=im.ah_id join
        warrenty_master as wm on wm.id=warrenty_id join
        prorata_master as pr on pr.id=prorata_id order by 1"
        ;
        if($limit!=1)
            $query.=" limit $from, $limit";
        else
            $query.=" limit $limit";
        echo $this->db->last_query();
     $query = $this->db->query($query);
                
    return $query->result();
            // print_r($json);
    
    }

    function insert($state_data,$table){
        $insert = $this->db->insert($state_data,$table);                   
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

    function get_images_by_deal($product_id){
         $currency = $this->db->query("select * from images where product_id=$product_id")->result();


        return $currency;
    }
function getImageName($id){
         $currency = $this->db->query("select name from images where id=$id")->row_array();
        return $currency;
    }

    function addImage($data){
        // $data=array('name'=>$name,'parent_id'=>$parent_id);

        $this->db->insert('images', $data); 
         // $currency = $this->db->query("select * from category")->result_array();
        // return $currency;
    }
}


?>