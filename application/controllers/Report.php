<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('report_model');
	}

	function index()
	{
		$dataArray = array();
		$dataArray['stox_data'] = $this->report_model->stox_data();

		foreach ($dataArray['stox_data'] as $key => $data) {

			$stoxId = $data->stox_id;
			$buyResult = $this->report_model->totalBuy($stoxId);
			
			$totalQuantityBuy = 0;
			$totalPriceBuy = 0;

			foreach ($buyResult as $key => $buy) {
				$totalQuantityBuy = $totalQuantityBuy + $buy->quantity;
				$totalPriceBuy = $totalPriceBuy + $buy->total_price;
			}

			$data->total_quantity_buy = $totalQuantityBuy;
			$data->total_avg_price_Buy = round($totalPriceBuy/$totalQuantityBuy,2);

			$sellResult = $this->report_model->totalSell($stoxId);

			if (!empty($sellResult)) {

				$totalQuantitySell = 0;
				$totalPriceSell = 0;

				foreach ($sellResult as $key => $sell) {
					$totalQuantitySell = $totalQuantitySell + $sell->quantity;
					$totalPriceSell = $totalPriceSell + $sell->total_price;
				}

				$data->total_quantity_sell = $totalQuantitySell;
				$data->total_avg_price_sell = round($totalPriceSell / $totalQuantitySell,2);
				$profit = round(($data->total_avg_price_sell - $data->total_avg_price_Buy) * $data->total_quantity_sell, 2);
				$data->profit = $profit;
			} else {
				$data->total_quantity_sell = 0;
				$data->total_avg_price_sell = 0;
				$data->profit = 0;
			}
		}

		$mainData['stox'] = $dataArray['stox_data']; 
		$mainData['uname'] = $this->session->userdata('uname');
		$mainData['title'] = 'Report List';

		$this->load->view('layout/head',$mainData);
		$this->load->view('layout/sidebar',$mainData);
		$this->load->view('report/report',$mainData);
		$this->load->view('layout/footer',$mainData);
		$this->load->view('layout/script',$mainData);
	}

	function fetch_data()
	{
		if($this->input->post('year'))
		{
			$chart_data = $this->report_model->fetch_chart_data($this->input->post('year'));

			foreach($chart_data->result_array() as $row)
			{
				$output[] = array(
					'month'  => $row["month"],
					'profit' => floatval($row["profit"])
				);
			}
			echo json_encode($output);
		}
	}

}

?>