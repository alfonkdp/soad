<?php
if (! defined('BASEPATH'))
	exit('No direct script access allowed');

class Page extends Ci_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('mpage');
		$this->load->model('marticle');
		$this->load->model('mcatarticle');
		$this->mpage = new MPage();
		$this->marticle = new MArticle();
		$this->mcatarticle = new MCatarticle();
		$this->load->library('upload');
	}

	function index() {
		$this->page_list();
	}

	/** List All Page
     *
     * @param string Page slug
     */

	function page_list() {
		$data['PageTitle'] = "Page";
		$data['listPage'] = $this->mpage->getAllPage();
		$data['message'] = getMessage($this->uri->segment(4));
		$this->load->admin_template('admin/page_list', $data);
	}

	/**
     * For Insert View
     * And execute insert
     */

	function insert() {
		$data['PageTitle'] = "Insert Page";
		$data['action'] = "insert";
		// $data['user_id'] = $this->session->userdata('user_id');
		$post = $this->input->post();

		if ($post) {
			$config = configUpload('./assets/img/page/');
			$this->upload->initialize($config);
			$post['image'] = $this->upload->do_upload('image') ? $this->upload->file_name: '';
			
			$post['slug'] = $this->mpage->checkSlug($post['title'],'page');
			//print_r($post); exit;
			$this->mpage->insert($post);
			
			redirect('admin/page/list/add_success');
		} else {
			$data['categories'] = $this->mcatarticle->getAllCategories();
			$data['message'] = "";
			$this->load->admin_template('admin/page', $data);
		}
	}

	/**
     * For Edit / Update Page
     *
     * @param int $id
     */

	function update($id = NULL) {
		$data['PageTitle'] = "Edit Page";
		$data['action'] = "update";
		$post = $this->input->post();
		if ($post) {
			$page_id = $post['page_id'];
			$config = configUpload('./assets/img/page/');
			$this->upload->initialize($config);
			$post['image'] = $this->upload->do_upload('image') ? $this->upload->file_name: '';
			$post['slug'] = $this->mpage->checkSlug($post['title'],'page');
			$this->mpage->update($page_id, $post);
			$data['message'] = "<div class='alert alert-success'>Update Success</div>";
			redirect('admin/page/list/update_success');
		} else {
			$data['page'] = $this->mpage->getPage($id);
			$data['categories'] = $this->marticle->getAllCategory();
			$data['message'] = "";
			//print_r($data['page']);exit;
			$this->load->admin_template('admin/page', $data);
		}
	}

	/**
     * For Delete Page
     *
     * @param int $id
     */

	function delete($id){
        $this->mpage->delete($id);
        redirect('admin/page');
    }
}
