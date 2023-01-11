<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col">
      <h1 style="margin-top:1%;">Daftar Produk</h1>
      <button class="btn btn-outline-dark" style="margin-top:1%;" onclick="location.href ='/insertProd'">Insert Product</button>
      <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert" style="margin-top:2%;"><?= session()->getFlashdata('pesan'); ?></div>
      <?php endif; ?>
    </div>
  </div>
</div>
<table class="table" style="
    vertical-align: middle;
    text-align: center;
    width: 85%;
    margin: auto;
    margin-top: 2%;
">
  <thead>
    <tr>
      <th>No</th>
      <th>Foto</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1 ?>
    <?php foreach ($prod as $p) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $p['image']; ?>" alt="" width="150px"></td>
        <td><?= $p['nama']; ?></td>
        <td><button type="button" class="btn btn-dark" onclick="location.href ='/table/<?= $p['slug'] ?>'">Detail</button></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?= $pager->links('prod', 'pagerHome'); ?>
<?= $this->endSection(); ?>