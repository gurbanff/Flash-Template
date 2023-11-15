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

	public function navbar_update($id)
	{
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
		$ifCreateAct = $this->AdminModel->xl_return_rows("navbar_logo", "id");
		if ($ifCreateAct == (-1)) {
			$this->load->view('admin/navbar/logo_create');
		} else {
			redirect(base_url('navbar_update'));
		}
	}

	public function nav_logo_create_act()
	{

		if ($this->db->get('navbar_logo')->row_array()) {
			redirect(base_url('navbar_update'));
		} else {

			$img_href = $_POST['file_href'];

			if (!empty($img_href)) {
				$config['upload_path'] = './uploads/admin/navbar/';
				$config['allowed_types'] = 'png|PNG|svg|SVG|jpg|JPG';
				$config['remove_spaces'] = TRUE;
				$config['file_ext_tolower'] = TRUE;
				$config['encrypt_name'] = TRUE;
				$this->upload->initialize($config);

				if ($this->upload->do_upload('file')) {
					$img = $this->upload->data();
					$data = [
						"file" => $img['file_name'],
						"file_href" => $img_href
					];

					print_r("<pre>");
					print_r($data);
					die();

					$data = $this->security->xss_clean($data);

					$this->AdminModel->nav_logo_cre($data);
					redirect(base_url('navbar/list'));

				} else {
					redirect(base_url('logo_create'));
				}

			} else {
				redirect($_SERVER['HTTP_REFERER']);
			}
		}

	}

}
