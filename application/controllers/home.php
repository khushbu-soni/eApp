<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->data['header_includes']=$this->load->view('front/common/header_includes');	
		// $this->data['location']=$this->load->view('front/common/location');	
		$this->data['header']=$this->load->view('front/common/header');	
		// $this->data['location']=$this->load->view('front/common/location');	
		// $this->data['head']=$this->load->view('common/head');	
		// $this->data['footer']=$this->load->view('front/common/footer');
		$this->load->model('deal_model', 'deal');
	}


	public function index()
	{
		
		$this->data['query'] = $this->deal->get_deal();
		
		/*print_r($this->data['query']);
		exit();*/
		$this->load->view('front/home',$this->data);
		
	}

/*	public function details()
	{
		$this->load->view('front/details',$this->data);
	}*/



	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */