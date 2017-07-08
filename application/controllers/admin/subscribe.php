<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author David Adamo Jr.
*/
class Subscribe extends CI_Controller {
	public $data;

	public function __construct()
	{
		parent::__construct();
		$this->data['dependencies'] = $this->load->view('general/dependencies', '', TRUE);
		$this->data['header'] = $this->load->view('bargain/admin/header', '', TRUE);
		$this->data['footer'] = $this->load->view('bargain/admin/footer_includes', '', TRUE);
		$this->data['sidebar'] = $this->load->view('bargain/admin/sidebar', '', TRUE);
		$this->data['head'] = $this->load->view('bargain/admin/head', '', TRUE);

		$this->load->model('subscribe_model', 'subscribe');
	}

	public function index()
	{	
		$this->data['subscribe']=$this->subscribe->get();
		// echo $this->db->last_queery();
		$this->load->view('bargain/admin/subscribe', $this->data);
	}

	

	public function editsubscribe(){
		if(isset($_GET)){
			$id=$_GET['id'];
			
			$this->data['subscribe']=$this->subscribe->get_by_id($id);
		}
		$this->load->view('bargain/admin/editsubscribe', $this->data);


	}	
	public function add(){
		$this->load->view('bargain/admin/addsubscribe', $this->data);

	}

	
	 
	 function create(){
	 	if($_POST){
 		$this->subscribe->add($_POST);
	 	}
	 	redirect('admin/subscribe');
	 }


	public function edit(){
		print_r($_POST);
		
		if($_POST){
		$data=array();
		$data['name']=$_POST['name'];


		$id=$_POST['id'];

 		$this->subscribe->edit($data,$id);
	 	// $this->upload_image();
	 	}
	 	redirect('admin/subscribe');

		// $this->load->view('bargain/admin/editmerchant', $this->data);
	}





	function delete(){
		$id=$_GET['id'];
		$this->subscribe->delete($id);

		
	}

	

}