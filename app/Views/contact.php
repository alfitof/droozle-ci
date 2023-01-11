<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div>
            <form action="" method="post">
                <h1 class="mt-4 mb-2 text-center">GET IN TOUCH</h1>
                <p style="margin-bottom:2px; font-size:14px;" class="text-center">Email: pamanalf@gmail.com</p>
                <p style="margin-bottom:20px; font-size:14px;" class="text-center">Address: Jln. Ciptomangunkusumo no 479, Ciamis, Jawa Barat.</p>
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert" style="margin-top:2%;"><?= session()->getFlashdata('pesan'); ?></div>
                <?php endif; ?>
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" autofocus>
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="pesan" class="col-sm-2 col-form-label">Message</label>
                    <div class="col-sm-10">
                        <textarea name="pesan" id="pesan" cols="100" rows="10" class="form-control"></textarea>
                    </div>
                </div>


            </form>
            <div class="row mb-2 text-center">
                <div>
                    <a href="/Pages/flashdata" type="submit" class="btn btn-outline-dark mt-4" name="submit">Submit</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>