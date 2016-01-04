<?php
if (! defined('BASEPATH'))
	exit('No direct script access allowed');

class MArticle extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function getAllArticle($cat = NULL) {
		$this->db->join('category_article', 'category_article.category_article_id = article.category_article_id');
		$where = ! empty($cat) ? array( 'category_article_id' => $cat ) : array();
		$query = $this->db->get_where('article', $where);
		return checkRes($query);
	}

	function getAllCategory() {
		$query = $this->db->get('category_article');
		return checkRes($query);
	}

	function getAllArticleImages($id) {
		$where = ! empty($id) ? array( 'article_id' => $id ) : array();
		$query = $this->db->get_where('article_image', $where);
		return checkRes($query);
	}

	function getArticle($id) {
		$query = $this->db->get_where('article', array( 'article_id' => $id ));
		return checkRow($query);
	}

	function insert($data) {
		$this->db->insert('article', $data);
		return $this->db->insert_id();
	}

	function update($id, $data) {
		return $this->db->update('article', $data, 'article_id = ' . $id);
	}

	function delete($id) {
		$this->db->where('article_id', $id);
		$this->db->delete('article');
	}

	function checkSlug($slug, $table) {
		$this->db->like('slug', slugify($slug));
		$query = $this->db->get($table);
		if (checkRes($query)) {
			return $this->getLatestExistsSlug($slug, $table);
		} else {
			return slugify($slug);
		}
	}

	function getLatestExistsSlug($slug, $table) {
		$this->db->order_by($table.'_id', "desc");
		$this->db->like('slug', slugify($slug));
		$this->db->limit(1);
		$query = $this->db->get($table);
		$slugName = checkRow($query);
		if (strpos($slugName->slug, '-') !== false) {
			$getLastDigit = substr($slugName->slug, strrpos($slugName->slug, '-') + 1);
			$latestSlugPlus = $getLastDigit + 1;
			$latestSlugClear = preg_replace('/[0-9]+/', '', $slugName->slug);
			return rtrim($latestSlugClear,'-') .'-'. $latestSlugPlus;
		} else {
			return $slugName->slug . '-' . 1;
		}
	}
}
