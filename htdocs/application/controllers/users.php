<?php
class Users extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url'); 
    }
    
	public function index() {
		
	}
    
    public function login() {
        //SAVE CREDENTIALS
        $email = $this->input->post('email');
        $pass = $this->input->post('password');
        $suc = $this->input->post('sucursal');
        //LOAD MODEL
        $this->load->model('User', 'user');
        //AUTHENTICATE
        if($this->user->authenticate($email, $pass, $suc)) {
            //Save session
            $_SESSION['cl_nume'] = $this->user->cl_nume;
            $_SESSION['name'] = $this->user->name;
            $_SESSION['suc'] = $this->user->suc;
            redirect('/users/home');
        }else{
            //Render error de logueo
            redirect('/error');
        }
    }
    
    public function home() {
        $data = array('name' => $_SESSION['name'], 'mucoop' => 'http://mucoop.com.ar/');
        $this->load->view('layout/user/header', $data);
        $this->load->view('user/home', $data);
        $this->load->view('layout/footer');
    }
    
    public function logout() {
        session_destroy();
        redirect('/home');
    }
    
    public function account() {
        //Cuenta corriente
        //Consulta a DB
        $this->load->model('User', 'user');
        $movements = $this->user->getAccountMovements($_SESSION['cl_nume'], $_SESSION['suc']);
        $totals = $this->user->getAccountTotals($_SESSION['cl_nume'], $_SESSION['suc']);
        //Render
        $data = array('mucoop' => 'http://mucoop.com.ar/', 'movements' => $movements, 'totals' => $totals);
        $this->load->view('layout/header', $data);
        $this->load->view('user/account', $data);
        $this->load->view('layout/footer');
    }
}
?>