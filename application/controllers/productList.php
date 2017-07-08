<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
/**
 * Class : Welcome (Home Page of Website)
 * Welcme class to use to display home page.
 * @author : Khushbu Soni
 * @version : 1.1
 * @since : 1 May 2017
 */
class ProductList extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->loadWebsite();
        $this->load->model('make_model'); 
    }

    /**
     * Index Page for this controller.
     */
    public function index()
    {
        
        // $this->load->view ( 'website/includes/menu');
        // $this->load->view ( 'website/includes/banner');
        // $this->load->view ( 'website/includes/filterForm');
        // $this->global ['featuredProducts'] = $this->load->view ( 'website/includes/featuredProducts');
        $this->global['make_list']=$this->make_model->getAll();
        $this->global['product_list']=$this->make_model->getAllProductType();
        $this->global['model_list']=$this->make_model->getAllModel();
        $this->load->view('website/list',$this->global);
    }

    // public function getAllMake(){
    //     $json = [];
    // $this->load->database();

    // if(!empty($this->input->get("make"))){

    //     $this->db->like('name', $this->input->get("make"));

    //     $query = $this->db->select('id,name as text')

                    
    //                 ->get("make_master");
    //     echo $this->db->last_query();
    //     $json = $query->result();

    // }
    //     echo json_encode($json);

    // }   
    


}