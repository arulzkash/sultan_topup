<?php

if ($this->session->has_userdata('user') != 1) {
    redirect('C_Admin/login');
}



?>


<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> ADD Payment Method</h4>
       
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-body">
                        <form method="POST" action="<?= base_url(); ?>C_Admin/aksi_edit_metode" enctype="multipart/form-data">
                        <input type="hidden" name="id_metode" value="<?= $metode['id_metode'] ?>">

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Photo</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="foto_metode" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Payment Method</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="basic-default-name" name="nama_metode" placeholder="Payment Method Name..." value="<?=$metode['nama_metode']?>" required />
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" value="upload" class="btn btn-primary">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
