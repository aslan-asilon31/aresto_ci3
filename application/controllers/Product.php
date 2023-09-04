<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct()
    {  
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Product_m');
        $this->load->database('aresto_ci3');
    }

	public function index()
	{



		$data['title'] = 'Product Page 製品テーブル';
        
        $query = $this->db->get('products');
        $data['prod_list'] = $query->result();

        // print_r($data['prod_list']);exit;

		$this->load->view('layouts/backend_header',$data);
		$this->load->view('layouts/backend_sidebar',$data);
		$this->load->view('master_data/product_vw',$data);
		$this->load->view('layouts/backend_footer',$data);
	}
    
    public function prodList(){
     
        // POST data
        $postData = $this->input->post();
   
        // Get data
        $data = $this->Product_m->getProducts($postData);
   
        echo json_encode($data);
     }




}
