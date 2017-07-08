<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author David Adamo Jr.
*/
class order extends CI_Controller {
	public $data;

	public function __construct()
	{
		parent::__construct();
			$this->data['dependencies'] = $this->load->view('general/dependencies', '', TRUE);
		$this->data['header'] = $this->load->view('bargain/admin/header', '', TRUE);
		$this->data['footer'] = $this->load->view('bargain/admin/footer_includes', '', TRUE);
		$this->data['sidebar'] = $this->load->view('bargain/admin/sidebar', '', TRUE);
		$this->data['head'] = $this->load->view('bargain/admin/head', '', TRUE);

		$this->load->model('orderitem_model', 'orderitems');
		$this->load->model('order_model', 'order');
	}

	public function index()
	{	

			$this->data['orders']=$this->order->get();
			$this->load->view('bargain/admin/order', $this->data);
			
	}

	public function view()
	{	
		if(isset($_GET['id'])){
			$id=$_GET['id'];
		$this->data['orders']=$this->order->get_by_id($id);
		$this->data['subtotal_info']=$this->orderitems->sumOfSubtotals($id);
		$this->data['tax_info']=$this->orderitems->sumOfTotalTax($id);
		$this->data['discount_info']=$this->orderitems->sumOfTotalDiscount($id);
		$this->data['row_totals']=$this->orderitems->sumOfGrandTotal($id);
		$this->data['orders_items']=$this->orderitems->get_by_id($id);
		$this->data['dealtype_info']=$this->order->get_dealtype($id);
		$this->load->view('bargain/admin/view', $this->data);
		}
	}

	public function invoice()
	{	
		if(isset($_GET['id'])){
			$id=$_GET['id'];
			$this->data['orders']=$this->order->get_invoice_info($id);
			$this->data['row_totals']=$this->orderitems->sumOfGrandTotal($id);
			$this->data['row_totals']=$this->orderitems->sumOfGrandTotal($id);
		$this->load->view('bargain/admin/invoice', $this->data);
		}
	}

	public function delivery()
	{	

		$this->data['deliver_orders']=$this->order->get_all_deliver();
		// $this->data['row_totals']=$this->orderitems->sumOfGrandTotal($id);
		$this->load->view('bargain/admin/deliver', $this->data);
	}

   function salesadjustment(){
   		
		$this->data['orders']=$this->order->get();
   		
	
		$this->load->view('bargain/admin/salesadjustment', $this->data);
   }
	

	public function editcountry(){
		if(isset($_GET)){
			$id=$_GET['id'];
			$this->data['orders']=$this->order->get_invoice_info($id);
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