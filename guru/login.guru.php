<?php include 'navbar.login.php'; ?>
<div class="preload"></div>
<div class="pages-on-frame-sm">

  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
      <div class="well well-sm animated zoomInDown delay-3s">
        <div class="panel panel-success">
          <div class="panel-heading">
            <h4 class="text-center"><i class="fas fa-chalkboard-teacher"></i> Masuk Guru <i class="fas fa-sign-in-alt"></i> </h4>
          </div>
          <div class="panel-body">
            <form class="" action="control/login.proses" method="post">
              <div class="form-group input-group">
                <span class="input-group-addon"><i class="fas fa-barcode"></i> </span>
                <input class="form-control" type="text" name="nip" placeholder="Masukkan NIP" required>
              </div>
              <div class="form-group input-group">
                <span class="input-group-addon"><i class="fas fa-lock"></i> </span>
                <input class="form-control" type="password" name="password" placeholder="Masukkan password" required>
              </div>
              <hr>
              <button type="submit" name="masuk" class="btn btn-block btn-primary">Masuk <i class="fas fa-door-open"></i> </button>
            </form>
            <hr>
            <div class="alert alert-info">
              <p class="text-center">Lupa password ? hubungi ADMIN</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<?php include '../function/bawah.include.all.php'; ?>
