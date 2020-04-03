<?php
include '../../function/koneksi.db.php';
if (isset($_POST['add'])) {
  $id = $_POST['id'];
  $fullname = $_POST['fullname'];
  $gender = $_POST['gender'];
  $birthplace = $_POST['birthplace'];
  $birthdate = $_POST['birthdate'];
  $address = $_POST['address'];
  $parent = $_POST['parents'];
  $parentphones = $_POST['parents_phone'];

  $teacher = $_POST['teacher'];
  $classgrade = $_POST['classgrade'];
  $classname = $_POST['classname'];
  $scoreincome = $_POST['scoreparentsincome'];
  $scoredependents = $_POST['scoredependents'];
  $scorereport = $_POST['scorereport'];
  $scorepresensi = $_POST['scorepresensi'];
  $scorerange = $_POST['scorerange'];

  $sql = "INSERT INTO siswa(id_beasiswa,siswa_nama
    ,siswa_jk,siswa_tmp_tgl
    ,siswa_alamat,siswa_wali
    ,siswa_wali_telepon,nip_guru
    ,siswa_kelas,nilai_pendapatan_ot
    ,nilai_tanggungan_ot,nilai_raport
    ,nilai_jarak,nilai_presensi
    ,tgl_daftar
  )
  VALUES('$id','$fullname'
    ,'$gender','$birthplace, $birthdate'
    ,'$address','$parent'
    ,'$parentphones','$teacher'
    ,'$classgrade - $classname','$scoreincome'
    ,'$scoredependents','$scorereport'
    ,'$scorerange','$scorepresensi'
    ,CURRENT_TIMESTAMP
  )";
  $mysql = mysqli_query($db, $sql);

  if ($mysql) {
    echo "<script>alert('Berhasil ditambahkan');
    window.location.href='../murid.lihat';
    </script>";
  }else {
    echo "<script>window.history.back();</script>";
  }
}elseif (isset($_POST['edit1'])) {
  $id = $_POST['id'];
  $fullname = $_POST['fullname'];
  $gender = $_POST['gender'];
  $birth = $_POST['birth'];
  $address = $_POST['address'];
  $parent = $_POST['parents'];
  $parentphones = $_POST['parents_phone'];

  $sql = "UPDATE siswa SET
    siswa_nama = '$fullname'
    ,siswa_jk = '$gender' ,siswa_tmp_tgl = '$birth'
    ,siswa_alamat = '$address' ,siswa_wali = '$parent'
    ,siswa_wali_telepon = '$parentphones'
  WHERE id_beasiswa = '$id'";
  $mysql = mysqli_query($db, $sql);

  if ($mysql) {
    echo "<script>alert('Berhasil diperbarui');
    window.location.href='../murid.lihat';
    </script>";
  }else {
    echo "<script>window.history.back();</script>";
  }
}elseif (isset($_POST['edit2'])) {
  $id = $_POST['id'];

  $teacher = $_POST['teacher'];
  $classgrade = $_POST['classgrade'];
  $classname = $_POST['classname'];
  $scoreincome = $_POST['scoreparentsincome'];
  $scoredependents = $_POST['scoredependents'];
  $scorereport = $_POST['scorereport'];
  $scorepresensi = $_POST['scorepresensi'];
  $scorerange = $_POST['scorerange'];

  $sql = "UPDATE siswa SET
    nip_guru = '$teacher'
    ,siswa_kelas = '$classgrade - $classname' ,nilai_pendapatan_ot = '$scoreincome'
    ,nilai_tanggungan_ot = '$scoredependents',nilai_raport = '$scorereport'
    ,nilai_jarak = '$scorepresensi' ,nilai_presensi = '$scorerange'
  WHERE id_beasiswa = '$id'";
  $mysql = mysqli_query($db, $sql);

  if ($mysql) {
    echo "<script>alert('Berhasil diperbarui');
    window.location.href='../murid.lihat';
    </script>";
  }else {
    echo "<script>window.history.back();</script>";
  }
}elseif (isset($_GET['hapus'])) {
  $id = $_GET['beasiswa'];

  $sql = "DELETE FROM siswa WHERE id_beasiswa = '$id'";
  $mysql = mysqli_query($db, $sql);

  if ($mysql) {
    echo "<script>alert('Berhasil dihapus');
    window.location.href='../murid.lihat';
    </script>";
  }else {
    echo "<script>window.history.back();</script>";
  }
}
 ?>
