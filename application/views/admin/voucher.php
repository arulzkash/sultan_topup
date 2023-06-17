<?php

if ($this->session->has_userdata('user') != 1) {
    redirect('C_Admin/login');
}



?>


<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Database Voucher</h4>

        <!-- Hoverable Table rows -->
        <div class="card">
            <br>
            <div>
                <a href="<?= base_url(); ?>C_Admin/tambah_voucher">
                    <button style="margin-left: 20px;" type="button" class="btn btn-outline-primary">ADD Voucher</button>

                </a>
            </div>
            <br>

            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Voucher Name</th>
                            <th>Price</th>
                            <th>Game Name</th>

                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php foreach ($voucher as $vc) : ?>
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i><?= $vc['id_voucher'] ?></td>
                                <td> <strong><?= $vc['nama_voucher'] ?></strong></td>
                                <td>Rp<?=number_format($vc['harga_voucher'],0,"",".")?></td>
                                <td><?= $vc['nama_game'] ?></td>

                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="<?= base_url(); ?>C_Admin/edit_voucher/<?= $vc['id_voucher'] ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item" href="<?= base_url(); ?>C_Admin/hapus_voucher/<?= $vc['id_voucher'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus voucher?')"><i class="bx bx-trash me-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>


                </table>
            </div>
        </div>
        <!--/ Hoverable Table rows -->


    </div>
</div>

<?php if ($this->session->flashdata('success')) : ?>
    <!-- Tampilkan skrip alert jika flash data 'success' ada -->
    <script>
        // Menampilkan pesan alert sukses
        alert("<?php echo $this->session->flashdata('success'); ?>");
    </script>
<?php endif; ?>