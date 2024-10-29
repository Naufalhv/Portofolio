<?php
include 'layout/header.php';
include 'helpers/db_connection.php';

$service_query = "SELECT * FROM services";
$service_result = $conn->query($service_query);

$testimonial_query = "SELECT * FROM testimonials";
$testimonial_result = $conn->query($testimonial_query);

?>
<main>

  <!-- Services Section -->
  <section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Services</h2>
      <p>Berkomitmen memberikan layanan berkualitas, mulai dari pengembangan aplikasi hingga produksi konten visual.
        Dengan keahlian di bidang programming dan videography, saya siap membantu Anda mencapai hasil optimal sesuai
        kebutuhan bisnis atau proyek Anda.</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">
        <?php while ($service = $service_result->fetch_assoc()) : ?>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-<?= $service['color'] ?> position-relative">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5"
                    d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                  </path>
                </svg>
                <i class="bi <?= $service['icon'] ?>"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3><?= $service['title'] ?></h3>
              </a>
              <p><?= $service['description'] ?></p>
            </div>
          </div><!-- End Service Item -->
        <?php endwhile; ?>
      </div>

    </div>

  </section><!-- /Services Section -->

  <!-- Testimonials Section -->
  <section id="testimonials" class="testimonials section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Testimonials</h2>
      <p>Testimoni dari para klien yang puas dengan layanan kami. Inilah pengalaman mereka bekerja bersama tim kami
        untuk mewujudkan proyek mereka.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            }
          }
        </script>
        <div class="swiper-wrapper">
          <?php while ($testimonial = $testimonial_result->fetch_assoc()) : ?>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span><?= $testimonial['testimonial'] ?></span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3><?= $testimonial['name'] ?></h3>
                      <h4><?= $testimonial['role'] ?></h4>
                      <div class="stars">
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                          if ($i <= $testimonial['rating']) {
                            echo '<i class="bi bi-star-fill"></i>';
                          } else {
                            echo '<i class="bi bi-star"></i>';
                          }
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="<?php echo base_url($testimonial['image_path']) ?>" class="img-fluid testimonial-img"
                      alt="">
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile; ?>

          <!-- <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="row gy-4 justify-content-center">
                <div class="col-lg-6">
                  <div class="testimonial-content">
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Desain UI/UX yang dihasilkan sangat menarik dan mudah digunakan, membuat aplikasi kami
                        terlihat lebih profesional dan menarik bagi pengguna.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <h3>Maria Anggraeni</h3>
                    <h4>Designer</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 text-center">
                  <img src="<?php echo base_url('assets/img/testimonials/2.jpg') ?>" class="img-fluid testimonial-img"
                    alt="">
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="row gy-4 justify-content-center">
                <div class="col-lg-6">
                  <div class="testimonial-content">
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Aplikasi mobile yang mereka buat sangat user-friendly dan membantu kami menjangkau lebih
                        banyak pengguna. Terima kasih banyak atas kerjasamanya!</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <h3>Rizky Kurniawan</h3>
                    <h4>Store Owner</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 text-center">
                  <img src="<?php echo base_url('assets/img/testimonials/3.jpg') ?>" class="img-fluid testimonial-img"
                    alt="">
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="row gy-4 justify-content-center">
                <div class="col-lg-6">
                  <div class="testimonial-content">
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Hasil video editing mereka luar biasa! Konten yang dihasilkan sangat berkualitas dan
                        berhasil meningkatkan engagement di sosial media kami.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <h3>Dewi Rahmawati</h3>
                    <h4>Entrepreneur</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 text-center">
                  <img src="<?php echo base_url('assets/img/testimonials/4.jpg') ?>" class="img-fluid testimonial-img"
                    alt="">
                </div>
              </div>
            </div>
          </div> -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section><!-- /Testimonials Section -->
</main>
<?php include 'layout/footer.php'; ?>