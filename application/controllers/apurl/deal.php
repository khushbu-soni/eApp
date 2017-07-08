<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author David Adamo Jr.
*/
class Deal extends CI_Controller {
	public $data;

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('deal_modal', 'deal', TRUE);
		$this->load->model('api_url_model', 'api_url');

    $this->load->model('deal_model', 'deal');
    $this->load->model('dealtype_model', 'dealtype');
    $this->load->model('country_model', 'country');
    $this->load->model('state_model', 'state');
    $this->load->model('city_model', 'city');
    $this->load->model('town_model', 'town');
    $this->load->model('merchant_model', 'merchant');
		
	}

   /** Objective is to get deal for mobile 
    * @param string division 
    * @param string country  
    * @return array having data and status
    */
   public function get_deal($division = '') {
    // print_r($division);
    $response = array('status' => 'error', 'state' => '', 'deals' => '');
    $get_country_list=$this->country->get_by_sortname($division);

    $countryid=$get_country_list['id'];

    $get_state_list=$this->state->get_by_countryid($countryid);

    foreach ($get_state_list as $states) {

              $data[] = array(
               'id' => $states->id,
               'name' => $states->name,
               );
              $response['status'] = 'done';
            }
            $response['state'] =$data;

    //print_r($data);

    $get_deal_by_country=$this->deal->get_by_country($countryid);

    foreach ($get_deal_by_country as $deal_by_country) {

              $data1[] = array(
               'title' => $deal_by_country->title,
               'name' => $deal_by_country->name,
               'merchant_id' => $deal_by_country->merchant_id,
               );
              $response['status'] = 'done';
            }

           // print_r($data);
            $response['deals'] =$data1;
            header('Content-Type: application/json');
            echo json_encode($response);

     // exit();

//     $user_ip = getenv('REMOTE_ADDR');
// $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
// echo "geoloaction = ".$geo;
// // exit();
//       $response = array('status' => 'error', 'data' => '');
//       // $this->load->model('deal_modal', '', TRUE);
//       // $post = $this->input->post();
//       $nearby_id = '';
//       $default_deal_division = 'india'; 
//       if(!empty($division)){
//          $default_deal_division = $division;
//       }
//       $deal_list = $this->api_url->get_deal_data($default_deal_division);
//        if (!empty($deal_list)) {
//          foreach ($deal_list as $deal) {
//              $date = date('d F, Y', strtotime($deal['deal_date']));
//              $data[] = array(
//                'deal_name' => $deal['name'],
//                'deal_image' => $deal['url'],
//                'deal_date' => $date
//                );
//              $response['status'] = 'done';
//          }
         
//       }
//       $response = array('data' => $data);
//       header('Content-Type: application/json');
//       echo json_encode($response);
   }

   

   /** Objective is to get deal for mobile 
    * @param string division 
    * @param string country  
    * @return array having data and status
    */
   public function get_all_deals() {
      $response = array('deals' => 'error', 'data' => '');
      // $this->load->model('deal_modal', '', TRUE);
      // $post = $this->input->post();
      // $nearby_id = '';
      // $default_deal_division = 'india'; 
      // if(!empty($division)){
      //    $default_deal_division = $division;
      // }
      $all_deals = $this->deal->get_by_deals();

       if (!empty($all_deals)) {

         // foreach ($all_deals as $deals) {
         //     // $date = date('d F, Y', strtotime($deal['deal_date']));
         //  // print_r($deals);
         //  // exit();
         //     $data[] = array(
         //       'id' => $deals->id,
         //       'name' => $deals->name,
         //       'merchant_id' => $deals->merchant_id,
         //       'country_id' => $deals->country_id,
         //       'dealtype_id' => $deals->dealtype_id,
         //       'SKU' => $deals->SKU,
         //       'status' => $deals->status,
         //       'about' => $deals->about,
         //       'created_at' => $deals->created_at,
               // 'state_id' => $deals->state_id,
         //       'city_id' => $deals->city_id,
         //       'town_id' => $deals->town_id,
         //       'valid_from' => $deals->valid_from,
         //       'valid_to' => $deals->valid_to,
         //       'visibilty' => $deals->visibilty,
         //       'highlights' => $deals->highlights,
         //       'policies' => $deals->policies,
         //       'discounted_price' => $deals->discounted_price,
         //       'actual_price' => $deals->actual_price,
         //       'category_id' => $deals->category_id,
         //       'subcategory_id' => $deals->subcategory_id,

         //       // 'deal_date' => $date
         //       );
         //     $response['status'] = 'done';
         // }
         
      }
      $response = array('data' => $all_deals);
      header('Content-Type: application/json');
      // print_r($response);

      echo json_encode($response);
   }

   public function get_location() {


              $user_ip = getenv('REMOTE_ADDR');
              echo $user_ip;
         $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=".$user_ip));
        print_r($geo);
        echo "<pre/>";
         

        // $lang=$geo["geoplugin_latitude"];
        // $long=$geo["geoplugin_longitude"];
        //  $city = $geo["geoplugin_city"];
        // // $region = $geo["geoplugin_regionName"];
        //  $country = $geo["geoplugin_countryName"];
        // echo "City: ".$city."<br>";

        // echo "latitu: ".$lang."<br>";
        // echo "long: ".$long."<br>";
        // echo "City: ".$city."<br>";
        // // echo "Region: ".$region."<br>";
        //  echo "Country: ".$country."<br>";
              // echo var_export(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR'])));

   }


    }