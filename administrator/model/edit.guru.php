<?php
$nip = $_GET['nip'];
$sql = "SELECT * FROM guru WHERE nip_guru = '$nip'";
$mysql = mysql_query($sql);
while ($guruedit = mysql_fetch_assoc($mysql)) {
?>
<form action="control/guru.proses.php" method="post">
  <div class="form-group">
    <div class="row">
      <div class="col-lg-2">
        <label class="hrzn-fm">NIP :</label>
      </div>
      <div class="col-lg-4">
        <div class="nk-int-st">
          <input readonly class="form-control input-sm" type="text" name="nip" value="<?php echo $guruedit['nip_guru']; ?>" placeholder="Masukkan NIP" onkeypress="return OnlyNumber(event)" required>
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
          <input class="form-control input-sm" type="text" name="fullname" value="<?php echo $guruedit['guru_nama']; ?>" placeholder="Masukkan nama lengkap" onkeypress="return OnlyAlphabetic(event)" required>
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
            <input class="form-control" type="radio" name="gender" value="Laki-laki" <?php if($guruedit['guru_jk'] == "Laki-laki") echo "checked"; ?> required>
          </div>
          Laki-laki
        </label>
      </div>
      <div class="col-lg-4">
        <label>
          <div class="nk-int-st">
            <input class="form-control" type="radio" name="gender" value="Perempuan" <?php if($guruedit['guru_jk'] == "Perempuan") echo "checked"; ?> required>
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
          <input class="form-control input-sm" type="password" name="password" id="password" value="<?php echo $guruedit['guru_password'] ?>" onchange="validation()" placeholder="Password 5 huruf terakhir NIP" onkeypress="return OnlyNumber(event)">
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
    <button type="submit" name="edit" class="btn btn-block btn-info">Perbarui data <i class="fas fa-edit"></i> </button>
  </div>
</form>
<?php } ?>
