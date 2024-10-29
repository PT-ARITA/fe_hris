<?php include '../admin_layout/header.php'; ?>

<main id="main-container">
    <div class="content">
        <div class="row">
            <div class="col-md-10">
                <h5><b>Tambah Data Karyawan</b></h5>
            </div>
        </div>

        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Data Pribadi</h3>
            </div>
            <div class="block-content block-content-full row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-12">NIK</label>
                        <div class="col-md-12">
                            <input type="number" class="form-control" name="" placeholder="0">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">No. KTP <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="number" class="form-control" name="" placeholder="0">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">No. KK <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="number" class="form-control" name="" placeholder="0">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Nama Lengkap <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="" placeholder="Nama Lengkap">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Tempat, Tanggal Lahir <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="" placeholder="Tempat Lahir">
                                </div>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Nama Ibu Kandung</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="" placeholder="Nama Ibu Kandung">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Jenis Kelamin <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <select class="form-control" name="">
                                <option value="">Please select</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Golongan Darah</label>
                        <div class="col-md-12">
                            <select class="form-control" name="">
                                <option value="">Please select</option>
                                <option value="AB">AB</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="O">O</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Agama <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <select class="form-control" name="">
                                <option value="">Please select</option>
                                <option value="Islam">Islam</option>
                                <option value="Budha">Budha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-12">NPWP</label>
                        <div class="col-md-12">
                            <input type="number" class="form-control" name="" placeholder="0">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-12">No. Handphone 1 <span class="text-danger">*</span></label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="" placeholder="0">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-12">No. Handphone 2</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="" placeholder="0">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">No. Telepon</label>
                        <div class="col-md-12">
                            <input type="number" class="form-control" name="" placeholder="0">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Nama Lembaga Pendidikan</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="" placeholder="Nama Lembaga Pendidikan">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-12">Tingkat Pendidikan</label>
                                <div class="col-md-12">
                                    <select class="form-control" name="">
                                        <option value="">Please select</option>
                                        <option value="SMA">SMA</option>
                                        <option value="D3/D4">D3/D4</option>
                                        <option value="Sarjana (S1)">Sarjana (S1)</option>
                                        <option value="Magister (S2)">Magister (S2)</option>
                                        <option value="Doktor (S3)">Doktor (S3)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-12">Jurusan Pendidikan</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="" placeholder="Jurusan Pendidikan">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Email Pribadi</label>
                        <div class="col-md-12">
                            <input type="email" class="form-control" name="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Email Perusahaan</label>
                        <div class="col-md-12">
                            <input type="email" class="form-control" name="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Alamat KTP <span class="text-danger">*</span></label>
                        <div class="col-12">
                            <textarea class="form-control" name="" rows="5" placeholder="Alamat KTP"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-6">Alamat Domisili <span class="text-danger">*</span></label>
                        <div class="col-12">
                            <textarea class="form-control" name="" rows="5" placeholder="Alamat Domisili"></textarea>
                            <label class="css-control css-control-sm css-control-primary css-switch">
                                <input type="checkbox" class="css-control-input">
                                <span class="css-control-indicator"></span><span style="font-size:10px">Jika Sama Dengan Alamat KTP</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Data Keluarga</h3>
            </div>
            <div class="block-content block-content-full row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-12">Nama Pasangan</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="" placeholder="Nama Pasangan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Tempat, Tanggal Lahir</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="" placeholder="Tempat">
                        </div>
                        <div class="col-md-6">
                            <input type="date" class="form-control" name="" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-12">Nama Anak 1</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="" placeholder="Nama Pasangan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Tempat, Tanggal Lahir</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="" placeholder="Tempat">
                        </div>
                        <div class="col-md-6">
                            <input type="date" class="form-control" name="" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Nama Anak 2</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="" placeholder="Nama Pasangan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Tempat, Tanggal Lahir</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="" placeholder="Tempat">
                        </div>
                        <div class="col-md-6">
                            <input type="date" class="form-control" name="" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Nama Anak 3</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="" placeholder="Nama Pasangan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Tempat, Tanggal Lahir</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="" placeholder="Tempat">
                        </div>
                        <div class="col-md-6">
                            <input type="date" class="form-control" name="" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Data Perusahaan </h3>
            </div>
            <div class="block-content block-content-full row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-12">Nama Perusahaan</label>
                        <div class="col-md-12">
                            <select class="form-control" name="">
                                <option value="">Please select</option>
                                <option value="">API / PT. ARITA Prima Indonesia</option>
                                <option value="">AIRA / PT. AIRA Sukses Internasional</option>
                                <option value="">ANS / PT. Amanah Nusantara Sejahtera</option>
                                <option value="">GRT / PT. Garuda Reksa Teknologi</option>
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
                </div>

                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-12">Regional</label>
                        <div class="col-md-12">
                            <select class="form-control" name="">
                                <option value="">Please select</option>
                                <option value="">Banten</option>
                                <option value="">Jakarta</option>
                                <option value="">Jawa Tengah</option>
                                <option value="">Jawa Timur</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Cabang</label>
                        <div class="col-md-12">
                            <select class="form-control" name="">
                                <option value="">Please select</option>
                                <option value="">Semarang</option>
                                <option value="">Magelang</option>
                                <option value="">Batang</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-12">Divisi</label>
                        <div class="col-md-12">
                            <select class="form-control" name="">
                                <option value="">Please select</option>
                                <option value="">Marketing</option>
                                <option value="">Accounting</option>
                                <option value="">Human Capital</option>
                                <option value="">IT</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Jabatan</label>
                        <div class="col-md-12">
                            <select class="form-control" name="">
                                <option value="">Please select</option>
                                <option value="">Magang</option>
                                <option value="">Staff</option>
                                <option value="">Supervisor</option>
                                <option value="">Manager</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Status Karyawan </h3>
            </div>
            <div class="block-content block-content-full row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-12">Status Karyawan</label>
                        <div class="col-md-12">
                            <select class="form-control" name="">
                                <option value="">Please select</option>
                                <option value="">PKWT / Kontrak</option>
                                <option value="">PKWTT / Tetap</option>
                                <option value="">PKHL</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Tgl Masuk Pertama</label>
                        <div class="col-md-12">
                            <input type="date" class="form-control" name="" placeholder="0">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Tgl Habis Kontrak Pertama</label>
                        <div class="col-md-12">
                            <input type="date" class="form-control" name="" placeholder="0">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Masa Kerja</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="" placeholder="Masa Kerja">
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-12">Direcy / Indirect</label>
                        <div class="col-md-12">
                            <select class="form-control" name="">
                                <option value="">Please select</option>
                                <option value="DIRECT">DIRECT</option>
                                <option value="INDIRECT">INDIRECT</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Status PTKP</label>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-control" name="">
                                        <option value="">Please select</option>
                                        <option value="">Belum Menikah</option>
                                        <option value="">Menikah</option>
                                        <option value="">Duda</option>
                                        <option value="">Janda</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="" placeholder="0">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-12">No. SK Tetap</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="" placeholder="0">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Tgl SK Tetap</label>
                        <div class="col-md-12">
                            <input type="date" class="form-control" name="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Data Keuangan</h3>
            </div>
            <div class="block-content block-content-full row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-12">Nama Bank</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="" value="MANDIRI" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-12">Nama Rekening</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="" placeholder="Nama Rekening">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-12">Nomor Rekening</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="" placeholder="0">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-12">No. Jamsostek</label>
                        <div class="col-md-12">
                            <input type="number" class="form-control" name="" placeholder="0">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-12">No. BPJS Kesehatan</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="" placeholder="0">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-12">Keterangan</label>
                                <div class="col-md-12">
                                    <select class="form-control" name="">
                                        <option value="">Please select</option>
                                        <option value="">PBI</option>
                                        <option value="">PPU</option>
                                        <option value="">Non PPU</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-12">Gaji Pokok</label>
                        <div class="col-md-12">
                            <input type="number" class="form-control" name="" placeholder="0">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Tunjangan</label>
                        <div class="col-md-12">
                            <input type="number" class="form-control" name="" placeholder="0">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Upload Berkas Karyawan</h3>
            </div>
            <div class="block-content block-content-full row">
                <div class="col-md-12">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input js-custom-file-input-enabled" id="example-file-input-custom" name="example-file-input-custom" data-toggle="custom-file-input">
                        <label class="custom-file-label" for="example-file-input-custom">Choose file</label>
                    </div>
                </div>
                <div class="col-md-12 row mt-3">
                    <div class="col-md-2">
                        <a class="block block-link-pop shadow" href="javascript:void(0)">
                            <div class="block-content block-content-full text-center">
                                <div class="p-20 mb-5">
                                    <i class="fa fa-3x fa-file text-gray"></i>
                                </div>
                                <p>
                                    KTP
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a class="block block-link-pop shadow" href="javascript:void(0)">
                            <div class="block-content block-content-full text-center">
                                <div class="p-20 mb-5">
                                    <i class="fa fa-3x fa-file text-gray"></i>
                                </div>
                                <p>
                                    KK
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a class="block block-link-pop shadow" href="javascript:void(0)">
                            <div class="block-content block-content-full text-center">
                                <div class="p-20 mb-5">
                                    <i class="fa fa-3x fa-file text-gray"></i>
                                </div>
                                <p>
                                    Ijazah
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a class="block block-link-pop shadow" href="javascript:void(0)">
                            <div class="block-content block-content-full text-center">
                                <div class="p-20 mb-5">
                                    <i class="fa fa-3x fa-file text-gray"></i>
                                </div>
                                <p>
                                    NPWP
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a class="block block-link-pop shadow" href="javascript:void(0)">
                            <div class="block-content block-content-full text-center">
                                <div class="p-20 mb-5">
                                    <i class="fa fa-3x fa-file text-gray"></i>
                                </div>
                                <p>
                                    CV
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a class="block block-link-pop shadow" href="javascript:void(0)">
                            <div class="block-content block-content-full text-center">
                                <div class="p-20 mb-5">
                                    <i class="fa fa-3x fa-file text-gray"></i>
                                </div>
                                <p>
                                    Foto
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>  
        </div>

        <button type="button" class="btn btn-primary btn-block">
            <i class="fa fa-save mr-5"></i>SAVE DATA
        </button>
    </div>
    
</main>

<?php include '../admin_layout/footer.php'; ?>