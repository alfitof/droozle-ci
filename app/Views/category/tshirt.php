<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section>
    <div class="container1">
        <h2 class="mt-5 mb-3">Droozle T-shirt</h2>
        <div class="row g-0">
            <?php foreach ($prod as $p) : ?>
                <div class="col-md-3" style="padding: 15px;" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <div class="product-top">
                        <img src="/img/<?= $p["image"] ?>" />
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
    </div>
</section>
<?= $this->endSection(); ?>