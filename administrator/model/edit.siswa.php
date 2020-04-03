<?php
$id_beasiswa = $_GET['beasiswa'];
$sql = "SELECT * FROM siswa a
JOIN guru b ON a.nip_guru = b.nip_guru
WHERE a.id_beasiswa = '$id_beasiswa'
";
$mysql = mysql_query($sql);
while ($murid = mysql_fetch_assoc($mysql)) {
 ?>
<form class="" action="control/siswa.proses" method="post">
  <h4 class="text-center">Identitas Siswa</h4>
  <div class="form-group">
    <div class="row">
      <div class="col-lg-2">
        <label class="hrzn-fm">ID Beasiswa :</label>
      </div>
      <div class="col-lg-4">
        <div class="nk-int-st">
          <input readonly class="form-control input-sm" type="text" name="id" value="<?php echo $murid['id_beasiswa']; ?>">
        </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-lg-2">
        <label class="hrzn-fm">Nama Siswa :</label>
      </div>
      <div class="col-lg-4">
        <div class="nk-int-st">
          <input required class="form-control input-sm" type="text" name="fullname" value="<?php echo $murid['siswa_nama']; ?>" onkeypress="return OnlyAlphabetic(event)" placeholder="Masukkan nama lengkap siswa">
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
            <input class="form-control" type="radio" name="gender" value="Laki-laki" <?php if($murid['siswa_jk'] == "Laki-laki") echo "checked"; ?> required>
          </div>
          Laki-laki
        </label>
      </div>
      <div class="col-lg-4">
        <label>
          <div class="nk-int-st">
            <input class="form-control" type="radio" name="gender" value="Perempuan" <?php if($murid['siswa_jk'] == "Perempuan") echo "checked"; ?> required>
          </div>
          Perempuan
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-lg-2">
        <label class="hrzn-fm">Tempat, Tanggal lahir :</label>
      </div>
      <div class="col-lg-4">
        <div class="nk-int-st">
          <input required class="form-control input-sm" type="text" name="birth" value="<?php echo $murid['siswa_tmp_tgl']; ?>" placeholder="Masukkan Tempat lahir, Tanggal lahir">
        </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-lg-2">
        <label class="hrzn-fm">Alamat :</label>
      </div>
      <div class="col-lg-6">
        <div class="nk-int-st">
          <textarea required name="address" class="html-editor" ><?php echo $murid['siswa_alamat']; ?></textarea>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-lg-2">
        <label class="hrzn-fm">Wali murid :</label>
      </div>
      <div class="col-lg-4">
        <div class="nk-int-st">
          <input required class="form-control input-sm" type="text" name="parents" value="<?php echo $murid['siswa_wali']; ?>" onkeypress="return OnlyAlphabetic(event)" placeholder="Masukkan nama lengkap wali murid">
        </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-lg-2">
        <label class="hrzn-fm">Nomor Telepon Wali murid :</label>
      </div>
      <div class="col-lg-4">
        <div class="nk-int-st">
          <input required class="form-control input-sm" type="text" name="parents_phone" value="<?php echo $murid['siswa_wali_telepon']; ?>" onkeypress="return OnlyNumber(event)" placeholder="Masukkan nomor telepon wali murid">
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div class="form-group">
    <button type="submit" name="edit1" class="btn btn-success btn-block">Perbarui Identitas <i class="fas fa-edit"></i> </button>
  </div>

</form>
<?php } ?>
