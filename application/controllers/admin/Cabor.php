<?php
if (! defined('BASEPATH'))
	exit('No direct script access allowed');

class Cabeor extends Ci_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('mcabor');
		$this->mcabor = new MCabor();
		
	}

	function index()
    {
        $data['title'] = "Test";
        $this->load->admin_template('admin/cabor', $data);
        
    }

	/** List All Page
     *
     * @param string Page slug
     */

	function get_data(){

        
        $requestData= $this->input->post();
        //print_r($requestData);exit;
        $columns = array( 
        // datatable column index  => database column name
            0 =>'employee_name', 
            1 => 'employee_salary',
            2 => 'employee_age'
        );
        
        $this->db->select('employee_name, employee_salary, employee_age');
        $this->db->from('employee');
        
        $query = $this->db->get();
        $totalData = $query->num_rows(); 
        $totalFiltered = $totalData;
        //print_r($totalFiltered); exit;

        $this->db->select('employee_name, employee_salary, employee_age' );
        $this->db->from('employee');
        $this->db->where('1','1');
        

        if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
            
            $sql = " AND ( employee_name LIKE '".$requestData['search']['value']."%' OR employee_salary LIKE '".$requestData['search']['value']."%' OR employee_age LIKE '".$requestData['search']['value']."%' ) ";  
            
        }
        
        $query = $this->db->get($sql);
        //print_r($query);exit;

        $totalFiltered = $query->num_rows();  // when there is a search parameter then we have to modify total number filtered rows as per search result. 
        //print_r($totalFiltered);exit;
        $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
        //print_r($sql);exit;
        /* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */    
        $query = $this->db->get($sql);

        $data = array();
        while( $row=mysqli_fetch_array($query) ) {  // preparing an array
            $nestedData=array(); 

            $nestedData[] = $row["employee_name"];
            $nestedData[] = $row["employee_salary"];
            $nestedData[] = $row["employee_age"];
            
            $data[] = $nestedData;
        }

        $json_data = array(
            "draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
            "recordsTotal"    => intval( $totalData ),  // total number of records
            "recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
            "data"            => $data   // total data array
            );

        echo json_encode($json_data);
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
