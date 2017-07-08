<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author David Adamo Jr.
*/
class make extends CI_Controller {
	public $data;

	public function __construct()
	{
		parent::__construct();
			$this->data['dependencies'] = $this->load->view('general/dependencies', '', TRUE);
		$this->data['header'] = $this->load->view('bargain/admin/header', '', TRUE);
		$this->data['footer'] = $this->load->view('bargain/admin/footer_includes', '', TRUE);
		$this->data['sidebar'] = $this->load->view('bargain/admin/sidebar', '', TRUE);
		$this->data['head'] = $this->load->view('bargain/admin/head', '', TRUE);

		$this->load->model('producttype_model', 'producttype');
		$this->load->model('country_model', 'country');
		$this->load->model('make_model', 'make');
	}

	public function index()
	{	
		$this->data['date']=$this->make->get();
		// echo $this->db->last_queery();
		$this->load->view('bargain/admin/make', $this->data);
	}

	

	public function editmake(){
		if(isset($_GET)){
			$id=$_GET['id'];
			
			$this->data['make']=$this->make->get_by_id($id);
			// $this->data['countires']=$this->country->get();
			$this->data['producttype']=$this->producttype->get();
			// echo $this->db->last_query();
			// exit();
		}
		$this->load->view('bargain/admin/editmake', $this->data);


	}	
	public function add(){
		$this->data['product_type']=$this->producttype->get();
		// $this->data['states']=$this->state->get();
		$this->load->view('bargain/admin/addMake', $this->data);

	}

	
	 
	 function create(){
	 	if($_POST){
 		$this->make->add($_POST);
	 	}
	 	redirect('admin/make');
	 }


	public function edit(){
		print_r($_POST);
		
		if($_POST){
		$data=array();
		$data['name']=$_POST['name'];
		// $data['country_id']=$_POST['country_id'];
		$data['product_type_id']=$_POST['product_type_id'];


		$id=$_POST['id'];

 		$this->make->edit($data,$id);
	 	// $this->upload_image();
	 	}
	 	redirect('admin/make');

		// $this->load->view('bargain/admin/editmerchant', $this->data);



	}



	function delete(){
		$id=$_GET['id'];
		$this->make->delete($id);

		
	}

	 public function getMake(){
// echo $id;
if(isset($_GET)){

    $string='<li data-original-index="0" class="selected active"><a data-tokens="null" style="" class="" tabindex="0"><span class="text">Select Product</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>';

    $json = [];
        $this->load->database();
        $query = $this->db->select('id,name')
                    ->where('product_type_id',$_GET['id'])
                    ->get("make_master");
                    // echo  $this->db->last_query();
        $json = $query->result();
        // print_r($json);
        $i=0;
        foreach ($json as $value) {
          $string.='<li data-original-index="0"><a data-tokens="null" style="" class="" tabindex="0"><span class="text">'.$value->name.'</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>';
            $i++;
        }
        $json['li']['id']='li';
        $json['li']['name']=$string;
      echo json_encode($json);
      }
}

}