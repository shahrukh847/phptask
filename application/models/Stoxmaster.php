<?php

class Stoxmaster extends CI_Model
{

	public function stox_list()
	{
		$query = $this->db->get('stoxs');
		return $query->result();
	}
	
	public function get_stoxs_by_id($id)
	{
		$query = $this->db->get_where('stoxs', array('id' => $id));
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
			return $this->db->insert('stoxs', $data);
		} else {
			$this->db->where('id', $id);
			return $this->db->update('stoxs', $data);
		}
	}
	
	public function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('stoxs');
	}
}

?>