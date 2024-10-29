<?php include '../admin_layout/header.php'; ?>

<main id="main-container">
    <div class="content">
        <div class="row">
            <div class="col-md-3"></div>

            <div class="col-md-6">
                <div class="block text-center">
                    <div class="block-content block-content-full block-content-sm bg-info rounded">
                        <H5 class="text-white mt-2"><b>CETAK LAPORAN GAJI</b></H5>
                    </div>
                    <div class="block-content block-content-full bg-info-light">
                        <div class="form-group row">
                            <label class="col-12"><b>Categories</b></label>
                            <div class="col-md-12">
                                <select class="form-control text-center" name="">
                                    <option value="">Please select</option>
                                    <option value="ALL">ALL</option>
                                    <option value="Branch / Cabang">Branch / Cabang</option>
                                    <option value="Divisi">Divisi</option>
                                    <option value="SUBSI">SUBSI</option>
                                </select>
                            </div>
                            <div class="col-md-12 mt-2">
                                <select class="form-control text-center" name="">
                                    <option value="">Please select</option>
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="Bandung">Bandung</option>
                                    <option value="Surabaya">Surabaya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12"><b>PERIODE</b></label>
                            <div class="col-md-12">
                            <select class="form-control text-center" name="">
                                    <option value="">Please select</option>
                                    <option value="SEPTEMBER 2024">SEPTEMBER 2024</option>
                                    <option value="OKTOBER 2024">OKTOBER 2024</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="row items-push">
                            <div class="col-6 mt-3">
                                <a class="block block-link-shadow" href="#">
                                    <div class="mb-5"><i class="fa fa-desktop fa-3x text-info"></i></div>
                                    <p><b>View More</b></p>
                                </a>
                            </div>
                            <div class="col-6 mt-3">
                                <a class="block block-link-shadow" href="#">
                                    <div class="mb-5"><i class="fa fa-file-text fa-3x text-info"></i></div>
                                    <p><b>Print Out</b></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</main>

<?php include '../admin_layout/footer.php'; ?>