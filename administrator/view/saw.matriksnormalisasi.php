<?php
$sqlfind = "SELECT MAX(nilai_pendapatan_ot) as c1, MIN(nilai_tanggungan_ot) as c2
,MAX(nilai_raport) as c3, MIN(nilai_jarak) as c4 , MAX(nilai_presensi) as c5 FROM siswa";
$mysqlfind = mysqli_query($db,$sqlfind);
$data = mysqli_fetch_assoc($mysqlfind);
 ?>
<div class="table-responsive">
  <table class="table table-striped table-bordered">
    <thead>
      <th>No.</th>
      <th>Nama Siswa</th>
      <th>Nama Guru</th>
      <th>C1(BENEFIT)</th>
      <th>C2(COST)</th>
      <th>C3(BENEFIT)</th>
      <th>C4(COST)</th>
      <th>C5(BENEFIT)</th>
    </thead>
    <tbody>
      <?php
      $nomor = 1;
      $sql = "SELECT siswa_nama,nilai_pendapatan_ot,nilai_tanggungan_ot,nilai_raport,nilai_jarak,nilai_presensi,guru_nama
      FROM siswa a
      JOIN guru b ON a.nip_guru = b.nip_guru";
      $mysql = mysqli_query($db, $sql);
      while ($matriksnormalisasi = mysqli_fetch_assoc($mysql)) {
       ?>
       <tr>
         <td><?php echo $nomor++; ?></td>
         <td><?php echo $matriksnormalisasi['siswa_nama']; ?></td>
         <td><?php echo $matriksnormalisasi['guru_nama']; ?></td>
         <td><?php echo round($matriksnormalisasi['nilai_pendapatan_ot']/$data['c1'],2); ?></td>
         <!-- C2 adalah COST -->
         <td><?php echo round($data['c2']/$matriksnormalisasi['nilai_tanggungan_ot'],2); ?></td>
         <!-- C2 adalah COST -->
         <td><?php echo round($matriksnormalisasi['nilai_raport']/$data['c3'],2); ?></td>
         <!-- C4 adalah COST -->
         <td><?php echo round($data['c4']/$matriksnormalisasi['nilai_jarak'],2); ?></td>
         <!-- C4 adalah COST -->
         <td><?php echo round($matriksnormalisasi['nilai_presensi']/$data['c5'],2); ?></td>
       </tr>
     <?php } ?>
    </tbody>
  </table>
</div>
