<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author David Adamo Jr.
*/
class country extends CI_Controller {
	public $data;

	public function __construct()
	{
		parent::__construct();
			$this->data['dependencies'] = $this->load->view('general/dependencies', '', TRUE);
		$this->data['header'] = $this->load->view('bargain/admin/header', '', TRUE);
		$this->data['footer'] = $this->load->view('bargain/admin/footer_includes', '', TRUE);
		$this->data['sidebar'] = $this->load->view('bargain/admin/sidebar', '', TRUE);
		$this->data['head'] = $this->load->view('bargain/admin/head', '', TRUE);

		$this->load->model('country_model', 'country');
	}

	public function index()
	{	
		$this->data['countries']=$this->country->get();
		// echo $this->db->last_queery();
		$this->load->view('bargain/admin/country', $this->data);
	}

	

	public function editcountry(){
		if(isset($_GET)){
			$id=$_GET['id'];
			
			$this->data['country']=$this->country->get_by_id($id);
		}
		$this->load->view('bargain/admin/editcountry', $this->data);


	}	
	public function add(){
		$this->load->view('bargain/admin/addcountry', $this->data);

	}

	
	 
	 function create(){
	 	if($_POST){
 		$this->country->add($_POST);
	 	}
	 	redirect('admin/country');
	 }


	public function edit(){
		print_r($_POST);
		
		if($_POST){
		$data=array();
		$data['name']=$_POST['name'];


		$id=$_POST['id'];

 		$this->country->edit($data,$id);
	 	// $this->upload_image();
	 	}
	 	redirect('admin/country');

		// $this->load->view('bargain/admin/editmerchant', $this->data);



	}


	function delete(){
		$id=$_GET['id'];
		$this->country->delete($id);

		
	}

	

}