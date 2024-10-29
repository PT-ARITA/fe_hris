<?php include '../admin_layout/header.php'; ?>

<main id="main-container">
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <h5><b>Data Jamsostek</b></h5>
            </div>
        </div>

        <div class="modal fade" id="modal-popin" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popin" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Ubah Data Jamsostek</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="form-group row">
                                <label class="col-12">BPJS 1% & 2%</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control text-right" name="" value="12.000.000" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">JPN 1% & 2%</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control text-right" name="" value="10.042.300">
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
                            <th class="text-center">BPJS 1% & 2%</th>
                            <th class="text-center">JPN 1% & 2%</th>
                            <th class="text-center"><i class="fa fa-gear"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">12.000.000</td>
                            <td class="text-center">10.042.300</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-popin">
                                    <i class="fa fa-pencil"></i>
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