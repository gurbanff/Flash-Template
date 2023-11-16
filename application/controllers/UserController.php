<?php


class UserController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model("UserModel");
	}

    public function index()
    {
		$data['navbar_all']		= $this->UserModel->navbar_all_data();
		$data['navbar_logo']	= $this->UserModel->navbar_logo_data();

        $this->load->view("user/index", $data);
    }

}
