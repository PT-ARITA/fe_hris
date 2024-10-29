<?php include '../layout/header.php'; ?>

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
                            <input type="number" class="form-control" name="" placeholder="0" value="0001">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">No. KTP <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="number" class="form-control" name="" placeholder="0" value="3323041010950003">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">No. KK <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="number" class="form-control" name="" placeholder="0" value="332304111256003">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Nama Lengkap <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="" placeholder="Nama Lengkap" value="Rifan Hardiyan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Tempat, Tanggal Lahir <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="" placeholder="Tempat Lahir" value="Temanggung">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="" value="10 Oktober 1995">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Nama Ibu Kandung</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="" placeholder="Perempuan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Jenis Kelamin <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <select class="form-control" name="">
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Golongan Darah</label>
                        <div class="col-md-12">
                            <select class="form-control" name="">
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
                            <input type="number" class="form-control" name="" placeholder="0" value="0">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-12">No. Handphone 1 <span class="text-danger">*</span></label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="" placeholder="0" value="081345946704">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-12">No. Handphone 2</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="" placeholder="0" value="0">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">No. Telepon</label>
                        <div class="col-md-12">
                            <input type="number" class="form-control" name="" placeholder="0" value="0">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Nama Lembaga Pendidikan</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="" placeholder="Nama Lembaga Pendidikan" value="Univ. Teknology Yogyakarta">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-12">Tingkat Pendidikan</label>
                                <div class="col-md-12">
                                    <select class="form-control" name="">
                                        <option value="D3/D4">D3/D4</option>
                                        <option value="SMA">SMA</option>
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
                                    <input type="text" class="form-control" name="" placeholder="Jurusan Pendidikan" value="Manajemen Informatika">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Email Pribadi</label>
                        <div class="col-md-12">
                            <input type="email" class="form-control" name="" value="rifan249@gmail.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Email Perusahaan</label>
                        <div class="col-md-12">
                            <input type="email" class="form-control" name="" value="rifan@arita.co.id">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Alamat KTP <span class="text-danger">*</span></label>
                        <div class="col-12">
                            <textarea class="form-control" name="" rows="5" placeholder="Alamat KTP">Link. Paramedis RT003/RW006 Jurang, Kec. Temanggung, Kab. Temanggung, Jawa Tengah</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-6">Alamat Domisili <span class="text-danger">*</span></label>
                        <div class="col-12">
                            <textarea class="form-control" name="" rows="5" placeholder="Alamat Domisili" disabled>Link. Paramedis RT003/RW006 Jurang, Kec. Temanggung, Kab. Temanggung, Jawa Tengah</textarea>
                            <label class="css-control css-control-sm css-control-primary css-switch">
                                <input type="checkbox" class="css-control-input" checked>
                                <span class="css-control-indicator"></span><span style="font-size:10px">Jika Sama Dengan Alamat KTP</span>
                            </label>
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
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-12">Divisi / Cabang <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <select class="form-control" name="">
                                <!-- <option value="">Please select</option> -->
                                <option value="HO - AIRA / Jakarta">HO - AIRA / Jakarta</option>
                                <option value="HO - AIRA / Jakarta">HO - AIRA / Jakarta</option>
                                <option value="HO - IAPS / Jakarta">HO - IAPS / Jakarta</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Status <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <select class="form-control" name="">
                                <!-- <option value="">Please select</option> -->
                                <option value="BEKERJA">BEKERJA</option>
                                <option value="RESIGN">RESIGN</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Status Karyawan<span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <select class="form-control" name="">
                                <!-- <option value="">Please select</option> -->
                                <option value="KONTRAK">KONTRAK</option>
                                <option value="TETAP">TETAP</option>
                                <option value="PKHL">PKHL</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-12">Jabatan Awal <span class="text-danger">*</span></label>
                                <div class="col-md-12">
                                    <select class="form-control" name="">
                                        <!-- <option value="">Please select</option> -->
                                        <option value="Staff IT">Staff IT</option>
                                        <option value="Kepala Gudang">Kepala Gudang</option>
                                        <option value="Diver">Diver</option>
                                        <option value="Logistik">Logistik</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-12">Jabatan Sekarang</label>
                                <div class="col-md-12">
                                    <select class="form-control" name="">
                                        <!-- <option value="">Please select</option> -->
                                        <option value="Staff IT">Staff IT</option>
                                        <option value="Kepala Gudang">Kepala Gudang</option>
                                        <option value="Diver">Diver</option>
                                        <option value="Logistik">Logistik</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Direcy / Indirect</label>
                        <div class="col-md-12">
                            <select class="form-control" name="">
                                <!-- <option value="">Please select</option> -->
                                <option value="DIRECT">DIRECT</option>
                                <option value="INDIRECT">INDIRECT</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Status Golongan</label>
                        <div class="col-md-12">
                            <select class="form-control" name="">
                                <!-- <option value="">Please select</option> -->
                                <option value="Staff">Staff</option>
                                <option value="Senior Staff">Senior Staff</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-12">Tgl Join</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="" placeholder="0" value="17 September 2024">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-12">Tgl Akhir Kontrak</label>
                                <div class="col-md-12">
                                    <input type="date" class="form-control" name="" placeholder="0" value="17 Desember 2024">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Masa Kerja</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="" value="3 Bulan" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">PKWT</label>
                        <div class="col-md-12">
                            <input type="number" class="form-control" name="" placeholder="0" value="1">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-12">Start</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="" value="17 September 2024">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-12">End</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="" value="17 Desember 2024">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-12">No. SK Tetap</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="" placeholder="0">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-12">Tgl SK Tetap</label>
                                <div class="col-md-12">
                                    <input type="date" class="form-control" name="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Status PTKP</label>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-control" name="">
                                        <option value="">Please select</option>
                                        <option value="K">K</option>
                                        <option value="TK">TK</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="" placeholder="0">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">No. Rekening A/N</label>
                        <div class="col-md-12">
                            <input type="number" class="form-control" name="" placeholder="0" value="Rifan Hardiyan">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-12">Nama Bank</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="" value="MANDIRI" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-12">No. Rekening</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="" placeholder="0" value="12345678">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">No. Jamsostek</label>
                        <div class="col-md-12">
                            <input type="number" class="form-control" name="" placeholder="0">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">No. BPJS Kesehatan</label>
                        <div class="col-md-12">
                            <input type="number" class="form-control" name="" placeholder="0">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Tanggal Resign</label>
                        <div class="col-md-12">
                            <input type="date" class="form-control" name="">
                        </div>
                    </div>
                    <div class="form-group row text-danger">
                        <label class="col-12"><b>Gaji Pokok</b></label>
                        <div class="col-md-12">
                            <b><input type="text" class="form-control" name="" value="100"></b>
                        </div>
                    </div>
                    <div class="form-group row text-danger">
                        <label class="col-12"><b>Tunjangan Tetap</b></label>
                        <div class="col-md-12">
                            <b><input type="text" class="form-control" name="" value="50"></b>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-primary btn-block">
            <i class="fa fa-save mr-5"></i>SAVE DATA
        </button>
    </div>
    
</main>

<?php include '../layout/footer.php'; ?>