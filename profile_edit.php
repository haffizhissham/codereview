<?php
    

    $id = $_GET["id"];


    require_once 'include/allfile.php';


    $stmt = $pdosql->prepare("SELECT * FROM prof where p_id = ?");
    $stmt->bindParam(1, $_GET['id'], PDO::PARAM_INT);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

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
                    </ul><a class="btn btn-danger navbar-btn navbar-right" role="button" href="index.html">Log Keluar&nbsp;<i class="glyphicon glyphicon-log-out"></i></a></div>
    </div>
    </nav>
    </div>
    <div class="container">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Navigasi Tambahan</h3>
                </div>
                <div class="panel-body">
                    <a class="btn btn-danger btn-block" type="button" href="profile.php?id=<?php echo $id;?>">Kembali&nbsp;<i class="glyphicon glyphicon-remove-sign"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-lg-offset-0 col-md-9">
            <form method="post" enctype="multipart/form-data" action="control/prof.php">
                <div>
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab-1" role="tab" data-toggle="tab">Maklumat Peribadi</a></li>
                        <li><a href="#tab-2" role="tab" data-toggle="tab">Maklumat Keluarga</a></li>
                        <li><a href="#tab-3" role="tab" data-toggle="tab">Maklumat Tajaan</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" id="tab-1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Maklumat Asas</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="col-lg-6 col-md-12">
                                        <p><strong>Name Penuh :</strong></p><input class="form-control" type="text" name="pname" value="<?php echo $row["p_name"]; ?>" required="">
                                        <p><strong>No. Kad Pengenalan :</strong></p><input class="form-control" type="text" name="pic" value="<?php echo $row["p_ic"]; ?>" required="">
                                        <p><strong>No. Matrik :</strong></p><input class="form-control" type="text" name="pmatrik" value="<?php echo $row["p_matrik"]; ?>" required="">
                                        <p><strong>Kesihatan :</strong></p><input class="form-control" type="text" name="psihat" value="<?php echo $row["p_sihat"]; ?>" required="">
                                        <p><strong>Status : </strong></p><input class="form-control" type="text" name="pstat" value="<?php echo $row["p_stat"]; ?>" required=""></div>
                                    <div class="col-lg-6 col-md-12">
                                        <p><strong>Emel : </strong></p><input class="form-control" type="text" name="pemail" value="<?php echo $row["p_email"]; ?>" required="">
                                        <p><strong>No. Telepon :</strong></p><input class="form-control" type="text" name="pphone" value="<?php echo $row["p_phone"]; ?>" required="">
                                        <p><strong>Alamat Rumah :</strong></p><textarea class="form-control" name="paddr" required=""><?php echo $row["p_addr"]; ?></textarea></div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Kolej Kediaman</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="col-lg-6 col-md-12">
                                        <p><strong>Kolej :</strong></p><input class="form-control" type="text" name="kkolej" value="<?php echo $row["k_kolej"]; ?>" required="">
                                        <p><strong>Blok :</strong></p><input class="form-control" type="text" name="kblog" value="<?php echo $row["k_blog"]; ?>" required=""></div>
                                    <div class="col-lg-6 col-md-12">
                                        <p><strong>Bilik :</strong></p><input class="form-control" type="text" name="kbilik" value="<?php echo $row["k_bilik"]; ?>" required=""></div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Akademik</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="col-lg-6 col-md-12">
                                        <p><strong>Fakulti :</strong></p><input class="form-control" type="text" name="afak" value="<?php echo $row["a_fak"]; ?>" required="">
                                        <p><strong>Tahun : </strong></p><input class="form-control" type="text" name="athn" value="<?php echo $row["a_thn"]; ?>" required="">
                                        <p><strong>Semester :</strong></p><input class="form-control" type="text" name="asem" value="<?php echo $row["a_sem"]; ?>" required=""></div>
                                    <div class="col-lg-6 col-md-12">
                                        <p><strong>Bidang :</strong></p><input class="form-control" type="text" name="acour" value="<?php echo $row["a_cour"]; ?>" required="">
                                        <p><strong>GPA :</strong></p><input class="form-control" type="text" name="agpa" value="<?php echo $row["a_gpa"]; ?>" required="">
                                        <p><strong>CGPA :</strong></p><input class="form-control" type="text" name="acgpa" value="<?php echo $row["a_cgpa"]; ?>" required=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-2">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Maklumat Pasangan</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="col-lg-6 col-md-12">
                                        <p><strong>Nama :</strong></p><input class="form-control" type="text" name="paname" value="<?php echo $row["pa_name"]; ?>" required="">
                                        <p><strong>No. Kad Pengenalan :</strong></p><input class="form-control" type="text" name="paic" value="<?php echo $row["pa_ic"]; ?>" required="">
                                        <p><strong>Tarikh Meningal :</strong></p><input class="form-control" type="text" name="pameni" value="<?php echo $row["pa_meni"]; ?>" required="">
                                        <p><strong>Tarikh Cerai : </strong></p><input class="form-control" type="text" name="pacerai" value="<?php echo $row["pa_cerai"]; ?>" required=""></div>
                                    <div class="col-lg-6 col-md-12">
                                        <p><strong>Kesihatan :</strong></p><input class="form-control" type="text" name="pasihat" value="<?php echo $row["pa_sihat"]; ?>" required="">
                                        <p><strong>Pekerjaan :</strong></p><input class="form-control" type="text" name="pakerj" value="<?php echo $row["pa_kerj"]; ?>" required=""></div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Maklumat Bapa</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="col-lg-6 col-md-12">
                                        <p><strong>Nama : </strong></p><input class="form-control" type="text" name="bname" value="<?php echo $row["b_name"]; ?>" required="">
                                        <p><strong>No. Kad Pengenalan :</strong></p><input class="form-control" type="text" name="bic" value="<?php echo $row["b_ic"]; ?>" required="">
                                        <p><strong>Pekerjaan : </strong></p><input class="form-control" type="text" name="bkerj" value="<?php echo $row["b_kerj"]; ?>" required=""></div>
                                    <div class="col-lg-6 col-md-12">
                                        <p><strong>Majikan :</strong></p><input class="form-control" type="text" name="bmaji" value="<?php echo $row["b_maji"]; ?>" required="">
                                        <p><strong>Kesihatan :</strong></p><input class="form-control" type="text" name="bsihat" value="<?php echo $row["b_sihat"]; ?>" required="">
                                        <p><strong>Status Bapa : </strong></p><input class="form-control" type="text" name="bstat" value="<?php echo $row["b_stat"]; ?>" required=""></div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Maklumat Ibu</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="col-lg-6 col-md-12">
                                        <p><strong>Nama : </strong></p><input class="form-control" type="text" name="iname" value="<?php echo $row["i_name"]; ?>" required="">
                                        <p><strong>No. Kad Pengenalan :</strong></p><input class="form-control" type="text" name="iic" value="<?php echo $row["i_ic"]; ?>" required="">
                                        <p><strong>Pekerjaan : </strong></p><input class="form-control" type="text" name="ikerj" value="<?php echo $row["i_kerj"]; ?>" required=""></div>
                                    <div class="col-lg-6 col-md-12">
                                        <p><strong>Majikan :</strong></p><input class="form-control" type="text" name="imaji" value="<?php echo $row["i_maji"]; ?>" required="">
                                        <p><strong>Kesihatan :</strong></p><input class="form-control" type="text" name="isihat" value="<?php echo $row["i_sihat"]; ?>" required="">
                                        <p><strong>Status Ibu : </strong></p><input class="form-control" type="text" name="istat" value="<?php echo $row["i_stat"]; ?>" required=""></div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Maklumat Adik-beradik</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="col-lg-6 col-md-12">
                                        <p><strong>Bilangan Adik - beradik yang masih belajar :</strong></p><input class="form-control" type="number" min="0" name="adbla" value="<?php echo $row["ad_bla"]; ?>" required=""></div>
                                    <div class="col-lg-6 col-md-12">
                                        <p><strong>BIlangan Adik - beradik yang SUDAH Bekerja :</strong></p><input class="form-control" type="number" min="0" name="adkerj" value="<?php echo $row["ad_kerj"]; ?>" required=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Tajaan Semasa</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="col-lg-6 col-md-12">
                                        <p><strong>Nama Tajaan :</strong></p><input class="form-control" type="text" name="tname" value="<?php echo $row["t_name"]; ?>" required="">
                                        <p><strong>Jenis Tajaan :</strong></p><input class="form-control" type="text" name="tjenis" value="<?php echo $row["t_jenis"]; ?>" required="">
                                        <p><strong>Status Tajaan :</strong></p><input class="form-control" type="text" name="tstatus" value="<?php echo $row["t_status"]; ?>" required=""></div>
                                    <div class="col-lg-6 col-md-12">
                                        <p><strong>Jumlah Tajaan (Per SEM) : </strong></p><input class="form-control" type="text" name="tjum" value="<?php echo $row["t_jum"]; ?>" required="">
                                        <hr><button class="btn btn-primary btn-block" type="submit">Kemaskini Maklumat&nbsp;<i class="glyphicon glyphicon-user"></i></button>
                                        <input type="hidden" required="" name="id" value="<?php echo $id ?>" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>