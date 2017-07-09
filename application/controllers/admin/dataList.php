<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/*
 * Author : Ismo Broto : git @ismo1106
 */

class DataList extends BaseController {
    public function __construct()
    {
        parent::__construct();
            $this->data['dependencies'] = $this->load->view('general/dependencies', '', TRUE);
        $this->data['header'] = $this->load->view('bargain/admin/header', '', TRUE);
        $this->data['footer'] = $this->load->view('bargain/admin/footer_includes', '', TRUE);
        $this->data['sidebar'] = $this->load->view('bargain/admin/sidebar', '', TRUE);
        $this->data['head'] = $this->load->view('bargain/admin/head', '', TRUE);

        $this->load->library('PHPExcel');
        $this->load->helper('form');
        $this->load->model('common_model','common');
        
        $this->load->model('deal_model', 'deal');
        $this->load->model('dealtype_model', 'dealtype');
        $this->load->model('country_model', 'country');
        $this->load->model('state_model', 'state');
        $this->load->model('city_model', 'city');
        $this->load->model('town_model', 'town');
        $this->load->model('merchant_model', 'merchant');
        $this->load->model('state_model', 'state');
        $this->load->model('brand_model', 'brand_model');
        $this->load->model('producttype_model', 'producttype_model');
        $this->load->model('product_model', 'product_model');
        $this->load->model('make_model', 'make_model');
        $this->load->model('model_model', 'model');
        $this->load->model('fuel_type_model', 'fueltype');
        $this->load->model('ah_model', 'ah');
        $this->load->model('warrenty_model', 'warrenty');
        $this->load->model('pro_rata_model', 'pro_rata');
    }

    public function index()
    {   
         $msg    = $this->uri->segment(3);
        $alert  = '';
        if($msg == 'success'){
            $alert  = 'Success!!';
        }
        $this->data['_alert'] = $alert;
         $this->data['pageTitle'] = 'BatteryBoss : Dashboard';
         $this->data['list']=$this->common->getAllData();
        // $this->data['states']=$this->state->get();
        // echo $this->db->last_queery();
        $this->load->view('website/datalist', $this->data);
    }

    function data_page() {
    $tbody="";
    if(isset($_GET)){
     $limit=$_GET['limit'];   
    $this->global['list']=$this->common->getAllPageData($limit);
    foreach ($this->global['list'] as $value) {
        $tbody.="<tr>
        <td><a class='btn btn-danger' href=".base_url()."/edit?id=".$value->id.">Edit</button></a>
        <td><a class='btn btn-info' href=".base_url()."/details?id=".$value->id.">Details</a></td>
                <td>".$value->state."</td>
                <td>".$value->city."</td>
                <td>..</td>
                <td>".$value->product_type."</td>
                <td>".$value->make."</td>
                <td>".$value->model."</td>
                <td>".$value->fueltype."</td>
                <td>".$value->brand."</td>
                <td>".$value->AH."</td>
                <td>".$value->warrenty."</td>
                <td>".$value->prorata."</td>
                <td>".$value->model_name."</td>
                <td>".$value->product_code."</td>
                <td>".$value->mrp."</td>
                <td>".$value->with_old_battery_mrp."</td>
                <td>".$value->without_old_battery_mrp."</td>
              </tr>";    
        }
    }
    echo $tbody;
    }


    public function couponoption()
    {   

        if(isset($_GET)){
            $deal_id=$_GET['id'];
            $this->data['couponoption']=$this->deal->get_by_id($deal_id);
            $this->load->view('bargain/admin/couponoption', $this->data);
        }
    }


    public function updatecouponoption(){
        print_r($_POST);
        // exit();      
        if(isset($_POST)){
        $data=array();
        $data['expiry_date']=$_POST['expiry_date'];
        $data['display_price']=$_POST['display_price'];
        $data['display_merchant_address']=$_POST['display_merchant_address'];
        $data['display_merchant_contact_info']=$_POST['display_merchant_contact_info'];
        $data['display_fine_print']=$_POST['display_fine_print'];
        $data['display_highlights']=$_POST['display_highlights'];
        $data['display_merchant_logo']=$_POST['display_merchant_logo'];
        $data['display_product_image']=$_POST['display_product_image'];
        $data['barcode_image']=$_POST['barcode_image'];
        
        

        $id=$_POST['id'];

        $this->deal->edit($data,$id);
        // echo $this->db->last_query();
        // exit();
        $this->upload_barcode_image();
        }
        redirect('admin/deal');

    }   

    public function type()
    {   
        $this->data['dealtype']=$this->dealtype->get();
        $this->load->view('bargain/admin/dealtype', $this->data);
    }

    public function images(){
        if(isset($_GET)){
            $product_id=$_GET['id'];
            $this->data['images']=$this->common->get_images_by_deal($product_id);
            $this->load->view('bargain/admin/images', $this->data);
        }
    }

    public function edittype(){
        if(isset($_GET)){
            $id=$_GET['id'];

            $this->data['dealtype']=$this->dealtype->get_by_id($id);
        }
        $this->load->view('bargain/admin/edittype', $this->data);


    }

    public function editdeal(){
        if(isset($_GET)){
            $id=$_GET['id'];
            $this->data['product_type']=$this->producttype_model->get();
            $this->data['make']=$this->make_model->get();
            $this->data['model']=$this->model->get();
            $this->data['state']=$this->state->get();
            $this->data['city']=$this->city->get();
            $this->data['brand']=$this->brand_model->get();
            $this->data['dealtype']=$this->dealtype->get();
            $this->data['fueltype']=$this->fueltype->get();
            $this->data['ah']=$this->ah->get();
            $this->data['warrenty']=$this->warrenty->get();
            $this->data['pro_rata']=$this->pro_rata->get();
            $this->data['deal']=$this->product_model->get_by_id($id);
        }
        $this->load->view('bargain/admin/edititem', $this->data);


    }   
    public function add(){
            $this->data['merchants']=$this->state->get();
            $this->data['country']=$this->country->get();
            $this->data['state']=$this->state->get();
            $this->data['city']=$this->city->get();
            $this->data['town']=$this->town->get();
            $this->data['dealtype']=$this->dealtype->get();
        $this->load->view('bargain/admin/addproduct', $this->data);

    }

    public function addtype(){
        
        $this->load->view('bargain/admin/adddealtype', $this->data);

    }   

    public function addimages(){
        
        $this->load->view('bargain/admin/adddealtype', $this->data);

    }   

    public function inventory(){
        if(isset($_GET)){
        $id=$_GET['id'];
        $this->data['inventory_info']=$this->deal->get_by_id($id);
        $this->load->view('bargain/admin/inventory', $this->data);
        }

    }   


     function adddeal(){
        
        if($_POST){
        $this->deal->add($_POST);
        }
        redirect('admin/deal');
     } 

     function addImage(){
        
        if($_POST){
            $this->upload_image();
            $this->common->addImage($_POST);
            // echo $this->db->last_query();
        }
        redirect('admin/dataList/images?id='.$_POST['product_id']);
     } 

        function upload_image(){
        // print_r($_GET);

            $target_dir ="assets/battries/";
            $target_file = $target_dir . basename($_FILES["imgImp"]["name"]);
            echo $target_file;
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            if ($_FILES["imgImp"]["size"] > 500000) {
                        echo "Sorry, your file is too large.";
                        $uploadOk = 0;
                        exit();
            }
             if (move_uploaded_file($_FILES["imgImp"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["imgImp"]["name"]). " has been uploaded.";
        return $_FILES["imgImp"]["name"];
    } else {
        echo "Sorry, there was an error uploading your file.";
         print_r($_FILES['imgImp']['error']);
    }
                // return true;
    }   

    function upload_barcode_image(){
        // print_r($_GET);

            $target_dir ="assets/battries/barcode/";
            $target_file = $target_dir . basename($_FILES["imgImp"]["name"]);
            echo $target_file;
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            if ($_FILES["imgImp"]["size"] > 500000) {
                        echo "Sorry, your file is too large.";
                        $uploadOk = 0;
                        exit();
            }
             if (move_uploaded_file($_FILES["imgImp"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["imgImp"]["name"]). " has been uploaded.";
        return $_FILES["imgImp"]["name"];
    } else {
        echo "Sorry, there was an error uploading your file.";
         print_r($_FILES['imgImp']['error']);
    }
                // return true;
    }

     function createtype(){
        if($_POST){
        $this->dealtype->add($_POST);
        }
        redirect('admin/deal/type');
     }

    public function updatedealtype(){
        print_r($_POST);
        
        if($_POST){
        $data=array();
        $data['name']=$_POST['name'];
        

        $id=$_POST['id'];

        $this->dealtype->edit($data,$id);
        // $this->upload_image();
        }
        redirect('admin/deal/type');

        // $this->load->view('bargain/admin/editmerchant', $this->data);



    }   

    public function edit(){
        print_r($_POST);
        // exit();      
        if($_POST){
        $data=array();
        $data['product_type_id']=$_POST['product_type_id'];
        $data['state_id']=$_POST['state_id'];
        $data['city_id']=$_POST['city_id'];
        $data['make_id']=$_POST['make_id'];
        $data['model_id']=$_POST['model_id'];
        $data['fuel_type']=$_POST['fuel_type'];
        $data['brand_id']=$_POST['brand_id'];
        $data['ah_id']=$_POST['ah_id'];
        $data['warrenty_id']=$_POST['warrenty_id'];
        $data['prorata_id']=$_POST['prorata_id'];
        $data['model_name']=$_POST['model_name'];
        $data['product_code']=$_POST['product_code'];
        $data['mrp']=$_POST['mrp'];
        $data['with_old_battery_mrp']=$_POST['with_old_battery_mrp'];
        $data['without_old_battery_mrp']=$_POST['without_old_battery_mrp'];
        $data['discount']=$_POST['discount'];
        $data['description']=$_POST['description'];
        $data['key_features']=$_POST['key_features'];
        $data['key_benefits']=$_POST['key_benefits'];
        $data['recomanded_for']=$_POST['recomanded_for'];
        

        $id=$_POST['id'];

        $this->product_model->edit($data,$id);
        // $this->upload_image();
        echo $this->db->last_query();
        }
        redirect('admin/dataList');

        // $this->load->view('bargain/admin/editmerchant', $this->data);
    }

    public function editInventory(){
        // print_r($_POST);
        // exit();      
        if($_POST){
        $data=array();
        $data['notify_for_qty_below']=$_POST['notify_for_qty_below'];
        $data['target_qty']=$_POST['target_qty'];
        $data['max_purchase_per_customer']=$_POST['max_purchase_per_customer'];
        $data['qty_item_out_stock']=$_POST['qty_item_out_stock'];
        $data['stock_availbilty']=$_POST['stock_availbilty'];
        
        

        $id=$_POST['id'];

        $this->deal->edit($data,$id);
        // $this->upload_image();
        }
        redirect('admin/deal/inventory?id='.$id);

        // $this->load->view('bargain/admin/editmerchant', $this->data);
    }







    function enable(){
        if(isset($_GET)){
            $id=$_GET['id'];
            $this->deal->markEnable($id);
        }
    }

    function disable(){
        if(isset($_GET)){
            $id=$_GET['id'];
            $this->deal->markDisable($id);
        }
    }
    
    

    function delete(){
        $id=$_GET['id'];
        $this->deal->delete($id);

        
    }

    function deleteDeal(){
        $id=$_GET['id'];
        $this->deal->delete($id);

        
    }

    function deleteDealType(){
        $id=$_GET['id'];
        $this->dealtype->delete($id);

        
    }

    function deleteImage(){
        $id=$_GET['id'];
        $image_name=$this->deal->getImageName($id);
        print_r($image_name);
        $url='assets/battries/'.$image_name['name'];
        unlink($url);
        // exit();
        $this->deal->deleteImage($id);

        
    }


}
