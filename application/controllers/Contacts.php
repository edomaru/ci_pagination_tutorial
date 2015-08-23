<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends CI_Controller {

	private $limit = 10;

	public function index()
	{
		$this->load->model('contact_model', 'contact');
		$query = $this->contact->all($this->limit);
		$total_rows = $this->contact->count();

		$config['base_url'] = site_url("contacts/index");
		$config['total_rows'] = $total_rows;
		$config['uri_segment'] = 3;

		$this->load->library('pagination', $config);		
		$pagination_links = $this->pagination->create_links();
		$this->load->view('index', compact('query', 'pagination_links'));
	}

	public function generate()
	{
		for ($i=1; $i <= 50; $i++) { 
			$this->db->insert('contacts', array(
				'name' => "User {$i}",
				'email' => "user{$i}@example.com",
				'address' => "Address of User {$i}"
			));			
		}
		echo "Done!";
	}

}