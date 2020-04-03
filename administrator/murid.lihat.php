<?php
$titlePage = "Lihat siswa";
$active = "student";
include 'navigation.admin.php'; ?>
<div class="preload"></div>
<!-- Start Page -->
<div class="pages-on-frame">
  <div class="container">
    <!-- Inframe -->
    <div class="col-lg-12 animated zoomIn">
      <div class="panel">
        <div class="panel-heading nk-brown">
          <h4 class="text-center text-gray-100"><i class="fas fa-table"></i> Lihat Data Siswa <i class="fas fa-user-graduate"></i></h4>
        </div>
        <div class="panel-body">
          <div class="alert alert-success">
            <h4 class="text-center">Untuk melihat nilai pilih SAW</h4>
          </div>
          <?php include 'view/view.siswa.php'; ?>
        </div>
      </div>
    </div>
    <!-- Inframe -->
  </div>
</div>
<!-- End Page -->
<?php include 'footer.admin.php'; ?>
