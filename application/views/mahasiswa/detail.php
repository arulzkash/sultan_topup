<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Mahasiswa
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $mahasiswa['nama'] ?></h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary"><?= $mahasiswa['email'] ?></h6>
                    <p class="card-text"><?=$mahasiswa['nrp']?></p>
                    <p class="card-text"><?=$mahasiswa['nama_jurusan']?></p>
                    <a href="<?=base_url();?>c_mahasiswa" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>

