<?php

    require_once 'include/allfile.php';

    $id = $_GET['id'];

?>




<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.3.7 MyZakatUTM</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="container">
        <div class="col-lg-3 col-md-3"><img class="img-responsive" src="assets/img/brand_logo-1024x399.jpg"></div>
        <div class="col-lg-8 col-lg-offset-0 col-md-9">
            <h3 class="text-center">Sistem Agihan Zakat Dan Permohonan Bantuan Zakat UTM (MyZakatUTM)</h3>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand text-info" href="#">MyZakat<span class="text-warning">UTM</span></a><button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li role="presentation"><a href="profile.php?id=<?php echo $id ?>">Semak Profil Pelajar</a></li>
                        <li role="presentation"><a href="apply.php?id=<?php echo $id ?>">Mohon Bantuan Zakat</a></li>
                        <li role="presentation"><a href="#">Status Pemohonan</a></li>
                    </ul><a class="btn btn-danger navbar-btn navbar-right" role="button" href="index.php">Log Keluar&nbsp;<i class="glyphicon glyphicon-log-out"></i></a></div>
    </div>
    </nav>
    </div>
    <div class="container">

        
        <div class="jumbotron">
            <div class="container">
                <h1>Selamat Datang ke Sistem Agihan Zakat UTM</h1>
                <p>Halaman ini masih dalam proses pembinaan</p>
            </div>
        </div>
        

    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>