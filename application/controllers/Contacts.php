<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
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