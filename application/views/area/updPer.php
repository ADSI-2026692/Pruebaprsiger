
<?php $this->load->view('includes/header.php'); ?>

<body>

<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="../../public/imgs/carousel/fac.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>FAC.</h1>
              <p>La Fuerza Aérea Colombiana ejerce y mantiene el dominio del espacio aéreo, conduce 
              operaciones aéreas, para la defensa de la soberanía, la independencia, la integridad del 
              territorio nacional, el orden constitucional y el logro de los fines del Estado.</p>
              <p><a class="btn btn-lg btn-danger" href="https://www.fac.mil.co/" role="button">Ver Página Web</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="../../public/imgs/carousel/cetad.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>CETAD.</h1>
              <p>El Centro de Desarrollo Tecnológico Aeroespacial para la Defensa disminuira la 
              brecha tecnológica del país en el sector aeroespacial, a través de la apropiación 
              del conocimiento, mediante la integración del sector productivo público 
              y privado, las universidades y el Estado.</p>
              <p><a class="btn btn-lg btn-danger" href="http://www.cetad.co/" role="button">Ver Página Web</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="../../public/imgs/carousel/cacom.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>CACOM-5.</h1>
              <p>El CACOM-5 para el año 2019, estará integrada por un Talento Humano altamente calificado, 
              dotado con tecnología aeronáutica de combate y con capacidad de información en tiempo real, 
              para atender las necesidades de seguridad integral del País, protección y conservación del 
              medio ambiente en la Base Aérea de forma anticipada y precisa, así como la protección de la 
              infraestructura del Estado y bienes de los ciudadanos.</p>
              <p>
              <a class="btn btn-lg btn-danger" href="http://www.cacom5.mil.co/" role="button">Ver Página Web</a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

<?php $this->load->view('includes/menuAdm.php'); ?>

<div class="container marketing">


<div class="row">
  <div class="col-lg-4"></div>
  <div class="col-lg-4">
    <h1>Modificar Personal</h1>
  </div>
  <div class="col-lg-4"></div>
</div>

<?php echo validation_errors(); ?>

<form class="form-horizontal" id="login" method="post">
<?php foreach ($lu as $row): ?>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Cedula</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="doc_id" name="doc_id"
              value="<?php echo $row->doc_id; ?>" readonly="readonly">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-4 control-label">Cons_tercero</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="cons_tercero" name="cons_tercero"
              value="<?php echo $row->cons_tercero; ?>" readonly="readonly">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Nombre</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="nombre" name="nombre"
              value="<?php echo $row->nombre; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-4 control-label">Estudios</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="estudios" name="estudios" 
               value="<?php echo $row->estudios; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Cargo</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="cargo" name="cargo"
              value="<?php echo $row->cargo; ?>" readonly="readonly">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-4 control-label">Celular</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="celular" name="celular" 
              value="<?php echo $row->celular; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="email" name="email"
              value="<?php echo $row->email; ?>" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-4 control-label">Telefono</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="telefono" name="telefono" 
               value="<?php echo $row->telefono; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-4 control-label">Descripción</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="descripcion" name="descripcion" 
              value="<?php echo $row->descripcion; ?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-6 col-sm-6">
      <button type="submit" class="btn btn-primary">Modificar</button>
      <a href="<?php echo base_url(); ?>area/personal" class="btn btn-warning">Volver</a>
    </div>
  </div>
  <?php endforeach ?>
</form>

<br>
<hr>
<br>

</body>

<?php $this->load->view('includes/footer.php'); ?>