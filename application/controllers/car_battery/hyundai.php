<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class Hyundai extends BaseController {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');  //Load the Session 
		$this->loadWebsite();
		// $this->data['header_includes']=$this->load->view('front/common/header_includes');	

		// // $this->data['location']=$this->load->view('front/common/location');	
		// $this->data['header']=$this->load->view('front/common/header');	
		// $this->data['location']=$this->load->view('front/common/location');	
		// $this->data['head']=$this->load->view('common/head');	
		// $this->data['footer']=$this->load->view('front/common/footer');	
		$this->load->model('deal_model', 'deal');
		 $this->load->model('make_model'); 
		 $this->load->model('producttype_model'); 
		 $this->load->model('product_model'); 
		 $this->load->model('model_model'); 
		 $this->load->model('common_model','common'); 
	}


	public function index()
	{
				
		// $this->data['query'] = $this->deal->get_deal();
		
		/*print_r($this->data['query']);
		exit();*/
		$this->global['make_list']=$this->make_model->get();
        $this->global['product_list']=$this->producttype_model->get();
        $this->global['model_list']=$this->model_model->get();
        $items=$this->make_model->getId("hyundai");
        $this->global['items_array']=$this->make_model->getAllModelByMakeId($items['id']);
        // print_r($this->global['items_array']);
        // $data=array();
        // echo $this->db->last_query();
        // print_r($items);
        // foreach ($items as $junk) {
        // 	$data['name']='600x380.jpg';
        // 	$data['product_id']=$junk->id;
        // 	$data['is_deleted']=0;
        // 	$this->common->addImage($data);
        // }
        $this->load->view('front/hyundai',$this->global);
		// $this->load->view('front/home1');


		
	}



	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */