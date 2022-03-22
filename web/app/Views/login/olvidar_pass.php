<?= $this->extend('plantillas/plantilla_adminlte') ?>
<?= $this->section('contenido') ?>
<div class="hold-transition login-page">
  <div class="login-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <?= $this->include("login/image_forgot_svg"); ?>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Has olvidado tu contraseña? aquí puedes restablecerla</p>
        <form action="recover-password.html" method="post">
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Correo">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Nueva contraseña</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <p class="mt-3 mb-1">
          <a href="login.html">Login</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->
</div>

<?= $this->endSection() ?>
