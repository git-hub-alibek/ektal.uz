<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('form');
	}

	public function index()
	{
		
//var_dump($this->input->post());die();
		if ($this->input->post('send'))
		{
//echo 2;die();
			$this->form_validation->set_rules('contact_name','contact_name','required|trim');
			$this->form_validation->set_rules('contact_subject','contact_subject','required|trim');
			$this->form_validation->set_rules('contact_email','contact_mail','valid_email|required');
			$this->form_validation->set_rules('contact_message','contact_message','required|trim');
			$this->form_validation->set_rules('captcha','Защитный код','required|callback_captcha_check');
//echo 3;die();
			if ($this->form_validation->run()==TRUE)
			{
			    //echo 4;die();
				$contact_name = htmlspecialchars($this->input->post('contact_name'));
				$contact_subject = htmlspecialchars($this->input->post('contact_subject'));
				$title = htmlspecialchars($this->input->post('title'));
				$contact_email = htmlspecialchars($this->input->post('contact_email'));
				$contact_message = htmlspecialchars($this->input->post('contact_message'));
		
				
				$date = date('Y-m-d H:i:s');
				$insert = array(
				
					'contact_message' => $contact_message,
					'contact_subject' => $contact_subject,
					'contact_email' => $contact_email,
					'contact_name' => $contact_name,
		
				);
				$this->db->insert('feedback',$insert);
				
				$this->load->library('email');
				$this->email->initialize(array('mailtype'=>'html'));
				$this->email->from("mail@ektal.uz", $contact_name);
				$this->email->to('ektal@umail.uz');
				$this->email->subject('ektal.uz: ');
				$this->email->message("Здравствуйте! Сегодня, поступило сообщение от '.$contact_name.' '.$contact_email.' следующего содержания:<br /><br /><strong>''.$contact_subject.'. .$contact_message.'</strong> ");
				
				$this->email->send();
				
				$this->session->set_flashdata("message",'<div class="alert alert-success"> Сообщение успешно отправлено!</div>');
				$this->email->print_debugger(array('headers','subject','body'));
//die();
				redirect("contact","location");
			}
			
		}
//echo 4;
echo validation_errors();
		$data["title"] = "Обратная связь";
		$this->load->view("contact");
	
		
	}
	
	public function captcha_check($word)
	{
		if (strtolower($word) == trim(strtolower($this->session->flashdata("captcha")))) 
		{
			return true;
		}
		else 
		{
			$this->form_validation->set_message("captcha_check", "Защитный код введен неправильно!");
			return false;
		}
	}
}
