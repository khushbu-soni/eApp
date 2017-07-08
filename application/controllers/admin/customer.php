<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author David Adamo Jr.
*/
class Customer extends CI_Controller {
	public $data;

	public function __construct()
	{
		parent::__construct();
			$this->data['dependencies'] = $this->load->view('general/dependencies', '', TRUE);
		$this->data['header'] = $this->load->view('bargain/admin/header', '', TRUE);
		$this->data['footer'] = $this->load->view('bargain/admin/footer_includes', '', TRUE);
		$this->data['sidebar'] = $this->load->view('bargain/admin/sidebar', '', TRUE);
		$this->data['head'] = $this->load->view('bargain/admin/head', '', TRUE);

		$this->load->model('customer_model', 'customers');
		$this->load->model('customer_group_model', 'customergroup');
		$this->load->model('country_model', 'country');
		$this->load->model('state_model', 'state');
		$this->load->model('city_model', 'city');
		$this->load->model('town_model', 'town');
		$this->load->model('merchant_model', 'merchant');
	}

	public function index()
	{	
		$this->load->model('customer_group_model', 'customergroup');
		$this->data['customer']=$this->customers->get_customer_details();
		// $this->data['customergroup']=$this->customergroup->get();
		// echo $this->db->last_queery();
		$this->load->view('bargain/admin/customer_manage', $this->data);
	}

	public function couponoption()
	{	

		if(isset($_GET)){
			$deal_id=$_GET['id'];
			$this->data['couponoption']=$this->deal->get_by_id($deal_id);
			$this->load->view('bargain/admin/couponoption', $this->data);
		}
	}


	public function updatecouponoption(){
		print_r($_POST);
		// exit();		
		if(isset($_POST)){
		$data=array();
		$data['expiry_date']=$_POST['expiry_date'];
		$data['display_price']=$_POST['display_price'];
		$data['display_merchant_address']=$_POST['display_merchant_address'];
		$data['display_merchant_contact_info']=$_POST['display_merchant_contact_info'];
		$data['display_fine_print']=$_POST['display_fine_print'];
		$data['display_highlights']=$_POST['display_highlights'];
		$data['display_merchant_logo']=$_POST['display_merchant_logo'];
		$data['display_product_image']=$_POST['display_product_image'];
		$data['barcode_image']=$_POST['barcode_image'];
		
		

		$id=$_POST['id'];

 		$this->deal->edit($data,$id);
 		// echo $this->db->last_query();
 		// exit();
	 	$this->upload_barcode_image();
	 	}
	 	redirect('admin/deal');

	}	

	public function group()
	{	
		$this->data['customergroup']=$this->customergroup->get();
		$this->load->view('bargain/admin/customer_group_details', $this->data);
	}

	public function images(){
		if(isset($_GET)){
			$deal_id=$_GET['id'];
			$this->data['images']=$this->deal->get_images_by_deal($deal_id);
			$this->load->view('bargain/admin/images', $this->data);
		}
	}

	public function editgroup(){
		if(isset($_GET)){
			$id=$_GET['id'];

			$this->data['customergroup']=$this->customergroup->get_by_id($id);
		}
		$this->load->view('bargain/admin/editcustomergroup', $this->data);


	}

	public function edit_customer(){
		if(isset($_GET)){
			$id=$_GET['id'];
			$this->data['merchants']=$this->merchant->getActive();
			$this->data['country']=$this->country->get();
			$this->data['state']=$this->state->get();
			$this->data['city']=$this->city->get();
			$this->data['town']=$this->town->get();
			$this->data['customergroup']=$this->customergroup->get();
			$this->data['customer']=$this->customers->get_by_id($id);
		}
		$this->load->view('bargain/admin/editcustomer', $this->data);


	}	
	public function add(){
			$this->data['merchants']=$this->merchant->getActive();
			$this->data['country']=$this->country->get();
			$this->data['state']=$this->state->get();
			$this->data['city']=$this->city->get();
			$this->data['town']=$this->town->get();
			$this->data['dealtype']=$this->dealtype->get();
		$this->load->view('bargain/admin/adddeal', $this->data);

	}

	public function addgroup(){
		
		$this->load->view('bargain/admin/addcustomer_group', $this->data);

	}	

	public function addimages(){
		
		$this->load->view('bargain/admin/adddealtype', $this->data);

	}	

	public function inventory(){
		if(isset($_GET)){
		$id=$_GET['id'];
		$this->data['inventory_info']=$this->deal->get_by_id($id);
		$this->load->view('bargain/admin/inventory', $this->data);
		}

	}	


	 function adddeal(){
	 	
	 	if($_POST){
 		$this->deal->add($_POST);
	 	}
	 	redirect('admin/deal');
	 } 

	 function addImage(){
	 	
	 	if($_POST){
	 		$this->upload_image();
 		$this->deal->addImage($_POST);
	 	}
	 	redirect('admin/deal/images?id='.$_POST['deal_id']);
	 } 

	 	function upload_image(){
		// print_r($_GET);

			$target_dir ="assets/bargain/deals/";
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

	function upload_barcode_image(){
		// print_r($_GET);

			$target_dir ="assets/bargain/deals/barcode/";
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

	 function creategroup(){
	 	if($_POST){
 		$this->customergroup->add($_POST);
	 	}
	 	redirect('admin/customer/group');
	 }

	public function updatecustomergroup(){
		print_r($_POST);
		
		if($_POST){
		$data=array();
		$data['name']=$_POST['name'];
		

		$id=$_POST['id'];

 		$this->customergroup->edit($data,$id);
	 	// $this->upload_image();
	 	}
	 	redirect('admin/customer/group');

		// $this->load->view('bargain/admin/editmerchant', $this->data);



	}	

	public function edit(){
		print_r($_POST);
		// exit();		
		if($_POST){
		$data=array();
		$data['name']=$_POST['name'];
		$data['group_id']=$_POST['group_id'];
		$data['email']=$_POST['email'];
		$data['password']=$_POST['password'];
		$data['phone_no']=$_POST['phone_no'];
		$data['country']=$_POST['country'];
		$data['state']=$_POST['state'];
		$data['home_town']=$_POST['home_town'];
		$data['registration_date']=$_POST['registration_date'];
		$data['permanent_address']=$_POST['permanent_address'];
		$data['shipping_address']=$_POST['shipping_address'];
		$data['group_id']=$_POST['customergroup_id'];
		

		$id=$_POST['id'];

 		$this->customers->edit($data,$id);
	 	// $this->upload_image();
	 	}
	 	redirect('admin/customer');

		// $this->load->view('bargain/admin/editmerchant', $this->data);
	}

	public function editInventory(){
		// print_r($_POST);
		// exit();		
		if($_POST){
		$data=array();
		$data['notify_for_qty_below']=$_POST['notify_for_qty_below'];
		$data['target_qty']=$_POST['target_qty'];
		$data['max_purchase_per_customer']=$_POST['max_purchase_per_customer'];
		$data['qty_item_out_stock']=$_POST['qty_item_out_stock'];
		$data['stock_availbilty']=$_POST['stock_availbilty'];
		
		

		$id=$_POST['id'];

 		$this->deal->edit($data,$id);
	 	// $this->upload_image();
	 	}
	 	redirect('admin/deal/inventory?id='.$id);

		// $this->load->view('bargain/admin/editmerchant', $this->data);
	}







	function enable(){
		if(isset($_GET)){
			$id=$_GET['id'];
			$this->deal->markEnable($id);
		}
	}

	function disable(){
		if(isset($_GET)){
			$id=$_GET['id'];
			$this->deal->markDisable($id);
		}
	}
	
	

	function delete(){
		$id=$_GET['id'];
		$this->deal->delete($id);

		
	}

	function deleteCustomer(){
		$id=$_GET['id'];
		$this->customers->delete($id);

		
	}

	function deleteCustomerGroup(){
		$id=$_GET['id'];
		$this->customergroup->delete($id);

		
	}

	function deleteImage(){
		$id=$_GET['id'];
		$image_name=$this->deal->getImageName($id);
		print_r($image_name);
		$url='assets/bargain/deals/'.$image_name['name'];
		unlink($url);
		// exit();
		$this->deal->deleteImage($id);

		
	}

}