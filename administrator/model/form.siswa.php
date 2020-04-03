<form class="" action="control/siswa.proses" method="post">
  <h4 class="text-center">Identitas Siswa</h4>
  <div class="form-group">
    <div class="row">
      <div class="col-lg-2">
        <label class="hrzn-fm">ID Beasiswa :</label>
      </div>
      <div class="col-lg-4">
        <div class="nk-int-st">
          <input readonly class="form-control input-sm" type="text" name="id" value="<?php echo autokode("siswa", date("Y-m-d")."-"); ?>">
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
          <input required class="form-control input-sm" type="text" name="fullname" value="" onkeypress="return OnlyAlphabetic(event)" placeholder="Masukkan nama lengkap siswa">
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
        <label class="hrzn-fm">Tempat, Tanggal lahir :</label>
      </div>
      <div class="col-lg-4">
        <div class="nk-int-st">
          <input required class="form-control input-sm" type="text" name="birthplace" value="" onkeypress="return OnlyAlphabetic(event)" placeholder="Masukkan tempat lahir">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="nk-int-st">
          <input required class="form-control input-sm" type="date" name="birthdate" value="" onkeypress="return OnlyAlphabetic(event)">
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
          <textarea required name="address" class="html-editor" >Alamat Siswa</textarea>
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
          <input required class="form-control input-sm" type="text" name="parents" value="" onkeypress="return OnlyAlphabetic(event)" placeholder="Masukkan nama lengkap wali murid">
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
          <input required class="form-control input-sm" type="text" name="parents_phone" value="" onkeypress="return OnlyNumber(event)" placeholder="Masukkan nomor telepon wali murid">
        </div>
      </div>
    </div>
  </div>
  <hr>
  <h4 class="text-center">Pengajuan Beasiswa</h4>
  <div class="form-group">
    <div class="row">
      <div class="col-lg-2">
        <label class="hrzn-fm">Pilih Guru :</label>
      </div>
      <div class="col-lg-4">
        <div class="nk-int-st">
          <select required class="form-control" name="teacher">
            <option value="">==Pilih==</option>
            <optgroup label="Pilih guru">
              <?php
              $sqlselector = "SELECT * FROM guru";
              $mysqlselector = mysql_query($sqlselector);
              while ($teacher = mysql_fetch_assoc($mysqlselector)) {
               ?>
               <option value="<?php echo $teacher['nip_guru'];?>"> <?php echo $teacher['guru_nama']; ?></option>
             <?php } ?>
            </optgroup>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-lg-2">
        <label class="hrzn-fm">Kelas :</label>
      </div>
      <div class="col-lg-2">
        <div class="nk-int-st">
          <select required class="form-control" name="classgrade">
            <option value="">==Pilih==</option>
            <optgroup label="Pilih kelas">
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </optgroup>
          </select>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="nk-int-st">
          <input required class="form-control input-sm" type="text" name="classname" value="" onkeypress="return OnlyAlphabetic(event)" placeholder="Masukkan nama kelas">
        </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-lg-2">
        <label class="hrzn-fm">Pendapatan Orang Tua / Wali :</label>
      </div>
      <div class="col-lg-4">
        <div class="nk-int-st">
          <select required class="form-control" name="scoreparentsincome">
            <option value="">==Pilih==</option>
            <optgroup label="Pilih Kisaran Pendapatan">
              <option value="5">Lebih dari Rp. 3.500.000</option>
              <option value="4">Rp. 2.500.000 - Rp. 3.500.000</option>
              <option value="3">Rp. 1.500.000 - Rp. 2.500.000</option>
              <option value="2">Rp. 1.000.000 - Rp. 1.500.000</option>
              <option value="1">Dibawah Rp. 1.000.000</option>
            </optgroup>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-lg-2">
        <label class="hrzn-fm">Jumlah tanggungan Orang Tua / Wali :</label>
      </div>
      <div class="col-lg-4">
        <div required class="nk-int-st">
          <select class="form-control" name="scoredependents">
            <option value="">==Pilih==</option>
            <optgroup label="Pilih Jumlah Tanggungan">
              <option value="5">1 Orang</option>
              <option value="4">2 Orang</option>
              <option value="3">3 Orang</option>
              <option value="2">4 Orang</option>
              <option value="1">Lebih dari 5 Orang</option>
            </optgroup>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-lg-2">
        <label class="hrzn-fm">Nilai Raport Siswa :</label>
      </div>
      <div class="col-lg-4">
        <div class="nk-int-st">
          <select required class="form-control" name="scorereport">
            <option value="">==Pilih==</option>
            <optgroup label="Pilih Kisaran Nilai Raport">
              <option value="5">Nilai 8 hingga 9</option>
              <option value="4">Nilai 7 hingga 7.9</option>
              <option value="3">Nilai 6 hingga 6.9</option>
              <option value="2">Nilai 5 hingga 5.9</option>
              <option value="1">Nilai 0 hingga 4.9</option>
            </optgroup>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-lg-2">
        <label class="hrzn-fm">Nilai Presensi Siswa :</label>
      </div>
      <div class="col-lg-4">
        <div class="nk-int-st">
          <select required class="form-control" name="scorepresensi">
            <option value="">==Pilih==</option>
            <optgroup label="Pilih Kisaran Nilai Presensi">
              <option value="5">Nilai 8 hingga 9</option>
              <option value="4">Nilai 7 hingga 7.9</option>
              <option value="3">Nilai 6 hingga 6.9</option>
              <option value="2">Nilai 5 hingga 5.9</option>
              <option value="1">Nilai 0 hingga 4.9</option>
            </optgroup>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-lg-2">
        <label class="hrzn-fm">Jarak Siswa ke Sekolah :</label>
      </div>
      <div class="col-lg-4">
        <div class="nk-int-st">
          <select required class="form-control" name="scorerange">
            <option value="">==Pilih==</option>
            <optgroup label="Pilih Kisaran Jarak">
              <option value="5">Jarak 1 Km hingga 3 Km dari sekolah</option>
              <option value="4">Jarak 3 Km hingga 5 Km dari sekolah</option>
              <option value="3">Jarak 5 Km hingga 9 Km dari sekolah</option>
              <option value="2">Jarak 9 Km hingga 10 Km dari sekolah</option>
              <option value="1">Jarak lebih dari 10 Km dari sekolah</option>
            </optgroup>
          </select>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div class="form-group">
    <button type="submit" name="add" class="btn btn-success btn-block">Tambah siswa <i class="fas fa-plus"></i> </button>
  </div>

</form>
