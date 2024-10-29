<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>HRIS | ARITA</title>

        <meta name="description" content="HRIS | PT. ARITA PRIMA INDONESIA">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta property="og:title" content="HRIS">
        <meta property="og:site_name" content="PT. ARITA PRIMA INDONESIA">
        <meta property="og:description" content="HRIS | PT. ARITA PRIMA INDONESIA">
        <meta property="og:type" content="application">
        <meta property="og:url" content="">
        <meta property="og:image" content="">
        <link rel="shortcut icon" href="../admin_assets/media/logo/logo_arita.png">
        <link rel="icon" type="image/png" sizes="192x192" href="../admin_assets/media/logo/logo_arita.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../admin_assets/media/logo/logo_arita.png">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="../admin_assets/css/codebase.css">

        <link rel="stylesheet" href="../admin_assets/js/plugins/summernote/summernote-bs4.css">
        <link rel="stylesheet" href="../admin_assets/js/plugins/simplemde/simplemde.min.css">

        <link rel="stylesheet" href="../admin_assets/js/plugins/datatables/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="../admin_assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css">
        <link rel="stylesheet" href="../admin_assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
        <link rel="stylesheet" href="../admin_assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
        <link rel="stylesheet" href="../admin_assets/js/plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="../admin_assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.css">
        <link rel="stylesheet" href="../admin_assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.css">
        <link rel="stylesheet" href="../admin_assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css">
        <link rel="stylesheet" href="../admin_assets/js/plugins/dropzonejs/dist/dropzone.css">
        <link rel="stylesheet" href="../admin_assets/js/plugins/flatpickr/flatpickr.min.css">

        <link rel="canonical" href="https://www.latlong.net/" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.3/dist/leaflet.css">

    </head>
    <body>
        <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-fullrow">
            <nav id="sidebar">
                <div class="sidebar-content">
                    <div class="content-header content-header-fullrow px-15">
                        <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                            <div class="content-header-item">
                                <img src="../admin_assets/media/logo/logo_arita.png" width="45%" style="margin-top: -10px;">
                            </div>
                        </div>
                    </div>
                    <div class="content-side content-side-full content-side-user px-10 align-parent">
                        <div class="sidebar-mini-visible-b align-v animated fadeIn">
                            <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
                        </div>
                        <div class="sidebar-mini-hidden-b text-center">
                            <a class="img-link" href="be_pages_generic_profile.html">
                                <img class="img-avatar" src="../assets/avrifan.jpeg" alt="">
                            </a>
                            <ul class="list-inline mt-10">
                                <li class="list-inline-item">
                                    <p class="font-size-xs font-w600 text-uppercase">Rifan Hardiyan</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="content-side content-side-full">
                        <ul class="nav-main nav-link active">
                            <li>
                                <a class="<?= (strpos($_SERVER['REQUEST_URI'], 'admin_dh')) ? 'active' : '' ?>" href="../admin_dh/index.php"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                            </li>

                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-calendar"></i><span class="sidebar-mini-hide">Attendance</span></a>
                                <ul>
                                    <li>
                                        <a class="<?= (strpos($_SERVER['REQUEST_URI'], 'gaji')) ? 'active' : '' ?>" href="../gaji/index.php"><span class="sidebar-mini-hide">History</span></a>
                                    </li>
                                    <li>
                                        <a class="<?= (strpos($_SERVER['REQUEST_URI'], 'report')) ? 'active' : '' ?>" href="../report/index.php"><span class="sidebar-mini-hide">Ijin Karyawan</span></a>
                                    </li><li>
                                        <a class="<?= (strpos($_SERVER['REQUEST_URI'], 'slip')) ? 'active' : '' ?>" href="../slip/index.php"><span class="sidebar-mini-hide">Cuti Karyawan</span></a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-dollar"></i><span class="sidebar-mini-hide">Payroll</span></a>
                                <ul>
                                    <li>
                                        <a class="<?= (strpos($_SERVER['REQUEST_URI'], 'gaji')) ? 'active' : '' ?>" href="../gaji/index.php"><span class="sidebar-mini-hide">ARSIP</span></a>
                                    </li>
                                    <li>
                                        <a class="<?= (strpos($_SERVER['REQUEST_URI'], 'report')) ? 'active' : '' ?>" href="../report/index.php"><span class="sidebar-mini-hide">REPORT</span></a>
                                    </li><li>
                                        <a class="<?= (strpos($_SERVER['REQUEST_URI'], 'slip')) ? 'active' : '' ?>" href="../slip/index.php"><span class="sidebar-mini-hide">SLIP GAJI</span></a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-main-heading">
                                <span class="sidebar-mini-hidden">Karyawan</span>
                            </li>
                            <li>
                                <a class="<?= (strpos($_SERVER['REQUEST_URI'], 'transfer')) ? 'active' : '' ?>" href="../transfer/index.php"><i class="fa fa-arrows-h"></i><span class="sidebar-mini-hide">Mutasi</span></a>
                            </li>
                            <li>
                                <a class="<?= (strpos($_SERVER['REQUEST_URI'], 'pkwt')) ? 'active' : '' ?>" href="../pkwt/index.php"><i class="fa fa-calendar-check-o"></i><span class="sidebar-mini-hide">PKWT</span></a>
                            </li>
                            <li>
                                <a class="<?= (strpos($_SERVER['REQUEST_URI'], 'resign')) ? 'active' : '' ?>" href="../resign/index.php"><i class="fa fa-user-times"></i><span class="sidebar-mini-hide">Resign</span></a>
                            </li>

                            <li class="nav-main-heading">
                                <span class="sidebar-mini-hidden">Data Master</span>
                            </li>
                            <li>
                                <a class="<?= (strpos($_SERVER['REQUEST_URI'], 'admin_karyawan')) ? 'active' : '' ?>" href="../admin_karyawan/index.php"><i class="fa fa-users"></i><span class="sidebar-mini-hide">Karyawan</span></a>
                            </li>
                            <li>
                                <a class="<?= (strpos($_SERVER['REQUEST_URI'], 'admin_jabatan')) ? 'active' : '' ?>" href="../admin_jabatan/index.php"><i class="fa fa-black-tie"></i><span class="sidebar-mini-hide">Jabatan</span></a>
                            </li>
                            <li>
                                <a class="<?= (strpos($_SERVER['REQUEST_URI'], 'admin_divisi')) ? 'active' : '' ?>" href="../admin_divisi/index.php"><i class="fa fa-child"></i><span class="sidebar-mini-hide">Divisi</span></a>
                            </li>
                            <li>
                                <a class="<?= (strpos($_SERVER['REQUEST_URI'], 'admin_departement')) ? 'active' : '' ?>" href="../admin_departement/index.php"><i class="fa fa-child"></i><span class="sidebar-mini-hide">Departement</span></a>
                            </li>
                            <li>
                                <a class="<?= (strpos($_SERVER['REQUEST_URI'], 'admin_cabang')) ? 'active' : '' ?>" href="../admin_cabang/index.php"><i class="fa fa-map-o"></i><span class="sidebar-mini-hide">Cabang</span></a>
                            </li>
                            <li>
                                <a class="<?= (strpos($_SERVER['REQUEST_URI'], 'admin_regional')) ? 'active' : '' ?>" href="../admin_regional/index.php"><i class="fa fa-map"></i><span class="sidebar-mini-hide">Regional</span></a>
                            </li>
                            <li>
                                <a class="<?= (strpos($_SERVER['REQUEST_URI'], 'admin_company')) ? 'active' : '' ?>" href="../admin_company/index.php"><i class="fa fa-building"></i><span class="sidebar-mini-hide">Perusahaan</span></a>
                            </li>

                            <li class="nav-main-heading">
                                <span class="sidebar-mini-hidden">Setting</span>
                            </li>
                            <li>
                                <a class="<?= (strpos($_SERVER['REQUEST_URI'], 'jamsostek')) ? 'active' : '' ?>" href="../jamsostek/index.php"><i class="fa fa-file-zip-o"></i><span class="sidebar-mini-hide">Jamsostek</span></a>
                            </li>
                            <li>
                                <a class="<?= (strpos($_SERVER['REQUEST_URI'], 'admin_login')) ? 'active' : '' ?>" href="../admin_login/index.php"><i class="fa fa-gear"></i><span class="sidebar-mini-hide">User</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <header id="page-header">
                <div class="content-header">
                    <div class="content-header-section">
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                        <label for=""><b>HRIS PT. ARITA PRIMA Indonesia Tbk</b></label>
                    </div>
                    <div class="content-header-section">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user d-sm-none"></i>
                                <span class="d-none d-sm-inline-block">Super Admin</span>
                                <i class="fa fa-angle-down ml-5"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
                                <a class="dropdown-item" href="../admin/">
                                    <i class="si si-logout mr-5"></i> Sign Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>