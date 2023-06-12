<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class="container">
    <div class="row g-0 mt-5">
        <img src="<?= base_url(); ?>/img/success.gif" style="width:28rem; z-index: -1; bottom: 25px; position: relative;" class="m-auto" />
    </div>
    <h2 class=" text-center">Payment Successfully!</h2>
    <button class="mt-5 btn btn-outline-dark" style=" display: block;
    margin: 0 auto;" onclick="location.href='/Content/clearCart'">Finish</button>
</div>

<?= $this->endSection(); ?>