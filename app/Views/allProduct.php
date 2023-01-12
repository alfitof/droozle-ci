<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section>
    <div class="container1" style="margin-top: 5rem;">
        <h2>All Product</h2>
        <?php if (session()->getFlashdata('pesan')) { ?>
            <div class="alert alert-success" role="alert" style="margin-top:2%; width:91%; margin:auto;"><?= session()->getFlashdata('pesan'); ?></div>
        <?php } ?>
        <div class="row g-0 mt-5">
            <?php foreach ($prod as $p) : ?>
                <div class="col-md-3" style="padding: 15px;" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <?php
                    echo form_open('Content/addCart');
                    echo form_hidden('id', $p['id']);
                    echo form_hidden('price', $p['harga']);
                    echo form_hidden('name', $p['nama']);
                    echo form_hidden('tipe', $p['tipe']);
                    echo form_hidden('gambar', $p['image']);
                    ?>
                    <div class="product-top">
                        <img src="img/<?= $p["image"] ?>" />
                        <div class="overlay1">
                            <button class="buy-btn2">Buy Now</button>
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

                    <?php echo form_close(); ?>
                </div>
            <?php endforeach ?>
        </div>

    </div>
</section>

<?= $this->endSection(); ?>