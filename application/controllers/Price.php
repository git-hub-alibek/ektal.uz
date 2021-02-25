<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Price extends CI_Controller {

	
	public function index()
	{
		$this->data['products'] = $this->db->get('products')->result_array();
		$this->load->view('price',$this->data);
	}
}
