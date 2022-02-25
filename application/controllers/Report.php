<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function index(){

	}

	public function store(){
			$this->db->insert('report',['message'=>$this->input->post('message',true)]);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			Thankyou for your report !
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
			redirect('user');
	}

	public function destroy(){

	}

}
