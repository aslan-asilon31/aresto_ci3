<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct()
    {  
        parent::__construct();
        $this->load->model('M_Datatables');
    }

	public function index()
	{
		$data['title'] = 'Product Page';
		$this->load->view('layouts/backend_header',$data);
		$this->load->view('layouts/backend_sidebar',$data);
		$this->load->view('master_data/product_vw',$data);
		$this->load->view('layouts/backend_footer',$data);
	}
    
    public function onetable()
    {
        $this->load->view('onetable');

    }

    public function tablewhere()
    {
        $this->load->view('tablewhere');

    }

    public function tablequery()
    {
        $this->load->view('tablequery');

    }

    function view_data()
    {
        $tables = "products";
        $search = array('name','price','category','qty');
        // jika memakai IS NULL pada where sql
        $isWhere = null;
        // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json');
        echo $this->M_Datatables->get_tables($tables,$search,$isWhere);
    }

    function view_data_where()
    {
        $tables = "products";
        $search = array('name','price','category','qty');
        $where  = array('category' => 'php');
        // jika memakai IS NULL pada where sql
        $isWhere = null;
        // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json');
        echo $this->M_Datatables->get_tables_where($tables,$search,$where,$isWhere);
    }

    function view_data_query()
    {
        $query  = "SELECT kategori.nama_kategori AS nama_kategori, subkat.* FROM subkat 
                   JOIN kategori ON subkat.id_kategori = kategori.id_kategori";
        $search = array('nama_kategori','subkat','tgl_add');
        $where  = null; 
        // $where  = array('nama_kategori' => 'Tutorial');
        
        // jika memakai IS NULL pada where sql
        $isWhere = null;
        // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json');
        echo $this->M_Datatables->get_tables_query($query,$search,$where,$isWhere);
    }




}
