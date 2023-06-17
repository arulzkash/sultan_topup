<?php

if ($this->session->has_userdata('user') != 1) {
    redirect('C_Admin/login');
}



?>


<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Database Receipt</h4>

        <!-- Hoverable Table rows -->
        <div class="card">
            <h5 class="card-header"></h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Voucher Name</th>
                            <th>ID Game</th>
                            <th>Game Name</th>
                            <th>Time Purchase</th>
                            <th>Payment Method</th>
                            <th>Total Amount</th>

                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php foreach ($struk as $strk) : ?>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>#<?=$strk['id_struk']?></td>
                            <td> <strong><?=$strk['nama_voucher']?></strong></td>
                            <td><?=$strk['uid_game']?></td>
                            <td><?=$strk['nama_game']?></td>
                            <td><?=$strk['waktu']?></td>
                            <td><?=$strk['nama_metode']?></td>
                            <td>Rp<?=number_format($strk['total_amount'],0,"",".")?></td>
                            
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="<?= base_url(); ?>C_Admin/hapus_struk/<?= $strk['id_struk'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus struk?')"><i class="bx bx-trash me-1"></i> Delete</a>
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