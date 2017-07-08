<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author David Adamo Jr.
*/
class Category extends CI_Controller {
	public $data;

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('deal_modal', '', TRUE);
    $this->load->model('category_model', 'category');
		// $this->load->model('api_url_model', 'api_url', TRUE);
		
	}

   /** Objective is to get deal for mobile 
    * @param string division 
    * @param string country  
    * @return array having data and status
    */
   public function get_main_category() {
      $response = array('category' => 'error', 'data' => '');
      // $this->load->model('deal_modal', '', TRUE);
      // $post = $this->input->post();
      // $nearby_id = '';
      // $default_deal_division = 'india'; 
      // if(!empty($division)){
      //    $default_deal_division = $division;
      // }
      $main_category_list = $this->category->get_main_category();

       if (!empty($main_category_list)) {
         foreach ($main_category_list as $category) {
             // $date = date('d F, Y', strtotime($deal['deal_date']));
             $data[] = array(
               'id' => $category->id,
               'name' => $category->name,
               // 'deal_date' => $date
               );
             $response['status'] = 'done';
         }
         
      }
      $response = array('data' => $data);
      header('Content-Type: application/json');
      // print_r($response);

      echo json_encode($response);
   }

    public function get_sub_category() {
      $response = array('category' => 'error', 'data' => '');
      // $this->load->model('deal_modal', '', TRUE);
      // $post = $this->input->post();
      // $nearby_id = '';
      // $default_deal_division = 'india'; 
      // if(!empty($division)){
      //    $default_deal_division = $division;
      // }
      $sub_category_list = $this->category->get_sub();
      // print_r($sub_category_list);
      // exit();

       if (!empty($sub_category_list)) {
         foreach ($sub_category_list as $category) {
             // $date = date('d F, Y', strtotime($deal['deal_date']));
             $data[] = array(
               'id' => $category->id,
               'name' => $category->sub_category,
               'parent_category' => $category->parent_category,
               // 'deal_date' => $date
               );
             $response['status'] = 'done';
         }
         
      }
      $response = array('data' => $data);
      header('Content-Type: application/json');
      //print_r($response);
     
      echo json_encode($response);
   }


    }