<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
	}

	public function index()
	{
		$this->data['products'] = $this->db->get('products')->result_array();
		$this->data['reviews'] = $this->db->where('statement', 1)->get('reviews')->result();

		$site_lang = $this->uri->segment(1);
		$this->data['faq'] = $this->db->select("id, question_".$site_lang." AS question, answer_".$site_lang." AS answer")->get('faq')->result();


		if ($this->input->post('send'))
		{

			$contact_name = strip_tags($this->input->post('contact_name'));
			$contact_info = strip_tags($this->input->post('contact_info'));
			$contact_message = strip_tags($this->input->post('contact_message'));
	

			$insert = array(
			    'id' => '',
				'full_name' => $contact_name,
				'user_info' => $contact_info,
				'text' => $contact_message,
				'post_scriptum' => '',
				'date' => date("Y-m-d H:i:s"),
				'statement' => 0
			);
			$this->db->insert('reviews', $insert);

			echo "<script>alert('".lang('success_review')."')</script>";
			//$this->session->set_flashdata("message",'<div class="alert alert-success"> Сообщение успешно отправлено!</div>');
			//die();
		}
		//echo 4;
		
		
		
		$this->load->view('homepage', $this->data);

	}
}
