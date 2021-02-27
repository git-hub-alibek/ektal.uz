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
		$this->data['products'] = $this->db->get('products')->result_array();
		$this->data['reviews'] = $this->db->where('statement', 1)->get('reviews')->result();

		$site_lang = $this->uri->segment(1);
		$this->data['faq'] = $this->db->select("id, question_".$site_lang." AS question, answer_".$site_lang." AS answer")->get('faq')->result();	    
		
//var_dump($this->input->post());die();
		if ($this->input->post('send'))
		{
		    //echo 4;die();
			$contact_name = htmlspecialchars($this->input->post('contact_name'));
			$contact_subject = htmlspecialchars($this->input->post('contact_subject'));
			$contact_email = htmlspecialchars($this->input->post('contact_email'));
			$contact_message = htmlspecialchars($this->input->post('contact_message'));
	
			
			$date = date('Y-m-d H:i:s');
			$insert = array(
			    'id' => '',
				'full_name' => $contact_name,
				'email' => $contact_email,
				'title' => $contact_subject,
				'text' => $contact_message,
				'date' => date("Y-m-d H:i:s")
			);
			$this->db->insert('feedback',$insert);
				
    		// Load Library
    		$this->load->library('phpmailer_lib');
    
            // PHPMailer object
            $mail = $this->phpmailer_lib->load();
    
             // SMTP configuration
            $mail->isSMTP();
            
            $mail->Host 		= 'server2.ahost.uz';
            $mail->SMTPAuth 	= true;
            $mail->Username = 'mail@ektal.uz';
            $mail->Password = 'NZUQWiM&$ksM';
            $mail->SMTPSecure 	= 'ssl';
            $mail->Port     	= 465;
            
            $mail->CharSet = 'UTF-8';
    
            $mail->setFrom('mail@ektal.uz', '');
            $mail->addReplyTo('mail@ektal.uz', 'TEXT');
            $mail->addAddress('mail@ektal.uz');
    
            // Add a recipient
            // $mail->addAddress('john.doe@gmail.com');
    
            // Add cc or bcc 
            // $mail->addCC('ektal.company@gmail.com');
            // $mail->addBCC('bcc@example.com');
    
            // Email subject
            $mail->Subject 	=  $contact_subject;
    
            // Set email format to HTML
            $mail->isHTML(true);
            // $mail->AddEmbeddedImage($_SERVER['DOCUMENT_ROOT'].'/aos/assets/img/login_logo.png', 'logo');
            $mail->Body = "От:" . $contact_email. "<br><br>" . $contact_message;
            //$mail->AltBody = 'This is a plain-text message body';
            
            // Send email
            if(!$mail->send()){
            	echo "<script>alert('" . lang('error_feedback') . "');</script>";
            }else{
                echo "<script>alert('" . lang('success_feedback') . "');</script>";
            }
			$this->load->view('homepage', $this->data);
		}
		else {
            echo validation_errors();
		    $this->load->view("contact", $this->data);
		}
		
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
