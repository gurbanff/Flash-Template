<?php



class AdminController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("AdminModel");
	}

    public function dashboard()
    {
        $this->load->view("admin/index");
    }

	// Navbar

	public function navbar_list()
	{
		$data["get_all_nav"] 	= $this->AdminModel->get_all_nav();
		$data['get_logo_data']	= $this->AdminModel->get_logo_img();
		$this->load->view("admin/navbar/list", $data);
	}

	public function navbar_create()
	{
		$this->load->view("admin/navbar/create");
	}

	public function navbar_create_act()
	{
		$name = $_POST['name'];

		if (!empty($name)) {

			$data = [
				"name" => $name,
			];

			$data = $this->security->xss_clean($data);

			$this->AdminModel->nav_ins($data);
			redirect(base_url("navbar/list"));

		} else {
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function navbar_update($id)
	{
		$id = $this->security->xss_clean($id);
		$data['nav_all_data'] = $this->AdminModel->get_single_nav($id);

		$this->load->view("admin/navbar/update", $data);
	}

	public function navbar_update_act($id)
	{
		$name = $_POST['name'];

		if (!empty($name)) {

			$data = [
				"name" => $name,
			];

			$data = $this->security->xss_clean($data);
			$id = $this->security->xss_clean($id);

			$this->AdminModel->nav_upt($id, $data);
			redirect(base_url("navbar/list"));

		} else {
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function navbar_delete($id)
	{
		$this->AdminModel->nav_del($id);
		redirect(base_url('navbar/list'));
	}

	public function navbar_logo_create()
	{
		$this->load->view("admin/navbar/logo_create");
	}

	public function nav_logo_create_act()
	{

		$config["upload_path"]       = "./uploads/admin/navbar";
		$config["allowed_types"]     = "jpg|jpeg|png|svg|JPG|JPEG|PNG|SVG";
		$config["file_ext_tolower"]  = TRUE;
		$config["remove_spaces"]     = TRUE;
		$config["encrypt_name"]      = TRUE;

		$this->upload->initialize($config);
		$this->load->library("upload");

		if ($this->upload->do_upload("file")) {
			$img = $this->upload->data();

			$data = [
				"file" => $img["file_name"]
			];

			$data = $this->security->xss_clean($data);
			$this->AdminModel->nav_logo_cre($data);

			redirect(base_url('navbar/list'));

		} else {
			redirect($_SERVER["HTTP_REFERER"]);
		}

	}

	public function navbar_logo_update($id)
	{
		$id = $this->security->xss_clean($id);
		$data['nav_logo_data'] = $this->AdminModel->get_logo_data($id);

		$this->load->view("admin/navbar/logo_update", $data);
	}

	public function nav_logo_update_act($id)
	{
		$config["upload_path"]       = "./uploads/admin/navbar";
		$config["allowed_types"]     = "jpg|jpeg|png|svg|JPG|JPEG|PNG|SVG";
		$config["file_ext_tolower"]  = TRUE;
		$config["remove_spaces"]     = TRUE;

		$this->upload->initialize($config);
		$this->load->library("upload");

		if ($this->upload->do_upload("file")) {
			$img = $this->upload->data();

			$data = [
				"file" => $img["file_name"]
			];

			$data = $this->security->xss_clean($data);
			$id = $this->security->xss_clean($id);

			$this->AdminModel->nav_logo_upt($id, $data);

			redirect(base_url('navbar/list'));

		} else {
			redirect($_SERVER["HTTP_REFERER"]);
		}
	}

	public function navbar_logo_delete($id)
	{
		$this->AdminModel->nav_logo_del($id);
		redirect(base_url('navbar/list'));
	}

	// Header

	public function header_list()
	{
		$data["get_all_header"] = $this->AdminModel->get_all_header();
		$data['get_head_img'] = $this->AdminModel->get_all_head_img();
		$data['get_all_header_bottom'] = $this->AdminModel->get_all_header_bottom();
		$data['get_all_header_bottomR'] = $this->AdminModel->get_all_header_bottomR();

		$this->load->view("admin/header/list", $data);
	}

	public function header_create()
	{
		$this->load->view("admin/header/create");
	}

	public function header_create_act()
	{
		$name  = $_POST['name'];
		$desc  = $_POST['desc'];
		$desc2 = $_POST['desc2'];

		if (!empty($name) && !empty($desc) && !empty($desc2)) {

				$data = [
					'name'  => $name,
					'desc'  => $desc,
					'desc2' => $desc2,
				];

			$data = $this->security->xss_clean($data);

			$this->AdminModel->header_cre($data);
			redirect(base_url('header_list'));

		} else {
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function header_view($id)
	{
		$data['single_data'] = $this->AdminModel->head_view_data($id);
		$this->load->view("admin/header/view", $data);
	}

	public function header_update($id)
	{
		$id = $this->security->xss_clean($id);
		$data['header_all_data'] = $this->AdminModel->header_all_data($id);

		$this->load->view("admin/header/update", $data);
	}

	public function header_update_act($id)
	{
		$name  = $_POST['name'];
		$desc  = $_POST['desc'];
		$desc2 = $_POST['desc2'];

		if (!empty($name) && !empty($name) ) {

			$data = [
				"name"  => $name,
				"desc"  => $desc,
				"desc2" => $desc2,
			];

			$data = $this->security->xss_clean($data);
			$id = $this->security->xss_clean($id);

			$this->AdminModel->header_upt($id, $data);
			redirect(base_url("header_list"));

		} else {
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function header_delete($id)
	{
		$this->AdminModel->header_del($id);
		redirect(base_url('header_list'));
	}

	public function header_img_create()
	{
		$this->load->view("admin/header/img_create");
	}

	public function header_img_create_act()
	{
		$config["upload_path"]       = "./uploads/admin/header";
		$config["allowed_types"]     = "jpg|jpeg|png|svg|JPG|JPEG|PNG|SVG";
		$config["file_ext_tolower"]  = TRUE;
		$config["remove_spaces"]     = TRUE;

		$this->upload->initialize($config);
		$this->load->library("upload");

		if ($this->upload->do_upload("file")) {
			$img = $this->upload->data();

			$data = [
				"img" => $img["file_name"]
			];

			$data = $this->security->xss_clean($data);
			$this->AdminModel->head_img_cre($data);

			redirect(base_url('header_list'));

		} else {
			redirect($_SERVER["HTTP_REFERER"]);
		}

	}

	public function header_img_update($id)
	{
		$id = $this->security->xss_clean($id);
		$data['get_head_img'] = $this->AdminModel->get_head_img($id);

		$this->load->view("admin/header/img_update", $data);
	}

	public function header_img_update_act($id)
	{
		$config["upload_path"]       = "./uploads/admin/header";
		$config["allowed_types"]     = "jpg|jpeg|png|svg|JPG|JPEG|PNG|SVG";
		$config["file_ext_tolower"]  = TRUE;
		$config["remove_spaces"]     = TRUE;

		$this->upload->initialize($config);
		$this->load->library("upload");

		if ($this->upload->do_upload("file")) {
			$img = $this->upload->data();

			$data = [
				"img" => $img["file_name"]
			];

			$data = $this->security->xss_clean($data);
			$id = $this->security->xss_clean($id);

			$this->AdminModel->head_logo_upt($id, $data);

			redirect(base_url('header_list'));

		} else {
			redirect($_SERVER["HTTP_REFERER"]);
		}
	}

	public function header_img_delete($id)
	{
		$this->AdminModel->header_img_del($id);
		redirect(base_url('header_list'));
	}

	// Header Footer

	public function header_bottom_create()
	{
		$this->load->view("admin/header/bottom_create");
	}

	public function header_bottom_create_act()
	{
		$name  = $_POST['name'];
		$span  = $_POST['span'];
		$span2 = $_POST['span2'];

		if (!empty($name) && !empty($span) && !empty($span2)) {

			$data = [
				'name'  => $name,
				'span'  => $span,
				'span2' => $span2,
			];

			$data = $this->security->xss_clean($data);

			$this->AdminModel->header_bottom_cre($data);
			redirect(base_url('header_list'));

		} else {
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function header_bottom_update($id)
	{
		$id = $this->security->xss_clean($id);
		$data['header_bottom_all'] = $this->AdminModel->header_bottom_all($id);

		$this->load->view("admin/header/bottom_update", $data);
	}

	public function header_bottom_update_act($id)
	{
		$name  = $_POST['name'];
		$span  = $_POST['span'];
		$span2 = $_POST['span2'];

		if (!empty($name) && !empty($span) && !empty($span2)) {

			$data = [
				'name'  => $name,
				'span'  => $span,
				'span2' => $span2,
			];

			$data = $this->security->xss_clean($data);
			$id = $this->security->xss_clean($id);

			$this->AdminModel->header_bottom_upt($id, $data);
			redirect(base_url("header_list"));

		} else {
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function header_bottom_delete($id)
	{
		$this->AdminModel->header_bottom_del($id);
		redirect(base_url('header_list'));
	}

	// Header Bottom Right ->

	public function header_bottomR_create()
	{
		$this->load->view("admin/header/bottomR_create");
	}

	public function header_bottomR_create_act()
	{
		$name  = $_POST['name'];
		$span  = $_POST['span'];
		$span2 = $_POST['span2'];

		if (!empty($name) && !empty($span) && !empty($span2)) {

			$data = [
				'name'  => $name,
				'span'  => $span,
				'span2' => $span2,
			];

			$data = $this->security->xss_clean($data);

			$this->AdminModel->header_bottomR_cre($data);
			redirect(base_url('header_list'));

		} else {
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function header_bottomR_update($id)
	{
		$id = $this->security->xss_clean($id);
		$data['header_bottomR_all'] = $this->AdminModel->header_bottomR_all($id);

		$this->load->view("admin/header/bottomR_update", $data);
	}

	public function header_bottomR_update_act($id)
	{
		$name  = $_POST['name'];
		$span  = $_POST['span'];
		$span2 = $_POST['span2'];

		if (!empty($name) && !empty($span) && !empty($span2)) {

			$data = [
				'name'  => $name,
				'span'  => $span,
				'span2' => $span2,
			];

			$data = $this->security->xss_clean($data);
			$id = $this->security->xss_clean($id);

			$this->AdminModel->header_bottomR_upt($id, $data);
			redirect(base_url("header_list"));

		} else {
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function header_bottomR_delete($id)
	{
		$this->AdminModel->header_bottomR_del($id);
		redirect(base_url('header_list'));
	}

}
















//print_r("<pre>");
//print_r($data);
//die();
