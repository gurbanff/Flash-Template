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

	public function head_view_data($id)
	{
		return $this->db->where("id", $id)->get("header")->row_array();
	}

	public function header_all_data($id)
	{
		return $this->db->where('id', $id)->get('header')->row_array();
	}

	public function header_upt($id, $data)
	{
		$this->db->where('id', $id)->update('header', $data);
	}

	public function header_del($id)
	{
		$this->db->where("id", $id)->delete('header');
	}

	public function head_img_cre($data)
	{
		$this->db->insert('header_logo', $data);
	}

	public function get_head_img($id)
	{
		return $this->db->where('id', $id)->get('header_logo')->row_array();
	}

	public function head_logo_upt($id, $data)
	{
		$this->db->where('id', $id)->update('header_logo', $data);
	}

	public function get_all_head_img()
	{
		return $this->db->get("header_logo")->result_array();
	}

	public function header_img_del($id)
	{
		$this->db->where("id", $id)->delete('header_logo');
	}

	public function header_bottom_cre($data)
	{
		$this->db->insert("header_bottom", $data);
	}

	public function get_all_header_bottom()
	{
		return $this->db->limit(1)->get("header_bottom")->result_array();
	}

	public function header_bottom_all($id)
	{
		return $this->db->where('id', $id)->get('header_bottom')->row_array();
	}

	public function header_bottom_upt($id, $data)
	{
		$this->db->where('id', $id)->update('header_bottom', $data);
	}

	public function header_bottom_del($id)
	{
		$this->db->where("id", $id)->delete('header_bottom');
	}

	// Header Bottom Right

	public function header_bottomR_cre($data)
	{
		$this->db->insert("header_bottomr", $data);
	}

	public function get_all_header_bottomR()
	{
		return $this->db->limit(1)->get("header_bottomr")->result_array();
	}

	public function header_bottomR_all($id)
	{
		return $this->db->where('id', $id)->get('header_bottomr')->row_array();
	}

	public function header_bottomR_upt($id, $data)
	{
		$this->db->where('id', $id)->update('header_bottomr', $data);
	}

	public function header_bottomR_del($id)
	{
		$this->db->where("id", $id)->delete('header_bottomr');
	}

	// About

	public function get_all_about_data()
	{
		return $this->db->get("about_us")->result_array();
	}

	public function get_all_a_bottom1()
	{
		return $this->db->get("a_bottom_left")->result_array();
	}

	public function about_cre($data)
	{
		$this->db->insert("about_us", $data);
	}

	public function about_view_data($id)
	{
		return $this->db->where("id", $id)->get("about_us")->row_array();
	}

	public function about_update_all($id)
	{
		return $this->db->where('id', $id)->get('about_us')->row_array();
	}

	public function about_upt($id, $data)
	{
		$this->db->where('id', $id)->update('about_us', $data);
	}

	public function about_del($id)
	{
		$this->db->where("id", $id)->delete('about_us');
	}

	// About Bottom Left

	public function a_bottom1_cre($data)
	{
		$this->db->insert("a_bottom_left", $data);
	}

	public function a_bottom1_upt_all($id)
	{
		return $this->db->where('id', $id)->get('a_bottom_left')->row_array();
	}

	public function a_bottom1_upt($id, $data)
	{
		$this->db->where('id', $id)->update('a_bottom_left', $data);
	}

	public function about_bottom1_del($id)
	{
		$this->db->where("id", $id)->delete('a_bottom_left');
	}

	// About Bottom Center

	public function get_all_a_bottom2()
	{
		return $this->db->get("a_bottom_center")->result_array();
	}

	public function a_bottom2_cre($data)
	{
		$this->db->insert("a_bottom_center", $data);
	}

	public function a_bottom2_upt_all($id)
	{
		return $this->db->where('id', $id)->get('a_bottom_center')->row_array();
	}

	public function a_bottom2_upt($id, $data)
	{
		$this->db->where('id', $id)->update('a_bottom_center', $data);
	}

	public function about_bottom2_del($id)
	{
		$this->db->where("id", $id)->delete('a_bottom_center');
	}

	// About Bottom Center

	public function get_all_a_bottom3()
	{
		return $this->db->get("a_bottom_right")->result_array();
	}

	public function a_bottom3_cre($data)
	{
		$this->db->insert("a_bottom_right", $data);
	}

	public function a_bottom3_upt_all($id)
	{
		return $this->db->where('id', $id)->get('a_bottom_right')->row_array();
	}

	public function a_bottom3_upt($id, $data)
	{
		$this->db->where('id', $id)->update('a_bottom_right', $data);
	}

	public function about_bottom3_del($id)
	{
		$this->db->where("id", $id)->delete('a_bottom_right');
	}


}

