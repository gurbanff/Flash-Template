<?php


class UserController extends CI_Controller {

    public function index()
    {
        $this->load->view("user/index");
    }

}