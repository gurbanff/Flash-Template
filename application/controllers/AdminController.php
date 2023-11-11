<?php



class AdminController extends CI_Controller {

    public function dashboard()
    {
        $this->load->view("admin/index");
    }

	public function navbar_list()
	{
		$this->load->view("admin/navbar/list");
	}

}
