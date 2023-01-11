<?php
$file = "card.json";
$dataAPI = File_get_contents($file);
$data = json_decode($dataAPI, True);
?>

<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div id="carItem" class="carousel-item active">
      <img src="img/1.jpg" class="d-block w-100" />
      <div class="caption d-none d-md-block">
        <h5>LOW STOCK ALERT!</h5>
        <p>Heading To The Beach</p>
      </div>
    </div>
    <div id="carItem" class="carousel-item">
      <img src="img/2.jpg" class="d-block w-100" />
      <div class="caption d-none d-md-block">
        <h5>CASH ON DELIVERY</h5>
        <p>No worries, cash on delivery are available at our marketplace</p>
      </div>
    </div>
    <div id="carItem" class="carousel-item">
      <img src="img/3.jpg" class="d-block w-100" />
      <div class="caption d-none d-md-block">
        <h5>WITH MORE COLOR</h5>
        <p>New Released, Available Now</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- AKHIR CAROUSEL -->


<div class="texty">
  <h1>New Arrival</h1>
  <p>New Product This Week</p>
</div>
<ul id="autoWidth" class="cs-hidden">
  <?php foreach ($data['card'] as $c) : ?>
    <li class="item-a" data-aos="flip-left" data-aos-delay="50">
      <div class="box">
        <div class="slide-img">
          <img src="img/<?= $c["gambar"] ?>" alt="1" />
          <div class="overlay">
            <a href="//<?= $c['link']; ?>" class="buy-btn">Buy Now</a>
          </div>
        </div>
        <div class="detail-box">
          <div class="type">
            <a href="#"><?= $c["nama"] ?></a>
            <a><?= $c["warna"] ?></a>
            <span>Droozle <?= $c["jenis"] ?></span>
          </div>
          <span class="harga">Rp.<?= $c["harga"] ?>,000</span>
        </div>
      </div>
    </li>
  <?php endforeach; ?>
</ul>

<section>
  <div class="container1">
    <h2>All Category</h2>
    <p class="text-product">New Product This Week</p>
    <div class="row g-0">
      <?php foreach ($prod as $p) : ?>
        <div class="col-md-3" style="padding: 15px;" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
          <div class="product-top">
            <img src="img/<?= $p["image"] ?>" />
            <div class="overlay1">
              <a href="//<?= $p['link']; ?>" class="buy-btn2">Buy Now</a>
            </div>
          </div>

          <div class="product-bottom text-center">
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <h3><?= $p["nama"] ?></h3>
            <p>Droozle <?= $p["tipe"] ?></p>
            <span class="harga">Rp. <?= $p["harga"] ?>,000</span>
          </div>
        </div>
      <?php endforeach ?>
    </div>

    <?= $pager->links('prod', 'pagerHome'); ?>
  </div>
</section>
<!-- AKHIR PRODUK -->
<?= $this->endSection(); ?>