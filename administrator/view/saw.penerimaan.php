<?php
$sqlbobot = "SELECT nilai_normalisasi FROM saw_bobot";
$mysqlbobot = mysqli_query($db,$sqlbobot);
while($arrayget = mysqli_fetch_array($mysqlbobot)){
  $bobot[] = $arrayget[0];
}
 ?>
<div class="table-responsive">
  <table class="table table-striped table-bordered">
    <thead>
      <th>No.</th>
      <th>Nama Siswa</th>
      <th>Nama Guru</th>
      <th>Jumlah Poin</th>
      <th>Nilai Vektor V</th>
      <th>Persentase</th>
      <th>Nilai Penerimaan</th>
    </thead>
    <tbody>
      <?php
      $nomor = 1;
      $sql = "SELECT siswa_nama,nilai_pendapatan_ot,nilai_tanggungan_ot,nilai_raport,nilai_jarak,nilai_presensi,guru_nama,hasil_penerimaan,id_beasiswa
      FROM siswa a
      JOIN guru b ON a.nip_guru = b.nip_guru";
      $mysql = mysqli_query($db, $sql);
      while ($presentase = mysqli_fetch_assoc($mysql)) {
        $jumlahpoin = (($presentase['nilai_pendapatan_ot'])
        +($presentase['nilai_tanggungan_ot'])+($presentase['nilai_raport'])
        +($presentase['nilai_jarak'])+($presentase['nilai_presensi']));
        $poin = round(($bobot[0]*($presentase['nilai_pendapatan_ot']/$data['c1']))
        +($bobot[1]*($data['c2']/$presentase['nilai_tanggungan_ot']))
        +($bobot[2]*($presentase['nilai_raport']/$data['c3']))
        +($bobot[3]*($data['c4']/$presentase['nilai_jarak']))
        +($bobot[4]*($presentase['nilai_presensi']/$data['c5']))
        ,2);
        $persen = $poin*100;
       ?>
       <tr>
         <td><?php echo $nomor++; ?></td>
         <td><?php echo $presentase['siswa_nama']; ?></td>
         <td><?php echo $presentase['guru_nama'] ?></td>
         <td><?php echo $jumlahpoin; ?></td>
         <td><?php echo $poin; ?></td>
         <td><?php echo $persen;?> %</td>
         <td>
          <?php if($presentase['hasil_penerimaan'] == NULL){
                    if ($persen > 80) {
                      echo ' <a href="control/saw.proses?penerimaan&id='.$presentase['id_beasiswa'].'&penerimaan=Layak mendapatkan beasiswa" class="btn btn-success">Layak Mendapatkan Beasiswa</a>';
                    }elseif ($persen > 50) {
                        echo ' <a href="control/saw.proses?penerimaan&id='.$presentase['id_beasiswa'].'&penerimaan=Dipertimbangkan mendapatkan beasiswa" class="btn btn-warning">Dipertimbangkan Mendapatkan Beasiswa</a>';
                    }elseif ($persen < 50) {
                        echo ' <a href="control/saw.proses?penerimaan&id='.$presentase['id_beasiswa'].'&penerimaan=Tidak layak mendapatkan beasiswa" class="btn btn-danger">Tidak Layak Mendapatkan Beasiswa</a>';
                    }
                  }else {
                    echo "Sudah di input, penerimaan : ".$presentase['hasil_penerimaan']." . <a href='control/saw.proses?urungkan&id=".$presentase['id_beasiswa']."'>Urungkan perubahan</a>";
                  }?></td>
       </tr>

     <?php } ?>
    </tbody>
  </table>
</div>
