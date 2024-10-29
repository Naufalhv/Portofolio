<?php
include 'layout/header.php';
include 'helpers/db_connection.php';

// Fetch biodata
$biodata_query = "SELECT * FROM biodata FIRST";
$biodata_result = $conn->query($biodata_query);
$biodata = $biodata_result->fetch_assoc();

// Count Usia
$tanggal_lahir = new DateTime($biodata['tanggal_lahir']);
$today = new DateTime();
$usia = $today->diff($tanggal_lahir)->y;

// Fetch skills
$skills_query = "SELECT * FROM skills ORDER BY proficiency DESC";
$skills_result = $conn->query($skills_query);
?>
<main>
  <!-- About Section -->
  <section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>About</h2>
      <p>Mahasiswa Informatika di Universitas Pembangunan Jaya dengan keahlian dalam video editing. Selain hobi bermain
        tenis lapangan, saya sangat tertarik pada pemrograman dan pembuatan konten. Saat ini, saya terbuka untuk peluang
        freelance yang dapat memperluas pengalaman dan keterampilan saya.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4 justify-content-center">
        <div class="col-lg-4">
          <img src="<?php echo base_url("assets/img/profile-img.png") ?>" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 content">
          <h2>Programmer &amp; Content Creator.</h2>
          <p class="fst-italic py-3">
            Sebagai programmer yang kreatif, saya menggabungkan keterampilan teknis dengan kemampuan bercerita. Saya
            berdedikasi untuk menghasilkan solusi inovatif dan konten menarik yang menginspirasi audiens dan memenuhi
            kebutuhan klien.
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li class="d-flex align-items-start"><i class="bi bi-chevron-right"></i> <strong>Tanggal Lahir:</strong>
                  <span><?= date("d F Y", strtotime($biodata['tanggal_lahir'])) ?></span>
                </li>
                <li class="d-flex align-items-start"><i class="bi bi-chevron-right"></i> <strong>Universitas:</strong>
                  <span><?= $biodata['universitas'] ?></span>
                </li>
                <li class="d-flex align-items-start"><i class="bi bi-chevron-right"></i> <strong>Nomor
                    Handphone:</strong>
                  <span><?= $biodata['nomor_handphone'] ?></span>
                </li>
                <li class="d-flex align-items-start"><i class="bi bi-chevron-right"></i> <strong>Alamat:</strong>
                  <span><?= $biodata['alamat'] ?></span>
                </li>

              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li class="d-flex align-items-start"><i class="bi bi-chevron-right"></i> <strong>Usia:</strong>
                  <span><?= $usia ?></span></li>
                <li class="d-flex align-items-start"><i class="bi bi-chevron-right"></i> <strong>Jurusan:</strong>
                  <span><?= $biodata['jurusan'] ?></span>
                </li>
                <li class="d-flex align-items-start"><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                  <span><?= $biodata['email'] ?></span>
                </li>
                <li class="d-flex align-items-start"><i class="bi bi-chevron-right"></i> <strong>Kota:</strong>
                  <span><?= $biodata['kota'] ?></span></li>
              </ul>
            </div>
          </div>
          <p class="py-3">
            Saya percaya bahwa inovasi adalah kunci untuk menciptakan dampak positif. Saya berkomitmen untuk memberikan
            solusi yang tidak hanya memenuhi
            ekspektasi, tetapi juga melampaui harapan klien. Saya selalu terbuka untuk kolaborasi dan tantangan baru
            yang dapat memperkaya pengalaman saya dalam dunia pemrograman dan konten kreatif.
          </p>
        </div>
      </div>

    </div>

  </section><!-- /About Section -->

  <!-- Stats Section -->
  <section id="stats" class="stats section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
          <i class="bi bi-emoji-smile"></i>
          <div class="stats-item">
            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Klien Puas</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
          <i class="bi bi-journal-richtext"></i>
          <div class="stats-item">
            <span data-purecounter-start="0" data-purecounter-end="51" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Proyek Selesai</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
          <i class="bi bi-headset"></i>
          <div class="stats-item">
            <span data-purecounter-start="0" data-purecounter-end="763" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Jam Dukungan</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
          <i class="bi bi-people"></i>
          <div class="stats-item">
            <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Tim Pekerja Keras</p>
          </div>
        </div><!-- End Stats Item -->

      </div>

    </div>

  </section><!-- /Stats Section -->

  <!-- Skills Section -->
  <section id="skills" class="skills section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Skills</h2>
      <p>Keahlian yang saya miliki mencakup berbagai bidang, mulai dari pemrograman, desain visual, hingga manajemen
        proyek.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row skills-content skills-animation">
        <div class="col-lg-6">
          <?php
          // Initialize an array to hold all skills
          $skills_array = [];

          // Fetch all skills into the array
          while ($skill = $skills_result->fetch_assoc()) {
            $skills_array[] = $skill;
          }

          // Calculate the number of skills
          $total_skills = count($skills_array);
          $half_skills = ceil($total_skills / 2); // Get half the number of skills

          // Output the first half of skills
          for ($i = 0; $i < $half_skills; $i++) {
            $skill = $skills_array[$i];
          ?>
          <div class="progress">
            <span class="skill"><span><?= $skill['skill_name'] ?></span> <i
                class="val"><?= $skill['proficiency'] ?>%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="<?= $skill['proficiency'] ?>"
                aria-valuemin="0" aria-valuemax="100" style="width: <?= $skill['proficiency'] ?>%;"></div>
            </div>
          </div><!-- End Skills Item -->
          <?php
          }
          ?>
        </div>

        <div class="col-lg-6">
          <?php
          // Output the second half of skills
          for ($i = $half_skills; $i < $total_skills; $i++) {
            $skill = $skills_array[$i];
          ?>
          <div class="progress">
            <span class="skill"><span><?= $skill['skill_name'] ?></span> <i
                class="val"><?= $skill['proficiency'] ?>%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="<?= $skill['proficiency'] ?>"
                aria-valuemin="0" aria-valuemax="100" style="width: <?= $skill['proficiency'] ?>%;"></div>
            </div>
          </div><!-- End Skills Item -->
          <?php
          }
          ?>
        </div>
      </div>

    </div>
  </section><!-- /Skills Section -->


</main>
<?php include 'layout/footer.php'; ?>