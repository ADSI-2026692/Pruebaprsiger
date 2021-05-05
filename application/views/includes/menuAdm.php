<div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse purple navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
              data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"> Siger <i class="large blue  icon loading"></i>
       			 		<?php echo $this->session->userdata('cargo'); ?></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url(); ?>area">Inicio</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                  aria-expanded="false">SubMenu1 
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url(); ?>area/objPrueba">Objeto Pruebas</a></li>
                    <li><a href="<?php echo base_url(); ?>area/complejidad">Complejidad</a></li>
                    <li><a href="<?php echo base_url(); ?>area/objProyecto">Objeto Proyecto</a></li>
                    <li><a href="<?php echo base_url(); ?>area/estados">Estados</a></li>
                    <li><a href="<?php echo base_url(); ?>area/perProyecto">Personas por Proyecto</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                  aria-expanded="false">SubMenu2 
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url(); ?>area/gestion">Gestión</a></li>
                    <li><a href="<?php echo base_url(); ?>area/tipVerifica">Tipo de Verificación</a></li>
                    <li><a href="<?php echo base_url(); ?>area/prioridades">Prioridades</a></li>
                    <li><a href="<?php echo base_url(); ?>area/tipGestion">Tipo de Gestión</a></li>
                    <li><a href="<?php echo base_url(); ?>area/subProyecto">Sub-Proyecto</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                  aria-expanded="false">SubMenu3 
                  	<span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url(); ?>area/riesgos">Riesgos</a></li>
                    <li><a href="<?php echo base_url(); ?>area/tipRequisito">Tipo de Requisitos</a></li>
                    <li><a href="<?php echo base_url(); ?>area/glosario">Glosario</a></li>
                    <li><a href="<?php echo base_url(); ?>area/verificaRequi">Verificación por Requisitos</a></li>
                    <li><a href="<?php echo base_url(); ?>area/terceros">Terceros</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">  
       			 <li><a href="<?php echo base_url(); ?>login/close">Cerrar Sesion</a></li> 
      		  </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>