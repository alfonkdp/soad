<?php
if (! defined('BASEPATH'))
	exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->show();
	}

	public function show() {
		$data['title'] = 'Home';
		$this->load->user_template('home', $data);
	}
	
	public function about() {
		$data['title'] = 'About';
		$this->load->user_template('user/about', $data);
	}

	


	public function info() {
		phpinfo();
	}
}
