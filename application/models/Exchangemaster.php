<?php

class Exchangemaster extends CI_Model
{

	public function exchange_list()
	{
		$query = $this->db->get('exchanges');
		return $query->result();
	}
	
	public function get_exchange_by_id($id)
	{
		$query = $this->db->get_where('exchanges', array('id' => $id));
		return $query->row();
	}
	
	public function createOrUpdate()
	{
		$this->load->helper('url');
		$id = $this->input->post('id');
		
		$data = array(
			'name' => $this->input->post('name')
		);
		if (empty($id)) {
			return $this->db->insert('exchanges', $data);
		} else {
			$this->db->where('id', $id);
			return $this->db->update('exchanges', $data);
		}
	}
	
	public function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('exchanges');
	}
}

?>