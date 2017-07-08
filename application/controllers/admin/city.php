<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author David Adamo Jr.
*/
class city extends CI_Controller {
	public $data;

	public function __construct()
	{
		parent::__construct();
			$this->data['dependencies'] = $this->load->view('general/dependencies', '', TRUE);
		$this->data['header'] = $this->load->view('bargain/admin/header', '', TRUE);
		$this->data['footer'] = $this->load->view('bargain/admin/footer_includes', '', TRUE);
		$this->data['sidebar'] = $this->load->view('bargain/admin/sidebar', '', TRUE);
		$this->data['head'] = $this->load->view('bargain/admin/head', '', TRUE);

		$this->load->model('city_model', 'city');
		$this->load->model('country_model', 'country');
		$this->load->model('state_model', 'state');
	}

	public function index()
	{	
		$this->data['cities']=$this->city->get();
		// echo $this->db->last_queery();
		$this->load->view('bargain/admin/city', $this->data);
	}

	

	public function editcity(){
		if(isset($_GET)){
			$id=$_GET['id'];
			
			$this->data['city']=$this->city->get_by_id($id);
			// $this->data['countires']=$this->country->get();
			$this->data['states']=$this->state->get();
			// echo $this->db->last_query();
			// exit();
		}
		$this->load->view('bargain/admin/editcity', $this->data);


	}	
	public function add(){
		$this->data['countires']=$this->country->get();
		$this->data['states']=$this->state->get();
		$this->load->view('bargain/admin/addcity', $this->data);

	}

	
	 
	 function create(){
	 	if($_POST){
 		$this->city->add($_POST);
	 	}
	 	redirect('admin/city');
	 }


	public function edit(){
		print_r($_POST);
		
		if($_POST){
		$data=array();
		$data['name']=$_POST['name'];
		// $data['country_id']=$_POST['country_id'];
		$data['state_id']=$_POST['state_id'];


		$id=$_POST['id'];

 		$this->city->edit($data,$id);
	 	// $this->upload_image();
	 	}
	 	redirect('admin/city');

		// $this->load->view('bargain/admin/editmerchant', $this->data);



	}



	function delete(){
		$id=$_GET['id'];
		$this->city->delete($id);

		
	}

	

}