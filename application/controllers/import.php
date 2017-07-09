<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author David Adamo Jr.
*/
class import extends CI_Controller {
    public $data;

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
        
        $this->load->model('state_model', 'state');
        $this->load->model('country_model', 'country');
    }

    public function index()
    {   
         $msg    = $this->uri->segment(3);
        $alert  = '';
        if($msg == 'success'){
            $alert  = 'Success!!';
        }
        $this->global['_alert'] = $alert;
         $this->global['pageTitle'] = 'BatteryBoss : Dashboard';
        // $this->data['states']=$this->state->get();
        // echo $this->db->last_queery();
        $this->load->view('website/upload', $this->data);
    }

    

    function upload() {
        $fileName = time() . $_FILES['fileImport']['name'];                     // Sesuai dengan nama Tag Input/Upload

        $config['upload_path'] = './fileExcel/';                                // Buat folder dengan nama "fileExcel" di root folder
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'xls|xlsx|csv';
        $config['max_size'] = 10000;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('fileImport'))
            $this->upload->display_errors();

        // echo "string";
        // exit();
        $media = $this->upload->data('fileImport');
        $inputFileName = './fileExcel/' . $media['file_name'];

        try {
            $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
            $objReader = PHPExcel_IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch (Exception $e) {
            die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME) . '": ' . $e->getMessage());
        }

        $sheet = $objPHPExcel->getSheet(0);
        $highestRow = $sheet->getHighestRow();
        $highestColumn = $sheet->getHighestColumn();

        for ($row = 2; $row <= $highestRow; $row++) {                           // Read a row of data into an array                 
            $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);

            

            $state_data=array('name'=>$rowData[0][0]);
          /*  echo "<pre>";
            print_r($data);
            echo "</pre>";*/
            $state_id=$this->common->isExist($rowData[0][0],'state_master');
            $city_id=$this->common->isExist($rowData[0][1],'city_master');
            $product_type_id=$this->common->isExist($rowData[0][3],'product_type');
            $product_data=array('name'=>$rowData[0][3]);
            
            $make_id=$this->common->isExist($rowData[0][4],'make_master');
            $model_id=$this->common->isExist($rowData[0][5],'model_master');

            $fuel_type_id=$this->common->isExist($rowData[0][6],'fuel_type');
            $brand_type_id=$this->common->isExist($rowData[0][7],'brand_master');
            $ah_id=$this->common->isExist($rowData[0][8],'AH_master');
            $warrenty_id=$this->common->isExist($rowData[0][9],'warrenty_master');
            $prorata_id=$this->common->isExist($rowData[0][10],'prorata_master');
            // $prorata_id=$this->common->isExist($rowData[0][13],'item');
            
            $fuel_data=array('name'=>$rowData[0][6]);
            $brand_data=array('name'=>$rowData[0][7]);
            $ah_data=array('name'=>$rowData[0][8]);
            $warrenty_data=array('name'=>$rowData[0][9]);
            $prorata_data=array('name'=>$rowData[0][10]);
            
            $city_data=array(
                                'name'=>$rowData[0][1],
                                'state_id'=>$state_id);

            $make_data=array(
                                'name'=>$rowData[0][4],
                                'product_type_id'=>$product_type_id);

            $model_data=array(
                                'name'=>$rowData[0][5],
                                'make_id'=>$make_id);
            $search_string=$rowData[0][0].",".",".$rowData[0][1].",".$rowData[0][2]
                           .",".$rowData[0][3].",".$rowData[0][4].",".$rowData[0][5]
                           .",".$rowData[0][6].",".$rowData[0][7].",".$rowData[0][7]
                           .",".$rowData[0][8].",".$rowData[0][9].",".$rowData[0][10]
                           .",". $rowData[0][11].",".$rowData[0][12].",".$rowData[0][13]
                          ;;
            $item_data=array(
                                            'state_id'=>$state_id,
                                            'city_id'=>$city_id,
                                            'product_type_id'=>$product_type_id,
                                            'make_id'=>$make_id,
                                            'model_id'=>$model_id,
                                            'model_id'=>$model_id,
                                            'fuel_type'=>$fuel_type_id,
                                            'brand_id'=>$brand_type_id,
                                            'ah_id'=>$ah_id,
                                            'warrenty_id'=>$warrenty_id,
                                            'prorata_id'=>$prorata_id,
                                            'model_name'=>$rowData[0][12],
                                            'product_code'=>$rowData[0][13],
                                            'mrp'=>$rowData[0][14],
                                            'with_old_battery_mrp'=>$rowData[0][15],
                                            'without_old_battery_mrp'=>$rowData[0][16],
                                            'discount'=>$rowData[0][17],
                                            'search_string'=>$search_string
                                            );


            if($state_id==0){
                $state_id=$this->common->insert('state_master',$state_data);
            }
            
            if($city_id==0 && $state_id!=0){
                $this->common->insert('city_master',$city_data);
            }

            if($product_type_id==0){
                $this->common->insert('product_type',$product_data);
            }

            if($make_id==0 && $product_type_id!=0){
                $this->common->insert('make_master',$make_data);
            }


            if($model_id==0 && $make_id!=0){
                $this->common->insert('model_master',$model_data);
            }

            if($fuel_type_id==0 ){
                $this->common->insert('fuel_type',$fuel_data);
            }

            if($brand_type_id==0 ){
                $this->common->insert('brand_master',$brand_data);
            }


            if($ah_id==0 ){
                $this->common->insert('AH_master',$ah_data);
            }

            if($warrenty_id==0 ){
                $this->common->insert('warrenty_master',$warrenty_data);
            }
            if($prorata_id==0 ){
                $this->common->insert('prorata_master',$prorata_data);
            }

            if($make_id!=0 && $model_id!=0 && $brand_type_id!=0 ){
                $this->common->insert('items',$item_data);
            }
            // $insert = $this->db->insert("data_orang", $data);                   // Sesuaikan nama dengan nama tabel untuk melakukan insert data
            // delete_files($media['file_path']);                                  // menghapus semua file .xls yang diupload
            // exit();
        }
        
        redirect(base_url('import/index/success'));
    }

}