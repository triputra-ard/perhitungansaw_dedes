<?php
$titlePage = "Hitung SAW";
$active = "saw";
include 'navigation.admin.php'; ?>
<div class="preload"></div>
<!-- Start Page -->
<div class="pages-on-frame">
  <div class="container">
    <!-- Inframe -->
    <div class="col-lg-12  animated zoomIn">
      <div class="panel">
        <div class="panel-heading nk-brown">
          <h4 class="text-center text-gray-100"><i class="fas fa-table"></i> Lihat Data SAW <i class="fas fa-cube"></i></h4>
        </div>
        <div class="panel-body">
          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#section0"><i class="fas fa-layer-group"></i> Nilai Kategori</a></li>
            <li class=""><a data-toggle="tab" href="#section1"><i class="fas fa-grip-horizontal"></i> Matriks Awal</a></li>
            <li class=""><a data-toggle="tab" href="#section2"><i class="fas fa-grip-vertical"></i> Matriks Normalisasi</a></li>
            <li class=""><a data-toggle="tab" href="#section3"><i class="fas fa-file-signature"></i> Penerimaan</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="section0">
              <br>
               <?php include 'view/saw.nilaikategori.php'; ?>
            </div>
            <div class="tab-pane" id="section1">
              <br>
              <?php include 'view/saw.matriksawal.php'; ?>
            </div>
            <div class="tab-pane" id="section2">
              <br>
              <?php include 'view/saw.matriksnormalisasi.php'; ?>
            </div>
            <div class="tab-pane" id="section3">
              <br>
               <?php include 'view/saw.penerimaan.php'; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Inframe -->
  </div>
</div>
<!-- End Page -->
<?php include 'footer.admin.php'; ?>
