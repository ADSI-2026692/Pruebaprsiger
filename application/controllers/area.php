<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Area extends CI_Controller {

	var $ruta = '';
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('area_mod');
		$this->load->model('user_mod');
		$this->ruta = base_url().'user';
		$this->removeCache();
	}

	/*===========================================*/
	/*Function index*/
	/*===========================================*/
	public function index()
	{
		$this->load->view('area/index');
	}

	/*===========================================*/
	/*Function listar personal */
	/*===========================================*/
	public function personal()
	{
		$data['are'] = $this->user_mod->lst1();
		$data['ing'] = $this->user_mod->lst2();
		$data['sup'] = $this->user_mod->lst3();
		$data['tec'] = $this->user_mod->lst4();
		$this->load->view('area/lstPersonal', $data);
	}

	/*===========================================*/
	/*Function adicionar personal */
	/*===========================================*/
	public function add()
	{
		$data['lstd'] = $this->user_mod->lstTer();
		$this->load->view('area/addPer', $data);
	}

	public function viewPer($id)
	{
		$data['lu'] = $this->user_mod->lst($id);
		$this->load->view('area/viewPer', $data);
	}
	
	/*===========================================*/
	/*Function update user*/
	/*===========================================*/
	public function updPer($id)
	{
		$data['lu'] = $this->user_mod->lst($id);
		$this->load->view('area/updPer', $data);

		if ($_POST){
			$this->user_mod->modUser($id);
		}
	}
}
