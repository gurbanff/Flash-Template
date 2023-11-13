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

	public function navbar_list()
	{
		$data["get_all_nav"] = $this->AdminModel->get_all_nav();

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

}
