<?php
include '../../function/koneksi.db.php';
if (isset($_POST['masuk'])) {
  $nip = $_POST['nip'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM guru WHERE nip_guru = '$nip' AND guru_password = '$password'";
  $mysql = mysqli_query($db, $sql);

  $found = mysqli_num_rows($mysql);
  $fetch = mysqli_fetch_assoc($mysql);

  if ($found > 0) {
    session_start();
    $_SESSION[nip] = $fetch['nip_guru'];
    $_SESSION[nama_guru] = $fetch['guru_nama'];
    $_SESSION[jenis_kelamin] = $fetch['guru_jk'];
    header('location:../guru.beranda');
  }else {
    echo "<script>alert('Tidak ditemukan');
    window.history.back();</script>";
  }
}
 ?>
