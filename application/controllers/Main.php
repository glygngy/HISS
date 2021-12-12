<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('main_model');
		date_default_timezone_set('Asia/Manila');
	}
	public function index()
	{
		$this->load->view('main/home');
	}
}
?>