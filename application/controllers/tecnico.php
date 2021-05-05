<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tecnico extends CI_Controller {

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
		$this->load->view('tecnico/index');
	}
	
}
