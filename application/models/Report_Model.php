<?php

class Report_Model extends CI_Model
{


	function fetch_year()
	{
		$this->db->select('year');
		$this->db->from('chart_data');
		$this->db->group_by('year');
		$this->db->order_by('year', 'DESC');
		return $this->db->get();
	}

	function fetch_chart_data($year)
	{
		$this->db->where('year', $year);
		$this->db->order_by('year', 'ASC');
		return $this->db->get('chart_data');
	}

	function stox_data()
	{
		//SELECT * FROM `transactions` WHERE user_id=1 GROUP BY stox_id;
		$this->db->select('transactions.stox_id,stoxs.name as stox_name');
		$this->db->from('transactions');
		$this->db->join('stoxs', 'stoxs.id = transactions.stox_id');
		$this->db->where('user_id', $this->session->userdata('uid'));
		$this->db->group_by('stox_id');
		$query = $this->db->get();
		return $query->result();
	}

	function totalBuy($stox_id)
	{
		$this->db->select('*');
		$this->db->from('transactions');
		$this->db->where('user_id', $this->session->userdata('uid'));
		$this->db->where('stox_id', $stox_id);
		$this->db->where('transaction_type', 'Buy');
		return $this->db->get()->result();
	}

	function totalSell($stox_id)
	{
		$this->db->select('*');
		$this->db->from('transactions');
		$this->db->where('user_id', $this->session->userdata('uid'));
		$this->db->where('stox_id', $stox_id);
		$this->db->where('transaction_type', 'Sell');
		return $this->db->get()->result();
	}
}

?>