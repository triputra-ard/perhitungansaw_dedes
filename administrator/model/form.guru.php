<form action="control/guru.proses.php" method="post">
  <div class="form-group">
    <div class="row">
      <div class="col-lg-2">
        <label class="hrzn-fm">NIP :</label>
      </div>
      <div class="col-lg-4">
        <div class="nk-int-st">
          <input class="form-control input-sm" type="text" name="nip" value="" placeholder="Masukkan NIP" onkeypress="return OnlyNumber(event)" required>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-lg-2">
        <label class="hrzn-fm">Nama Lengkap :</label>
      </div>
      <div class="col-lg-4">
        <div class="nk-int-st">
          <input class="form-control input-sm" type="text" name="fullname" value="" placeholder="Masukkan nama lengkap" onkeypress="return OnlyAlphabetic(event)" required>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-lg-2">
        <label class="hrzn-fm">Jenis Kelamin :</label>
      </div>
      <div class="col-lg-4">
        <label>
          <div class="nk-int-st">
            <input class="form-control" type="radio" name="gender" value="Laki-laki" required>
          </div>
          Laki-laki
        </label>
      </div>
      <div class="col-lg-4">
        <label>
          <div class="nk-int-st">
            <input class="form-control" type="radio" name="gender" value="Perempuan" required>
          </div>
          Perempuan
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-lg-2">
        <label class="hrzn-fm">Password :</label>
      </div>
      <div class="col-lg-4">
        <div class="nk-int-st">
          <input class="form-control input-sm" type="password" name="password" id="password" value="" onchange="validation()" placeholder="Password 5 huruf terakhir NIP" onkeypress="return OnlyNumber(event)">
        </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-lg-2">
        <label class="hrzn-fm">Ulangi Password :</label>
      </div>
      <div class="col-lg-4">
        <div class="nk-int-st">
          <input class="form-control input-sm" type="password" name="repeatpassword" id="repeatpassword" value="" onchange="validation()" required placeholder="Ulangi password">
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div class="form-group">
    <button type="submit" name="add" class="btn btn-block btn-primary">Tambahkan data </button>
  </div>
</form>
