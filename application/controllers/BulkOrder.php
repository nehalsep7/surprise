<?php

class BulkOrder extends MY_Controller
{
	public function index()
	{
		$this->load->helper('url');
		$this->load->view("guest/header");
		$this->load->view("guest/bulkorder");
		$this->load->view("guest/footer");
	}
}