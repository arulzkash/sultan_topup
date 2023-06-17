<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <!-- <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    <?php endif; ?> -->

                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <div class="form-text text-danger"><?=form_error('nama')?></div>
                        </div>
                        <div class="form-group">
                            <label for="nrp" class="form-label">Nrp</label>
                            <input type="text" class="form-control" id="nrp" name="nrp">
                            <div class="form-text text-danger"><?=form_error('nrp')?></div>

                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                            <div class="form-text text-danger"><?=form_error('email')?></div>

                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" aria-label="Default select example" name="jurusan">
                                <?php foreach ($jurusan as $jrs) : ?>
                                    <option value=<?= $jrs['id_jurusan'] ?>><?= $jrs['nama_jurusan'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <br>
                        <button type="submit" name="tambah" class="btn btn-primary float-end">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>