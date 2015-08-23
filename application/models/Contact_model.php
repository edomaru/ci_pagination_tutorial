<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends CI_Model {

	private $table = "contacts";

	public function all($limit = 0)
	{
		$this->db->limit($limit);
		$this->db->offset($this->uri->segment(3));
		$this->db->get($this->table);
	}

	public function count()
	{
		$this->db->count_all_results();
		$this->db->get($this->table);	
	}

}