<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends CI_Controller {

	private $limit = 10;

	public function index()
	{
		$this->load->model('contact_model', 'contact');
		$query = $this->contact->all($this->limit);
		$total_rows = $this->contact->count();		

		$this->load->helper('app');
		$pagination_links = pagination($total_rows, $this->limit);

		$this->load->view('header');
		$this->load->view('index', compact('query', 'pagination_links'));
		$this->load->view('footer');
	}

	public function ajax()
	{
		$this->load->model('contact_model', 'contact');
		$query = $this->contact->all($this->limit);
		$total_rows = $this->contact->count();

		$this->load->helper('app');
		$pagination_links = pagination($total_rows, $this->limit);

		if ( ! $this->input->is_ajax_request()) $this->load->view('header');
		$this->load->view('ajax', compact('query', 'pagination_links'));
		if ( ! $this->input->is_ajax_request()) $this->load->view('footer');
	}	

}