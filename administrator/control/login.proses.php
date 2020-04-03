<?php
include '../../function/koneksi.db.php';
if (isset($_POST['masuk'])) {
  $id = $_POST['key'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM administrator WHERE admin_username = '$id' AND admin_password = '$password'";
  $mysql = mysqli_query($db,$sql) or die(mysqli_error($db));

  $found = mysqli_num_rows($mysql);
  $fetch = mysqli_fetch_assoc($mysql);

  if ($found > 0) {
    session_start();
    $_SESSION[nama_admin] = $fetch['admin_nama'];
    header('location:../admin.dashboard');
  }else {
    echo "<script>alert('Tidak ditemukan');
    window.history.back();</script>";
  }
}
 ?>
