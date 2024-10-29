<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance | ARITA</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    
    <link rel="shortcut icon" href="assets/logo_arita.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>
    <div id="auth" style="padding-top: 0px">

        <div class="">
            <div class="row">
                <div class="col-md-5 col-sm-12 mx-auto">
                    <div class=" pt-4">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <img src="assets/logo_arita.png" height="80" class=''>
                                <p id="clock"></p>
                                <p></p>
                            </div>
                            <div class="divider">
                                <div class="divider-text" style="color: #113D6D;"><b>PT. ARITA PRIMA Indonesia Tbk</b></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a href="absen.php" class="btn btn-block mb-2 btn-primary shadow"><b>- Absen -</b></a>
                                </div>
                                <div class="col-sm-12">
                                    <a href="izin/form_add.php" class="btn btn-block mb-2 btn-info shadow"><b>- Pengajuan Izin -</b></a>
                                </div>
                                <div class="col-sm-12">
                                    <a href="cuti/form_add_user.php" class="btn btn-block mb-2 btn-info shadow"><b>- Pengajuan Cuti -</b></a>
                                </div>
                                <div class="text-white">
                                    <hr>
                                </div>
                                <div class="col-sm-12">
                                    <a href="index.php" class="btn btn-block mb-2 btn-danger shadow"><b>- Keluar -</b></a>
                                </div>

                                <div class="divider">
                                    <div class="divider-text" style="color: #113D6D;"><b>History Absen Rifan Hardiyan</b></div>
                                </div>

                                <div class="col-md-12" style="font-size:10px">
                                    <div class="card">
                                        <div class="px-0 pb-0">
                                            <div class="table-responsive">
                                                <table class="table mb-0" id="">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Tanggal</th>
                                                            <th class="text-center">Masuk</th>
                                                            <th class="text-center">Pulang</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">01/10/2024</td>
                                                            <td class="text-center">08:00</td>
                                                            <td class="text-center">17:00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">02/10/2024</td>
                                                            <td class="text-center">
                                                                <span class="badge bg-danger">08:10</span>    
                                                            </td>
                                                            <td class="text-center">17:00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">03/10/2024</td>
                                                            <td class="text-center">
                                                                <span class="badge bg-warning">Cuti</span>    
                                                            </td>
                                                            <td class="text-center">
                                                                <span class="badge bg-warning">Cuti</span>    
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">03/10/2024</td>
                                                            <td class="text-center">08:00</td>
                                                            <td class="text-center">
                                                                <span class="badge bg-danger">15:00</span>    
                                                            </td>
                                                        </tr>
                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/js/app.js"></script>


</body>

</html>