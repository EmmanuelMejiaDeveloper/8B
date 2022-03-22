<?= $this->extend('plantillas/plantilla_adminlte') ?>
<?= $this->section('contenido') ?>
    <div class="hold-transition login-page">
      <div class="register-box">
        <div class="card card-outline card-primary">
          <div class="card-header text-center">
            <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
          </div>
          <div class="card-body">
            <p class="login-box-msg">Registrarse</p>
            <?= $this->include("login/logo-create_count_svg"); ?>

            <form action="../../index.html" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nombre completo">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Correo">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Contraseña">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Verificar contraseña">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="icheck-primary">
                    <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                    <label for="agreeTerms">
                     He leído los <a href="#">terminos</a>
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">

                </div>
                <div class="col-5">
                  <button type="submit" class="btn btn-primary btn-block">Resgistrarse</button>
                </div>
                <!-- /.col -->
              </div>
            </form>



            <a href="login.html" class="text-center">Ya tengo una cuenta</a>
          </div>
          <!-- /.form-box -->
        </div><!-- /.card -->
      </div>
      <!-- /.register-box -->
        </div>
<?= $this->endSection() ?>
