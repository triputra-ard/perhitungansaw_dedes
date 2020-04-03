<div class="table-responsive">
  <table class="table table-hover table-bordered">
    <thead>
      <th>No.</th>
      <th>Keterangan Nilai</th>
      <th>Keterangan Dalam Angka</th>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM saw_nilai";
      $mysql = mysqli_query($db, $sql);
      while ($nilai = mysqli_fetch_assoc($mysql)) {
       ?>
       <tr>
         <td><?php echo $nilai['id_nilai']; ?></td>
         <td><?php echo $nilai['keterangan_nilai']; ?></td>
         <td><?php echo $nilai['jumlah_nilai']; ?></td>
       </tr>
     <?php } ?>
    </tbody>
  </table>
</div>
