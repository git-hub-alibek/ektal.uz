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
		$this->data['feedback'] = $this->db->where('statement', 1)->get('feedback')->result();

		$site_lang = $this->uri->segment(1);
		$this->data['faq'] = $this->db->select("id, question_".$site_lang." AS question, answer_".$site_lang." AS answer")->get('faq')->result();
		
		var_dump($this->input->post());

		$from = $this->input->post('name');
		$text = $this->input->post('message');
		$date = date('Y-m-d H:i:s');

				$this->load->library('email');
				$this->email->initialize(array('mailtype'=>'html'));
				$this->email->from("ektal.company@gmail.com", $from);
				$this->email->to('a_aleke@inbox.ru');
				
				$this->email->subject('test.kkaetk.uz: ');
				$this->email->message('Здравствуйте! Сегодня, '.$date.' поступило сообщение от '.$from.' следующего содержания:<br /><br /><strong>'.$text.'</strong>');
				
				$em = $this->email->send();		
		if($em)
			echo "<hr>YAHOO".$em;

		$this->load->view('homepage', $this->data);		
	}
}
