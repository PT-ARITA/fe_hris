<?php include '../admin_layout/header.php'; ?>

<main id="main-container">
    <div class="content" style="margin-top: 70px;">
        <div class="row gutters-tiny">
            <div class="col-md-6 col-xl-2">
                <a class="block block-rounded block-transparent bg-gd-elegance shadow btn-disallow-selection" id="b_absen">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-area-chart text-white-op"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white js-count-to-enabled" data-toggle="countTo" data-to="750">55 / 750</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">Absen Karyawan</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-2">
                <a class="block block-rounded block-transparent shadow bg-gd-dusk btn-disallow-selection" id="b_telat">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-balance-scale text-white-op"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white js-count-to-enabled" data-toggle="countTo" data-to="35">35</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">Absen Telat</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-2">
                <a class="block block-rounded block-transparent shadow bg-gd-sea btn-disallow-selection" id="b_sakit">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-user text-white-op"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white js-count-to-enabled" data-toggle="countTo" data-to="15">15</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">Karyawan Sakit</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-2">
                <a class="block block-rounded block-transparent shadow bg-gd-aqua btn-disallow-selection" id="b_ijin">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-cart-arrow-down text-white-op"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white js-count-to-enabled" data-toggle="countTo" data-to="10">10</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">Karyawan Ijin</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-2">
                <a class="block block-rounded block-transparent shadow bg-gd-corporate btn-disallow-selection" id="b_cuti">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-cart-arrow-down text-white-op"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white js-count-to-enabled" data-toggle="countTo" data-to="0">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">Karyawan Cuti</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-2">
                <a class="block block-rounded block-transparent shadow bg-gd-cherry btn-disallow-selection" id="b_alfa">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-cart-arrow-down text-white-op"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white js-count-to-enabled" data-toggle="countTo" data-to="20">20</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">Karyawan Alfa  </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- ABSEN KARYAWAN -->
        <div class="row mt-4" id="absen">
            <div class="col-md-12">
                <div class="block shadow ">
                    <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#btabs-animated-slideup-home">Absen Masuk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#btabs-animated-slideup-profile">Absen Belum Masuk</a>
                        </li>
                        <li class="nav-item ml-auto">
                            <div class="block-options mr-15">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"><i class="si si-size-fullscreen"></i></button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>
                        </li>
                    </ul>
                    <div class="block-content tab-content overflow-hidden">
                        <div class="tab-pane active" id="btabs-animated-slideup-home" role="tabpanel">
                            <table class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center"><b>No.</b></th>
                                        <th class="text-center"><b>NIK</b></th>
                                        <th class="text-center"><b>Nama</b></th>
                                        <th class="text-center"><b>Jabatan</b></th>
                                        <th class="text-center"><b>IN - OUT</b></th>
                                        <th class="text-center"><b>Foto</b></th>
                                        <th class="text-center"><b>Lokasi</b></th>
                                        <th class="text-center"><b>Status</b></th>
                                        <th class="text-center"><i class="fa fa-gear"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1.</td>
                                        <td class="text-center">12345</td>
                                        <td>Rifan Hardiyan</td>
                                        <td class="text-center">Senior Programmer</td>
                                        <td class="text-center">08:00 - 17:00</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-foto">
                                                <i class="fa fa-child"></i>
                                            </button>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal-lokasi">
                                                <i class="fa fa-map-marker"></i>
                                            </button>
                                        </td>
                                        <td class="text-center">
                                            <span class="badge badge-primary">HADIR</span>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-edit">
                                                <i class="fa fa-pencil"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="btabs-animated-slideup-profile" role="tabpanel">
                        <table class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center"><b>No.</b></th>
                                        <th class="text-center"><b>NIK</b></th>
                                        <th class="text-center"><b>Nama</b></th>
                                        <th class="text-center"><b>Company</b></th>
                                        <th class="text-center"><b>Departement</b></th>
                                        <th class="text-center"><b>Divisi</b></th>
                                        <th class="text-center"><b>Jabatan</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1.</td>
                                        <td class="text-center">12345</td>
                                        <td>Rifan Hardiyan</td>
                                        <td class="text-center">PT. Arita Prima Indonesia</td>
                                        <td class="text-center">IT</td>
                                        <td class="text-center">IT</td>
                                        <td class="text-center">Senior Programmer</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ABSEN TELAT -->
        <div class="row mt-4" id="telat">
            <div class="col-md-12">
                <div class="block shadow">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Absen Telat</h3>
                    </div>
                    <div class="block-content block-content block-content-full">
                        <div class="tab-pane active" id="btabs-animated-slideup-home" role="tabpanel">
                            <table class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center"><b>No.</b></th>
                                        <th class="text-center"><b>NIK</b></th>
                                        <th class="text-center"><b>Nama</b></th>
                                        <th class="text-center"><b>Jabatan</b></th>
                                        <th class="text-center"><b>IN - OUT</b></th>
                                        <th class="text-center"><b>Telat</b></th>
                                        <th class="text-center"><b>Pulang Cepat</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1.</td>
                                        <td class="text-center">12345</td>
                                        <td>Rifan Hardiyan</td>
                                        <td class="text-center">Senior Programmer</td>
                                        <td class="text-center">08:30 - 15:30</td>
                                        <td class="text-center">30 Menit</td>
                                        <td class="text-center">1 Jam 30 Menit</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- KARYAWAN SAKIT -->
        <div class="row mt-4" id="sakit">
            <div class="col-md-12">
                <div class="block shadow">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">List Karyawan Ijin Sakit</h3>
                    </div>
                    <div class="block-content block-content block-content-full">
                        <div class="tab-pane active" id="btabs-animated-slideup-home" role="tabpanel">
                            <table class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center"><b>No.</b></th>
                                        <th class="text-center"><b>NIK</b></th>
                                        <th class="text-center"><b>Nama</b></th>
                                        <th class="text-center"><b>Jabatan</b></th>
                                        <th class="text-center"><b>Tanggal</b></th>
                                        <th class="text-center"><b>Total Hari</b></th>
                                        <th class="text-center"><b>Surat Ket. Dr.</b></th>
                                        <th class="text-center"><b>Status</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1.</td>
                                        <td class="text-center">12345</td>
                                        <td>Rifan Hardiyan</td>
                                        <td class="text-center">Senior Programmer</td>
                                        <td class="text-center">12/11/2024 - 13/11/2024</td>
                                        <td class="text-center">2 Hari</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-foto-sakit">
                                                <i class="fa fa-child"></i>
                                            </button>
                                        </td>
                                        <td class="text-center">
                                            <span class="badge badge-primary">Success</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- KARYAWAN IJIN -->
        <div class="row mt-4" id="ijin">
            <div class="col-md-12">
                <div class="block shadow">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">List Karyawan Ijin</h3>
                    </div>
                    <div class="block-content block-content block-content-full">
                        <div class="tab-pane active" id="btabs-animated-slideup-home" role="tabpanel">
                            <table class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center"><b>No.</b></th>
                                        <th class="text-center"><b>NIK</b></th>
                                        <th class="text-center"><b>Nama</b></th>
                                        <th class="text-center"><b>Jabatan</b></th>
                                        <th class="text-center"><b>Tanggal</b></th>
                                        <th class="text-center"><b>Total Hari</b></th>
                                        <th class="text-center"><b>Bukti Ijin</b></th>
                                        <th class="text-center"><b>Keterangan</b></th>
                                        <th class="text-center"><b>Status</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1.</td>
                                        <td class="text-center">12345</td>
                                        <td>Rifan Hardiyan</td>
                                        <td class="text-center">Senior Programmer</td>
                                        <td class="text-center">12/11/2024 - 13/11/2024</td>
                                        <td class="text-center">2 Hari</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-foto-ijin">
                                                <i class="fa fa-child"></i>
                                            </button>
                                        </td>
                                        <td>Menghadiri pernikahan saudara</td>
                                        <td class="text-center">
                                            <span class="badge badge-primary">Success</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- KARYAWAN CUTI -->
        <div class="row mt-4" id="cuti">
            <div class="col-md-12">
                <div class="block shadow">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">List Karyawan Cuti</h3>
                    </div>
                    <div class="block-content block-content block-content-full">
                        <div class="tab-pane active" id="btabs-animated-slideup-home" role="tabpanel">
                            <table class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center"><b>No.</b></th>
                                        <th class="text-center"><b>NIK</b></th>
                                        <th class="text-center"><b>Nama</b></th>
                                        <th class="text-center"><b>Jabatan</b></th>
                                        <th class="text-center"><b>Tanggal</b></th>
                                        <th class="text-center"><b>Total Hari</b></th>
                                        <th class="text-center"><b>Jenis Cuti</b></th>
                                        <th class="text-center"><b>Keterangan</b></th>
                                        <th class="text-center"><b>Status</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1.</td>
                                        <td class="text-center">12345</td>
                                        <td>Rifan Hardiyan</td>
                                        <td class="text-center">Senior Programmer</td>
                                        <td class="text-center">12/11/2024 - 13/11/2024</td>
                                        <td class="text-center">2 Hari / <span class="badge badge-danger">12</span></td>
                                        <td>Perkawinan Anak Pertama</td>
                                        <td>Menghadiri pernikahan anak</td>
                                        <td class="text-center">
                                            <span class="badge badge-primary">Success</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- KARYAWAN ALFA -->
        <div class="row mt-4" id="alfa">
            <div class="col-md-12">
                <div class="block shadow">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">List Karyawan Alfa</h3>
                    </div>
                    <div class="block-content block-content block-content-full">
                        <div class="tab-pane active" id="btabs-animated-slideup-home" role="tabpanel">
                            <table class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center"><b>No.</b></th>
                                        <th class="text-center"><b>NIK</b></th>
                                        <th class="text-center"><b>Nama</b></th>
                                        <th class="text-center"><b>Jabatan</b></th>
                                        <th class="text-center"><b>Status</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1.</td>
                                        <td class="text-center">12345</td>
                                        <td>Rifan Hardiyan</td>
                                        <td class="text-center">Senior Programmer</td>
                                        <td class="text-center">
                                            <span class="badge badge-danger">Alfa</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- MODAL FOTO IN-OUT  -->
        <div class="modal fade" id="modal-foto" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-popin" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Foto Absen Karyawan</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content row">
                            <div class="col-md-6 text-center">
                                <h5>Foto Absen Masuk</h5>
                                <img src="../assets/avrifan.jpeg" alt="" width="50%">
                            </div>
                            <div class="col-md-6 text-center">
                                <h5>Foto Absen Pulang</h5>
                                <img src="../assets/avrifan.jpeg" alt="" width="50%">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer mt-3">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL LOKASI IN-OUT -->
        <div class="modal fade" id="modal-lokasi" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-popin" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Lokasi Absen Karyawan</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content row">
                            <div class="col-md-6 text-center">
                                <h5>Lokasi Absen Masuk</h5>
                                <label>23.168265283</label> - <label>87.28628192729</label>
                                <p>Ruko Kantor, Sunter, Jakarta Utara</p>
                                <div id="latlongmap" style="width: 100%; height: 400px; position: relative; outline: none;" class="shadow leaflet-container leaflet-touch leaflet-retina leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom" tabindex="0"><div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);"><div class="leaflet-pane leaflet-tile-pane"><div class="leaflet-layer " style="z-index: 1; opacity: 1;"><div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 17; transform: translate3d(-915px, -311px, 0px) scale(2);"></div><div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 18; transform: translate3d(-305px, -133px, 0px) scale(1);"><img alt="" role="presentation" src="https://c.tile.openstreetmap.org/2/1/1.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(330px, 78px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://a.tile.openstreetmap.org/2/2/1.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(586px, 78px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://a.tile.openstreetmap.org/2/1/2.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(330px, 334px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.tile.openstreetmap.org/2/2/2.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(586px, 334px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.tile.openstreetmap.org/2/0/1.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(74px, 78px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.tile.openstreetmap.org/2/3/1.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(842px, 78px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://c.tile.openstreetmap.org/2/0/2.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(74px, 334px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://c.tile.openstreetmap.org/2/3/2.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(842px, 334px, 0px); opacity: 1;"></div></div></div><div class="leaflet-pane leaflet-shadow-pane"><img src="https://unpkg.com/leaflet@1.3.3/dist/images/marker-shadow.png" class="leaflet-marker-shadow leaflet-zoom-animated" alt="" style="margin-left: -12px; margin-top: -41px; width: 41px; height: 41px; transform: translate3d(281px, 201px, 0px);"></div><div class="leaflet-pane leaflet-overlay-pane"></div><div class="leaflet-pane leaflet-marker-pane"><img src="https://unpkg.com/leaflet@1.3.3/dist/images/marker-icon-2x.png" class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" alt="" tabindex="0" style="margin-left: -12px; margin-top: -41px; width: 25px; height: 41px; transform: translate3d(281px, 201px, 0px); z-index: 201;"></div><div class="leaflet-pane leaflet-tooltip-pane"></div><div class="leaflet-pane leaflet-popup-pane"></div><div class="leaflet-proxy leaflet-zoom-animated" style="transform: translate3d(512.199px, 511.148px, 0px) scale(2);"></div></div><div class="leaflet-control-container"><div class="leaflet-top leaflet-left"><div class="leaflet-control-zoom leaflet-bar leaflet-control"><a class="leaflet-control-zoom-in" href="#" title="Zoom in" role="button" aria-label="Zoom in">+</a><a class="leaflet-control-zoom-out" href="#" title="Zoom out" role="button" aria-label="Zoom out">−</a></div></div><div class="leaflet-top leaflet-right"></div><div class="leaflet-bottom leaflet-left"></div><div class="leaflet-bottom leaflet-right"><div class="leaflet-control-attribution leaflet-control"><a href="http://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> | © <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a></div></div></div></div>
                            </div>
                            <div class="col-md-6 text-center">
                                <h5>Lokasi Absen Pulang</h5>
                                <label>23.168265283</label> - <label>87.28628192729</label>
                                <p>Ruko Kantor, Sunter, Jakarta Utara</p>
                                <div id="latlongmap" style="width: 100%; height: 400px; position: relative; outline: none;" class="shadow leaflet-container leaflet-touch leaflet-retina leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom" tabindex="0"><div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);"><div class="leaflet-pane leaflet-tile-pane"><div class="leaflet-layer " style="z-index: 1; opacity: 1;"><div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 17; transform: translate3d(-915px, -311px, 0px) scale(2);"></div><div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 18; transform: translate3d(-305px, -133px, 0px) scale(1);"><img alt="" role="presentation" src="https://c.tile.openstreetmap.org/2/1/1.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(330px, 78px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://a.tile.openstreetmap.org/2/2/1.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(586px, 78px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://a.tile.openstreetmap.org/2/1/2.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(330px, 334px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.tile.openstreetmap.org/2/2/2.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(586px, 334px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.tile.openstreetmap.org/2/0/1.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(74px, 78px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.tile.openstreetmap.org/2/3/1.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(842px, 78px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://c.tile.openstreetmap.org/2/0/2.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(74px, 334px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://c.tile.openstreetmap.org/2/3/2.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(842px, 334px, 0px); opacity: 1;"></div></div></div><div class="leaflet-pane leaflet-shadow-pane"><img src="https://unpkg.com/leaflet@1.3.3/dist/images/marker-shadow.png" class="leaflet-marker-shadow leaflet-zoom-animated" alt="" style="margin-left: -12px; margin-top: -41px; width: 41px; height: 41px; transform: translate3d(281px, 201px, 0px);"></div><div class="leaflet-pane leaflet-overlay-pane"></div><div class="leaflet-pane leaflet-marker-pane"><img src="https://unpkg.com/leaflet@1.3.3/dist/images/marker-icon-2x.png" class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" alt="" tabindex="0" style="margin-left: -12px; margin-top: -41px; width: 25px; height: 41px; transform: translate3d(281px, 201px, 0px); z-index: 201;"></div><div class="leaflet-pane leaflet-tooltip-pane"></div><div class="leaflet-pane leaflet-popup-pane"></div><div class="leaflet-proxy leaflet-zoom-animated" style="transform: translate3d(512.199px, 511.148px, 0px) scale(2);"></div></div><div class="leaflet-control-container"><div class="leaflet-top leaflet-left"><div class="leaflet-control-zoom leaflet-bar leaflet-control"><a class="leaflet-control-zoom-in" href="#" title="Zoom in" role="button" aria-label="Zoom in">+</a><a class="leaflet-control-zoom-out" href="#" title="Zoom out" role="button" aria-label="Zoom out">−</a></div></div><div class="leaflet-top leaflet-right"></div><div class="leaflet-bottom leaflet-left"></div><div class="leaflet-bottom leaflet-right"><div class="leaflet-control-attribution leaflet-control"><a href="http://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> | © <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a></div></div></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer mt-3">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- MODAL EDIT ABSEN IN-OUT -->
        <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popin" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Absen Karyawan</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="form-group row">
                                <label class="col-12">IN - OUT</label>
                                <div class="col-md-6">
                                    <input type="time" class="form-control" name="">
                                </div>
                                <div class="col-md-6">
                                    <input type="time" class="form-control" name="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary text-left" data-dismiss="modal">
                            <i class="fa fa-save mr-5"></i>SAVE ABSEN
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL FOTO IJIN SAKIT  -->
        <div class="modal fade" id="modal-foto-sakit" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-popin" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Foto Absen Karyawan</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content row">
                            <div class="col-md-12 text-center">
                                <h5>Foto Surat Keterangan Dokter</h5>
                                <img src="../assets/avrifan.jpeg" alt="" width="50%">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer mt-3">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL FOTO IJIN  -->
        <div class="modal fade" id="modal-foto-ijin" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-popin" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Foto Absen Karyawan</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content row">
                            <div class="col-md-12 text-center">
                                <h5>Foto Surat Keterangan Dokter</h5>
                                <img src="../assets/avrifan.jpeg" alt="" width="50%">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer mt-3">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<script>
    addEventListener('load', function() {
        let tables = {
            absen: document.getElementById('absen'),
            telat: document.getElementById('telat'),
            sakit: document.getElementById('sakit'),
            ijin: document.getElementById('ijin'),
            cuti: document.getElementById('cuti'),
            alfa: document.getElementById('alfa')
        };

        tables.absen.style.display = 'block';
        tables.telat.style.display = 'none';
        tables.sakit.style.display = 'none';
        tables.ijin.style.display = 'none';
        tables.cuti.style.display = 'none';
        tables.alfa.style.display = 'none';

        let btnAbsen = document.getElementById('b_absen');
        let btnTelat = document.getElementById('b_telat');
        let btnSakit = document.getElementById('b_sakit');
        let btnIjin = document.getElementById('b_ijin');
        let btnCuti = document.getElementById('b_cuti');
        let btnAlfa = document.getElementById('b_alfa');

        function hideAllTables() {
            for (let key in tables) {
                tables[key].style.display = 'none';
                tables[key].style.opacity = '0';
            }
        }

        btnAbsen.addEventListener('click', function() {
            hideAllTables();
            tables.absen.style.display = 'block';
            tables.absen.style.opacity = '1';
        });

        btnTelat.addEventListener('click', function() {
            hideAllTables();
            tables.telat.style.display = 'block';
            tables.telat.style.opacity = '1';
        });

        btnSakit.addEventListener('click', function() {
            hideAllTables();
            tables.sakit.style.display = 'block';
            tables.sakit.style.opacity = '1';
        });

        btnIjin.addEventListener('click', function() {
            hideAllTables();
            tables.ijin.style.display = 'block';
            tables.ijin.style.opacity = '1';
        });

        btnCuti.addEventListener('click', function() {
            hideAllTables();
            tables.cuti.style.display = 'block';
            tables.cuti.style.opacity = '1';
        });

        btnAlfa.addEventListener('click', function() {
            hideAllTables();
            tables.alfa.style.display = 'block';
            tables.alfa.style.opacity = '1';
        });
    });
</script>

<?php include '../admin_layout/footer.php'; ?>