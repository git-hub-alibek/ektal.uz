<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	
	public function index()
	{
		$this->data['products'] = $this->db->get('products')->result_array();

		$this->load->view('homepage', $this->data);		
	}
	public function show($id = false)
	{
		$this->data['product'] = $this->db->where('id', intval($id))->get('products')->result_array();

		$this->load->view('product', $this->data);		
	}

}
