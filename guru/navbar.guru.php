<?php include '../function/atas.include.all.php';
session_start();
if (empty(@$_SESSION[nip])) {
  echo "<script>alert('Harus masuk dahulu !');
  window.location.href='login.guru';</script>";
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
                <li role="presentation"><p class="text-center text-gray-100"><i class="fas fa-chalkboard-teacher"></i>
                   <?php if(@$_SESSION[jenis_kelamin] == "Laki-laki") echo "Bapak guru"; else echo "Ibu guru"; ?> : <?php echo @$_SESSION[nama_guru]; ?></p></li>
            </ul>
        </div>
      </div>
    </nav>
