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

}
