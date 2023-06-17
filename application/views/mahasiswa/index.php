<div class="container">
    <?php if ($this->session->flashdata('flash')) {
        $flash = $this->session->flashdata('flash');
    } else if ($this->session->flashdata('flash2')) {
        $flash = $this->session->flashdata('flash2');
    } ?>

    <?php if ($this->session->flashData('flash') || $this->session->flashData('flash2')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data mahasiswa <strong>berhasil</strong> <?= $flash ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>c_mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Data Mahasiswa.." name="keyword">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <h3>Daftar Mahasiswa</h3>
        <?php if(empty($mahasiswa)) : ?>
            <div class="alert alert-danger" role="alert">
            Data Mahasiswa tidak ditemukan
            </div>
        <?php endif;?>
        <div class="col-md-6">
            <ul class="list-group">
                <?php foreach ($mahasiswa as $mhs) : ?>
                    <li class="list-group-item"><?= $mhs['nama'] ?>
                        <a href="<?= base_url(); ?>c_mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge text-bg-danger float-end" onclick="return confirm('yakin?');">Hapus</a>
                        <a href="<?= base_url(); ?>c_mahasiswa/ubah/<?= $mhs['id'] ?>" class="badge text-bg-success float-end">Ubah</a>
                        <a href="<?= base_url(); ?>c_mahasiswa/detail/<?= $mhs['id'] ?>" class="badge text-bg-primary float-end">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>