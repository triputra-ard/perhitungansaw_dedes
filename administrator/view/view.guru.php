<div class="table-responsive">
  <table class="table table-hover table-bordered" id="data-table-basic">
    <thead>
      <th>Nomor</th>
      <th>NIP</th>
      <th>Nama Lengkap</th>
      <th>Jenis Kelamin</th>
      <th>Password</th>
      <th>Tindakan</th>
    </thead>
    <tbody>
      <?php
      $no = 1;
      $sql = "SELECT * FROM guru";
      $mysql = mysqli_query($db, $sql);
      while ($guru = mysqli_fetch_assoc($mysql)) {
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $guru['nip_guru']; ?></td>
        <td><?php echo $guru['guru_nama']; ?></td>
        <td><?php echo $guru['guru_jk']; ?></td>
        <td><?php echo $guru['guru_password']; ?></td>
        <td>
          <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#askDelete<?php echo $guru['nip_guru']; ?>"><i class="fas fa-trash"></i> Hapus</a> ||
          <a href="guru.edit?nip=<?php echo $guru['nip_guru']; ?>" class="btn btn-success"><i class="fas fa-pencil-alt"></i> Perbarui</a>
        </td>
      </tr>
      <?php include 'model/modal.delete.php'; ?>
    <?php } ?>
    </tbody>
  </table>
</div>
