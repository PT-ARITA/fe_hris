<?php include '../admin_layout/header.php'; ?>

<main id="main-container">
    <div class="content" style="margin-top: 70px;">
        <div class="row gutters-tiny">
            <div class="col-md-6 col-xl-4">
                <a class="block block-rounded block-transparent bg-gd-elegance shadow btn-disallow-selection" id="b_progress">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-spinner fa-spin fa-3x text-white-op"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white js-count-to-enabled" data-toggle="countTo" data-to="10">2 / 10</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">On Progress</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4">
                <a class="block block-rounded block-transparent shadow bg-gd-dusk btn-disallow-selection" id="b_success">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-check-square-o text-white-op"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white js-count-to-enabled" data-toggle="countTo" data-to="100">100</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">Success</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4">
                <a class="block block-rounded block-transparent shadow bg-gd-sea btn-disallow-selection" id="b_rejected">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-exclamation-triangle text-white-op"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white js-count-to-enabled" data-toggle="countTo" data-to="15">15</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">Rejected</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- ON PROGRESS -->
        <div class="row mt-4" id="progress">
            <div class="col-md-12">
                <div class="block shadow ">
                    <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#btabs-animated-slideup-queue">List Queue</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#btabs-animated-slideup-al">Atasan Langsung</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#btabs-animated-slideup-atl">Atasan Tidak Langsung</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#btabs-animated-slideup-waiting">Waiting Approval</a>
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
                        <div class="tab-pane active" id="btabs-animated-slideup-queue" role="tabpanel">
                            <table class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center"><b>No.</b></th>
                                        <th class="text-center"><b>NIK</b></th>
                                        <th class="text-center"><b>Nama</b></th>
                                        <th class="text-center"><b>Departemen</b></th>
                                        <th class="text-center"><b>Jenis Izin</b></th>
                                        <th class="text-center"><b>Tanggal Pengajuan</b></th>
                                        <th class="text-center"><b>Tanggal Izin</b></th>
                                        <th class="text-center"><b>Detail</b></th>
                                        <th class="text-center"><b>Status</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1.</td>
                                        <td class="text-center">12345</td>
                                        <td>Rifan Hardiyan</td>
                                        <td class="text-center">IT</td>
                                        <td class="text-center">Tidak Masuk Kerja</td>
                                        <td class="text-center">19/12/2024</td>
                                        <td class="text-center">20/12/2024</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-detail">
                                                <i class="fa fa-file-text"></i>
                                            </button>
                                        </td>
                                        <td class="text-center">
                                            <span class="badge badge-warning">Waiting Approval</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="btabs-animated-slideup-al" role="tabpanel">
                            <table class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center"><b>No.</b></th>
                                        <th class="text-center"><b>NIK</b></th>
                                        <th class="text-center"><b>Nama</b></th>
                                        <th class="text-center"><b>Departemen</b></th>
                                        <th class="text-center"><b>Jenis Izin</b></th>
                                        <th class="text-center"><b>Tanggal Pengajuan</b></th>
                                        <th class="text-center"><b>Tanggal Izin</b></th>
                                        <th class="text-center"><b>Detail</b></th>
                                        <th class="text-center"><b>Status</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1.</td>
                                        <td class="text-center">12345</td>
                                        <td>Rifan Hardiyan</td>
                                        <td class="text-center">IT</td>
                                        <td class="text-center">Tidak Masuk Kerja</td>
                                        <td class="text-center">19/12/2024</td>
                                        <td class="text-center">20/12/2024</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-detail">
                                                <i class="fa fa-file-text"></i>
                                            </button>
                                        </td>
                                        <td class="text-center">
                                            <span class="badge badge-success">Waiting Approval</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="btabs-animated-slideup-atl" role="tabpanel">
                            <table class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center"><b>No.</b></th>
                                        <th class="text-center"><b>NIK</b></th>
                                        <th class="text-center"><b>Nama</b></th>
                                        <th class="text-center"><b>Departemen</b></th>
                                        <th class="text-center"><b>Jenis Izin</b></th>
                                        <th class="text-center"><b>Tanggal Pengajuan</b></th>
                                        <th class="text-center"><b>Tanggal Izin</b></th>
                                        <th class="text-center"><b>Detail</b></th>
                                        <th class="text-center"><b>Status</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1.</td>
                                        <td class="text-center">12345</td>
                                        <td>Rifan Hardiyan</td>
                                        <td class="text-center">IT</td>
                                        <td class="text-center">Tidak Masuk Kerja</td>
                                        <td class="text-center">19/12/2024</td>
                                        <td class="text-center">20/12/2024</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-detail">
                                                <i class="fa fa-file-text"></i>
                                            </button>
                                        </td>
                                        <td class="text-center">
                                            <span class="badge badge-info">Waiting Approval</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="btabs-animated-slideup-waiting" role="tabpanel">
                            <table class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center"><b>No.</b></th>
                                        <th class="text-center"><b>NIK</b></th>
                                        <th class="text-center"><b>Nama</b></th>
                                        <th class="text-center"><b>Departemen</b></th>
                                        <th class="text-center"><b>Jenis Izin</b></th>
                                        <th class="text-center"><b>Tanggal Pengajuan</b></th>
                                        <th class="text-center"><b>Tanggal Izin</b></th>
                                        <th class="text-center"><b>Detail</b></th>
                                        <th class="text-center"><b>Status</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1.</td>
                                        <td class="text-center">12345</td>
                                        <td>Rifan Hardiyan</td>
                                        <td class="text-center">IT</td>
                                        <td class="text-center">Tidak Masuk Kerja</td>
                                        <td class="text-center">19/12/2024</td>
                                        <td class="text-center">20/12/2024</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-detail">
                                                <i class="fa fa-file-text"></i>
                                            </button>
                                        </td>
                                        <td class="text-center">
                                            <span class="badge badge-primary">Waiting Approval</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SUCCESS -->
        <div class="row mt-4" id="success">
            <div class="col-md-12">
                <div class="block shadow">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Izin Success</h3>
                    </div>
                    <div class="block-content block-content block-content-full">
                        <div class="tab-pane active" id="btabs-animated-slideup-home" role="tabpanel">
                            <table class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center"><b>No.</b></th>
                                        <th class="text-center"><b>NIK</b></th>
                                        <th class="text-center"><b>Nama</b></th>
                                        <th class="text-center"><b>Departemen</b></th>
                                        <th class="text-center"><b>Jenis Izin</b></th>
                                        <th class="text-center"><b>Tanggal Approval</b></th>
                                        <th class="text-center"><b>Tanggal Izin</b></th>
                                        <th class="text-center"><b>Detail</b></th>
                                        <th class="text-center"><b>Status</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1.</td>
                                        <td class="text-center">12345</td>
                                        <td>Rifan Hardiyan</td>
                                        <td class="text-center">IT</td>
                                        <td class="text-center">Tidak Masuk Kerja</td>
                                        <td class="text-center">19/12/2024</td>
                                        <td class="text-center">20/12/2024</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-detail-app">
                                                <i class="fa fa-file-text"></i>
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

        <!-- REJECTED -->
        <div class="row mt-4" id="rejected">
            <div class="col-md-12">
                <div class="block shadow">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Izin Rejected</h3>
                    </div>
                    <div class="block-content block-content block-content-full">
                        <div class="tab-pane active" id="btabs-animated-slideup-home" role="tabpanel">
                            <table class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center"><b>No.</b></th>
                                        <th class="text-center"><b>NIK</b></th>
                                        <th class="text-center"><b>Nama</b></th>
                                        <th class="text-center"><b>Departemen</b></th>
                                        <th class="text-center"><b>Jenis Izin</b></th>
                                        <th class="text-center"><b>Tanggal Approval</b></th>
                                        <th class="text-center"><b>Tanggal Izin</b></th>
                                        <th class="text-center"><b>Detail</b></th>
                                        <th class="text-center"><b>Status</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1.</td>
                                        <td class="text-center">12345</td>
                                        <td>Rifan Hardiyan</td>
                                        <td class="text-center">IT</td>
                                        <td class="text-center">Tidak Masuk Kerja</td>
                                        <td class="text-center">19/12/2024</td>
                                        <td class="text-center">20/12/2024</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-detail-app">
                                                <i class="fa fa-file-text"></i>
                                            </button>
                                        </td>
                                        <td class="text-center">
                                            <span class="badge badge-danger">Rejected</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- MODAL DETAIL  -->
        <div class="modal fade" id="modal-detail" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-popin" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Detail Izin Karyawan</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="form-group row">
                                <label class="col-md-2">Jenis Izin</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="" value="Tidak Masuk Kerja" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2">Tanggal Izin</label>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="" value="20/12/2024" disabled>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="" value="21/12/2024" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2">Total Hari</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="" value="2 Hari" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2">Jam</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="" value="-" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2">Keterangan</label>
                                <div class="col-md-10">
                                    <textarea type="text" class="form-control" name="" value="" disabled>Perpanjang SIM di Magelang</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2">Bukti Izin</label>
                                <div class="col-md-10">
                                    <img src="../admin_assets/avrifan.jpeg" alt="" width="50%">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer mt-3">
                        <button type="button" class="btn btn-alt-danger" data-dismiss="modal" data-toggle="modal" data-target="#modal-rejected">Rejected</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal" data-target="#modal-rejected"><i class="fa fa-check-circle-o mr-2"></i>Approve</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL DETAIL APP -->
        <div class="modal fade" id="modal-detail-app" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-popin" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Detail Izin Karyawan</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="form-group row">
                                <label class="col-md-2">Jenis Izin</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="" value="Tidak Masuk Kerja" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2">Tanggal Izin</label>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="" value="20/12/2024" disabled>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="" value="21/12/2024" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2">Total Hari</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="" value="2 Hari" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2">Jam</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="" value="-" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2">Keterangan</label>
                                <div class="col-md-10">
                                    <textarea type="text" class="form-control" name="" value="" disabled>Perpanjang SIM di Magelang</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2">Bukti Izin</label>
                                <div class="col-md-10">
                                    <img src="../admin_assets/avrifan.jpeg" alt="" width="50%">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer mt-3">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL REJECTED -->
        <div class="modal fade" id="modal-rejected" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popin" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Alasan</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content row">
                            <div class="col-md-12">
                                <textarea name="" id="" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer mt-3">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-alt-primary" data-dismiss="modal"><i class="fa fa-send mr-2"></i>Send</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<script>
    addEventListener('load', function() {
        let tables = {
            progress: document.getElementById('progress'),
            success: document.getElementById('success'),
            rejected: document.getElementById('rejected'),
        };

        tables.progress.style.display = 'block';
        tables.success.style.display = 'none';
        tables.rejected.style.display = 'none';

        let btnProgress = document.getElementById('b_progress');
        let btnSuccess = document.getElementById('b_success');
        let btnRejected = document.getElementById('b_rejected');

        function hideAllTables() {
            for (let key in tables) {
                tables[key].style.display = 'none';
                tables[key].style.opacity = '0';
            }
        }

        btnProgress.addEventListener('click', function() {
            hideAllTables();
            tables.progress.style.display = 'block';
            tables.progress.style.opacity = '1';
        });

        btnSuccess.addEventListener('click', function() {
            hideAllTables();
            tables.success.style.display = 'block';
            tables.success.style.opacity = '1';
        });

        btnRejected.addEventListener('click', function() {
            hideAllTables();
            tables.rejected.style.display = 'block';
            tables.rejected.style.opacity = '1';
        });
    });
</script>

<?php include '../admin_layout/footer.php'; ?>