<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author David Adamo Jr.
*/
class Town extends CI_Controller {
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
		$this->load->model('town_model', 'town');
	}

	public function index()
	{	
		$this->data['towns']=$this->town->get();
		// echo $this->db->last_queery();
		$this->load->view('bargain/admin/town', $this->data);
	}

	

	public function edittown(){
		if(isset($_GET)){
			$id=$_GET['id'];
			
			$this->data['town']=$this->town->get_by_id($id);
			$this->data['countires']=$this->country->get();
			$this->data['states']=$this->state->get();
			$this->data['cities']=$this->city->get();
			// echo $this->db->last_query();
			// exit();
		}
		$this->load->view('bargain/admin/edittown', $this->data);


	}	
	public function add(){
		$this->data['countires']=$this->country->get();
		$this->data['states']=$this->state->get();
		$this->data['cities']=$this->city->get();
		$this->load->view('bargain/admin/addtown', $this->data);

	}

	
	 
	 function create(){
	 	if($_POST){
 		$this->town->add($_POST);
	 	}
	 	redirect('admin/town');
	 }


	public function edit(){
		print_r($_POST);
		
		if($_POST){
		$data=array();
		$data['name']=$_POST['name'];
		if(isset($_POST['country_id']))
			$data['country_id']=$_POST['country_id'];
		
		if(isset($_POST['state_id']))
				$data['state_id']=$_POST['state_id'];
		if(isset($_POST['city_id']))
				$data['city_id']=$_POST['city_id'];


		$id=$_POST['id'];

 		$this->town->edit($data,$id);
	 	// $this->upload_image();
	 	echo $this->db->last_query();
	 	}
	 	redirect('admin/town');

		// $this->load->view('bargain/admin/editmerchant', $this->data);



	}



	function delete(){
		$id=$_GET['id'];
		$this->town->delete($id);

		
	}

	

}