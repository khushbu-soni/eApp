<?php
class OrderVO {
	var $CI;

	public function __construct()
	{
		//gets a reference to the codeigniter super object to give access to models, etc.
		$this->CI =& get_instance();
	}

	/**
	* Get the items in this order
	*/
	public function getOrderedItems()
	{
		//echo $this->CI->db->last_query();


		$status = array('2','3');
		$this->CI->db->select('menuitem.name AS itemname,sum(orderitem.quantity) as quantity,orderitem.ingredients AS ingredients, orderitem.status AS status');
		$this->CI->db->from('orderitem');
		$this->CI->db->join('menuitem', 'orderitem.menuid = menuitem.id');
		$this->CI->db->where('orderitem.orderid', $this->id);


		$this->CI->db->where_not_in('orderitem.status', $status);

		
		$this->CI->db->group_by('menuitem.name');
		
		
		$query = $this->CI->db->get();
		return $query->result();
	}
	public function getOrderedItems_waiter()
	{

		$status = array('3','4');
		$this->CI->db->select('orderitem.menuid AS menuid,menuitem.name AS itemname,sum(orderitem.quantity) as quantity,orderitem.ingredients AS ingredients, orderitem.status AS status');
		$this->CI->db->from('orderitem');
		$this->CI->db->join('menuitem', 'orderitem.menuid = menuitem.id');
		$this->CI->db->where('orderitem.orderid', $this->id);


		$this->CI->db->where_not_in('orderitem.status', $status);

		
		$this->CI->db->group_by('menuitem.name');
		
		

		$query = $this->CI->db->get();
		//echo $this->CI->db->last_query();
		return $query->result();

	}
	public function getOrderedItems_process()
	{

		$status = array('3');
		$this->CI->db->select('menuitem.name AS itemname,sum(orderitem.quantity) as quantity,orderitem.menuid AS menuid, orderitem.ingredients AS ingredients, orderitem.status AS status');
		$this->CI->db->from('orderitem');
		$this->CI->db->join('menuitem', 'orderitem.menuid = menuitem.id');
		$this->CI->db->where('orderitem.orderid', $this->id);


		$this->CI->db->where_not_in('orderitem.status', $status);

		
		$this->CI->db->group_by('menuitem.name');
		
		//echo $this->CI->db->last_query();

		$query = $this->CI->db->get();
		return $query->result();
	}


	public function getOrderedItems_screen()
	{
		$this->CI->db->select('menuitem.name AS itemname,orderitem.ingredients AS ingredients');
		$this->CI->db->from('orderitem');
		$this->CI->db->join('menuitem', 'orderitem.menuid = menuitem.id');
		
		$this->CI->db->where('orderitem.orderid', $this->id);

		$query = $this->CI->db->get();
		return $query->result();
	}


	/* checks if payment has been completed for this particular order */
	public function checkPaymentComplete()
	{
		echo $this->id;
		
		$this->CI->db->select('id');
		$this->CI->db->from('orderitem');
		$this->CI->db->where('orderid', $this->id);
		$this->CI->db->where('paymentid', null);
		$query = $this->CI->db->get();
		if ($query->num_rows() > 0){
			return false;
		} else {
			return true;
		}
	}
}
?>