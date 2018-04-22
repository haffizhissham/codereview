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
    <div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal custom-form" method="post" enctype="multipart/form-data" action="control/reg.php"><img class="img-responsive" src="assets/img/brand_logo-1024x399.jpg">
                <h1>Daftar Pengguna Baharu</h1>
                <div class="form-group">
                    <div class="col-sm-4 label-column"><label class="control-label" for="name-input-field">No. Kad Matrik</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="matrik"></div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column"><label class="control-label" for="email-input-field">Ulang No. Kad Matrik</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text"></div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column"><label class="control-label" for="pawssword-input-field">No. Kad Pengenalan (IC)</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="ic"></div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column"><label class="control-label" for="repeat-pawssword-input-field">Ulang No. Kad Pengenalan (IC)</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text"></div>
                </div>
                <div class="checkbox"><label><input type="checkbox">Saya terima segala terma dan syarat.</label></div><button class="btn btn-primary" type="submit">Hantar&nbsp;</button></form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>