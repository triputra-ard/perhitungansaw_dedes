<?php
$titlePage = "Tambah siswa";
$active = "student";
include 'navigation.admin.php'; ?>
<div class="preload"></div>
<!-- Start Page -->
<div class="pages-on-frame">
  <div class="container">
    <!-- Inframe -->
    <div class="col-lg-12 animated zoomIn">
      <div class="panel">
        <div class="panel-heading">
          <div class="panel-heading nk-green">
            <h4 class="text-center text-gray-100"><i class="fas fa-plus"></i>  Masukkan data siswa <i class="fas fa-plus"></i></h4>
          </div>
          <div class="panel-body">
            <?php include 'model/form.siswa.php'; ?>
          </div>
        </div>
      </div>
    </div>
    <!-- Inframe -->
  </div>
</div>
<!-- End Page -->
<?php include 'footer.admin.php'; ?>
