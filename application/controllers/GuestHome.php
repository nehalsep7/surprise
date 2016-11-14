<?php

class GuestHome extends MY_Controller
{
	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->view("guest/header");
		$this->load->view('guest/guest_home');
		$this->load->view("guest/footer");
	}
}