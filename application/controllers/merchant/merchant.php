<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author David Adamo Jr.
*/
class Merchant extends CI_Controller {
	public $data;

	public function __construct()
	{
		parent::__construct();
		$this->data['dependencies'] = $this->load->view('bargain/merchant/merchant-common/dependencies', '', TRUE);
		$this->data['header'] = $this->load->view('bargain/merchant/merchant-common/header', '', TRUE);
		$this->data['sidebar'] = $this->load->view('bargain/merchant/merchant-common/sidebar', '', TRUE);
		$this->data['footer'] = $this->load->view('bargain/merchant/merchant-common/footer_includes', '', TRUE);
		$this->data['head'] = $this->load->view('bargain/merchant/merchant-common/head', '', TRUE);
		$this->data['name'] = $this->session->userdata('name');
		$this->load->model('merchant_model', 'merchant');
		//echo $this->session->userdata('merchant_id');
		//echo $this->session->userdata('username');
	}

	public function index()
	{
		$this->load->view('bargain/merchant/login',$this->data);
	}

	public function products()
	{
		//echo $this->session->userdata('name');
		$this->data['products'] = $this->merchant->get_product();
		// print_r($this->data['products']);
		// exit();

		$this->load->view('bargain/merchant/products', $this->data);
	}

	public function add_product()
	{
		$this->data['location'] = $this->merchant->get_location();
		$this->data['category'] = $this->merchant->get_category();

		$this->load->view('bargain/merchant/add_products', $this->data);
	}

	public function insert_product()
	{
		$this->upload_image();
		$this->upload_barcode();
		$query = $this->merchant->insert_product();
		if($query == TRUE)
		{
			//echo "inserted successfully";
			redirect('merchant/merchant/products');
		}
		else
		{
			echo "fail";
		}
	}

	public function edit_product()
	{

		$id = $this->input->get('id');
		$this->data['locations'] = $this->merchant->get_location();
		$this->data['categories'] = $this->merchant->get_category();
		$this->data['product'] = $this->merchant->get_product_details($id);

		$loc_id = $this->data['product']->location_id;
		$this->data['location'] = $this->merchant->location($loc_id);
		//exit();

		$cat_id = $this->data['product']->category_id;
		$this->data['category'] = $this->merchant->category($cat_id);

		$this->load->view('bargain/merchant/edit_products', $this->data);
	}

	public function update_product()
	{
		/*$img_name = preg_replace('/[ ()]/s', '', $_FILES['img']['name']);
        $barcode = preg_replace('/[ ()]/s', '', $_FILES['barcode']['name']);

        echo $img_name;
        exit();*/
		$this->upload_image();
		$this->upload_barcode();
		$query = $this->merchant->update_product();
		if($query == TRUE)
		{
			//echo "inserted successfully";
			redirect('merchant/merchant/products');
		}
		else
		{
			echo "fail";
		}
	}

	public function upload_barcode()
	{
		$target_dir ="assets/bargain/merchant/logo/";
		$filename = preg_replace('/[ ()]/s', '', $_FILES['barcode']['name']);

		$target_file = $target_dir . $filename;
		
		//echo $target_file;
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if ($_FILES["barcode"]["size"] > 500000)
		{
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		    exit();
		}

		if(move_uploaded_file($_FILES["barcode"]["tmp_name"], $target_file))
		{
			chmod($target_file,0777);
	    }
		// return true;
	}

	public function upload_image()
	{
		// print_r($_GET);

		$target_dir ="assets/bargain/merchant/";
		$filename = preg_replace('/[ ()]/s', '', $_FILES['img']['name']);

		$target_file = $target_dir . $filename;
		
		//echo $target_file;
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if ($_FILES["img"]["size"] > 500000)
		{
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		    exit();
		}
		
		if(move_uploaded_file($_FILES["img"]["tmp_name"], $target_file))
		{
			chmod($target_file,0777);
	       /* echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
	        return $_FILES["img"]["name"];*/
		}
		// return true;
	}

	public function delete_product()
	{
		$id = $this->input->get('id');
		
		$query = $this->merchant->delete_product($id);
		if($query)
		{
			redirect('merchant/merchant/products');
		}
		else
		{
			echo "error";
		}
	}



	/*public function disable()
	{
		$id = $this->input->get('id');
		if(isset($_GET)){
			//$id=$_GET['id'];
			$this->merchant->disable($id);
		}
	}

	public function enable()
	{
		$id = $this->input->get('id');
		if(isset($_GET)){
			//$id=$_GET['id'];
			$this->merchant->enable($id);
		}
	}

	public function unmark_featured()
	{
		$id = $this->input->get('id');
		if(isset($_GET)){
			//$id=$_GET['id'];
			$this->merchant->unmark_featured($id);
		}
	}


	public function mark_featured()
	{
		if(isset($_GET)){
			$id=$_GET['id'];
			$this->merchant->mark_featured($id);
		}
	}*/

	public function login()
	{
			

			$username=$_POST['username'];
		
			$password=$_POST['password'];
			/*echo $username;
			exit();*/

		$data = $this->merchant->check_merchant($username,$password);
		// echo $this->db->last_query();
		// print_r($data);
		if ($data){

			$this->session->set_userdata('name', $data->name);
			$this->session->set_userdata('username', $data->username);
			$this->session->set_userdata('merchant_id', $data->id);
			
			redirect('merchant/merchant/products');

		} else {
			// echo '0';
			redirect('merchant/merchant');
			// $this->load->view('welcome',$this->data);
			// $this->session->set_flashdata('successmsg', "Invald Username Password");
			// redirect('admin');

			// redirect('welcome');
		}
	}

	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->sess_destroy();
		redirect('merchant/merchant/');
	}
	
}