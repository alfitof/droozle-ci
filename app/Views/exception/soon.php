<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h2 class="mt-5 text-center">Page Coming Soon 😉</h2>
    <div class="row g-0">
        <img src="<?= base_url(); ?>/img/not_found.gif" style="width:28rem; z-index: -1; bottom: 25px; position: relative;" class="m-auto" />
    </div>
</div>
<?= $this->endSection(); ?>