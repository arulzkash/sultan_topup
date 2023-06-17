<?php

if ($this->session->has_userdata('user') != 1) {
    redirect('C_Admin/login');
}



?>


<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Edit Voucher</h4>

        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-body">
                        <form method="POST" action="<?= base_url(); ?>C_Admin/aksi_edit_voucher">
                            <input type="hidden" name="id_voucher" value="<?=$voucher['id_voucher']?>">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Voucher Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="basic-default-name" name="nama_voucher" placeholder="Voucher Name..." required value="<?=$voucher['nama_voucher']?>"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-voucher">Price</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="basic-default-voucher" name="harga_voucher" placeholder="Voucher Price..." required value="<?=$voucher['harga_voucher']?>" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Game Name</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="id_game">
                                        <option selected>Choose Game </option>
                                        <?php foreach ($games as $game) :
                                            if($game['id_game'] == $voucher['id_game']) : ?>
                                                <option value="<?= $game['id_game'] ?>" selected><?= $game['nama_game'] ?></option>
                                            <?php else : ?>
                                                <option value="<?= $game['id_game'] ?>"><?= $game['nama_game'] ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                            </div>

                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" value="submit" class="btn btn-primary">Edit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>