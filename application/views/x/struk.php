<Style>
    .payment-receipt {
        background-color: #000;
        color: #fff;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
    }

    .receipt-details {
        margin-bottom: 20px;
    }

    .detail {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
    }

    .label {
        font-weight: bold;
    }

    .thank-you {
        font-size: 18px;
    }

    .thank-you p {
        color: white;
    }

    @keyframes colorChange {
        0% {
            color: rgb(255, 0, 0);
            font-weight: normal;
        }

        50% {
            color: rgb(0, 255, 0);
            font-weight: bold;
        }

        100% {
            color: rgb(0, 0, 255);
            font-weight: normal;
        }
    }

    .button-85 {
        padding: 0.6em 2em;
        border: none;
        outline: none;
        color: rgb(255, 255, 255);
        background: #111;
        cursor: pointer;
        position: relative;
        z-index: 0;
        border-radius: 10px;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;

    }

    .button-85:before {
        content: "";
        background: linear-gradient(45deg,
                #ff0000,
                #ff7300,
                #fffb00,
                #48ff00,
                #00ffd5,
                #002bff,
                #7a00ff,
                #ff00c8,
                #ff0000);
        position: absolute;
        top: -2px;
        left: -2px;
        background-size: 400%;
        z-index: -1;
        filter: blur(5px);
        -webkit-filter: blur(5px);
        width: calc(100% + 4px);
        height: calc(100% + 4px);
        animation: glowing-button-85 20s linear infinite;
        transition: opacity 0.3s ease-in-out;
        border-radius: 10px;
    }

    @keyframes glowing-button-85 {
        0% {
            background-position: 0 0;
        }

        50% {
            background-position: 400% 0;
        }

        100% {
            background-position: 0 0;
        }
    }

    .button-85:after {
        z-index: -1;
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: #222;
        left: 0;
        top: 0;
        border-radius: 10px;
    }
</Style>

<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 style="color: white;">Sultan Top Up</h4>
                <h2>Best Site for Top Up Your Games</h2>
            </div>
        </div>
    </div>
</section>

<section class="meetings-page" id="meetings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="meeting-single-item">
                            <div class="thumb">
                                <div class="price">
                                    <span>Discount <?=$game['discount']?>%</span>
                                </div>
                                <a href="#"><img src="<?= base_url(); ?>assetx/assets/images/<?= $all['foto_game'] ?>" alt=""></a>
                            </div>
                            <div class="down-content">
                                <?php if ($this->session->flashData('flash')) :
                                    $flash = $this->session->flashdata('flash'); ?>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                Thanks! You have been <strong>successfully</strong> <?= $flash ?> this voucher!
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <a href="#">
                                    <h4 class="pb-3">Payment Receipt <?= $all['nama_game'] ?></h4>
                                </a>

                                <div class="payment-receipt button-85">
                                    <br>
                                    <div class="receipt-details">
                                        <div class="detail">
                                            <span class="label">Order ID:</span>
                                            <span class="value">#<?= $all['id_struk'] ?></span>
                                        </div>
                                        <div class="detail">
                                            <span class="label">Voucher Name:</span>
                                            <span class="value"><?= $all['nama_voucher'] ?></span>
                                        </div>
                                        <div class="detail">
                                            <span class="label">ID Game:</span>
                                            <span class="value"><?= $all['uid_game'] ?></span>
                                        </div>
                                        <div class="detail">
                                            <span class="label">Time Purchase:</span>
                                            <span class="value"><?= $all['waktu'] ?></span>
                                        </div>
                                        <div class="detail">
                                            <span class="label">Payment Method:</span>
                                            <span class="value"><?= $all['nama_metode'] ?></span>
                                        </div>
                                        <div class="detail">
                                            <span class="label">Total Amount:</span>
                                            <span class="value">Rp<?=number_format($all['total_amount'],0,"",".")?></span>
                                        </div>
                                    </div>
                                    <div class="thank-you">
                                        <p style="color: white;">Thank you for your payment!</p>
                                        <p style="color: white;">Your order has been processed successfully.</p>
                                    </div>

                                </div>

                                




                            </div>


                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="main-button-red">
                        <a href="<?= base_url(); ?>">Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="footer">
        <p>Copyright © 2023 Kashidota Corporation. All rights reserved.

        </p>
    </div>
</section>


<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="<?= base_url() ?>assetx/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assetx/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?= base_url(); ?>assetx/assets/js/isotope.min.js"></script>
<script src="<?= base_url(); ?>assetx/assets/js/owl-carousel.js"></script>
<script src="<?= base_url(); ?>assetx/assets/js/lightbox.js"></script>
<script src="<?= base_url(); ?>assetx/assets/js/tabs.js"></script>
<script src="<?= base_url(); ?>assetx/assets/js/video.js"></script>
<script src="<?= base_url(); ?>assetx/assets/js/slick-slider.js"></script>
<script src="<?= base_url(); ?>assetx/assets/js/custom.js"></script>
<script>
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
        var
            direction = section.replace(/#/, ''),
            reqSection = $('.section').filter('[data-section="' + direction + '"]'),
            reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
            $('body, html').animate({
                    scrollTop: reqSectionPos
                },
                800);
        } else {
            $('body, html').scrollTop(reqSectionPos);
        }

    };

    var checkSection = function checkSection() {
        $('.section').each(function() {
            var
                $this = $(this),
                topEdge = $this.offset().top - 80,
                bottomEdge = topEdge + $this.height(),
                wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
                var
                    currentId = $this.data('section'),
                    reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                reqLink.closest('li').addClass('active').
                siblings().removeClass('active');
            }
        });
    };

    $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
        e.preventDefault();
        showSection($(this).attr('href'), true);
    });

    $(window).scroll(function() {
        checkSection();
    });
</script>

<?php if ($this->session->flashdata('success')) : ?>
    <!-- Tampilkan skrip alert jika flash data 'success' ada -->
    <script>
        // Menampilkan pesan alert sukses
        alert("<?php echo $this->session->flashdata('success'); ?>");
    </script>
<?php endif; ?>

</body>


</body>

</html>