<?php include '../admin_layout/header.php'; ?>

<main id="main-container">
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <h5><b>Data Master Karyawan</b></h5>
            </div>
            <div class="col-md-6 text-right">
                <a type="button" class="btn btn-primary text-left" href="add.php">
                    <i class="fa fa-user-plus mr-5"></i>Tambah Karyawan
                </a>
            </div>
        </div>

        <div class="block">
            <div class="block-content block-content-full">
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="text-center"><b>No.</b></th>
                            <th class="text-center"><b>NIK</b></th>
                            <th class="text-center"><b>Nama Lengkap</b></th>
                            <th class="text-center"><b>Perusahaan</b></th>
                            <th class="text-center"><i class="fa fa-gear"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1.</td>
                            <td class="text-master">10050016</td>
                            <td>Suwardi</td>
                            <td>PT. ARITA Prima Indonesia</td>
                            <td class="text-center">
                                <a type="button" class="btn btn-sm btn-info" href="edit.php">
                                    <i class="fa fa-file"></i> 
                                </a> |
                                <button type="button" class="btn btn-sm btn-danger">
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