<?php include '../function/atas.include.all.php';
session_start();
if (empty(@$_SESSION[nama_admin])) {
  echo "<script>alert('Login dulu !');
  window.location.href='login.admin';</script>";
}
?>
<body class="bg-sea-level">
    <nav class="navbar navbar-default" style="background:rgb(4, 62, 238);">
        <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand navbrand-center" href="#"><img src="../assets/img/logo.png" width="130px" height="130px" style="background-color:rgba(235, 227, 224, 0.59);"></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li role="presentation"><p class="text-center text-gray-100"><i class="fas fa-desktop"></i> Administrator : <?php echo @$_SESSION[nama_admin]; ?></p></li>
                </ul>
            </div>
        </div>
    </nav>
