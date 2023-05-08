<?php

class Transaction_Model extends CI_Model
{

	function fetch_total_transactions()
	{
		$this->db->select('id');
		$this->db->where('user_id',$this->session->userdata('uid'));
		return $this->db->get('transactions')->num_rows();
	}

	function buy_transactions()
	{
		$this->db->select('id');
		$this->db->where('user_id',$this->session->userdata('uid'));
		$this->db->where('transaction_type','Buy');
		return $this->db->get('transactions')->num_rows();
	}

	function sell_transactions()
	{
		$this->db->select('id');
		$this->db->where('user_id',$this->session->userdata('uid'));
		$this->db->where('transaction_type','Sell');
		return $this->db->get('transactions')->num_rows();
	}

	public function transaction_list()
	{
		$this->db->select('transactions.*,stoxs.name as stox_name,exchanges.name as exchange_name');
		$this->db->from('transactions');
		$this->db->join('stoxs', 'stoxs.id = transactions.stox_id');
		$this->db->join('exchanges', 'exchanges.id = transactions.exchange_id');
		$this->db->where('user_id',$this->session->userdata('uid'));
		$query = $this->db->get();
		return $query->result();
	}

	function total_buy_sell_stox($stox_id,$type)
	{
		$query = $this->db
				->select_sum('quantity')
				->from('transactions')
				->where('user_id',$this->session->userdata('uid'))
				->where('stox_id',$stox_id)
				->where('transaction_type',$type)
				->get();

		return $query->result_array();
	}

	function create($data)
	{
		$this->db->insert('transactions',$data);
        return true;
	}


}

?>