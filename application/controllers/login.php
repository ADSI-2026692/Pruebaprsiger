<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	var $ruta = '';
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_mod');
		$this->ruta = base_url().'user';
		$this->removeCache();
	}

	/*===========================================*/
	/*Function iniciar session*/
	/*===========================================*/
	public function index()
	{

			if ($this->session->userdata('cargo') == 'Jefe de Area') 
			{
				redirect('area', 'refresh');
			}
			if ($this->session->userdata('cargo') == 'Ingeniero' ) 
			{
				redirect('ingeniero', 'refresh');
			}
			if ($this->session->userdata('cargo') == 'Tecnico' ) 
			{
				redirect('tecnico', 'refresh');
			}
			if ($this->session->userdata('cargo') == 'Supervisor' ) 
			{
				redirect('supervisor', 'refresh');
			}
		else
		{
			if ($_POST) 
			{
				$this->form_validation->set_message('required', '%s Requerido');
				$this->form_validation->set_rules('doc_id', 'Numero de Cedula', 'required');
				$this->form_validation->set_rules('cargo', 'Cargo', 'required');
				$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

				if ($this->form_validation->run() == true) 
				{
					$this->user_mod->validateUser();
				}
			}
			$this->load->view('login');
		}
	}


	/*===========================================*/
	/*Function cerrar sesion*/
	/*===========================================*/
	public function close()
	{
		$this->session->sess_destroy();
		echo "<script>";
		echo 'window.location.replace("'.base_url().'");';
		echo "</script>";
	}
	
}
