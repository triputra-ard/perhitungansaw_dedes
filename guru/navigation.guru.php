<?php include 'navbar.guru.php';
include 'model/modal.logout.php';
 ?>
<br><br>
    <!-- Main Menu area start-->
    <div class="mg-tb-40 nk-light-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                      <li class="<?php if($active == "home") echo 'active'; ?>"><a href="guru.beranda"><i class="fas fa-home"></i> Beranda</a>
                      </li>
                        <li class="<?php if($active == "student") echo 'active'; ?>"><a href="siswa.lihat"><i class="fas fa-eye"></i> <i class="fas fa-user-graduate"></i> Lihat data Siswa</a>
                        </li>
                        <li><a href="#" data-toggle="modal" data-target="#wantLogout"><i class="fas fa-sign-out-alt"></i> Keluar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->
