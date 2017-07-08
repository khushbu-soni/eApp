<?php
class RefillVO {
	var $CI;

	public function __construct()
	{
		//gets a reference to the codeigniter super object to give access to models, etc.
		$this->CI =& get_instance();
	}

	//automatically get the type of drink to be refilled
	function getDrinkType()
	{
		$this->CI->db->select('menuitem.name AS name');
		$this->CI->db->from('menuitem');
		$this->CI->db->join('orderitem', 'menuitem.id = orderitem.menuid');
		$this->CI->db->join('order', 'orderitem.orderid = order.id');
		$this->CI->db->where('tabletnumber', $this->tabletnumber);
		$this->CI->db->where('tablenumber', $this->tablenumber);
		$this->CI->db->limit(1);

		$query = $this->CI->db->get();
		return $query->row();
	}

}
?>