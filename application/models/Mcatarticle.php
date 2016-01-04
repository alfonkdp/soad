<?php

/*
 * By Haidar Mar'ie Email = haidarvm@gmail.com MProduct
 */
class MCatarticle extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function getAllCategories() {
		$query = $this->db->get('category_article');
		return checkRes($query);
	}

	function getCategory($id) {
		$query = $this->db->get_where('category_article', array('category_article.category_article_id' => $id));
		return checkRow($query);
	}

	function getCategorySlug($slug) {
		$query = $this->db->get_where('category_article', array( 'slug' => $slug ));
		return checkRow($query);
	}

	function getAllProduct() {
	}

	function getAllUnit() {
		$query = $this->db->get('unit');
		return checkRes($query);
	}

	function insertCategory($data) {
		unset($data['category_article_id']);
		$query = $this->db->insert('category_article', $data);
		return $this->db->insert_id();
	}

	function updateCategory($data, $id) {
		unset($data['category_article_id']);
		$query = $this->db->update('category_article', $data, array( 'category_article_id' => $id ));
		return $query;
	}

	function delete($id){
		unset($data['category_article_id']);
		$this->db->where('category_article_id',$id)->delete('category_article');
	}
}
