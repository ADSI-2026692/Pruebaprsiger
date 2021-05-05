
<?php include 'includes/header.php' ?>

<body>

<?php include 'includes/carousel.php' ?>

<form class="form-horizontal" id="login" method="post">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Cedula</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="doc_id" name="doc_id" placeholder="Ingrese su Cedula"
              value="<?php echo set_value('doc_id'); ?>" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="cargo" name="cargo" 
              placeholder="Ingrese su Contraseña" value="<?php echo set_value('cargo'); ?>" required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
      <!-- <button type="submit" class="btn btn-danger" id="btn2">Cancelar</button> -->
    </div>
  </div>
</form>
<br>
<hr>
<br>

</body>

<?php include 'includes/footer.php' ?>