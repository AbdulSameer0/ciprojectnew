<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prac extends CI_Controller {

	
	public function index()
	{
		// $this->load->view('welcome_message');
        echo "Hello this is paractice session";
	}

	public function view()
	{
		$this->load->view('home_view');
        
	}

}
