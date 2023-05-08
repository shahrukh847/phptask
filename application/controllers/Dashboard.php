<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){

		parent::__construct();
		
		if(!$this->session->userdata('uid'))
			redirect('signin');

		$this->load->model('transaction_Model');
	}

	public function index(){

		$data['uname'] = $this->session->userdata('uname');
		$data['total_transactions'] = $this->transaction_Model->fetch_total_transactions();
		$data['buy'] = $this->transaction_Model->buy_transactions();
		$data['sell'] = $this->transaction_Model->sell_transactions();
		
		$this->load->view('layout/head',$data);
		$this->load->view('layout/sidebar',$data);
		$this->load->view('dashboard',$data);
		$this->load->view('layout/footer',$data);
		$this->load->view('layout/script',$data);
	}
}