<?php
$titlePage = "Beranda";
$active = "home";
include 'navigation.guru.php'; ?>
<div class="preload"></div>
<div class="pages-on-frame">
  <div class="container">

    <div class="col-lg-12 animated zoomInDown">
      <div class="panel">
        <div class="panel-body">
          <h4 class="text-center"><?php echo $companyName; ?> </h4>
        </div>
      </div>
    </div>

    <div class="col-lg-12  animated zoomInDown delay-1s">
      <div class="well well-lg">
        <a href="siswa.lihat">
          <div class="alert alert-info">
            <h3 class="text-center"><i class="fas fa-user-graduate"></i> Lihat Siswa <i class="fas fa-angle-double-right"></i> </h3>
          </div>
        </a>
    </div>
  </div>

  </div>
</div>
<?php include 'footer.guru.php'; ?>
