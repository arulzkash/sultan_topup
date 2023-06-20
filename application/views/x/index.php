<style>
  .search-form {
    margin-bottom: 0px;
  }

  .input-group {
    display: flex;
  }

  .form-control {
    flex: 1;
    border-radius: 5px 0 0 5px;
  }

  .btn-primary {
    border-radius: 0 5px 5px 0;
  }
</style>

<!-- ***** Main Banner Area Start ***** -->
<section class="section main-banner" id="top" data-section="section1">
  <video autoplay muted loop id="bg-video">
    <source src="<?= base_url(); ?>assetx/assets/images/game.mp4" type="video/mp4" />
  </video>

  <div class="video-overlay header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="caption">
            <h6>Hello Gaes</h6>
            <h2>Welcome to Sultan Top Up</h2>
            <p>Sultan Top-Up is a premier platform designed to cater to the needs of avid gamers who are looking to effortlessly recharge their game vouchers. Our website offers a seamless and efficient solution for visitors to select their preferred games, specify the desired credit amount, and complete the transaction through secure online payment methods.Trust Sultan Top-Up to provide a convenient and reliable platform for all your top-up voucher requirements..</p>
            <div class="main-button-red">
              <div class="scroll-to-section"><a href="#games">Find Games</a></div>
              <br><br><br><br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ***** Main Banner Area End ***** -->




<section class="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card-container">
          <div class="owl-service-item owl-carousel">
            <?php foreach ($games as $g) : ?>
              <a href="<?= base_url(); ?>C_Topup/transaksi/<?= $g['id_game'] ?>">
                <div class="nft freefire">
                  <div class='main'>
                    <img class='tokenImage' src="<?= base_url(); ?>assetx/assets/images/<?= $g['foto_game'] ?>" alt="NFT" />
                    <h2 class="game-title"><?= $g['nama_game'] ?></h2>
                  </div>
                </div>
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>






<section class="upcoming-meetings">
  <div class="container" id="games">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading">
          <h2>Buy here for the best price!</h2>
        </div>
      </div>

      <div class="col-lg-12">
        <div class="col-lg-12">
          <!-- Form Pencarian -->
          <form action="#games" method="GET" class="mb-3" id="searchForm">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search game by name" name="search">
              <button class="btn btn-primary" type="submit">Search</button>
            </div>
          </form>

          <div class="row">
            <?php foreach ($games as $game) :
              // Filter berdasarkan pencarian
              $search = isset($_GET['search']) ? $_GET['search'] : '';
              if (empty($search) || strpos(strtolower($game['nama_game']), strtolower($search)) !== false) :
            ?>

                <div class="col-lg-3">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>Disc <?= $game['discount'] ?>%</span>
                      </div>
                      <a href="<?= base_url(); ?>C_Topup/transaksi/<?= $game['id_game'] ?>"><img src="<?= base_url(); ?>assetx/assets/images/<?= $game['foto_game'] ?>" alt="Gambar game"></a>
                    </div>
                    <div class="down-content">
                      <a class="text-center" href="<?= base_url(); ?>C_Topup/transaksi/<?= $game['id_game'] ?>">
                        <h4><?= $game['nama_game'] ?></h4>
                      </a>
                    </div>
                  </div>
                </div>
            <?php
              endif;
            endforeach; ?>
          </div>
        </div>
      </div>
    </div>
</section>


<section class="apply-now" id="search">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="accordions is-first-expanded">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Find your receipt by ID Games</h3>
            </div>
            <div class="card-body">
              <form class="search-form" action="<?= base_url(); ?>C_TopUp/search" method="post">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Enter ID Games" name="uid_game">
                  <button type="submit" class="btn btn-primary">Search</button>
                </div>
              </form>
            </div>
          </div>

          <div class="search-results">
            <!-- Tampilkan hasil pencarian jika ada -->
            <?php if (!empty($struk)) : ?>
              <h4 class="fw-bold py-3 text-center" style="margin-bottom: 0px;"><span class="text-muted fw-light"></span> <?= $struk[0]['uid_game'] ?>'s Receipt</h4>

              <!-- Hoverable Table rows -->
              <div class="card">
                <h5 class="card-header"></h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Order ID</th>
                        <th>Voucher Name</th>
                        <th>Game Name</th>
                        <th>Time Purchase</th>
                        <th>Payment Method</th>
                        <th>Total Amount</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php foreach ($struk as $strk) : ?>
                        <tr>
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i>#<?= $strk['id_struk'] ?></td>
                          <td> <strong><?= $strk['nama_voucher'] ?></strong></td>
                          <td><?= $strk['nama_game'] ?></td>
                          <td><?= $strk['waktu'] ?></td>
                          <td><?= $strk['nama_metode'] ?></td>
                          <td>Rp<?= number_format($strk['total_amount'], 0, "", ".") ?></td>


                        </tr>
                      <?php endforeach; ?>
                    </tbody>


                  </table>
                </div>
              </div>
              <!--/ Hoverable Table rows -->
            <?php endif; ?>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>



<section class="contact-us" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 align-self-center">
        <div class="row">
          <div class="col-lg-12">
            <form id="contact" action="<?= base_url(); ?>C_Admin/aksi_pesan" method="post">
              <div class="row">
                <div class="col-lg-12">
                  <h2>Let's get in touch</h2>
                </div>
                <div class="col-lg-4">
                  <fieldset>
                    <input name="nama_pengirim" type="text" id="name" placeholder="YOURNAME...*" required="">
                  </fieldset>
                </div>
                <div class="col-lg-4">
                  <fieldset>
                    <input name="email_pengirim" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                  </fieldset>
                </div>
                <div class="col-lg-4">
                  <fieldset>
                    <input name="subjek_pesan" type="text" id="subject" placeholder="SUBJECT...*" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="isi_pesan" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..." required="" maxlength="200"></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button">SEND MESSAGE NOW</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="right-info">
          <ul>
            <li>
              <h6>Phone Number</h6>
              <span>010-020-0340</span>
            </li>
            <li>
              <h6>Email Address</h6>
              <span>sultan@top.up</span>
            </li>
            <li>
              <h6>Street Address</h6>
              <span>Gegerkalong</span>
            </li>
            <li>
              <h6>Website URL</h6>
              <span>sultantopup.com</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer">
    <p>Copyright © 2023 Kashidota Corporation. All rights reserved.

    </p>
  </div>
</section>

<?php if ($this->session->flashdata('success')) : ?>
  <!-- Tampilkan skrip alert jika flash data 'success' ada -->
  <script>
    // Menampilkan pesan alert sukses
    alert("<?php echo $this->session->flashdata('success'); ?>");
  </script>
<?php endif; ?>

<!-- Scripts -->






<!-- Bootstrap core JavaScript -->
<script src="<?= base_url(); ?>assetx/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>assetx/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

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


</body>



</html>