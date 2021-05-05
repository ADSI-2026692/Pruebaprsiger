
<?php $this->load->view('includes/header.php'); ?>

<body>

<?php $this->load->view('includes/carousel.php'); ?>

<?php $this->load->view('includes/menuAdm.php'); ?>

<div class="container marketing">

<!-- Three columns of text below the carousel -->
<div class="row">
  <div class="col-lg-4">
    <h2>Personal</h2>
    <p>En esta opción se podran registrar los tipos de personal que se manejaran dentro
    del sistema <em>"Siger"</em>, tales como <em>"Ingeniero, Jefe de Área, Supervisor y Técnico"</em>.</p>
    <p>
    <a class="btn btn-primary" href="<?php echo base_url(); ?>area/personal" role="button">Ver detalles &raquo;</a>
    </p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <h2>Requisitos</h2>
    <p>En esta opción se suministraran los datos referentes a los proyectos y requisitos de los mismos
    a modo de registro adjuntando el personal que esta directamente relacionado con cada proyecto.</p>
    <p>
    <a class="btn btn-primary" href="<?php echo base_url(); ?>area/requisitos" role="button">Ver detalles &raquo;</a>
    </p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <h2>Proyectos</h2>
    <p>En esta opción se registraran los datoa pertinentes y/o referentes a cada proyecto tales como 
    <em>"Fecha de Inicio, Alcance, Justificación, Objetivos"</em>.</p>
    <p>
    <a class="btn btn-primary" href="<?php echo base_url(); ?>area/proyectos" role="button">Ver detalles &raquo;</a>
    </p>
  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->

<hr><br>

</body>

<?php $this->load->view('includes/footer.php'); ?>