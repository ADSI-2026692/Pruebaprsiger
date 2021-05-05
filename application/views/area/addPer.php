
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
          <img src="../public/imgs/carousel/fac.jpg" alt="First slide">
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
          <img src="../public/imgs/carousel/cetad.jpg" alt="Second slide">
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
          <img src="../public/imgs/carousel/cacom.jpg" alt="Third slide">
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
    <h1>Adicionar Personal</h1>
  </div>
  <div class="col-lg-4"></div>
</div>

<?php echo validation_errors(); ?>

<form class="form-horizontal" id="login" method="post">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Cedula</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="doc_id" name="doc_id" placeholder="Ingrese su Cedula"
              value="<?php echo set_value('doc_id'); ?>" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-4 control-label">Cons_tercero</label>
    <div class="col-sm-8">
      <select name="cons_tercero" id="cons_tercero" class="form-control" required>
              <option value="">-- Seleccione -- </option>
              <?php foreach ($lstd as $row): ?>
              <option value="<?php echo $row->cons_tercero;?>"><?php echo $row->nombre;?></option>
            <?php endforeach ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Nombre</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su Nombre"
              value="<?php echo set_value('nombre'); ?>" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-4 control-label">Estudios</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="estudios" name="estudios" 
              placeholder="Ingrese sus Estudios" value="<?php echo set_value('estudios'); ?>" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Cargo</label>
    <div class="col-sm-8">
      <select class="form-control" id="cargo" name="cargo" placeholder="Ingrese su Cargo"
              value="<?php echo set_value('cargo'); ?>" required>
          <option value="">Seleccione...</option>
          <option value="Jefe de Area">Jefe de Área</option>
          <option value="Ingeniero">Ingeniero</option>
          <option value="Supervisor">Supervisor</option>
          <option value="Tecnico">Técnico</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-4 control-label">Celular</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="celular" name="celular" 
              placeholder="Ingrese su Celular" value="<?php echo set_value('celular'); ?>" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="email" name="email" placeholder="Ingrese su Email"
              value="<?php echo set_value('email'); ?>" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-4 control-label">Telefono</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="telefono" name="telefono" 
              placeholder="Ingrese su Telefono" value="<?php echo set_value('telefono'); ?>" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-4 control-label">Descripción</label>
    <div class="col-sm-8">
      <textarea class="form-control" id="descripcion" name="descripcion" 
              placeholder="Ingrese su Descripción" value="<?php echo set_value('descripcion'); ?>" required></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-6 col-sm-6">
      <button type="submit" class="btn btn-primary">Adicionar</button>
      <a href="<?php echo base_url(); ?>area/personal" class="btn btn-warning">Volver</a>
    </div>
  </div>
</form>

<?php  
          if ($_POST)
          {
            $doc_id       = $_POST['doc_id'];
            $cons_tercero = $_POST['cons_tercero'];
            $nombre       = $_POST['nombre'];
            $estudios     = $_POST['estudios'];
            $cargo        = $_POST['cargo'];
            $celular      = $_POST['celular'];
            $email        = $_POST['email'];
            $telefono     = $_POST['telefono'];
            $descripcion  = $_POST['descripcion'];
        
            $sql2 = "INSERT INTO rq_personal
                    VALUES($doc_id,
                            $cons_tercero, '$nombre',
                           '$estudios','$cargo',
                            $celular,'$email',
                            $telefono, '$descripcion');";
        
            if (mysql_query($sql2)) 
            {
              echo "<br><br><br>";
              echo "<div class='alert alert-success alert-dismissable'>";
              echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
              echo "<strong>Alerta!</strong>";
              echo "<h4>El personal fue adicionado con exito...</h4>";
              echo "</div>";
            }
            else
            {
              echo "<br><br><br>";
              echo "<div class='alert alert-danger alert-dismissable'>";
              echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
              echo "<strong>Alerta!</strong>";
              echo "<h4>El personal no pudo ser adicionado con exito...</h4>";
              echo mysql_error();
              echo "</div>";
            }
          }
        ?>

<br>
<hr>
<br>

</body>

<?php $this->load->view('includes/footer.php'); ?>