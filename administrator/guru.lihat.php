<?php
$titlePage = "Lihat guru";
$active = "teacher";
include 'navigation.admin.php'; ?>
<div class="preload"></div>
<!-- Start Page -->
<div class="pages-on-frame">
  <div class="container">
    <!-- Inframe -->
    <div class="col-lg-12  animated zoomIn">
      <div class="panel">
        <div class="panel-heading nk-brown">
          <h4 class="text-center text-gray-100"><i class="fas fa-table"></i> Lihat Data Guru <i class="fas fa-chalkboard-teacher"></i></h4>
        </div>
        <div class="panel-body">
          <?php include 'view/view.guru.php'; ?>
        </div>
      </div>
    </div>
    <!-- Inframe -->
  </div>
</div>
<!-- End Page -->
<?php include 'footer.admin.php'; ?>
