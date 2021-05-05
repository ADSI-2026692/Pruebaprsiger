<?php 
class User_mod extends CI_Model{

	var $doc_id       = '';
	var $cons_tercero = '';
	var $nombre       = '';
	var $estudios     = '';
	var $cargo        = '';
	var $celular      = '';
	var $email        = '';
	var $telefono     = '';
	var $descripcion  = '';




	function lst1()
    {
		$query = $this->db->get_where('rq_personal',array('cargo' => 'Jefe de Area'));
		return $query->result();
    }

    function lst2()
    {
    	$query = $this->db->get_where('rq_personal',array('cargo' => 'Ingeniero'));
		return $query->result();
    }

    function lst3()
    {
    	$query = $this->db->get_where('rq_personal',array('cargo' => 'Supervisor'));
		return $query->result();
    }

    function lst4()
    {
    	$query = $this->db->get_where('rq_personal',array('cargo' => 'Tecnico'));
		return $query->result();
    }

    function lst($id)
	{
		$this->doc_id = $id;
		$query = $this->db->get_where('rq_personal',array('doc_id' => $this->doc_id));
		return $query->result();
	}

    
    function lstTer()
	{
		$query = $this->db->get('terceros');
		return $query->result();
	}

	function modUser($id)
	{
		$this->doc_id       = $this->input->post('doc_id');
		$this->cons_tercero = $this->input->post('cons_tercero');
		$this->nombre       = $this->input->post('nombre');
		$this->estudios     = $this->input->post('estudios');
		$this->cargo        = $this->input->post('cargo');
		$this->celular      = $this->input->post('celular');
		$this->email        = $this->input->post('email');
		$this->telefono     = $this->input->post('telefono');
		$this->descripcion  = $this->input->post('descripcion');

		$this->db->where('doc_id', $id);
		if (!$this->db->update('rq_personal', $this)) {
			echo "<script type='text/javascript'>";
			echo "alert('Problemas al modificar el personal!');";
			echo "</script>";
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "alert('El personal se modifico con exito....!');";
			echo "window.location.replace('".base_url()."area/personal');";
			echo "</script>";
		}
	}


	/*=================================*/
	/*Validar Usuario*/
	/*=================================*/
	public function validateUser()
	{
		$this->doc_id     = $this->input->post('doc_id');
		$this->cargo = $this->input->post('cargo');

		$this->db->select('*');
		$this->db->where('doc_id', $this->doc_id);
		$this->db->where('cargo', $this->cargo);
		$this->db->limit(1);
		$this->db->from('rq_personal');

		$query = $this->db->get();

		foreach ($query->result() as $row) 
		{
			$this->session->set_userdata(array('idUser' => $row->doc_id, 
											   'nombres'   => $row->nombre,
											   'cargo' => $row->cargo));
		}	
		if ($query->num_rows() > 0) 
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
		}
		else
		{
			echo "<script>";
			echo "alert('Usuario o Contraseña incorrectas o esta Inactivo');";
			echo 'window.location.replace("'.base_url().'");';
			echo "</script>";
		}
	}

	/*=================================*/
	/*adicionar usuarios*/
	/*=================================*/
	function addUser()
	{
		$this->doc_id       = $this->input->post('doc_id');
		$this->cons_tercero = $this->input->post('cons_tercero');
		$this->nombre       = $this->input->post('nombre');
		$this->estudios     = $this->input->post('estudios');
		$this->cargo        = $this->input->post('cargo');
		$this->celular      = $this->input->post('celular');
		$this->email        = $this->input->post('email');
		$this->telefono     = $this->input->post('telefono');
		$this->descripcion  = $this->input->post('descripcion');

		if (!$this->db->insert('rq_personal', $this)) {
			echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
			echo "<div class = 'row'>";
            echo "<div class = 'col-md-6 col-md-offset-3' >";
			echo "<div class='alert alert-warning fade in'>";
      		echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>";
      		echo "<h4>Warning!</h4>";
      		echo "<p>Se ha encontrado un error al tratar de adicionar este usuario...</p>";
      		echo "<p>";
      		echo "<button type='button' id='alert' class='btn btn-default'>Aceptar</button>";
      		//echo 'window.location.replace("'.base_url().'");';
      		echo "</p>";
    		echo "</div>";
    		echo "</div>";
    		echo "</div>";
		}
		else{
			echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
			echo "<div class = 'row'>";
            echo "<div class = 'col-md-6 col-md-offset-3' >";
			echo "<div class='alert alert-info fade in'>";
      		echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>";
      		echo "<h4>Congratulations!</h4>";
      		echo "<p>Usuario Adicionado con Exito!!!</p>";
      		echo "<p>";
      		echo "<a href='http://localhost/DisWeb/admin' class='button success'  style='text-decoration: none;'>Aceptar</a>";
      		//echo "<button type='button' id='alert' class='btn btn-default'>Aceptar</button>";
      		//echo 'window.location.replace("'.base_url().'");';
      		echo "</p>";
    		echo "</div>";
    		echo "</div>";
    		echo "</div>";
		}
	}

}


