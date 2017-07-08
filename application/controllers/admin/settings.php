<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author David Adamo Jr.
*/
class settings extends CI_Controller {
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
		$this->load->model('city_model', 'city');
		$this->load->model('config_model', 'config_model');
	}

	public function index()
	{	
		$this->data['config']=$this->config_model->get_by_id(1);
		$this->data['city']=$this->city->get();
		// echo $this->db->last_queery();
		$this->load->view('bargain/admin/setting', $this->data);
	}

	

	public function editcountry(){
		if(isset($_GET)){
			$id=$_GET['id'];
			
			$this->data['config']=$this->config->get_by_id($id);
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
		// exit();
		if(isset($_POST)){
		$data=array();
		$data['enable_ecommerce']=$_POST['enable_ecommerce'];
		$data['enable_subscribe_popup']=$_POST['enable_subscribe_popup'];
		$data['display_top_add_banner']=$_POST['display_top_add_banner'];
		$data['top_add_banner_image']=$_POST['top_add_banner_image'];
		$data['max_number_of_slide_deals']=$_POST['max_number_of_slide_deals'];
		$data['home_page_display_deals_city']=$_POST['home_page_display_deals_city'];
		$data['display_featured_deals_on_home_page']=$_POST['display_featured_deals_on_home_page'];
		$data['display_popular_deals_on_home_page']=$_POST['display_popular_deals_on_home_page'];


		$id=$_POST['id'];

 		$this->config_model->updateConfig($data,$id);
 		// echo $this->db->last_query();
 		// exit();
	 	$this->upload_image();
	 	}
	 	redirect('admin/settings');

		// $this->load->view('bargain/admin/editmerchant', $this->data);
	}

	function delete(){
		$id=$_GET['id'];
		$this->country->delete($id);

		
	}


	function upload_image(){
		// print_r($_GET);

			$target_dir ="assets/bargain/adds/banner/";
			$target_file = $target_dir . basename($_FILES["imgImp"]["name"]);
			echo $target_file;
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if ($_FILES["imgImp"]["size"] > 500000) {
					    echo "Sorry, your file is too large.";
					    $uploadOk = 0;
					    exit();
			}
			 if (move_uploaded_file($_FILES["imgImp"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["imgImp"]["name"]). " has been uploaded.";
        return $_FILES["imgImp"]["name"];
    } else {
        echo "Sorry, there was an error uploading your file.";
		 print_r($_FILES['imgImp']['error']);
    }
				// return true;
	}	


}