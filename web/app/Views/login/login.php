<?= $this->extend('plantillas/plantilla_adminlte') ?>
<?= $this->section('contenido') ?>
    <div class="hold-transition login-page">
        <div class="login-box">
          <!-- /.login-logo -->
          <div class="card card-outline card-primary">
            <div class="card-header text-center">
                </div>
            <div class="card-body">
              <p class="login-box-msg">Logeate para inciar sesión</p>

              <form action="../../index3.html" method="post">
                <div class="input-group mb-3">
                  <input type="email" class="form-control" placeholder="correo">
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
                <div class="row">
                  <div class="col-8">
                    <div class="icheck-primary">
                      <input type="checkbox" id="remember">
                      <label for="remember">
                        Recuerda me
                      </label>
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Logear</button>
                  </div>
                  <!-- /.col -->
                </div>
              </form>



              <p class="mb-1">
                <a href="olvidar_pass.php">olvidé mi contraseña</a>
              </p>
              <p class="mb-0">
                <a href="create_account.php" class="text-center">Nuevo usuario</a>
              </p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.login-box -->
        </div>
<?= $this->endSection() ?>
