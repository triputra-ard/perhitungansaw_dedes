<?php
include '../../function/koneksi.db.php';
if (isset($_GET['normalisasibobot'])) {
  $id_bobot = $_GET['id'];
  $nilaibobot = $_GET['bobot'];
  $nilaiw = $_GET['nilai_w'];
  $normalisasi = $nilaibobot/$nilaiw;

  $sql = "UPDATE saw_bobot SET nilai_normalisasi = '$normalisasi' WHERE id_bobot = '$id_bobot'";
  $mysql = mysqli_query($db, $sql);
  if ($mysql) {
    echo "<script>alert('Sukses dihitung');
    window.location.href='../saw.lihat';</script>";
  }else {
    echo "<script>alert('Gagal');
    window.history.back();</script>";
  }
}elseif (isset($_GET['penerimaan'])) {
  $id_beasiswa = $_GET['id'];
  $status = $_GET['penerimaan'];

  $sql = "UPDATE siswa SET hasil_penerimaan = '$status' WHERE id_beasiswa = '$id_beasiswa'";
  $mysql = mysqli_query($db, $sql);
  if ($mysql) {
    echo "<script>alert('Sukses diperbarui');
    window.location.href='../saw.hitung';</script>";
  }else {
    echo "<script>alert('Gagal');
    window.history.back();</script>";
  }
}elseif (isset($_GET['urungkan'])) {
  $id_beasiswa = $_GET['id'];

  $sql = "UPDATE siswa SET hasil_penerimaan = '' WHERE id_beasiswa = '$id_beasiswa'";
  $mysql = mysqli_query($db, $sql);
  if ($mysql) {
    echo "<script>alert('Data diurungkan');
    window.location.href='../saw.hitung';</script>";
  }else {
    echo "<script>alert('Gagal');
    window.history.back();</script>";
  }
}
 ?>
