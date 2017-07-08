<?php
class TableVO {
	var $CI;

	public function __construct()
	{
		//gets a reference to the codeigniter super object to give access to models, etc.
		$this->CI =& get_instance();
	}

	function isOccupied()
	{
		$this->CI->db->where('tablenumber', $this->tablenumber);
		
		$this->CI->db->where('inuse', 0);
		$this->CI->db->from('table');
		
		if ($this->CI->db->count_all_results() < 4){
			//table is occupied

			return true;
		} else {
			return false;
		}

	}

}
?>