<?php
$discount = $game['discount'] / 100;
?>

<style>
  .link-to-page {
    position: fixed;
    top: 30px;
    right: 30px;
    z-index: 20000;
    cursor: pointer;
    width: 50px;
  }

  .link-to-page img {
    width: 100%;
    height: auto;
    display: block;
  }

  .heading-page h4 {
    font-family: "Arial", sans-serif;
    /* Ganti dengan font yang diinginkan */
    font-size: 18px;
    font-weight: bold;
    color: #ffffff;
    /* Warna teks putih */
    margin-bottom: 10px;
  }

  .heading-page h2 {
    font-family: "Helvetica", sans-serif;
    /* Ganti dengan font yang diinginkan */
    font-size: 36px;
    font-weight: bold;
    color: #ffffff;
    /* Warna teks putih */
  }

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

  .discount {
    color: red;
  }
</style>

<!-- <?php var_dump($id_terakhir); ?> -->


<section class="heading-page header-text" id="top">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h4>Sultan Top Up</h4>
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
                  <span>Discount <?= $game['discount'] ?>%</span>
                </div>
                <a href="#"><img src="<?= base_url(); ?>assetx/assets/images/<?= $game['foto_game'] ?>" alt=""></a>
              </div>
              <div class="down-content">
                <a href="#">
                  <h4>Verifikasi <?= $game['nama_game'] ?></h4>
                </a>
                <p class="text-justify">Discover a wide range of payment methods available to purchase game vouchers for your favorite game. Choose from various secure and convenient payment options to enhance your gaming experience. Whether you're into <span class="text-secondary"><?= $game['nama_game'] ?></span> or any other popular game, we've got you covered. Select your preferred payment method and dive into a world of endless gaming possibilities. Enjoy seamless transactions and hassle-free top-ups for an immersive gaming journey. Don't wait any longer! Explore our payment methods now and power up your gaming adventure.</p>
                <hr>

                <?php if ($pembayaran['status_pembayaran'] == 0) : ?>
                  <form method="post" action="<?= base_url(); ?>/C_Topup/aksiVerifikasi" enctype="multipart/form-data">


                    <div class="form-row">
                      <input type="hidden" name="id_game" value="<?= $game['id_game'] ?>">
                      <input type="hidden" name="id_struk" value="<?= $all['id_struk'] ?>">
                      <input type="hidden" name="id_pembayaran" value="<?= $all['id_pembayaran'] ?>">
                      <div class="form-group">
                        <label class=" col-form-label">Upload Bukti Pembayaran</label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control" require name="foto_verifikasi" required />
                        </div>
                      </div>

                      <div class="form-group">

                        <!-- <button class="float-end mt-3" type="submit" >Pay Now</button> -->
                        <button class="button-85 float-end mt-3" type="submit">Send</button>
                        <br><br>
                      </div>



                    </div>





                  </form>
                <?php elseif ($pembayaran['status_pembayaran'] == 1) : ?>
                  <p>Menunggu verifikasi</p>
                <?php else : ?>
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
                        <span class="value">Rp<?= number_format($all['total_amount'], 0, "", ".") ?></span>
                      </div>
                    </div>
                    <div class="thank-you">
                      <p style="color: white;">Thank you for your payment!</p>
                      <p style="color: white;">Your order has been processed successfully.</p>
                    </div>

                  </div>
                <?php endif; ?>
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

<?php if ($this->session->flashdata('upload')) : ?>
    <!-- Tampilkan skrip alert jika flash data 'upload' ada -->
    <script>
        // Menampilkan pesan alert sukses
        alert("<?php echo $this->session->flashdata('upload'); ?>");
    </script>
<?php endif; ?>

<?php if ($this->session->flashdata('verifikasi')) : ?>
    <!-- Tampilkan skrip alert jika flash data 'verifikasi' ada -->
    <script>
        // Menampilkan pesan alert sukses
        alert("<?php echo $this->session->flashdata('verifikasi'); ?>");
    </script>
<?php endif; ?>

<?php if ($this->session->flashdata('selesai')) : ?>
    <!-- Tampilkan skrip alert jika flash data 'selesai' ada -->
    <script>
        // Menampilkan pesan alert sukses
        alert("<?php echo $this->session->flashdata('selesai'); ?>");
    </script>
<?php endif; ?>
</body>


</body>

</html>