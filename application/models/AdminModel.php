<?php



class AdminModel extends CI_Model {

	public function xl_return_rows($navbar, $id)
	{
		$navbar_logo_rows_count = $this->db->from($navbar)->count_all_results();
		if ($navbar_logo_rows_count == 1) {
			return $this->db->get($navbar)->row_array()[$id];
		} else if ($navbar_logo_rows_count > 1) {
			return $this->db->order_by($id, "DESC")->limit(1)->get($navbar)->row_array()[$id];
		} else {
			return -1;
		}
	}

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



}
