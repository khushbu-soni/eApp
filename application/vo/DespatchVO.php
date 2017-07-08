<?php
class DespatchVO {
	var $CI;

	public function __construct()
	{
		//gets a reference to the codeigniter super object to give access to models, etc.
		$this->CI =& get_instance();
	}

	function getOrderedItems()
	{
		$this->CI->db->select('menuitem.name AS itemname');
		$this->CI->db->from('orderitem');
		$this->CI->db->join('menuitem', 'orderitem.menuid = menuitem.id');
		$this->CI->db->where('orderitem.orderid', $this->orderid);
		$query = $this->CI->db->get();
		return $query->result();
	}

	function getOrderedSubItems()
	{
		$this->CI->db->select('*');
		$this->CI->db->from('orderitem');
		$this->CI->db->join('menuitem', 'orderitem.menuid = menuitem.id');
		$this->CI->db->where('orderitem.orderid', $this->orderid);
		$query = $this->CI->db->get();
		return $query->result();
	}

}
?>