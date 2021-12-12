<?php	
class Calendar extends CI_Controller{
public function __construct(){
		parent::__construct();
		$this->load->model('calendar_model');
		date_default_timezone_set('Asia/Manila');
	}
	
	public function display($year=NULL,$month=NULL){
        $this->load->helper('url');
		$this->load->view("calendar/display",$data);

	}
}
?>