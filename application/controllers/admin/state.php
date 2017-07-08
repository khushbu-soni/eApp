<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author David Adamo Jr.
*/
class state extends CI_Controller {
	public $data;

	public function __construct()
	{
		parent::__construct();
			$this->data['dependencies'] = $this->load->view('general/dependencies', '', TRUE);
		$this->data['header'] = $this->load->view('bargain/admin/header', '', TRUE);
		$this->data['footer'] = $this->load->view('bargain/admin/footer_includes', '', TRUE);
		$this->data['sidebar'] = $this->load->view('bargain/admin/sidebar', '', TRUE);
		$this->data['head'] = $this->load->view('bargain/admin/head', '', TRUE);

		$this->load->model('state_model', 'state');
		$this->load->model('country_model', 'country');
	}

	public function index()
	{	
		$this->data['states']=$this->state->get();
		// echo $this->db->last_queery();
		$this->load->view('bargain/admin/state', $this->data);
	}

	

	public function editstate(){
		if(isset($_GET)){
			$id=$_GET['id'];
			
			$this->data['state']=$this->state->get_by_id($id);
			// $this->data['countires']=$this->country->get();
			echo $this->db->last_query();
		}
		$this->load->view('bargain/admin/editstate', $this->data);


	}	
	public function add(){
		$this->data['countires']=$this->country->get();
		$this->data['states']=$this->state->get();
		$this->load->view('bargain/admin/addstate', $this->data);

	}

	
	 
	 function create(){
	 	if($_POST){
 		$this->state->add($_POST);
	 	}
	 	redirect('admin/state');
	 }


	public function edit(){
		print_r($_POST);
		
		if($_POST){
		$data=array();
		$data['name']=$_POST['name'];
		$data['country_id']=$_POST['country_id'];


		$id=$_POST['id'];

 		$this->state->edit($data,$id);
	 	// $this->upload_image();
	 	}
	 	redirect('admin/state');

		// $this->load->view('bargain/admin/editmerchant', $this->data);



	}



	function delete(){
		$id=$_GET['id'];
		$this->state->delete($id);

		
	}

	

}