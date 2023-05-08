<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exchange extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('uid'))
			redirect('signin');

		$this->load->model('exchangemaster');
		$this->load->helper('url_helper');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	
	public function index()
	{

		$data['exchanges'] = $this->exchangemaster->exchange_list();
		$data['uname'] = $this->session->userdata('uname');
		$data['title'] = 'Exchange List';

		$this->load->view('layout/head',$data);
		$this->load->view('layout/sidebar',$data);
		$this->load->view('exchanges/list',$data);
		$this->load->view('layout/footer',$data);
		$this->load->view('layout/script',$data);

	}

	public function edit($id)
	{
		$id = $this->uri->segment(3);
		$data = array();
		
		if (empty($id))
		{ 
			show_404();
		}else{
			$data = $this->exchangemaster->get_exchange_by_id($id);
			//$this->load->view('stoxs/edit', $data);
			echo json_encode($data);
		}
	}

	public function store()
	{
		$data = array(
			'name' => $this->input->post('name')
		);
		$this->exchangemaster->createOrUpdate(array('id' => ''), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function update()
	{
		$data = array(
			'name' => $this->input->post('name')
		);
		$this->exchangemaster->createOrUpdate(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

}