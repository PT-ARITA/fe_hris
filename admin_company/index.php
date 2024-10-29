<?php include '../admin_layout/header.php'; ?>

<main id="main-container">
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <h5><b>Data Master Perusahaan</b></h5>
            </div>
            <div class="col-md-6 text-right">
                <button type="button" class="btn btn-primary text-left" data-toggle="modal" data-target="#modal-save">
                    <i class="fa fa-plus mr-5"></i>Tambah Perusahaan
                </button>
            </div>
        </div>

        <div class="modal fade" id="modal-save" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-popin" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Tambah Data Perusahaan</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="form-group row">
                                <label class="col-12">Kode Perusahaan</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="" placeholder="Kode Perusahaan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">Nama Perusahaan</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="" placeholder="Nama Perusahaan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">Palace Name</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="" placeholder="Place Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-12">Latitude</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="" placeholder="0.000000">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-12">Longtitude</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="" placeholder="0.000000">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div id="latlongmap" style="width: 100%; height: 400px; position: relative; outline: none;" class="shadow leaflet-container leaflet-touch leaflet-retina leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom" tabindex="0"><div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);"><div class="leaflet-pane leaflet-tile-pane"><div class="leaflet-layer " style="z-index: 1; opacity: 1;"><div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 17; transform: translate3d(-915px, -311px, 0px) scale(2);"></div><div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 18; transform: translate3d(-305px, -133px, 0px) scale(1);"><img alt="" role="presentation" src="https://c.tile.openstreetmap.org/2/1/1.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(330px, 78px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://a.tile.openstreetmap.org/2/2/1.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(586px, 78px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://a.tile.openstreetmap.org/2/1/2.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(330px, 334px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.tile.openstreetmap.org/2/2/2.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(586px, 334px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.tile.openstreetmap.org/2/0/1.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(74px, 78px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.tile.openstreetmap.org/2/3/1.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(842px, 78px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://c.tile.openstreetmap.org/2/0/2.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(74px, 334px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://c.tile.openstreetmap.org/2/3/2.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(842px, 334px, 0px); opacity: 1;"></div></div></div><div class="leaflet-pane leaflet-shadow-pane"><img src="https://unpkg.com/leaflet@1.3.3/dist/images/marker-shadow.png" class="leaflet-marker-shadow leaflet-zoom-animated" alt="" style="margin-left: -12px; margin-top: -41px; width: 41px; height: 41px; transform: translate3d(281px, 201px, 0px);"></div><div class="leaflet-pane leaflet-overlay-pane"></div><div class="leaflet-pane leaflet-marker-pane"><img src="https://unpkg.com/leaflet@1.3.3/dist/images/marker-icon-2x.png" class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" alt="" tabindex="0" style="margin-left: -12px; margin-top: -41px; width: 25px; height: 41px; transform: translate3d(281px, 201px, 0px); z-index: 201;"></div><div class="leaflet-pane leaflet-tooltip-pane"></div><div class="leaflet-pane leaflet-popup-pane"></div><div class="leaflet-proxy leaflet-zoom-animated" style="transform: translate3d(512.199px, 511.148px, 0px) scale(2);"></div></div><div class="leaflet-control-container"><div class="leaflet-top leaflet-left"><div class="leaflet-control-zoom leaflet-bar leaflet-control"><a class="leaflet-control-zoom-in" href="#" title="Zoom in" role="button" aria-label="Zoom in">+</a><a class="leaflet-control-zoom-out" href="#" title="Zoom out" role="button" aria-label="Zoom out">−</a></div></div><div class="leaflet-top leaflet-right"></div><div class="leaflet-bottom leaflet-left"></div><div class="leaflet-bottom leaflet-right"><div class="leaflet-control-attribution leaflet-control"><a href="http://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> | © <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a></div></div></div></div>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <p>Lat Long</p>
                                    <h5 id="latlngspan" class="coordinatetxt">(0.000000, 0.000000)</h5>
                                </div>
                                <div class="col-md-6 text-center">
                                    <p>GPS</p>
                                    <span id="dms-lat" class="coordinatetxt">0° 0' 0'' N</span><br>
                                    <span id="dms-lng" class="coordinatetxt">0° 0' 0'' E</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary text-left" data-dismiss="modal">
                            <i class="fa fa-save mr-5"></i>SAVE DATA
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-popin" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Edit Data Perusahaan</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="form-group row">
                                <label class="col-12">Kode Perusahaan</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="" value="API">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">Nama Perusahaan</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="" value="PT. Arita Prima Indonesia">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">Palace Name</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="" placeholder="Place Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-12">Latitude</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="" placeholder="0.000000">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-12">Longtitude</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="" placeholder="0.000000">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div id="latlongmap" style="width: 100%; height: 400px; position: relative; outline: none;" class="shadow leaflet-container leaflet-touch leaflet-retina leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom" tabindex="0"><div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);"><div class="leaflet-pane leaflet-tile-pane"><div class="leaflet-layer " style="z-index: 1; opacity: 1;"><div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 17; transform: translate3d(-915px, -311px, 0px) scale(2);"></div><div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 18; transform: translate3d(-305px, -133px, 0px) scale(1);"><img alt="" role="presentation" src="https://c.tile.openstreetmap.org/2/1/1.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(330px, 78px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://a.tile.openstreetmap.org/2/2/1.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(586px, 78px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://a.tile.openstreetmap.org/2/1/2.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(330px, 334px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.tile.openstreetmap.org/2/2/2.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(586px, 334px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.tile.openstreetmap.org/2/0/1.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(74px, 78px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.tile.openstreetmap.org/2/3/1.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(842px, 78px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://c.tile.openstreetmap.org/2/0/2.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(74px, 334px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://c.tile.openstreetmap.org/2/3/2.png?bar" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(842px, 334px, 0px); opacity: 1;"></div></div></div><div class="leaflet-pane leaflet-shadow-pane"><img src="https://unpkg.com/leaflet@1.3.3/dist/images/marker-shadow.png" class="leaflet-marker-shadow leaflet-zoom-animated" alt="" style="margin-left: -12px; margin-top: -41px; width: 41px; height: 41px; transform: translate3d(281px, 201px, 0px);"></div><div class="leaflet-pane leaflet-overlay-pane"></div><div class="leaflet-pane leaflet-marker-pane"><img src="https://unpkg.com/leaflet@1.3.3/dist/images/marker-icon-2x.png" class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" alt="" tabindex="0" style="margin-left: -12px; margin-top: -41px; width: 25px; height: 41px; transform: translate3d(281px, 201px, 0px); z-index: 201;"></div><div class="leaflet-pane leaflet-tooltip-pane"></div><div class="leaflet-pane leaflet-popup-pane"></div><div class="leaflet-proxy leaflet-zoom-animated" style="transform: translate3d(512.199px, 511.148px, 0px) scale(2);"></div></div><div class="leaflet-control-container"><div class="leaflet-top leaflet-left"><div class="leaflet-control-zoom leaflet-bar leaflet-control"><a class="leaflet-control-zoom-in" href="#" title="Zoom in" role="button" aria-label="Zoom in">+</a><a class="leaflet-control-zoom-out" href="#" title="Zoom out" role="button" aria-label="Zoom out">−</a></div></div><div class="leaflet-top leaflet-right"></div><div class="leaflet-bottom leaflet-left"></div><div class="leaflet-bottom leaflet-right"><div class="leaflet-control-attribution leaflet-control"><a href="http://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> | © <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a></div></div></div></div>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <p>Lat Long</p>
                                    <h5 id="latlngspan" class="coordinatetxt">(0.000000, 0.000000)</h5>
                                </div>
                                <div class="col-md-6 text-center">
                                    <p>GPS</p>
                                    <span id="dms-lat" class="coordinatetxt">0° 0' 0'' N</span><br>
                                    <span id="dms-lng" class="coordinatetxt">0° 0' 0'' E</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary text-left" data-dismiss="modal">
                            <i class="fa fa-save mr-5"></i>SAVE DATA
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popin" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Delete Data Perusahaan</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row mb-3">
                                <div class="col-md-12 text-center">
                                    <p>Apakah Anda yakin menghapus data tersebut???</p>
                                </div>
                                <div class="col-md-12 text-center">
                                    <hr>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-alt-secondary btn-block" data-dismiss="modal">Close</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-danger btn-block">
                                        <i class="fa fa-trash mr-5"></i>DELETE
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block">
            <div class="block-content block-content-full">
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="text-center"><b>No.</b></th>
                            <th class="text-center"><b>Kode Perusahaan</b></th>
                            <th class="text-center"><b>Nama Perusahaan</b></th>
                            <th class="text-center"><b>Place Name</b></th>
                            <th class="text-center"><b>Latitude - Longtitude</b></th>
                            <th class="text-center"><i class="fa fa-gear"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1.</td>
                            <td class="text-center">API</td>
                            <td class="">PT. Arita Prima Indonesia</td>
                            <td class="text-center">Jakarta</td>
                            <td class="text-center">-6.175110 / 106.865036</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-edit">
                                    <i class="fa fa-pencil"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</main>

<?php include '../admin_layout/footer.php'; ?>