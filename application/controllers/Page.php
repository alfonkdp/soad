<?php
if (! defined('BASEPATH'))
	exit('No direct script access allowed');

class Page extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('mpage');
		$this->mpage = new MPage();
	}

	public function index() {
		$this->show();
	}

	public function detail($slug) {
		$data['title'] = 'Page';
		$data['slug'] = $this->mpage->getPageSlug($slug);
		//echo "hai"; exit;
		$this->load->user_template('user/page', $data);
	}


	public function info() {
		phpinfo();
	}
}