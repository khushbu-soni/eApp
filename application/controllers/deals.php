<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Deals extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');  //Load the Session 
		$this->data['header_includes']=$this->load->view('front/common/header_includes');	
		// $this->data['location']=$this->load->view('front/common/location');	
		$this->data['header']=$this->load->view('front/common/header');	
		// $this->data['location']=$this->load->view('front/common/location');	
		// $this->data['head']=$this->load->view('common/head');	
		// $this->data['footer']=$this->load->view('front/common/footer');
		$this->load->model('deal_model', 'deal');		
	}

	public function view_deals()
	{
		$this->load->view('front/details',$this->data);
	}

	public function view_details()
	{
		$id = $this->uri->segment(3);
		$merchant_id = $this->uri->segment(4);
		$subcategory_id = $this->uri->segment(5);
		/*echo $merchant_id;
		exit();*/
		$this->data['deals_detail'] = $this->deal->get_details($id);

		$this->data['images'] = $this->deal->get_image_name($id);

		$this->data['offers'] = $this->deal->get_offer($merchant_id,$subcategory_id);
		/*echo "<pre>";
		print_r($this->data['offers']);
		exit();*/
		$this->load->view('front/details', $this->data);
	}
}
