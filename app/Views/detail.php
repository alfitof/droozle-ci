x`<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-4">Detail Product</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0" style="padding-left: 0.5rem;padding-right: 0.5rem;padding-bottom:0.5rem;">
                    <div class="col-md-4" style="margin: auto;">
                        <img src="/img/<?= $prod['image']; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 g-0">
                        <div class="card-body">
                            <h5 class="card-title"><?= $prod['nama']; ?></h5>
                            <p class="card-text" style="margin-top: 0;margin-bottom: 5px;"><small class="text-muted">Type : <?= $prod['tipe']; ?></small></p>
                            <p class="card-text" style="margin-top: 0;margin-bottom: 9px;"><small class="text-muted">Price : <?= $prod['harga']; ?>.000</small></p>
                            <div style="margin: 15px 0 15px 0;">
                                <a href="/Content/editProd/<?= $prod['slug']; ?>"><button class="btn btn-outline-dark">Edit</button></a>
                                <a href="/Content/hapusProd/<?= $prod['id']; ?>"><button class="btn btn-dark">Delete</button></a>
                            </div>
                            <a href="/table">Back to table product</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>