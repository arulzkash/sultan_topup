<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Messages</h4>

        <!-- Style variation -->
        <div class="row">

            <?php
            $no = 0;
            foreach ($pesan as $p) :
                if ($no % 6 == 0) {
                    $tipe = "primary";
                } else if ($no % 6 == 1) {
                    $tipe = "secondary";
                } else if ($no % 6 == 2) {
                    $tipe = "success";
                } else if ($no % 6 == 3) {
                    $tipe = "danger";
                } else if ($no % 6 == 4) {
                    $tipe = "warning";
                } else if ($no % 6 == 5) {
                    $tipe = "info";
                }

            ?>
                <div class="col-md-6 col-xl-4">
                    <div class="card bg-<?=$tipe?> text-white mb-3">
                        <div class="card-header"><?=$p['nama_pengirim']?>, <br> <?=$p['email_pengirim']?></div>
                        <div class="card-body">
                            <h5 class="card-title text-white"><?=$p['subjek_pesan']?></h5>
                            <p class="card-text"><?=$p['isi_pesan']?></p>
                        </div>
                    </div>
                </div>
            <?php
                $no++;
            endforeach; ?>
            <!-- <div class="col-md-6 col-xl-4">
                <div class="card bg-secondary text-white mb-3">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title text-white">Secondary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card bg-success text-white mb-3">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title text-white">Success card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card bg-danger text-white mb-3">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title text-white">Danger card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card bg-warning text-white mb-3">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title text-white">Warning card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card bg-info text-white mb-3">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title text-white">Info card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up.</p>
                    </div>
                </div>
            </div> -->
        </div>

    </div>
</div>