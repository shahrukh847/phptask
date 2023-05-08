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
		$data['year_list'] = $this->report_model->fetch_year();
		$data['uname'] = $this->session->userdata('uname');
		$data['title'] = 'Exchange List';

		$this->load->view('layout/head',$data);
		$this->load->view('layout/sidebar',$data);
		$this->load->view('report/report',$data);
		$this->load->view('layout/footer',$data);
		$this->load->view('layout/script',$data);
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