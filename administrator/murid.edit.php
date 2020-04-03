<?php
$titlePage = "Edit siswa";
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
            <h4 class="text-center text-gray-100"><i class="fas fa-pencil-alt"></i>  Perbarui data siswa <i class="fas fa-pencil-alt"></i></h4>
          </div>
          <div class="panel-body">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#section0"><i class="fas fa-user-edit"></i>  Edit Identitas</a></li>
              <li class=""><a data-toggle="tab" href="#section1"><i class="fas fa-file-signature"></i> Edit Pengajuan Beasiswa</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="section0">
                <br>
                <?php include 'model/edit.siswa.php'; ?>
              </div>
              <div class="tab-pane" id="section1">
                <br>
                <?php include 'model/edit.siswa2.php'; ?>
              </div>
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
