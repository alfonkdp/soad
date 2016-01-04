<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @author Haidar Mar'ie
 * email : haidarvm@gmail.com
 */
class Category_article extends MY_Controller {

    function __construct() {
        parent::__construct();
		$this->load->model('mcatarticle');
        $this->mcatarticle = new MCatarticle();
		$this->load->model('marticle');
        $this->marticle = new MArticle();
    }

    /** Redirect to Category_article
     * 
     */
    public function index() {
        $this->category_list();
    }
    
    /** List All Category Article
     *
     * @param string Category slug
     */
    public function category_list() {
        $data['title'] = "Admin Category List";
        $data['listCategory'] = $this->mcatarticle->getAllCategories();
		$data['message'] = getMessage($this->uri->segment(4));
        $this->load->admin_template('admin/category_article_list', $data);
        
    }
    
    /**
     * For Insert View
     * And execute insert
     */
    public function insert() {
        $data['title'] = "Admin Create Category";
        $data['action'] = 'insert';
        $data['cat'] = 'category_article';
        $post = $this->input->post();
        if ($post) {
            $post['slug'] =$this->marticle->checkSlug($post['title'], 'category_article');;
            $insertCategoryId = $this->mcatarticle->insertCategory($post);
            redirect(site_url() . 'admin/category_article/category_list');
        }
        $this->load->admin_template('admin/category_article', $data);
    }
    
    /**
     * For Edit / Update Category Article
     *
     * @param int $id
     */
    public function update($id) {
        $data['title'] = "Admin Edit Category";
        $data['action'] = 'update';
        $data['cat'] = 'category_article';
        $post = $this->input->post();
        if ($post) {
            print_r($post);
            $this->mcatarticle->updateCategory($post, $post['category_article_id']);
            redirect(site_url() . 'admin/category_article/category_list');
        } else {
            $data['category'] = $this->mcatarticle->getCategory($id);
            //print_r($data['category']); exit;
            $this->load->admin_template('admin/category_article', $data);
        }
    }



    /**
     * For Delete Category Article
     *
     * @param int $id
     */

    public function delete($id){
        $this->mcatarticle->delete($id);
        redirect('admin/category_article');
    }
    
}