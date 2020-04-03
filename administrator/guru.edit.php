<?php
$titlePage = "Edit guru";
$active = "teacher";
include 'navigation.admin.php'; ?>
<div class="preload"></div>
<!-- Start Page -->
<div class="pages-on-frame">
  <div class="container">
    <!-- Inframe -->
    <div class="col-lg-12">
      <div class="panel animated zoonInDown">
        <div class="panel-heading nk-green">
          <h4 class="text-center text-gray-100"><i class="fas fa-pencil-alt"></i>  Perbarui data guru <i class="fas fa-pencil-alt"></i></h4>
        </div>
        <hr>
        <div class="panel-body">
          <?php include 'model/edit.guru.php'; ?>
        </div>
      </div>
    </div>
    <!-- Inframe -->
  </div>
</div>
<!-- End Page -->
<?php include 'footer.admin.php'; ?>
