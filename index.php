<?php

    require_once 'include/allfile.php';


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
    <div class="login-clean">
        <form method="post" action="control/auth.php">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><img class="img-responsive" src="assets/img/brand_logo-1024x399.jpg"></div>
            <div class="form-group"><input class="form-control" type="text" name="matrik" placeholder="No. Matrik" required=""></div>
            <div class="form-group"><input class="form-control" type="text" name="ic" placeholder="No. IC" required=""></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log Masuk&nbsp;<i class="glyphicon glyphicon-log-in"></i></button>
                <p></p><a class="btn btn-info btn-block" role="button" href="register.php">Daftar&nbsp;<i class="glyphicon glyphicon-pencil"></i></a></div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>