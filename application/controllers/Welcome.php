<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Welcome to Aresto';
		$this->load->view('layouts/frontend_header',$data);
		$this->load->view('landingpage/landingpage_vw',$data);
		$this->load->view('layouts/frontend_footer',$data);
	}

	public function login(){
		$data['title'] = 'Login Page';
		$this->load->view('auth/login_vw',$data);
	}

	public function dashboard(){
		$data['title'] = 'Dashboard Page';

		$this->load->view('master_data/dashboard_vw',$data);
	}



}
