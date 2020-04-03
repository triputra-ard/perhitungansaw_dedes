<?php
$titlePage = "Beranda";
$active = "home";
include 'navigation.admin.php'; ?>
<div class="preload"></div>
<div class="pages-on-frame">
  <div class="container">

    <div class="row">
      <div class="col-lg-12">
        <div class="panel">
          <div class="panel-body">
            <h4 class="text-center"><?php echo $companyName; ?> </h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="panel">
          <a href="murid.tambah">
          <div class="alert alert-success">
            <h4 class="text-center text-gray-100"><i class="fas fa-user-graduate"></i> Tambah Data Siswa  <i class="fas fa-angle-double-right"></i></h4>
          </div>
          </a>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="panel">
          <a href="guru.tambah">
          <div class="alert alert-success">
            <h4 class="text-center text-gray-100"><i class="fas fa-chalkboard-teacher"></i> Tambah Data Guru  <i class="fas fa-angle-double-right"></i></h4>
          </div>
          </a>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="panel">
          <a href="saw.hitung">
          <div class="alert alert-info">
            <h4 class="text-center text-gray-100"><i class="fas fa-cube"></i> Lihat Perhitungan SAW  <i class="fas fa-angle-double-right"></i></h4>
          </div>
          </a>
        </div>
      </div>
      <div class="col-lg-4">
        <a href="murid.lihat">
          <div class="well nk-indigo">
            <?php
            $sqlstudent = "SELECT COUNT(*) FROM siswa";
            $mysql_student = mysql_query($sqlstudent);
            $countstudent = mysql_result($mysql_student,0);
             ?>
            <h4 class="text-center text-gray-100"><?php echo $countstudent; ?> Siswa Terdaftar</h4>
          </div>
        </a>
      </div>
      <div class="col-lg-4">
        <a href="guru.lihat">
          <div class="well nk-teal">
            <?php
            $sqlteacher = "SELECT COUNT(*) FROM guru";
            $mysql_teacher = mysql_query($sqlteacher);
            $countteacher = mysql_result($mysql_teacher,0);
             ?>
            <h4 class="text-center text-gray-100"><?php echo $countteacher; ?> Guru Terdaftar</h4>
          </div>
        </a>
      </div>
      <div class="col-lg-4">
        <a href="saw.lihat">
          <div class="well nk-deep-orange">
              <?php
              $sqlsaw = "SELECT COUNT(*) FROM saw_kategori";
              $mysql_saw = mysql_query($sqlsaw);
              $countsaw = mysql_result($mysql_saw,0);
               ?>
              <h4 class="text-center text-gray-100"><?php echo $countsaw; ?> Kategori SAW</h4>
          </div>
        </a>
      </div>
    </div>

  </div>
</div>
<?php include 'footer.admin.php'; ?>
