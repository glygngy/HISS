<?php
define(name'basepath') OR exit ('No direct script allowed');

class Users extends CI_controller {
  public function index()
  {
    $this->load->view('welcome_message');
  }
public function register($param1){
    echo"register"();
    exit;
  }
}
