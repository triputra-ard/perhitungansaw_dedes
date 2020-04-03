<?php
$titlePage = "Beranda";
include 'atas.navigation.php'; ?>
<div class="preload"></div>
<br><br>
<div class="pages-on-frame">
  <div class="container">

    <div class="col-lg-12 animated fadeInDown">
      <div class="panel">
        <div class="panel-body nk-indigo">
          <h4 class="text-center text-gray-100"><?php echo $companyName; ?> </h4>
        </div>
      </div>
    </div>

    <div class="col-lg-12 animated fadeInDown delay-2s">
      <div class="well well-lg nk-red">
        <center>
        <div id="landing" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#landing" data-slide-to="0" class="active"></li>
            <li data-target="#landing" data-slide-to="1"></li>
            <li data-target="#landing" data-slide-to="2"></li>
            <li data-target="#landing" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <img src="<?php echo $interface; ?>/img/onlanding1 (2).jpg" alt="" width="900px" height="600px">
              <div class="carousel-caption">
                <h3 class="text-gray-100">Caption 1</h3>
              </div>
            </div>
            <div class="item">
              <img src="<?php echo $interface; ?>/img/onlanding1 (1).jpg" alt="" width="900px" height="600px">
              <div class="carousel-caption">
                <h3 class="text-gray-100">Caption 2</h3>
              </div>
            </div>
            <div class="item">
              <img src="<?php echo $interface; ?>/img/onlanding1 (2).jpg" alt="" width="900px" height="600px">
              <div class="carousel-caption">
                <h3 class="text-gray-100">Caption 3</h3>
              </div>
            </div>
            <div class="item">
              <img src="<?php echo $interface; ?>/img/onlanding1 (1).jpg" alt="" width="900px" height="600px">
              <div class="carousel-caption">
                <h3 class="text-gray-100">Caption 4</h3>
              </div>
            </div>
          </div>
        </div>
      </center>
    </div>
  </div>

  </div>
</div>
<?php include 'bawah.navigation.php'; ?>
