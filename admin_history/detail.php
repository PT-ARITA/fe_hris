<?php include '../admin_layout/header.php'; ?>

<main id="main-container">
    <div class="content" style="margin-top: 70px;">
        <div class="row">
            <div class="col-lg-3">
                <div class="block block-rounded block-link-shadow text-center">
                    <div class="block-content bg-gd-dusk">
                        <div class="push">
                            <img class="img-avatar img-avatar-thumb" src="../admin_assets/avrifan.jpeg" alt="">
                        </div>
                        <div class="pull-r-l pull-b py-10 bg-black-op-25">
                            <div class="font-w600 mb-5 text-white">
                                Rifan Hardiyan
                            </div>
                            <div class="font-size-sm text-white-op">Senior Programmer</div>
                        </div>
                    </div>
                    <div class="block-content mt-4">
                        <h5>
                            Total Hadir <br>
                            20
                        </h5>
                        <div class="btn btn-circle btn-warning mr-5 mb-5 mt-2 js-tooltip-enabled shadow" style="margin-top: -10px;" title="Ijin">
                            0
                        </div>
                        <div class="btn btn-circle btn-success mr-5 mb-5 mt-2 js-tooltip-enabled shadow" style="margin-top: -10px;" title="Sakit">
                            2
                        </div>
                        <div class="btn btn-circle btn-danger mr-5 mb-5 mt-2 js-tooltip-enabled shadow" style="margin-top: -10px;" title="Alfa">
                            0
                        </div>
                        <hr>
                        <table class="table table-vcenter table-striped">
                            <thead>
                                <tr>
                                    <th class="text-left" style="width: 60%;">Cuti</th>
                                    <th class="text-center" style="width: 5%;">:</th>
                                    <th class="text-center">2 / 10</th>
                                </tr>
                                <tr class="bg-light">
                                    <th class="text-left" style="width: 60%;">Telat / PC</th>
                                    <th class="text-center" style="width: 5%;">:</th>
                                    <th class="text-center">1 / 0</th>
                                </tr>
                                <tr>
                                    <th class="text-left" style="width: 60%;">Total OVT</th>
                                    <th class="text-center" style="width: 5%;">:</th>
                                    <th class="text-center">2,30 Menit</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="block">
                    <div class="block-content block-content-full">
                        <table class="table table-bordered table-striped table-vcenter">
                            <thead>
                                <tr>
                                    <th class="text-center"><b>Tanggal</b></th>
                                    <th class="text-center"><b>IN - OUT</b></th>
                                    <th class="text-center"><b>Telat</b></th>
                                    <th class="text-center"><b>PC</b></th>
                                    <th class="text-center"><b>OVT</b></th>
                                    <th class="text-center"><b>Foto</b></th>
                                    <th class="text-center"><b>Lokasi</b></th>
                                    <th class="text-center"><b>Keterangan</b></th>
                                    <th class="text-center"><i class="fa fa-gear"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1/10/2024</td>
                                    <td class="text-center">08:00 - 17:00</td>
                                    <td class="text-center">0</td>
                                    <td class="text-center">0</td>
                                    <td class="text-center">0</td>
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
                                        <a type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-edit">
                                            <i class="fa fa-pencil text-white"></i>
                                        </a>
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
    
</main>

<?php include '../admin_layout/footer.php'; ?>