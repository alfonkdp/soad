<?php

/*
 * By Haidar Mar'ie Email = haidarvm@gmail.com MProduct
 */
class MPage extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getAllPage() {
        $query = $this->db->get('page');
        return checkRes($query);
    }

    function getPage($id) {
        $query = $this->db->get_where('page', array('page.page_id' => $id));
        return checkRow($query);
    }

    function getPageSlug($slug) {
        $query = $this->db->get_where('page', array('slug' => $slug));
        return checkRow($query);
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
    
    function getAllUnit() {
		$query = $this->db->get('unit');
		return checkRes($query);
	}
	
	function insert($data) {
		$this->db->insert('page', $data);
		return $this->db->insert_id();
	}
	
	function update($id, $data) {
		return $this->db->update('page', $data, 'page_id = ' . $id);
	}

	function delete($id) {
		$this->db->where('page_id', $id);
		$this->db->delete('page');
	}

}
