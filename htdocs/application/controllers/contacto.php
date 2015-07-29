<?php
class Contacto extends CI_Controller {
    
	public function index() {
        $this->load->helper('url'); 
		$this->load->view('layout/header');
        $this->load->view('layout/login_overlay');
        $this->load->view('contacto');
        $this->load->view('layout/footer');
	}
    
    public function send() {
        $this->load->library('email');
        $this->load->helper('url'); 
        
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $consult = $this->input->post('consult');
        
        if(trim($name) == '' || trim($email) == '' || trim($phone) == '' || trim($consult) == '') {
            $_SESSION['error'] = 'Debe completar todos los campos';
            redirect('/contacto');
        } else {
            $this->email->from('contact@mucoop.com.ar', $name);
            $this->email->to('lorena.mucoop@outlook.com'); 

            $this->email->subject('Consulta desde mucoop.com.ar');
            $body = 'Email: '.$email.'  Telefono: '.$phone.'  Consulta:<br>'.$consult;
            $this->email->message($body);	

            if($this->email->send()) {
                $_SESSION['success'] = "Su consulta fue enviada correctamente";
                redirect('/contacto');
            } else {
                $_SESSION['error'] = 'Hubo un error procesando lo solicitado. Intente nuevamente mas tarde';
                redirect('/contacto');
            }
        }
    }
}
?>