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
		// Header
		$data['header']	= $this->UserModel->header_data();
		$data['header_bottom_data']	= $this->UserModel->header_bottom_data();
		$data['header_bottomR_data']	= $this->UserModel->header_bottomR_data();

        $this->load->view("user/index", $data);
    }

}
