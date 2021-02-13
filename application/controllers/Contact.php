<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	
	public function index()
	{
		$this->load->view('contact');
	}

	public function send()
	{
		$this->data['products'] = $this->db->get('products')->result_array();

		$this->load->view('homepage', $this->data);		
	}
}
