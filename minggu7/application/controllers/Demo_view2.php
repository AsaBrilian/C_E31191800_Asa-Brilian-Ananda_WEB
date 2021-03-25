<?php 
class Demo_view2 extends CI_Controller{
	public function __contruct(){
		parent:: __contruct();
		$this->load->helper('url')
	}
	public function index (){
		$this->load->view('demoview');
	}
}
 ?>