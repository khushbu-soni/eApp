<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/*
 * Author : Ismo Broto : git @ismo1106
 */

class DataList extends BaseController {
    public function __construct() {
        parent::__construct();
        
        // if (!logged_in())
        //     redirect('auth/login');
         parent::__construct();
        $this->load->model('user_model');
        $this->load->model('common_model','common');
        $this->isLoggedIn();   

        $this->load->library('PHPExcel');
        $this->load->helper('form');
    }

    function index() {
        
        $this->global['list']=$this->common->getAllData();
        $this->loadViews("dataList", $this->global, NULL , NULL);
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

}
s