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

	public function header_data()
	{
		return $this->db->get('header')->result_array();
	}

	public function header_bottom_data()
	{
		return $this->db->limit(1)->get('header_bottom')->result_array();
	}

	public function header_bottomR_data()
	{
		return $this->db->limit(1)->get('header_bottomr')->result_array();
	}

}
