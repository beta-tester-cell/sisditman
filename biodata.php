<?php include('header.php') ?>
<div class="content">
    <div class="container">
        <div class="pb-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h5>Biodata Auditor</h5>
                    <a href="#" class="btn btn-primary btn-link">Update Biodata</a>
                </div>
                <div class="d-flex flex-change">
                    <div class="form-mr-2">
                        <div class="form-inputs grid-gap-1">
                            <label>Nomor Internal Auditor (NIA)</label>
                            <input type="text" name="id_mahasiswa" placeholder="ID Mahasiswa">
                        </div>
                        <div class="form-inputs grid-gap-1">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-inputs grid-gap-1">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir">
                        </div>
                        <div class="form-inputs grid-gap-1">
                            <label>Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" placeholder="Tempat Lahir">
                        </div>
                        <div class="form-inputs grid-gap-1">
                            <label>Jenis Kelamin</label>
                            <div class="form-group">
                                <label class="radio-button"> Laki-laki
                                    <input type="radio" value="Laki-laki">
                                    <span class="checkmark"></span>
                                </label>

                                <label class="radio-button"> Perempuan
                                    <input type="radio" value="Perempuan">
                                    <span class="checkmark"></span>
                                </label>

                            </div>
                        </div>
                        <div class="form-inputs grid-gap-1">
                            <label>Agama</label>
                            <select name="agama" id="agama">
                                <option value="0">-- Pilih Agama --</option>

                                <option value="islam">Islam</option>

                                <option value="kristen">Kristen</option>

                                <option value="katolik">Katolik</option>

                                <option value="hindu">Hindu</option>

                                <option value="budha">Budha</option>

                            </select>
                        </div>
                        <div class="form-inputs grid-gap-1">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" rows="5"></textarea>
                        </div>
                        <div class="form-inputs grid-gap-1">
                            <label for="email">Email</label>
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-inputs grid-gap-1">
                            <label for="email">No.WhatsApp</label>
                            <input type="text" name="no_wa" placeholder="No. WhatsApp">
                        </div>
                    </div>
                    <div class="form-img">
                        <img src="theme/img/avatar02.png" alt="" id="photo">
                        <input type="file" name="img_mahasiswa" id="file">
                        <label for="file" id="uploadBtn"><i class="fa fa-camera"></i></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>