<div class="table-responsive">
  <table class="table table-striped table-bordered">
    <thead>
      <th>No.</th>
      <th>Nama Siswa</th>
      <th>C1(BENEFIT)</th>
      <th>C2(COST)</th>
      <th>C3(BENEFIT)</th>
      <th>C4(COST)</th>
      <th>C5(BENEFIT)</th>
      <th>Nama Guru</th>
    </thead>
    <tbody>
      <?php
      $nomor = 1;
      $sql = "SELECT siswa_nama,nilai_pendapatan_ot,nilai_tanggungan_ot,nilai_raport,nilai_jarak,nilai_presensi,guru_nama
      FROM siswa a
      JOIN guru b ON a.nip_guru = b.nip_guru";
      $mysql = mysqli_query($db, $sql);
      while ($nilaikategori = mysqli_fetch_assoc($mysql)) {
       ?>
       <tr>
         <td><?php echo $nomor++; ?></td>
         <td><?php echo $nilaikategori['siswa_nama']; ?></td>
         <td><?php echo $nilaikategori['nilai_pendapatan_ot']; ?></td>
         <td><?php echo $nilaikategori['nilai_tanggungan_ot']; ?></td>
         <td><?php echo $nilaikategori['nilai_raport']; ?></td>
         <td><?php echo $nilaikategori['nilai_jarak']; ?></td>
         <td><?php echo $nilaikategori['nilai_presensi']; ?></td>
         <td><?php echo $nilaikategori['guru_nama']; ?></td>
       </tr>
     <?php } ?>
    </tbody>
  </table>
</div>
