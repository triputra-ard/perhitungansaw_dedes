<?php include '../function/atas.include.all.php'; ?>
<body class="nk-light-green">
<br>
<div class="preload"></div>
<div class="pages-on-frame-sm">
  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
      <div class="well animated zoomInDown delay-1s">
        <h4 class="text-center"><img src="../assets/img/logo.png" width="125px" height="125px" alt=""></h4>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
      <div class="well well-sm animated zoomInDown delay-3s">
        <div class="panel panel-success">
          <div class="panel-heading">
            <h4 class="text-center"><i class="fas fa-desktop"></i> Masuk ADMINISTRATOR <i class="fas fa-sign-in-alt"></i> </h4>
          </div>
          <div class="panel-body">
            <form class="" action="control/login.proses" method="post">
              <div class="form-group input-group">
                <span class="input-group-addon"><i class="fas fa-key"></i> </span>
                <input class="form-control" type="text" name="key" placeholder="Masukkan ID Admin" required>
              </div>
              <div class="form-group input-group">
                <span class="input-group-addon"><i class="fas fa-lock"></i> </span>
                <input class="form-control" type="password" name="password" placeholder="Masukkan password" required>
              </div>
              <hr>
              <button type="submit" name="masuk" class="btn btn-block btn-primary">Masuk <i class="fas fa-door-open"></i> </button>
            </form>
            <hr>
            <a href="../index" class="btn btn-info btn-block">Kembali ke halaman awal</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<?php include '../function/bawah.include.all.php'; ?>
