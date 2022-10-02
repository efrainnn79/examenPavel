<?php
switch ($msg) {
    case '1':
        $mensaje="Error de ingreso";
     
    break;
    case '2':
        $mensaje="Acceso no valido";
        
    break;
    case '3':
        $mensaje="Gracias por usar el sistema";
        
        break;
    
    default:
        $mensaje="Ingrese sus datos";
        
        break;
}

?>
  
  
  <div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>ingreso al</b> sistema</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><?php echo $mensaje; ?></p>

<?php
echo form_open_multipart('usuarios/validarusuario');
?>


        <div class="input-group mb-3">
          <input type="text" name="login" class="form-control" placeholder="Login">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
 

<?php
    echo form_close();
?>



      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Ingresar con facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Ingresar con google
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">Olvide mi contraseña</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Registrar nuevo miembro</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


