<?php



class AdminModel extends CI_Model {

	public function nav_ins($data)
	{
		$this->db->insert("navbar", $data);
	}

	public function get_all_nav()
	{
		return $this->db->get("navbar")->result_array();
	}

}
