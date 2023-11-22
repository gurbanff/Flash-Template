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
		// About
		$data['about_all_data']	= $this->UserModel->about_all_data();
		// About Bottom
		$data['about_bottom1_all']	= $this->UserModel->about_bottom1_all();
		$data['about_bottom2_all']	= $this->UserModel->about_bottom2_all();
		$data['about_bottom3_all']	= $this->UserModel->about_bottom3_all();


        $this->load->view("user/index", $data);
    }

}
