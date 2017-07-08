<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author David Adamo Jr.
*/
class Deals extends CI_Controller {
	public $data;
    
    public $response=array();

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		
	 	
		  if(isset($_POST['from']) && isset($_POST['to']))
		  {
		  	$from=str_replace('/', '-',$_POST['from']);
		  	$to=str_replace('/', '-',$_POST['to']);

		  	// echo $_POST['to']

		  	$start_date = new DateTime($from);
			 $a = $start_date->format('Y-m-d');
		  	$end_date = new DateTime($to);
			$b = $end_date->format('Y-m-d');
			

		  	$query=$this->db->query("SELECT COUNT(*) as total_table_order FROM `order` where  `date` between '".$a."' and '".$b."' and tablenumber!=0 or tablenumber!=null");
		  	$total_table_order=$query->row_array();
		  	
		  	$query=$this->db->query("SELECT
									COUNT(*) AS total_take_away_order
								FROM
									`order`
								WHERE
								 `date` BETWEEN '".$a."'
								AND '".$b."'
								AND
								tablenumber = 0
								OR tablenumber = NULL");
		  	$total_take_away_order=$query->row_array();

		  	$query=$this->db->query("SELECT COUNT(*) as total_order FROM `order` where  `date` between '".$a."' and '".$b."'");
		  	$total_order=$query->row_array();
		  	
		  	$query=$this->db->query("SELECT
										SUM(amount) as total_amount
									FROM
										`order`
									JOIN `transaction` ON `transaction`.order_id = `order`.id
									WHERE
										`order`.date BETWEEN '".$a."' and '".$b."'
		  							");

		  	$total_amount=$query->row_array();
		  	$query=$this->db->query("SELECT
										SUM(amount) as total_table_amount
									FROM
										`order`
									JOIN `transaction` ON `transaction`.order_id = `order`.id
									WHERE
										`order`.date BETWEEN '".$a."' and '".$b."' AND
								`order`.tablenumber != 0
								OR `order`.tablenumber != NULL");
		  	$total_table_amount=$query->row_array();


		  	$query=$this->db->query("SELECT
										SUM(amount) as total_take_away_amount
									FROM
										`order`
									JOIN `transaction` ON `transaction`.order_id = `order`.id
									WHERE
										`order`.date BETWEEN '".$a."' and '".$b."' AND
								`order`.tablenumber = 0
								OR `order`.tablenumber = NULL");
		  	$total_take_away_amount=$query->row_array();
		  	// echo $this->db->last_query();
		  	// exit();

		  	if($total_take_away_amount)
		  		$total_take_away_amount['total_take_away_amount']=0;
		  	$data=array();
		  	$data['total_table_order']=$total_table_order['total_table_order'];
		  	$data['total_take_away_order']=$total_take_away_order['total_take_away_order'];
		  	$data['total_order']=$total_order['total_order'];
		  	$data['total_amount']=$total_amount['total_amount'];
		  	$data['total_table_amount']=$total_table_amount['total_table_amount'];
		  	$data['total_take_away_amount']=$total_take_away_amount['total_take_away_amount'];
		  
		  	$response['message']=$data;
		   $response["success"]=1;
		   echo json_encode($response);
		    
		  }
 
	}

	
}