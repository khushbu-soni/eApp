<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author David Adamo Jr.
*/
class Merchant extends CI_Controller {
	public $data;

	public function __construct()
	{
		parent::__construct();
			$this->data['dependencies'] = $this->load->view('general/dependencies', '', TRUE);
		$this->data['header'] = $this->load->view('bargain/admin/header', '', TRUE);
		$this->data['footer'] = $this->load->view('bargain/admin/footer_includes', '', TRUE);
		$this->data['sidebar'] = $this->load->view('bargain/admin/sidebar', '', TRUE);
		$this->data['head'] = $this->load->view('bargain/admin/head', '', TRUE);

		$this->load->model('merchant_model', 'merchant');
	}

	public function index()
	{	
		$this->data['merchant']=$this->merchant->get();
		$this->load->view('bargain/admin/merchant', $this->data);
	}

	public function edit(){
		if(isset($_GET)){
			$id=$_GET['id'];
			$this->data['merchant']=$this->merchant->get_by_id($id);
		}
		$this->load->view('bargain/admin/editmerchant', $this->data);
	}

	public function payment(){
		if(isset($_GET)){
			$id=$_GET['id'];
			$this->data['merchant']=$this->merchant->get_by_id($id);
		}
		$this->load->view('bargain/admin/payment', $this->data);
	}

	public function address(){
		if(isset($_GET)){
			$id=$_GET['id'];
			$this->data['merchant']=$this->merchant->get_by_id($id);
		}
		$this->load->view('bargain/admin/address', $this->data);
	}

	public function account(){
		if(isset($_GET)){
			$id=$_GET['id'];
			$this->data['merchant']=$this->merchant->get_by_id($id);
		}
		$this->load->view('bargain/admin/account', $this->data);
	}

	public function add(){
		
		$this->load->view('bargain/admin/addmerchant', $this->data);

	}	
	 function addmerchant(){
	 	print_r($_POST);
	 	print_r($_FILES);
	 	if($_POST){
 		$this->merchant->add($_POST);
	 	$this->upload_image();
	 	}
	 	redirect('admin/merchant');
	 }

	public function editmerchant(){
		print_r($_POST);
		print_r($_FILES);
		if($_POST){
		$data=array();
		$data['name']=$_POST['name'];
		$data['logo']=$_POST['logo'];
		$data['website']=$_POST['website'];
		$data['email']=$_POST['email'];
		$data['fb_link']=$_POST['fb_link'];
		$data['twitter_link']=$_POST['twitter_link'];
		$data['phone']=$_POST['phone'];
		$data['mobile']=$_POST['mobile'];
		$data['description']=$_POST['description'];

		$id=$_POST['id'];

 		$this->merchant->edit($data,$id);
	 	$this->upload_image();
	 	}
	 	redirect('admin/merchant');

		// $this->load->view('bargain/admin/editmerchant', $this->data);



	}

	public function updatepayment(){
		print_r($_POST);
		if(isset($_POST)){
		$data=array();
		$data['bank_information']=$_POST['bank_information'];
		$data['other_information']=$_POST['other_information'];
		$data['paypal_email']=$_POST['paypal_email'];
		$id=$_POST['id'];

 		$this->merchant->edit($data,$id);
 	// 	echo $this->db->last_query();
		// exit();
	 	}
	 	redirect('admin/merchant');

		// $this->load->view('bargain/admin/editmerchant', $this->data);

	}

	public function updateaddress(){
		print_r($_POST);
		if(isset($_POST)){
		$data=array();
		$data['address1']=$_POST['address1'];
		$data['address2']=$_POST['address2'];
		$data['address3']=$_POST['address3'];
		$data['address4']=$_POST['address4'];
		$data['address5']=$_POST['address5'];
		$data['redeem_at']=$_POST['redeem_at'];
		$id=$_POST['id'];

 		$this->merchant->edit($data,$id);
 	// 	echo $this->db->last_query();
		// exit();
	 	}
	 	redirect('admin/merchant');

		// $this->load->view('bargain/admin/editmerchant', $this->data);

	}


	public function updateaccount(){


		// print_r($_POST);
		if(isset($_POST)){
		$data=array();
		$data['username']=$_POST['username'];
		$data['password']=$_POST['password'];
		if(isset($_POST['allow_merchant_to_add_edit_deals']))
				$data['allow_merchant_to_add_edit_deals']=$_POST['allow_merchant_to_add_edit_deals'];
		if(isset($_POST['allow_merchant_to_delete_deals']))
		$data['allow_merchant_to_delete_deals']=$_POST['allow_merchant_to_delete_deals'];
		if(isset($_POST['require_administrator_approval']))
			$data['require_administrator_approval']=$_POST['require_administrator_approval'];
		if(isset($_POST['allow_merchant_to_view_their_sales']))
		$data['allow_merchant_to_view_their_sales']=$_POST['allow_merchant_to_view_their_sales'];
		if(isset($_POST['edit_and_view_their_details']))
				$data['edit_and_view_their_details']=$_POST['edit_and_view_their_details'];
		
		$id=$_POST['id'];

 		$this->merchant->edit($data,$id);
		echo $this->db->last_query();
		exit(); 	
	 	}
	 	redirect('admin/merchant');

		// $this->load->view('bargain/admin/editmerchant', $this->data);



	}


	function upload_image(){
		// print_r($_GET);

			$target_dir ="assets/bargain/merchant/logo/";
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


	

	

	function enable(){
		if(isset($_GET)){
			$id=$_GET['id'];
			$this->merchant->markEnable($id);
		}
	}

	function disable(){
		if(isset($_GET)){
			$id=$_GET['id'];
			$this->merchant->markDisable($id);
		}
	}
	
	

	function delete(){
		$id=$_GET['id'];
		$this->merchant->delete($id);

		
	}

}