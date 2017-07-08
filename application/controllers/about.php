<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
/**
 * Class : Welcome (Home Page of Website)
 * Welcme class to use to display home page.
 * @author : Khushbu Soni
 * @version : 1.1
 * @since : 1 May 2017
 */
class About extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        // $this->loadWebsite();
        // $this->load->model('make_model');        
    }



    function index(){
        $this->load->view('website/about');
    }

}