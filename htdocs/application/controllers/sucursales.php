<?php
class Sucursales extends CI_Controller {
    
	public function index() {
        $this->load->helper('url'); 
		$this->load->view('layout/header');
        $this->load->view('layout/login_overlay');
        $this->load->view('sucursales');
        $this->load->view('layout/footer');
	}
}
?>