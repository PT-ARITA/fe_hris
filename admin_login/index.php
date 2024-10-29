<?php include '../admin_layout/header.php'; ?>

<main id="main-container">
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <h5><b>Data Users</b></h5>
            </div>
            <div class="col-md-6 text-right">
                <button type="button" class="btn btn-success text-left" data-toggle="modal" data-target="#modal-popin">
                    <i class="fa fa-user-plus mr-5"></i>Tambah User
                </button>
            </div>
        </div>

        <div class="modal fade" id="modal-popin" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popin" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Tambah Data User</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="form-group row">
                                <label class="col-12">NIK / Nama Lengkap</label>
                                <div class="col-md-12">
                                    <select class="form-control" name="">
                                        <option value="0">Please select</option>
                                        <option value="1">0001 / Rifan Hardiyan</option>
                                        <option value="2">0002 / Pak David</option>
                                        <option value="3">0003 / Pak Rio</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">User Name</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="" placeholder="User Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">Password</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">Role</label>
                                <div class="col-md-12">
                                    <select class="form-control" name="">
                                        <option value="0">Please select</option>
                                        <option value="1">Superadmin</option>
                                        <option value="2">Manager</option>
                                        <option value="3">User</option>
                                    </select>
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

        <div class="block">
            <div class="block-content block-content-full">
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">NIK / Nama</th>
                            <th class="text-center">Username</th>
                            <th class="text-center">Password</th>
                            <th class="text-center">Role</th>
                            <th class="text-center"><i class="fa fa-gear"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1.</td>
                            <td>0001 / Rifan Hardiyan</td>
                            <td class="text-center">rifan</td>
                            <td class="text-center">*****</td>
                            <td class="text-center">SUPERADMIN</td>
                            <td class="text-center">
                                <buttona type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-edit">
                                    <i class="fa fa-file"></i> 
                                </buttona> |
                                <button type="button" class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popin" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Edit Data User</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="form-group row">
                                <label class="col-12">NIK / Nama Lengkap</label>
                                <div class="col-md-12">
                                    <select class="form-control" name="">
                                        <option value="1">0001 / Rifan Hardiyan</option>
                                        <option value="2">0002 / Pak David</option>
                                        <option value="3">0003 / Pak Rio</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">User Name</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="" value="rifan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">Password</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="" value="****">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">Role</label>
                                <div class="col-md-12">
                                    <select class="form-control" name="">
                                        <option value="0">Superadmin</option>
                                        <option value="1">Superadmin</option>
                                        <option value="2">Manager</option>
                                        <option value="3">User</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary text-left" data-dismiss="modal">
                            <i class="fa fa-save mr-5"></i>EDIT DATA
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</main>

<?php include '../admin_layout/footer.php'; ?>