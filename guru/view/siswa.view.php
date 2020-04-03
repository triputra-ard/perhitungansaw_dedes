<?php
$no = 1;
$nip = @$_SESSION[nip];
$sql = "SELECT * FROM siswa a
JOIN guru b ON a.nip_guru = b.nip_guru WHERE a.nip_guru = '$nip'
";
$mysql = mysqli_query($db, $sql);
?>
<?php if (mysqli_num_rows($mysql) === 0): ?>
  <h4 class="text-center">Tidak ada siswa terdaftar dengan anda</h4>
  <?php else: ?>
    <table class="table-bordered table-stripped" id="data-table-basic">
      <thead>
        <thead>
          <th>Nomor</th>
          <th>ID Beasiswa</th>
          <th>Nama Lengkap</th>
          <th>Jenis Kelamin</th>
          <th>Tempat, Tanggal Lahir</th>
          <th>Alamat</th>
          <th>Nama Wali & Nomor Telepon</th>
          <th>Nama Guru</th>
          <th>Kelas</th>
          <th>Tanggal didaftarkan</th>
          <th>Hasil Penerimaan</th>
        </thead>
        <tbody>
          <?php
          while ($murid = mysql_fetch_assoc($mysql)) {
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $murid['id_beasiswa']; ?></td>
            <td><?php echo $murid['siswa_nama']; ?></td>
            <td><?php echo $murid['siswa_jk']; ?></td>
            <td><?php echo $murid['siswa_tmp_tgl']; ?></td>
            <td><?php echo $murid['siswa_alamat']; ?></td>
            <td><?php echo $murid['siswa_wali']; ?> - <?php echo $murid['siswa_wali_telepon']; ?></td>
            <td><?php echo $murid['guru_nama']; ?></td>
            <td><?php echo $murid['siswa_kelas']; ?></td>
            <td><?php echo $murid['tgl_daftar']; ?></td>
            <td>
              <?php if ($murid['hasil_penerimaan'] ==NULL): ?>
                <b>Belum mendapatkan perhitungan</b>
                <?php else: ?>
                <div class="alert alert-info"><b><?php echo $murid['hasil_penerimaan']; ?></b></div>
              <?php endif; ?>
            </td>
          </tr>
        <?php } ?>
        </tbody>
    </table>
<?php endif; ?>
