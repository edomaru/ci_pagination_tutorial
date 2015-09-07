<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends CI_Controller {

	private $limit = 10;

	public function index()
	{
		$this->load->model('contact_model', 'contact');
		$query = $this->contact->all($this->limit);
		$total_rows = $this->contact->count();

		// additional pagination configuration
		$config["full_tag_open"] = '<ul class="pagination">';
		$config["full_tag_close"] = '</ul>';	

		$config["first_link"] = "&laquo;";
		$config["first_tag_open"] = "<li>";
		$config["first_tag_close"] = "</li>";

		$config["last_link"] = "&raquo;";
		$config["last_tag_open"] = "<li>";
		$config["last_tag_close"] = "</li>";

		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '<li>';

		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '<li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['base_url'] = site_url("contacts/index");
		$config['total_rows'] = $total_rows;
		$config['uri_segment'] = 3;
		$config['per_page'] = $this->limit;

		$this->load->library('pagination', $config);		
		$pagination_links = $this->pagination->create_links();

		$this->load->view('header');
		$this->load->view('index', compact('query', 'pagination_links'));
		$this->load->view('footer');
	}

	public function ajax()
	{
		$this->load->model('contact_model', 'contact');
		$query = $this->contact->all($this->limit);
		$total_rows = $this->contact->count();

		// additional pagination configuration
		$config["full_tag_open"] = '<ul class="pagination">';
		$config["full_tag_close"] = '</ul>';	

		$config["first_link"] = "&laquo;";
		$config["first_tag_open"] = "<li>";
		$config["first_tag_close"] = "</li>";

		$config["last_link"] = "&raquo;";
		$config["last_tag_open"] = "<li>";
		$config["last_tag_close"] = "</li>";

		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '<li>';

		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '<li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['base_url'] = site_url("contacts/ajax");
		$config['total_rows'] = $total_rows;
		$config['uri_segment'] = 3;
		$config['per_page'] = $this->limit;

		$this->load->library('pagination', $config);		
		$pagination_links = $this->pagination->create_links();
		if ( ! $this->input->is_ajax_request()) $this->load->view('header');
		$this->load->view('ajax', compact('query', 'pagination_links'));
		if ( ! $this->input->is_ajax_request()) $this->load->view('footer');
	}	

}