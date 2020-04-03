<?php
$titlePage = "Lihat Siswa";
$active = "student";
include 'navigation.guru.php'; ?>
<div class="preload"></div>
<div class="pages-on-frame">
  <div class="container">

    <div class="col-lg-12">
      <div class="panel">
        <div class="panel-heading nk-indigo">
          <h4 class="text-center text-gray-100"><i class="fas fa-table"></i> Data Siswa : <?php echo @$_SESSION[nama_guru]; ?> <i class="fas fa-table"></i> </h4>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <?php include 'view/siswa.view.php'; ?>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<?php include 'footer.guru.php'; ?>
