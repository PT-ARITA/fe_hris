<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance | ARITA</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    
    <link rel="shortcut icon" href="../assets/logo_arita.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/app.css">
</head>

<body>
    <div id="auth2">
        
        <div class="">
            <div class="row">
                <div class="col-md-5 col-sm-12 mx-auto">
                    <div class="">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <img src="../assets/logo_arita.png" height="80" class='mb-4'>
                                <h2 style="color: #113D6D;">PT. ARITA PRIMA Indonesia Tbk</h2>
                                <h5 style="color: #113D6D;">Selamat datang di HRIS APPS</h5>
                                
                            </div>
                            <form action="form_login_user.php" method="POST">
                                <div class="text-center">
                                    <p>Silakan Masuk</p>
                                </div>
                                <div class="form-group position-relative has-icon-left">
                                    <label for="username" style="color: #113D6D;">User Name</label>
                                    <div class="position-relative">
                                        <input type="number" name="username" class="form-control" id="username">
                                        <div class="form-control-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left">
                                    <div class="clearfix">
                                        <label for="password" style="color: #113D6D;">Password</label>
                                    </div>
                                    <div class="position-relative">
                                        <input type="number" name="password" class="form-control" id="password">
                                        <div class="form-control-icon">
                                            <i data-feather="info"></i>
                                        </div>
                                    </div>
                                </div>
                            <div class="clearfix mt-5">
                                <a href="../admin_dh" class="btn btn-block btn-primary float-right"><b>- SIGN IN -</b></a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="../assets/js/feather-icons/feather.min.js"></script>
    <script src="../assets/js/app.js"></script>
    
    <script src="../assets/js/main.js"></script>
</body>

</html>
