<?php



class AdminController extends CI_Controller {

    public function dashboard()
    {
        $this->load->view("admin/index");
    }

}