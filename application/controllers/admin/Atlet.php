<?php
if (! defined('BASEPATH'))
	exit('No direct script access allowed');

class Atlet extends Ci_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('matlet');
		$this->matlet = new MAtlet();
		$this->load->library('upload');
		//$this->load->library('phpGrid_Lite/phpGrid');
	}

	function index() {
		$this->atlet_list();
	}

	/** List All Atlet
     *
     * @param string Atlet slug
     */

	function atlet_list() {
		$data['PageTitle'] = "Atlet";
		$data['listAtlet'] = $this->matlet->getAllAtlet();
		//require_once(APPPATH. 'libraries/PhpGrid_Lite/conf.php'); // APPPATH is path to application folder
		$this->load->library('ci_phpgrid');
		$data['phpgrid'] = $this->ci_phpgrid->example_method(3);
		//$data['phpgrid'] = new C_DataGrid("SELECT * FROM clients"); //$this->ci_phpgrid->example_method(3);
		$data['message'] = getMessage($this->uri->segment(4));
		$this->load->admin_template('admin/atlet_list', $data);
	}


    /**
     * For Insert View
     * And execute insert
     */

	function insert() {
		$data['PageTitle'] = "Insert Atlet";
		$data['action'] = "insert";
		// $data['user_id'] = $this->session->userdata('user_id');
		$post = $this->input->post();
		if ($post) {
			$config = configUpload('./assets/img/atlet/');
			$this->upload->initialize($config);
			//$post['slug'] = $this->matlet->checkSlug($post['title'], 'atlet');
			
			$post['image'] = $this->upload->do_upload('image') ? $this->upload->file_name : '';
			$this->matlet->insert($post);
			redirect('admin/atlet/list/add_success');
		}
		$data['message'] = "";
		$this->load->admin_template('admin/atlet', $data);
	}

	/**
     * For Edit / Update Atlet
     *
     * @param int $id
     */

	function update($id = NULL) {
		$data['PageTitle'] = "Edit Atlet";
		$data['action'] = "update";
		$post = $this->input->post();
		if ($post) {
			$atlet_id = $post['atlet_id'];
			$config = configUpload('./assets/img/atlet/');
			$this->upload->initialize($config);
			$post['slug'] = $this->matlet->checkSlug($post['title'], 'atlet');
			$post['image'] = $this->upload->do_upload('image') ? $this->upload->file_name : '';
			$this->matlet->update($atlet_id, $post);
			$data['message'] = "<div class='alert alert-success'>Update Success</div>";
			redirect('admin/atlet/list/update_success');
		} else {
			$data['images'] = $this->matlet->getAllAtletImages($id);
			$data['categories'] = $this->matlet->getAllCategory();
			$data['atlet'] = $this->matlet->getAtlet($id);
			$data['message'] = "";
			$this->load->admin_template('admin/atlet', $data);
		}
	}

	/**
     * For Delete Atlet
     *
     * @param int $id
     */

	function delete($id){
        $this->matlet->delete($id);
        redirect('admin/atlet');
    }
}
