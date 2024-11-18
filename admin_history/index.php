<?php include '../admin_layout/header.php'; ?>

<main id="main-container">
    <div class="content" style="margin-top: 70px;">
        <div class="row">
            <div class="col-md-6">
                <h5><b>History Attendance</b></h5>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-2 text-right">
                <button type="button" class="btn btn-primary text-left" data-toggle="modal" data-target="#modal-filter">
                    <i class="fa fa-laptop mr-5"></i>Filter
                </button>
            </div>
            <div class="col-md-2 text-right">
                <select class="form-control" name="">
                    <option value="">Please select</option>
                    <option value="">November</option>
                    <option value="">Oktober</option>
                    <option value="">September</option>
                </select>
            </div>
        </div>

        <div class="modal fade" id="modal-filter" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popin" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Filter Karyawan</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="form-group row">
                                <label class="col-12">Nama Perusahaan</label>
                                <div class="col-md-12">
                                    <select class="form-control" name="">
                                        <option value="">Please select</option>
                                        <option value="">PT. Arita Prima Indonesia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">Jenis Perusahaan</label>
                                <div class="col-md-12">
                                    <select class="form-control" name="">
                                        <option value="">Please select</option>
                                        <option value="">Head Office</option>
                                        <option value="">Cabang</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">Regional</label>
                                <div class="col-md-12">
                                    <select class="form-control" name="">
                                        <option value="">Please select</option>
                                        <option value="">Jawa Tengah</option>
                                        <option value="">Jawa Timut</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">Cabang</label>
                                <div class="col-md-12">
                                    <select class="form-control" name="">
                                        <option value="">Please select</option>
                                        <option value="">Semarang</option>
                                        <option value="">Solo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">Divisi</label>
                                <div class="col-md-12">
                                    <select class="form-control" name="">
                                        <option value="">Please select</option>
                                        <option value="">IT</option>
                                        <option value="">Finance</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">Departemen</label>
                                <div class="col-md-12">
                                    <select class="form-control" name="">
                                        <option value="">Please select</option>
                                        <option value="">IT</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary text-left" data-dismiss="modal">
                            <i class="fa fa-search mr-5"></i>Filter
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="block" style="font-size: 11px;">
            <div class="block-content block-content-full">
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="text-center"><b>No.</b></th>
                            <th class="text-center"><b>NIK</b></th>
                            <th class="text-center"><b>Nama</b></th>
                            <th class="text-center"><b>Divisi</b></th>
                            <th class="text-center"><b>Departemen</b></th>
                            <th class="text-center"><b>Jabatan</b></th>
                            <th class="text-center"><b>Hadir</b></th>
                            <th class="text-center"><b>S</b></th>
                            <th class="text-center"><b>I</b></th>
                            <th class="text-center"><b>A</b></th>
                            <th class="text-center"><b>Cuti</b></th>
                            <th class="text-center"><b>Telat IN-OUT</b></th>
                            <th class="text-center"><b>Total OVT</b></th>
                            <th class="text-center"><i class="fa fa-gear"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1.</td>
                            <td class="text-center">1234</td>
                            <td>Rifan Hardiyan</td>
                            <td class="text-center">IT</td>
                            <td class="text-center">IT</td>
                            <td class="text-center">Senior Programmer</td>
                            <td class="text-center">15</td>
                            <td class="text-center">1</td>
                            <td class="text-center">2</td>
                            <td class="text-center">0</td>
                            <td class="text-center">5</td>
                            <td class="text-center">2-4</td>
                            <td class="text-center">5 Jam 20 Menit</td>
                            <td class="text-center">
                                <a type="button" class="btn btn-sm btn-info" href="detail.php">
                                    <i class="fa fa-file-text"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</main>

<?php include '../admin_layout/footer.php'; ?>