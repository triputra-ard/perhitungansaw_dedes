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
      <th>Jumlah Poin</th>
    </thead>
    <tbody>
      <?php
      $nomor = 1;
      $sql = "SELECT siswa_nama,nilai_pendapatan_ot,nilai_tanggungan_ot,nilai_raport,nilai_jarak,nilai_presensi,guru_nama
      FROM siswa a
      JOIN guru b ON a.nip_guru = b.nip_guru";
      $mysql = mysqli_query($db, $sql);
      while ($matriksawal = mysqli_fetch_assoc($mysql)) {
        $jumlahpoin = (($matriksawal['nilai_pendapatan_ot'])
        +($matriksawal['nilai_tanggungan_ot'])+($matriksawal['nilai_raport'])
        +($matriksawal['nilai_jarak'])+($matriksawal['nilai_presensi']));
       ?>
       <tr>
         <td><?php echo $nomor++; ?></td>
         <td><?php echo $matriksawal['siswa_nama']; ?></td>
         <td><?php echo $matriksawal['nilai_pendapatan_ot']; ?></td>
         <td><?php echo $matriksawal['nilai_tanggungan_ot']; ?></td>
         <td><?php echo $matriksawal['nilai_raport']; ?></td>
         <td><?php echo $matriksawal['nilai_jarak']; ?></td>
         <td><?php echo $matriksawal['nilai_presensi']; ?></td>
         <td><?php echo $matriksawal['guru_nama']; ?></td>
         <td><?php echo $jumlahpoin; ?></td>
       </tr>
     <?php } ?>
    </tbody>
  </table>
</div>
