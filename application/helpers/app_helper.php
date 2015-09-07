<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('pagination') ) 
{
	function pagination($total_rows, $per_page, $url, $uri_segment = 3)
	{
		$config['base_url'] = site_url($url);
		$config['total_rows'] = $total_rows;
		$config['uri_segment'] = $uri_segment;
		$config['per_page'] = $per_page;

		$ci =& get_instance();
		$ci->load->library('pagination');		
		$ci->pagination->initialize($config);
		return $ci->pagination->create_links();
	}
}