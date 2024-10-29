<?php include '../admin_layout/header.php'; ?>

<main id="main-container">
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <h5><b>Data Master Divisi</b></h5>
            </div>
            <div class="col-md-6 text-right">
                <button type="button" class="btn btn-primary text-left" data-toggle="modal" data-target="#modal-save">
                    <i class="fa fa-plus mr-5"></i>Tambah Divisi
                </button>
            </div>
        </div>

        <div class="modal fade" id="modal-save" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popin" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Tambah Data Divisi</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="form-group row">
                                <label class="col-12">Departement <span class="text-danger">*</span></label>
                                <div class="col-md-12">
                                    <select class="form-control" name="">
                                        <option value="">Please select</option>
                                        <option value="">Komputer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">Kode Divisi</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="" placeholder="Kode Divisi" value="KD-0001" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">Nama Divisi</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="" placeholder="Nama Divisi">
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
            <div class="modal-dialog modal-dialog-popin" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Edit Data Divisi</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="form-group row">
                                <label class="col-12">Kode Divisi</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="" value="KD-0001" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">Departement <span class="text-danger">*</span></label>
                                <div class="col-md-12">
                                    <select class="form-control" name="">
                                        <option value="">Please select</option>
                                        <option value="">Komputer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">Nama Divisi</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="" value="Accounting">
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
                            <h3 class="block-title">Delete Data Divisi</h3>
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
                            <th class="text-center"><b>Departement</b></th>
                            <th class="text-center"><b>Kode Divisi</b></th>
                            <th class="text-center"><b>Divisi</b></th>
                            <th class="text-center"><i class="fa fa-gear"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1.</td>
                            <td class="text-center">Finance</td>
                            <td class="text-center">KD-0001</td>
                            <td class="text-center">Accounting</td>
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