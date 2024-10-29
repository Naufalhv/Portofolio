<?php
include 'layout/header.php';
include 'helpers/db_connection.php';

// Fetch biodata
$biodata_query = "SELECT alamat, kota, nomor_handphone, email FROM biodata FIRST";
$biodata_result = $conn->query($biodata_query);
$biodata = $biodata_result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Store the data
  if (storeContactData($name, $email, $subject, $message)) {
    echo "<script>alert('Pesan sudah terkirim. Terima Kasih!');</script>";
  } else {
    echo "<script>alert('Terjadi kesalahan, coba lagi nanti.');</script>";
  }

  header("Location: " . $_SERVER['PHP_SELF']);
  exit;
}
?>

<main>

  <!-- Contact Section -->
  <section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Contact</h2>
      <p>Hubungi saya melalui kontak berikut untuk diskusi proyek atau kolaborasi lebih lanjut</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-4">
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h3>Alamat</h3>
              <p><?= $biodata['alamat'] ?>, <?= $biodata['kota'] ?></p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-telephone flex-shrink-0"></i>
            <div>
              <h3>No. Handphone</h3>
              <p><?= $biodata['nomor_handphone'] ?></p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3>Email</h3>
              <p><?= $biodata['email'] ?></p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="col-lg-8">
          <form id="contactForm" action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
            data-aos-delay="200">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Nama Anda" required="">
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Email Anda" required="">
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Judul" required="">
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required=""></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Pesan sudah terkirim. Terima Kasih!</div>

                <button type="submit">Kirim Pesan</button>
              </div>

            </div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section><!-- /Contact Section -->

</main>

<?php include 'layout/footer.php'; ?>