<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author David Adamo Jr.
*/
class model extends CI_Controller {
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
		$this->load->model('model_model', 'model');
		$this->load->model('make_model', 'make');
	}

	public function index()
	{	
		$this->data['date']=$this->model->get();
		// echo $this->db->last_queery();
		$this->load->view('bargain/admin/model', $this->data);
	}

	

	public function editmodel(){
		if(isset($_GET)){
			$id=$_GET['id'];
			
			$this->data['model']=$this->model->get_by_id($id);
			// $this->data['countires']=$this->country->get();
			$this->data['make']=$this->make->get();
			// echo $this->db->last_query();
			// exit();
		}
		$this->load->view('bargain/admin/editmodel', $this->data);


	}	
	public function add(){
		$this->data['make']=$this->make->get();
		// $this->data['states']=$this->state->get();
		$this->load->view('bargain/admin/addModel', $this->data);

	}

	
	 
	 function create(){
	 	if($_POST){
 		$this->model->add($_POST);
	 	}
	 	redirect('admin/model');
	 }


	public function edit(){
		print_r($_POST);
		
		if($_POST){
		$data=array();
		$data['name']=$_POST['name'];
		// $data['country_id']=$_POST['country_id'];
		$data['make_id']=$_POST['make_id'];


		$id=$_POST['id'];

 		$this->model->edit($data,$id);
	 	// $this->upload_image();
	 	}
	 	redirect('admin/model');

		// $this->load->view('bargain/admin/editmerchant', $this->data);



	}



	function delete(){
		$id=$_GET['id'];
		$this->model->delete($id);

		
	}

	public function getModel(){
// echo $id;
if(isset($_GET)){

    $string='<li data-original-index="0" class="selected active"><a data-tokens="null" style="" class="" tabindex="0"><span class="text">Select Model</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>';

    $json = [];
        $this->load->database();
        $query = $this->db->select('id,name')
                    ->where('make_id',$_GET['id'])
                    ->get("model_master");
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

 public function getAllModel(){


    $json = [];
        $this->load->database();
        $query = $this->db->select('id,name')
                    ->get("model_master");
                    // echo  $this->db->last_query();
        $json = $query->result();

      echo json_encode($json);
      } 


}