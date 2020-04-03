<?php include 'navbar.admin.php';
include 'model/modal.logout.php';
?>
<br><br><br>
    <!-- Main Menu area start-->
    <div class="nk-light-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                      <li class="<?php if($active == "home") echo 'active'; ?>"><a href="admin.dashboard"><i class="fas fa-desktop"></i> Dasbor</a>
                      </li>
                        <li class="<?php if($active == "student") echo 'active'; ?>"><a data-toggle="tab" href="#student"><i class="fas fa-user-graduate"></i> Master data Siswa</a>
                        </li>
                        <li class="<?php if($active == "teacher") echo 'active'; ?>"><a data-toggle="tab" href="#teacher"><i class="fas fa-chalkboard-teacher"></i> Master data Guru</a>
                        </li>
                        <li class="<?php if($active == "saw") echo 'active'; ?>"><a data-toggle="tab" href="#saw"><i class="fas fa-cube"></i> Perhitungan SAW</a>
                        </li>
                        <li><a href="#" data-toggle="modal" data-target="#wantLogout"><i class="fas fa-sign-out-alt"></i> Keluar</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="student" class="tab-pane in notika-tab-menu-bg animated rotateInDownRight <?php if($active == "student") echo 'active'; ?>">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="murid.tambah"><i class="fas fa-user-plus"></i> Input Data</a>
                                </li>
                                <li><a href="murid.lihat"><i class="fas fa-eye"></i> Lihat Data</a>
                                </li>
                            </ul>
                        </div>
                        <div id="teacher" class="tab-pane notika-tab-menu-bg animated rotateInDownRight <?php if($active == "teacher") echo 'active'; ?>">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="guru.tambah"><i class="fas fa-user-plus"></i> Input Data</a>
                                </li>
                                <li><a href="guru.lihat"><i class="fas fa-eye"></i> Lihat Data</a>
                                </li>
                            </ul>
                        </div>
                        <div id="saw" class="tab-pane notika-tab-menu-bg animated rotateInDownRight <?php if($active == "saw") echo 'active'; ?>">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="saw.lihat"><i class="fas fa-cubes"></i> Lihat data</a>
                                </li>
                                <li><a href="saw.hitung"><i class="fas fa-calculator"></i> Perhitungan</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->
