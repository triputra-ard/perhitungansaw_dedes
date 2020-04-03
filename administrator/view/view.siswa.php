<div class="table-responsive">
  <table class="table table-hover table-bordered" id="data-table-basic">
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
      <th>Tindakan</th>
    </thead>
    <tbody>
      <?php
      $no = 1;
      $sql = "SELECT * FROM siswa a
      JOIN guru b ON a.nip_guru = b.nip_guru
      ";
      $mysql = mysqli_query($db, $sql);
      while ($murid = mysqli_fetch_assoc($mysql)) {
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
          <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#askDelete<?php echo $murid['id_beasiswa']; ?>"><i class="fas fa-trash"></i> Hapus</a> ||
          <a href="murid.edit?beasiswa=<?php echo $murid['id_beasiswa']; ?>" class="btn btn-success"><i class="fas fa-pencil-alt"></i> Perbarui</a>
        </td>
      </tr>
      <?php include 'model/modal.delete.php'; ?>
    <?php } ?>
    </tbody>
  </table>
</div>
