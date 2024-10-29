<?php include 'layout/header.php'; ?>
<?php include 'helpers/db_connection.php'; ?>

<main>
  <!-- Portfolio Section -->
  <section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Portfolio</h2>
      <p>Berbagai pengalaman dalam bekerja secara profesional, proyek programming, dan karya audio visual yang telah
        saya kerjakan</p>
    </div><!-- End Section Title -->

    <div class="container">
      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

        <!-- Portfolio Filters -->
        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-software">Software</li>
          <li data-filter=".filter-video">Videografi</li>
          <li data-filter=".filter-work">Kerja</li>
        </ul><!-- End Portfolio Filters -->

        <!-- Portfolio Items -->
        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
          <?php
          // Fetch all portfolio items
          $portfolio_query = "SELECT * FROM portfolio ORDER BY id DESC";
          $portfolio_result = $conn->query($portfolio_query);

          while ($portfolio = $portfolio_result->fetch_assoc()) :
            // Determine the CSS class for filter
            $filter_class = "filter-" . strtolower($portfolio['category']);
          ?>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item <?= $filter_class ?>">
              <img src="<?= $portfolio['image_url'] ?>" class="img-fluid" alt="<?= $portfolio['title'] ?>">
              <div class="portfolio-info">
                <h4><?= $portfolio['title'] ?></h4>
                <p><?= $portfolio['description'] ?></p>
                <a href="<?= $portfolio['image_url'] ?>" title="<?= $portfolio['title'] ?>"
                  data-gallery="<?= $portfolio['gallery_category'] ?>" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
          <?php endwhile; ?>
        </div><!-- End Portfolio Container -->

      </div>
    </div>

  </section><!-- /Portfolio Section -->
</main>
<?php include 'layout/footer.php'; ?>