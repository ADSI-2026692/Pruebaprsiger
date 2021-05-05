
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
    <h1>Datos de Personal</h1>
  </div>
  <div class="col-lg-4"></div>
</div>


  <a href="<?php echo base_url(); ?>area/personal" class="btn btn-warning">Volver</a><br><br>
      
 <table class="table condensed">
    <?php foreach ($lu as $row ): ?>
    <tr class='warning'>
         <td><b>Documento:</b></td> 
         <td><?php echo $row->doc_id; ?></td>
    </tr>
    <tr class='danger'>
         <td><b>Cons_tercero:</b></td> 
         <td><?php echo $row->cons_tercero; ?></td>
    </tr>
    <tr class='warning'>
         <td><b>Nombre:</b></td> 
         <td><?php echo $row->nombre; ?></td>
    </tr>
    <tr class='danger'>
         <td><b>Estudios:</b></td>
         <td><?php echo $row->estudios; ?></td>
    </tr>
    <tr class='warning'>
         <td><b>Cargo:</b></td> 
      <td><?php echo $row->cargo; ?></td>
    </tr>
    <tr class='danger'>
         <td><b>Celular:</b></td> 
          <td><?php echo $row->celular; ?></td>
    </tr>
    <tr class='warning'>
         <td><b>Email:</b></td>           
          <td><?php echo $row->email; ?></td>
    </tr>
    <tr class='danger'>
         <td><b>Teléfono:</b></td>
         <td><?php echo $row->telefono; ?></td>
    </tr>
    <tr class='warning'>
         <td><b>Descripción:</b></td> 
      <td><?php echo $row->descripcion; ?></td>
    </tr>
    <?php endforeach ?>
    <tfoot></tfoot>
    </table>     

<br><hr><br>

</body>

<?php $this->load->view('includes/footer.php'); ?>