<?php

/*
 * By Haidar Mar'ie Email = haidarvm@gmail.com MProduct
 */
class MAtlet extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getAllAtlet() {
        $query = $this->db->get('atlet_profile');
        return checkRes($query);
    }

    function getAtlet($id) {
        $query = $this->db->get_where('atlet_profile', array('atlet.atlet_id' => $id));
        return checkRow($query);
    }

    function getAtletSlug($slug) {
        $query = $this->db->get_where('atlet_profile', array('slug' => $slug));
        return checkRow($query);
    }

    function getAllProduct() {
		
    }
    
    function checkSlug($slug) {
        $this->db->like('slug', $slug);
        $query = $this->db->get('product');
        if (checkRes($query)) {
            return $this->getLatestExistsSlug($slug);
        } else {
            return slugify($slug);
        }
    }
    
    function getAllUnit() {
		$query = $this->db->get('unit');
		return checkRes($query);
	}
	
	function insertAtlet($data) {
        unset($data['atlet_id']);
	    $query = $this->db->insert('atlet_profile', $data);
	    return $this->db->insert_id();
	}
	
	function updateAtlet($data, $id) {
	    unset($data['atlet_id']);
	    $query = $this->db->update('atlet_profile', $data, array('atlet_id' => $id));
	    return $query;
	}

    function delete($id){
        unset($data['atlet_id']);
        $this->db->delete('atlet_profile', array('atlet_id' => $id));
    }

}
