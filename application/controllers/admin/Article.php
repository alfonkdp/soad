<?php
if (! defined('BASEPATH'))
	exit('No direct script access allowed');

class Article extends Ci_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('marticle');
		$this->load->model('mcatarticle');
		$this->marticle = new MArticle();
		$this->mcatarticle = new MCatarticle();
		$this->load->library('upload');
	}

	function index() {
		$this->article_list();
	}

	/** List All Article
     *
     * @param string Article slug
     */

	function article_list() {
		$data['PageTitle'] = "Article";
		$data['listArticle'] = $this->marticle->getAllArticle();
		$data['categories'] = $this->mcatarticle->getAllCategories();
		$data['message'] = getMessage($this->uri->segment(4));
		$this->load->admin_template('admin/article_list', $data);
	}


    /**
     * For Insert View
     * And execute insert
     */

	function insert() {
		$data['PageTitle'] = "Insert Article";
		$data['action'] = "insert";
		// $data['user_id'] = $this->session->userdata('user_id');
		$post = $this->input->post();
		if ($post) {
			$config = configUpload('./assets/img/article/');
			$this->upload->initialize($config);
			$post['slug'] = $this->marticle->checkSlug($post['title'], 'article');
			
			$post['image'] = $this->upload->do_upload('image') ? $this->upload->file_name : '';
			$this->marticle->insert($post);
			redirect('admin/article/list/add_success');
		}
		$data['categories'] = $this->mcatarticle->getAllCategories();
		$data['message'] = "";
		$this->load->admin_template('admin/article', $data);
	}

	/**
     * For Edit / Update Article
     *
     * @param int $id
     */

	function update($id = NULL) {
		$data['PageTitle'] = "Edit Article";
		$data['action'] = "update";
		$post = $this->input->post();
		if ($post) {
			$article_id = $post['article_id'];
			$config = configUpload('./assets/img/article/');
			$this->upload->initialize($config);
			$post['slug'] = $this->marticle->checkSlug($post['title'], 'article');
			$post['image'] = $this->upload->do_upload('image') ? $this->upload->file_name : '';
			$this->marticle->update($article_id, $post);
			$data['message'] = "<div class='alert alert-success'>Update Success</div>";
			redirect('admin/article/list/update_success');
		} else {
			$data['images'] = $this->marticle->getAllArticleImages($id);
			$data['categories'] = $this->marticle->getAllCategory();
			$data['article'] = $this->marticle->getArticle($id);
			$data['message'] = "";
			$this->load->admin_template('admin/article', $data);
		}
	}

	/**
     * For Delete Article
     *
     * @param int $id
     */

	function delete($id){
        $this->marticle->delete($id);
        redirect('admin/article');
    }
}
