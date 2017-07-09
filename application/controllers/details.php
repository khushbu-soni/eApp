<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
/**
 * Class : Welcome (Home Page of Website)
 * Welcme class to use to display home page.
 * @author : Khushbu Soni
 * @version : 1.1
 * @since : 1 May 2017
 */
class details extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->loadWebsite();
        $this->load->model('make_model'); 
        $this->load->model('product_model'); 
    }

    /**
     * Index Page for this controller.
     */
    public function index()
    {

        $this->data['make_list']=$this->make_model->getAll();
        $this->data['product_list']=$this->make_model->getAllProductType();
        $this->data['model_list']=$this->make_model->getAllModel();
        $this->data['items']=$this->product_model->getAllById($_GET['id']);
        // print_r($this->data['items']);
        $this->load->view('website/details',$this->data);
    }

  


}