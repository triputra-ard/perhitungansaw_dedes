<?php
include '../../function/koneksi.db.php';
if (isset($_POST['add'])) {
  $nip = $_POST['nip'];
  $fullname = $_POST['fullname'];
  $gender = $_POST['gender'];
  $password = $_POST['password'];

  $sql = "INSERT INTO guru VALUES('$nip'
    ,'$fullname'
    ,'$gender'
    ,'$password')";
  $mysql = mysqli_query($db, $sql);

  if ($mysql) {
    echo "<script>alert('Berhasil ditambahkan');
    window.location.href='../guru.lihat';
    </script>";
  }else {
    echo "<script>window.history.back();</script>";
  }
}elseif (isset($_POST['edit'])) {
  $nip = $_POST['nip'];
  $fullname = $_POST['fullname'];
  $gender = $_POST['gender'];
  $password = $_POST['password'];

  $sql = "UPDATE guru SET
    guru_nama = '$fullname'
    ,guru_jk ='$gender'
    ,guru_password = '$password' WHERE nip_guru = '$nip'";
  $mysql = mysqli_query($db, $sql);

  if ($mysql) {
    echo "<script>alert('Berhasil diperbarui');
    window.location.href='../guru.lihat';
    </script>";
  }else {
    echo "<script>window.history.back();</script>";
  }
}elseif (isset($_GET['hapus'])) {
  $nip = $_GET['nip'];

  $sql = "DELETE FROM guru WHERE nip_guru = '$nip'";
  $mysql = mysqli_query($db, $sql);

  if ($mysql) {
    echo "<script>alert('Berhasil dihapus');
    window.location.href='../guru.lihat';
    </script>";
  }else {
    echo "<script>window.history.back();</script>";
  }
}
 ?>
