<?php include '../admin_layout/header.php'; ?>

<main id="main-container">
    <div class="content" style="margin-top: 70px;">
        <div class="row">
            <div class="col-md-6">
                <h5><b>History Attendance</b></h5>
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