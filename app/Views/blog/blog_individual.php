<?php use App\Libraries\FechaHora; ;?>
  <div class="hero hero-single route bg-image" style="background-image: url(<?= base_url('assets/img/hero-bg.jpg')?>)">
    <div class="overlay-mf" style="background-color: #000000c4;"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="hero-title mb-4">Detalle de Blog</h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="<?= base_url()?>">Inicio</a>
            </li>
            <li class="breadcrumb-item">
              <a href="<?= base_url('#blog')?>">blog</a>
            </li>
            <li class="breadcrumb-item active"><?= $entrie[0]->blo_category ?></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <main id="main">

    <!-- ======= Blog Single Section ======= -->
    <section class="blog-wrapper sect-pt4" id="blog">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="post-box">
              <div class="post-thumb">
              
                <img src="<?= base_url('assets/img/'.$entrie[0]->blo_images)?>" class="img-fluid" alt="">
              </div>
              
              <div class="post-meta">
                <h1 class="article-title"><?= $entrie[0]->blo_title?></h1>
                
                <ul>
                  <li>
                    <span class="bi bi-person"></span>
                    <a href="#"><?= $entrie[0]->blo_author?></a>
                  </li>
                  <li>
                    <span class="bi bi-tag"></span>
                    <a href="#"><?= $entrie[0]->blo_category?></a>
                  </li>
                  <li>
                    <span class="bi bi-chat-left-text"></span>
                    <a href="#">14</a>
                  </li>
                  <li>
                    <span class="bi bi-clock"></span>
                    <a href="#"><?php 
                      $fecha = new FechaHora; 
                      echo $fecha->obtenerDiferenciacorta($entrie[0]->blo_date)?></a>
                  </li>
                </ul>
              </div>
              <div class="article-content">
                
                <p>
                  Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                  porta. Quisque velit
                  nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque
                  nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                  cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                  Nulla quis lorem ut libero malesuada feugiat.
                </p>
                <p>
                  Nulla porttitor accumsan tincidunt. Cras ultricies ligula sed magna dictum porta. Mauris blandit
                  aliquet elit, eget tincidunt
                  nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet,
                  consectetur adipiscing elit. Donec sollicitudin molestie malesuada.
                </p>
                <p>
                  Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Lorem ipsum dolor sit amet, consectetur
                  adipiscing elit. Praesent
                  sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem ipsum dolor sit amet,
                  consectetur adipiscing elit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at
                  sem. Donec rutrum congue leo eget malesuada.
                </p>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat.
                  Curabitur arcu erat,
                  accumsan id imperdiet et, porttitor at sem. Vivamus suscipit tortor eget felis porttitor
                  volutpat. Vivamus suscipit tortor eget felis porttitor volutpat. Quisque velit nisi, pretium
                  ut lacinia in, elementum id enim.
                </p>
                <blockquote class="blockquote">
                  <p class="mb-0">Un gran código lleva una gran responsalididad gio.</p>
                </blockquote>
                <p>
                  Nulla porttitor accumsan tincidunt. Cras ultricies ligula sed magna dictum porta. Mauris blandit
                  aliquet elit, eget tincidunt
                  nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet,
                  consectetur adipiscing elit. Donec sollicitudin molestie malesuada.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget-sidebar sidebar-search">
              <h5 class="sidebar-title">Buscar</h5>
              <div class="sidebar-content">
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Palabra clave" aria-label="Palabra clave">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary btn-search" type="button">
                        <span class="bi bi-search"></span>
                      </button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
            <div class="widget-sidebar">
              <h5 class="sidebar-title">Recientes</h5>
              <div class="sidebar-content">
                <ul class="list-sidebar">
                  <li>
                    <a href="#">Atque placeat maiores.</a>
                  </li>
                  <li>
                    <a href="#">Lorem ipsum dolor sit amet consectetur</a>
                  </li>
                  <li>
                    <a href="#">Nam quo autem exercitationem.</a>
                  </li>
                  <li>
                    <a href="#">Atque placeat maiores nam quo autem</a>
                  </li>
                  <li>
                    <a href="#">Nam quo autem exercitationem.</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="widget-sidebar">
              <h5 class="sidebar-title">Archivos</h5>
              <div class="sidebar-content">
                <ul class="list-sidebar">
                  <li>
                    <a href="#">September, 2017.</a>
                  </li>
                  <li>
                    <a href="#">April, 2017.</a>
                  </li>
                  <li>
                    <a href="#">Nam quo autem exercitationem.</a>
                  </li>
                  <li>
                    <a href="#">Atque placeat maiores nam quo autem</a>
                  </li>
                  <li>
                    <a href="#">Nam quo autem exercitationem.</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="widget-sidebar widget-tags">
              <h5 class="sidebar-title">Categorias</h5>
              <div class="sidebar-content">
                <ul>
                  <li>
                    <a href="#">Web.</a>
                  </li>
                  <li>
                    <a href="#">Design.</a>
                  </li>
                  <li>
                    <a href="#">Travel.</a>
                  </li>
                  <li>
                    <a href="#">Photoshop</a>
                  </li>
                  <li>
                    <a href="#">Corel Draw</a>
                  </li>
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->
