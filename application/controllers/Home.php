<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$data['projects']     = $this->Projects_model->getProjects();
		$data['links']        = $this->Projects_model->getLinks();
		$data['view_content'] = "pages/home";
		$this->load->view('layouts/main',$data);
	}

	public function single($id){
		$id = intval($id);
		
		
		
		$data['view_content'] = "pages/single";
		$project     = $this->Projects_model->getProjects();
		$data['project'] = $project[$id-1];

		
		try{

			if(empty($data['project'])){
				throw new siteException('no Project with this id ');
			}
			$this->load->view('layouts/main',$data);

		}catch(siteException $e){

			$this->session->set_flashdata('error', $e->getMessage());
			redirect(base_url());

		}catch(Exception $e){

			$this->session->set_flashdata('error', 'Server Error ');
			redirect(base_url());

		}
		
		
		
	}

	public function contact(){
		$rules = [
			array(
					'field' => 'name',
					'label' => 'Your Name',
					'rules' => 'required'
			),
			array(
					'field' => 'email',
					'label' => 'Email',
					'rules' => 'required|valid_email',
			),
			array(
					'field' => 'message',
					'label' => 'Message',
					'rules' => 'required'
			)
		];
	

		$this->form_validation->set_rules($rules);
		$data['view_content'] = 'pages/contact';
		if ($this->form_validation->run() == FALSE){
			$this->load->view('layouts/main',$data);
		}else{
			$email   =  $this->input->post('email');
			$name    =  $this->input->post('name');
			$subject =  $this->input->post('subject');
			$message =  $this->input->post('message');
			$messageArr = [
				'email'   => $email,
				'name'    => $name ,
				'subject' => $subject,
				'message' => $message
			];


			$this->email->from($email, $name);
			$this->email->to('marwan9956@gmail.com');
			$this->email->subject($subject);
			$this->email->message($message);

			try{
				//$this->Message_model->storeMessage($messageArr);
				if(!$this->email->send()){
					throw new siteException('Error : Your Message Didn\'t Sent Successfully Tyr Again');
				}
				$this->session->set_flashdata('success', 'Your Message Sent Successfully');
				redirect(base_url());

			}catch(siteException $e){
				$this->session->set_flashdata('error', $e->getMessage());
				$this->load->view('layouts/main',$data);
				
			}catch(Exception $e){
				$this->session->set_flashdata('error', 'Server Error : Your Message Didn\'t Sent Successfully Tyr Again');
				redirect(base_url());
			}
			
		}
		
	}

}
