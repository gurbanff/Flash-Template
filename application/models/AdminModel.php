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

	public function get_single_nav($id)
	{
		return $this->db->where("id", $id)->get("navbar")->row_array();
	}

	public function nav_upt($id, $data)
	{
		$this->db->where('id', $id)->update('navbar', $data);
	}

	public function nav_del($id)
	{
		$this->db->where("id", $id)->delete('navbar');
	}

	public function nav_logo_cre($data)
	{
		$this->db->insert('navbar_logo', $data);
	}

	public function get_logo_data($id)
	{
		return $this->db->where('id', $id)->get('navbar_logo')->row_array();
	}

	public function nav_logo_upt($id, $data)
	{
		$this->db->where('id', $id)->update('navbar_logo', $data);
	}

	public function get_logo_img()
	{
		return $this->db->limit(1)->get('navbar_logo')->result_array();
	}

	public function nav_logo_del($id)
	{
		$this->db->where("id", $id)->delete('navbar_logo');
	}

	public function get_all_header()
	{
		return $this->db->get("header")->result_array();
	}

	public function header_cre($data)
	{
		$this->db->insert("header", $data);
	}

	public function header_all_data($id)
	{
		return $this->db->where('id', $id)->get('header')->row_array();
	}

}
