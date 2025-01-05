<?php

use App\Libraries\FechaHora; ?>
<style>
 .boton-whatsapp {
  background-color: transparent;
  border: none;
  border-radius: 10px;
  color: #ffffff;
  cursor: pointer;
  display: inline-block;
  font-size: 16px;
  font-weight: bold;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  transition: 0.3s;
}

.boton-whatsapp:hover {
  background-color: rgba(0, 0, 0, 0.5);
  transform: scale(1.1);
}

.icono-whatsapp {
  display: inline-block;
  font-size: 24px;
  margin-right: 5px;
  transition: 0.3s;
}

.texto-whatsapp {
  display: none;
  opacity: 0;
  transition: 0.3s;
}

.boton-whatsapp:hover .texto-whatsapp {
  display: inline-block;
  opacity: 1;
}

</style>
<!-- ======= Hero Section ======= -->
<div id="hero" class="hero route bg-image" style="background-image: url(<?= base_url('assets/img/hero-bg.jpg') ?>)">
  <div class="overlay-itro"></div>
  <div class="hero-content display-table">
    <div class="table-cell">
      <div class="container">
        <!--<p class="display-6 color-d">Hello, world!</p>-->
        <h1 class="hero-title mb-4">Soy KEVIN LARUTA</h1>
        <p class="hero-subtitle"><span class="typed" data-typed-items="Ingeniero de Sistemas, Desarrollador Web, Freelancer, Bloguero"></span></p>
        <p class="pt-3">
          <a href="https://api.whatsapp.com/send?phone=935316849&text=Hola%20Quillasoftware,%20me%20interesa" target="_blank">
            <button class="boton-whatsapp">
              <span class="icono-whatsapp"><i class="bi bi-whatsapp"></i></span>
              <span class="texto-whatsapp">Hola...</span>
            </button>
          </a>
        </p>
      </div>
    </div>
  </div>
</div><!-- End Hero Section -->

<main id="main">

  <!-- ======= Portfolio Section ======= -->
  <section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Portafolio de Aplicativos
            </h3>
            <p class="subtitle-a">
              Algunos aplicativos web desarrollados para empresas y por diversión
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php if ($projects) : ?>
          <?php foreach ($projects as $pro) : ?>
            <?php $pro->images = explode(',', $pro->images); ?>
            <div class="col-md-4">
              <div class="work-box">
                <a href="<?= base_url('assets/img/' . $pro->images[0]) ?>" data-gallery="portfolioGallery" class="portfolio-lightbox">
                  <div class="work-img">
                    <?php $img = explode(',', $pro->images[0]); ?>
                    <img src="<?= base_url('assets/img/' . $img[0]) ?>" alt="" class="img-fluid">
                  </div>
                </a>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-8">
                      <h2 class="w-title"><?= $pro->title ?></h2>
                      <div class="w-more">
                        <span class="w-ctegory"><?= $pro->category ?></span> / <span class="w-date"><?= date("d M. Y", strtotime($pro->date_create)) ?></span>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="w-like">
                        <a href="<?= base_url('/proyectos/showProject/' . $pro->ide) ?>"> <span class="bi bi-plus-circle"></span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        <?php endif ?>


      </div>
    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Blog
            </h3>
            <p class="subtitle-a">
              Algunas publicaciones sobre desarrollo y de interes.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php if ($entries) : ?>
          <?php foreach ($entries as $blog) : ?>
            <div class="col-md-4">
              <div class="card card-blog">
                <div class="card-img">
                  <?php $img = explode(',', $pro->images[0]); ?>
                  <a href="<?= site_url('blog/showEntrie/' . $blog->ide) ?>"><img src="<?= base_url('assets/img/' . $img[0]) ?>" alt="" class="img-fluid"></a>
                </div>
                <div class="card-body">
                  <div class="card-category-box">
                    <div class="card-category">
                      <h6 class="category"><?= $blog->category ?></h6>
                    </div>
                  </div>
                  <h3 class="card-title"><a href="<?= site_url('blog/showEntrie/' . $blog->ide) ?>"><?= $blog->title ?></a></h3>
                  <p class="card-description">
                    <?= $blog->resume ?>...
                  </p>
                </div>
                <div class="card-footer">
                  <div class="post-author">
                    <a href="#">
                      <img src="<?= base_url('assets/img/testimonial-2.jpg') ?>" alt="" class="avatar rounded-circle">
                      <span class="author"><?= $blog->author ?></span>
                    </a>
                  </div>
                  <div class="post-date">
                    <span class="bi bi-clock"></span> <?php

                                                      $fecha = new FechaHora();
                                                      echo $fecha->obtenerDiferenciaCorta($blog->date_create) ?>
                  </div>
                </div>
              </div>
            </div>

          <?php endforeach ?>
        <?php endif ?>

      </div>
    </div>
  </section><!-- End Blog Section -->

  <section id="contact" class="paralax-mf footer-paralax bg-dark sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Escribenos tu consulta
                    </h5>
                  </div>
                  <div>
                    <form action="<?= base_url('Home/') ?>" method="post" role="form" class="php-email-form">
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="tu nombre" required="">
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control" name="correo" id="correo" placeholder="tu correo electronico" required="">
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" class="form-control" name="asunto" id="asunto" placeholder="Asunto" required="">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <textarea class="form-control" name="mensaje" rows="5" placeholder="¿cuál es tu mensaje?" required=""></textarea>
                          </div>
                        </div>
                        <div class="col-md-12 text-center my-3">
                          <div class="loading">Enviando</div>
                          <div class="error-message"></div>
                          <div class="sent-message">Tu mensaje fue enviado, recibiras un correo con la respueta a tu mensaje muy pronto! </div>
                        </div>
                        <div class="col-md-12 text-center">
                          <button type="submit" class="button button-a button-big button-rouded">Enviar Mesaje</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      QuillaSoftware
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                      Empresa desarrolladora de software a la medida, para empresas grandes y pequeñas, para personas que esten iniciando un negocio.
                      ¿tienes alguna consulta, duda, o idea de proyecto? contactanos:
                    </p>
                    <ul class="list-ico">
                      <li><span class="bi bi-geo-alt"></span> Juliaca, Jr. Cajamarca 224</li>
                      <li><span class="bi bi-phone"></span> (+051) 935316849</li>
                      <li><span class="bi bi-envelope"></span> ventas@quillasoftware.com</li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href=""><span class="ico-circle"><i class="bi bi-facebook"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="bi bi-instagram"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="bi bi-twitter"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="bi bi-linkedin"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>