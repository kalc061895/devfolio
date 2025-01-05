<div class="hero hero-single route bg-image" style="background-image: url('<?=base_url('assets/img/hero-bg.jpg')?>')">
    <div class="overlay-mf" style="background-color: #000000c4;"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="hero-title mb-4"><?= $project[0]->pro_name ?> </h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="<?=base_url()?>">Inicio</a>
            </li>
            <li class="breadcrumb-item active"><?= $project[0]->pro_category ?></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
<main id="main">
  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <?php 
                $images = explode(',',$project[0]->pro_images)
              ?>
              <?php foreach ($images as $img) : ?>
                <div class="swiper-slide">
                  <img src="<?= base_url('assets/img/'.$img)?>" alt="">
                </div>
              <?php endforeach ?>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>Informacion de Proyectos</h3>
            <ul>
              <li><strong>Categoria</strong>: <?= $project[0]->pro_category ?></li>
              <li><strong>Cliente</strong>: <?= $project[0]->pro_client?></li>
              <li><strong>Fecha de Creación</strong>: <?= date("d M Y",strtotime($project[0]->pro_date))?></li>
              <li><strong>Probar Demo</strong>: <a class='btn btn-primary btn-sm' href="<?= base_url($project[0]->pro_link)?>" target="_blank">Abrir Demo <i class="bi bi-arrow-up-right"></i></a></li>
              <li><strong>Video Instructivo</strong>: <a class='btn btn-danger btn-sm btn-rounded' href="<?= base_url($project[0]->pro_video)?>" target="_blank"> <i class="bi bi-youtube"></i> Abrir</a></li>
            </ul>
          </div>
          <div class="portfolio-description">
            <h2>Detalles del Proyeto</h2>
            <p>
              <?= $project[0]->pro_description?>
            </p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Details Section -->
</main>