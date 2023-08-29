<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Dashboard Page';
		$this->load->view('layouts/backend_header',$data);
		$this->load->view('layouts/backend_sidebar',$data);
		$this->load->view('master_data/dashboard_vw',$data);
		$this->load->view('layouts/backend_footer',$data);
	}

	// public function dashboard(){
	// 	$data['title'] = 'Dashboard Page';

	// 	$this->load->view('master_data/dashboard_vw',$data);
	// }



}
