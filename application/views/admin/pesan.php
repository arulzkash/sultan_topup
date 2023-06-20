<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Messages</h4>

        <!-- Periode Waktu -->
        <form action="" method="POST">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="start_date" class="form-label">Start Date</label>
                    <input type="date" class="form-control" id="start_date" name="start_date" required>
                </div>
                <div class="col-md-6">
                    <label for="end_date" class="form-label">End Date</label>
                    <input type="date" class="form-control" id="end_date" name="end_date" required>
                </div>
                <div class="col-md-12 mt-3">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </div>
        </form>

        <!-- Style variation -->
        <div class="row">
            <?php
            $no = 0;
            $start_date = isset($_POST['start_date']) ? $_POST['start_date'] : null;
            $end_date = isset($_POST['end_date']) ? $_POST['end_date'] : null;

            foreach ($pesan as $p) :
                // Filter pesan berdasarkan periode waktu
                $pesan_date = $p['tanggal_pesan'];
                if ( ($pesan_date >= $start_date && $pesan_date <= $end_date)) {
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
                        <div class="card bg-<?= $tipe ?> text-white mb-3">
                            <div class="card-header"><?= $p['nama_pengirim'] ?>, <br> <?= $p['email_pengirim'] ?>, <br> <?= $p['tanggal_pesan'] ?></div>
                            <div class="card-body">
                                <h5 class="card-title text-white"><?= $p['subjek_pesan'] ?></h5>
                                <p class="card-text"><?= $p['isi_pesan'] ?></p>
                            </div>
                        </div>
                    </div>
            <?php
                    $no++;
                }
            endforeach;

            if ($no == 0 && ($start_date !== null && $end_date !== null)) {
                echo "<div class='col-md-12'>No messages found within the selected period.</div>";
            }
            ?>
        </div>
    </div>
</div>
