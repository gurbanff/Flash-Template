<?php



class UserModel extends CI_Model {

	public function navbar_all_data()
	{
		return $this->db->limit(5)->get('navbar')->result_array();
	}

	public function navbar_logo_data()
	{
		return $this->db->limit(1)->get('navbar_logo')->result_array();
	}

}
