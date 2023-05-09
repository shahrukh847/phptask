<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

	function __construct(){

		parent::__construct();
		
		if(!$this->session->userdata('uid'))
			redirect('signin');

		$this->load->model('transaction_Model');
		$this->load->model('stoxmaster');
		$this->load->model('exchangemaster');
		$this->load->helper('url_helper');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('date');
	}

	public function index()
	{

		$data['transactions'] = $this->transaction_Model->transaction_list();
		$data['uname'] = $this->session->userdata('uname');
		$data['title'] = 'Transaction List';
		$data['stocks'] = $this->stoxmaster->stox_list();
		$data['exchanges'] = $this->exchangemaster->exchange_list();
		
		$this->load->view('layout/head',$data);
		$this->load->view('layout/sidebar',$data);
		$this->load->view('transactionS/list',$data);
		$this->load->view('layout/footer',$data);
		$this->load->view('layout/script',$data);

	}

	public function check()
	{
		$data = array();
		$stock_id = $this->input->post('stox_id');
		$quantity = $this->input->post('quantity');
		$buydata = $this->transaction_Model->total_buy_sell_stox($stock_id,'Buy');
		$selldata = $this->transaction_Model->total_buy_sell_stox($stock_id,'Sell');

		$totalBuy = $buydata[0]['quantity'];
		$totalSell =$selldata[0]['quantity'];

		if ($totalBuy == '') {
			$totalBuy = 0;
		}
		if ($totalSell == '') {
			$totalSell = 0;
		}

		$data['status'] = TRUE;
		$availableStox = $totalBuy - $totalSell;
		$data['available_stox'] = $availableStox;

		if ($quantity > $availableStox) {
			$data['status'] = FALSE;
		}

		echo json_encode($data);
	}

	public function store()
	{
		$format = "%Y-%m-%d";
		$date = mdate($format);
		$total_price = $this->input->post('quantity') * $this->input->post('price');

		$data = array(
			'user_id' => $this->session->userdata('uid'),
			'stox_id' => $this->input->post('stox_id'),
			'exchange_id' => $this->input->post('exchange_id'),
			'transaction_type' => $this->input->post('transaction_type'),
			'quantity' => $this->input->post('quantity'),
			'avg_price' => $this->input->post('price'),
			'total_price' => $total_price,
			'transaction_date' => $date,
		);

		$response = $this->transaction_Model->create($data);
		if($response == true){
			$data['status'] = TRUE;
			$data['message'] = 'Transation Successfully Done!';
		
		} else{
			$data['status'] = FALSE;
			$data['message'] = 'something went wrong in Transation';
		}
		echo json_encode($data);
	}
}