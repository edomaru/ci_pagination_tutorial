<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Generate extends CI_Controller {

	public function contacts()
	{
		// generate 50 contacts
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