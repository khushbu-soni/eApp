<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author David Adamo Jr.
*/
class Category extends CI_Controller {
	public $data;

	public function __construct()
	{
		parent::__construct();
			$this->data['dependencies'] = $this->load->view('general/dependencies', '', TRUE);
		$this->data['header'] = $this->load->view('bargain/admin/header', '', TRUE);
		$this->data['footer'] = $this->load->view('bargain/admin/footer_includes', '', TRUE);
		$this->data['sidebar'] = $this->load->view('bargain/admin/sidebar', '', TRUE);
		$this->data['head'] = $this->load->view('bargain/admin/head', '', TRUE);

		$this->load->model('category_model', 'category');
	}

	public function index()
	{	
		$this->load->view('bargain/admin/category', $this->data);
	}

	public function get(){
		$category=$this->category->get_parent();
		// echo $this->db->last_query();
		// print_r($category);
		// echo count($category);
		$tr='';

									
    	$i=1;
		foreach ($category as $junk) {
			$tr.="<tr>
					<th scope='row'>".$i."</th>
					<td>".$junk->name."</td>
					<td><button class='btn btn-sm btn-warning warning_33' data-toggle='modal' data-target='#editCategory' onclick='ediCategory(".$junk->id.")'>Edit</button></td>
					<td><button class='btn btn-danger' onclick='deleteCat(".$junk->id.")'>Delete</button></td>
					";
					$i++;
		}
		echo $tr;

	}

	public function get_sub(){
		$category=$this->category->get_sub();
		// echo $this->db->last_query();
		// print_r($category);
		// echo count($category);
		$tr='';

									
    	$i=1;
		foreach ($category as $junk) {
			$tr.="<tr>
					<th scope='row'>".$i."</th>
					<td>".$junk->parent_category."</td>
					<td>".$junk->sub_category."</td>
					<td><button class='btn btn-sm btn-warning warning_33' data-toggle='modal' data-target='#editCategory' onclick='ediCategory(".$junk->id.")' >Edit</button></td>
					<td><button class='btn btn-danger' onclick='deleteCat(".$junk->id.")'>Delete</button></td>
					";
					$i++;
		}
		echo $tr;

	}


	function sub(){
		$this->load->view('bargain/admin/subcategory', $this->data);
		
	}

	function getEditForm(){
		// <form>
      
  //     <div class="form-group has-warning">
  //       <label class="control-label" for="inputWarning1">Category Name</label>
  //       <input type="text" class="form-control1" id="inputWarning1">
  //     </div>
     
  //   </form>


	$category=$this->category->get_by_id($_GET['id']);
	// print_r($category);
	$form="<form>
			<div class='form-group has-warning'>
		   	<input type='hidden' id='category_id'  class='form-control1' value='".$_GET['id']."' id='inputWarning1'>
		   	<input type='text' id='edit_category' class='form-control1' value='".$category['name']."' id='inputWarning1'>
			</div>
			";
			echo $form;

	}

	function getSubCategoryEditForm(){
		// <form>
      
  //     <div class="form-group has-warning">
  //       <label class="control-label" for="inputWarning1">Category Name</label>
  //       <input type="text" class="form-control1" id="inputWarning1">
  //     </div>
     
  //   </form>


	$category=$this->category->get_by_id($_GET['id']);
	// print_r($category);
	$form="<form>
			<div class='form-group has-warning'>
		   	<input type='hidden' id='category_id'  class='form-control1' value='".$_GET['id']."' id='inputWarning1'>
			<label>Category Name</lable>
		   	<input type='text' id='edit_category' class='form-control1' value='".$category['name']."' id='inputWarning1'>
			</div>
			<div class='form-group has-warning'>
			<label>Parent Category</lable>
			<select name='parent_id' id='parent_id' class='form-control1'>";
		$parent_category=$this->category->get_parent();
			$selected='';
									foreach ($parent_category as $junk) {
										if($junk->parent_id==$category['parent_id'])
											$selected='selected';
										$form.="<option value='".$junk->id."' ".$selected." >".$junk->name.".</option>";
										}	
			$form.="</select></div>";

			echo $form;

	}

	function getAddForm(){
	

	// print_r($category);
	$form="<form>
			<div class='form-group has-warning'>
		   	<input type='text' id='add_category' class='form-control1' value='' id='inputWarning1' required>
			</div>
			";
			echo $form;

	}

	function getAddSubForm(){
	

	// print_r($category);
	$form="<form>
			<div class='form-group has-warning'>
			<label>Sub Category Name</lable>
		   	<input type='text' id='add_category' class='form-control1' value='' id='inputWarning1'>
			</div>
			<div class='form-group has-warning'>
			<label>Parent Category</lable>
			<select name='parent_id' id='parent_id' class='form-control1'>";
			$parent_category=$this->category->get_parent();
			$selected='';
									foreach ($parent_category as $junk) {
										
										$form.="<option value='".$junk->id."'  >".$junk->name.".</option>";
										}	
			$form.="</select></div>";

			echo $form;

	}

	function edit(){
		$id=$_GET['id'];
		$name=$_GET['name'];
		if($this->category->edit($id,$name)){

				$category=$this->category->get_parent();
		// echo $this->db->last_query();
		// print_r($category);
		// echo count($category);
		$tr='';

									
    	$i=1;
		foreach ($category as $junk) {
			$tr.="<tr>
					<th scope='row'>".$i."</th>
					<td>".$junk->name."</td>
					<td><button class='btn btn-sm btn-warning warning_33' data-toggle='modal' data-target='#editCategory' onclick='ediCategory(".$junk->id.")' >Edit</button></td>
					<td><button class='btn btn-danger' onclick='deleteCat(".$junk->id.")'>Delete</button></td>
					";
					$i++;
		}
		echo $tr;
		}			
		
	}

	function edit_sub_cat(){
		$id=$_GET['id'];
		$parent_id=$_GET['parent_id'];
		$name=$_GET['name'];
		if($this->category->edit($id,$name,$parent_id)){

				$category=$this->category->get_sub();
		// echo $this->db->last_query();
		// print_r($category);
		// echo count($category);
		$tr='';

									
    	$i=1;
		foreach ($category as $junk) {
			$tr.="<tr>
					<th scope='row'>".$i."</th>
					<td>".$junk->parent_category."</td>
					<td>".$junk->sub_category."</td>
					<td><button class='btn btn-sm btn-warning warning_33' data-toggle='modal' data-target='#editSubCategory' onclick='ediCategory(".$junk->id.")' >Edit</button></td>
					<td><button class='btn btn-danger' onclick='deleteCat(".$junk->id.")'>Delete</button></td>
					";
					$i++;
		}
		echo $tr;
		}			
		
	}

	function add(){
		$name=$_GET['name'];
		$this->category->add($name);
		$category=$this->category->get_parent();
		// echo $this->db->last_query();
		// print_r($category);
		// echo count($category);
		$tr='';

									
    	$i=1;
		foreach ($category as $junk) {
			$tr.="<tr>
					<th scope='row'>".$i."</th>
					<td>".$junk->name."</td>
					<td><button class='btn btn-sm btn-warning warning_33' data-toggle='modal' data-target='#editCategory' onclick='ediCategory(".$junk->id.")' >Edit</button></td>
					<td><button class='btn btn-danger' onclick='deleteCat(".$junk->id.")'>Delete</button></td>
					";
					$i++;
		}
		echo $tr;
				
		
	}

	function addSub(){
		$name=$_GET['name'];
		$parent_id=$_GET['parent_id'];
		$this->category->add($name,$parent_id);
		$category=$this->category->get_sub();
		// echo $this->db->last_query();
		// print_r($category);
		// echo count($category);
		$tr='';

									
    	$i=1;
		foreach ($category as $junk) {
			$tr.="<tr>
					<th scope='row'>".$i."</th>
					<td>".$junk->parent_category."</td>
					<td>".$junk->sub_category."</td>
					<td><button class='btn btn-sm btn-warning warning_33' data-toggle='modal' data-target='#editCategory' onclick='ediCategory(".$junk->id.")' >Edit</button></td>
					<td><button class='btn btn-danger' onclick='deleteCat(".$junk->id.")'>Delete</button></td>
					";
					$i++;
		}
		echo $tr;
				
		
	}

	function addSubCategory(){
		$name=$_GET['name'];
		$parent_id=$_GET['parent_id'];
		$this->category->add($name);
		$category=$this->category->get_parent();
		// echo $this->db->last_query();
		// print_r($category);
		// echo count($category);
		$tr='';

									
    	$i=1;
		foreach ($category as $junk) {
			$tr.="<tr>
					<th scope='row'>".$i."</th>
					<td>".$junk->parent_category."</td>
					<td>".$junk->sub_category."</td>
					<td><button class='btn btn-sm btn-warning warning_33' data-toggle='modal' data-target='#editCategory' onclick='ediCategory(".$junk->id.")' >Edit</button></td>
					<td><button class='btn btn-danger' onclick='deleteCat(".$junk->id.")'>Delete</button></td>
					";
					$i++;
		}
		echo $tr;
				
		
	}

	function delete(){
		$id=$_GET['id'];
		if($this->category->delete($id)){

				$category=$this->category->get_parent();
		// echo $this->db->last_query();
		// print_r($category);
		// echo count($category);
		$tr='';

									
    	$i=1;
		foreach ($category as $junk) {
			$tr.="<tr>
					<th scope='row'>".$i."</th>
					<td>".$junk->name."</td>
					<td><button class='btn btn-sm btn-warning warning_33' data-toggle='modal' data-target='#editCategory' onclick='ediCategory(".$junk->id.")' >Edit</button></td>
					<td><button class='btn btn-danger' onclick='deleteCat(".$junk->id.")'>Delete</button></td>
					";
					$i++;
		}
		echo $tr;
		}			
		
	}

function deleteSub(){
		$id=$_GET['id'];
		if($this->category->delete($id)){

				$category=$this->category->get_sub();
		// echo $this->db->last_query();
		// print_r($category);
		// echo count($category);
		$tr='';

									
    	$i=1;
		foreach ($category as $junk) {
			$tr.="<tr>
					<th scope='row'>".$i."</th>
					<td>".$junk->parent_category."</td>
					<td>".$junk->sub_category."</td>
					<td><button class='btn btn-sm btn-warning warning_33' data-toggle='modal' data-target='#editCategory' onclick='ediCategory(".$junk->id.")' >Edit</button></td>
					<td><button class='btn btn-danger' onclick='deleteCat(".$junk->id.")'>Delete</button></td>
					";
					$i++;
		}
		echo $tr;
		}			
		
	}

}