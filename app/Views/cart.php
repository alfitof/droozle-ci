<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="row d-flex justify-content-center align-items-center" style="width: 100%;">
    <div class="col-12">
        <div class="card-registration card-registration-2">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="p-5">
                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                                <?php $keranjang = \Config\Services::cart()->contents();
                                $jml_item = 0;
                                foreach ($keranjang as $key => $value) {
                                    $jml_item = $jml_item + $value['qty'];
                                }
                                ?>
                                <h6 class="mb-0 text-muted"><?= $jml_item ?> items</h6>
                            </div>
                            <?php if (session()->getFlashdata('pesan')) { ?>
                                <div class="alert alert-success" role="alert" style="margin-top:2%; width:91%; margin:auto;"><?= session()->getFlashdata('pesan'); ?></div>
                            <?php } ?>
                            <hr class="my-4">
                            <?php $keranjang = \Config\Services::cart()->contents();
                            $i = 1;
                            foreach ($keranjang as $value) :
                            ?>

                                <div class="row mb-4 d-flex justify-content-between align-items-center">
                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                        <img src="img/<?= $value['options']['gambar']; ?>" class="img-fluid rounded-3" alt="Cotton T-shirt">
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                        <h6 class="text-muted"><?= $value['options']['tipe']; ?></h6>
                                        <h6 class="text-black mb-0"><?= $value['name']; ?></h6>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">


                                        <input style="width: 2.5rem;" id="form1" min="0" name="qty<?= $i++; ?>" value="<?= $value['qty']; ?>" type="number" class="form-control form-control-sm" disabled />

                                    </div>
                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                        <h6 class="mb-0">Rp, <?= $value['subtotal']; ?>.000</h6>
                                    </div>
                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                        <a href="/Content/delete/<?= $value['rowid'] ?>" class="text-muted"><i class="fas fa-times"></i></a>
                                    </div>
                                </div>

                                <hr class="my-4">

                            <?php endforeach; ?>

                            <div class="pt-5">
                                <h6 class="mb-0"><a href="/all" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="p-5">
                            <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                            <hr class="my-4">

                            <?php $keranjang = \Config\Services::cart()->contents();
                            foreach ($keranjang as $value) :
                            ?>
                                <div class="d-flex justify-content-between mb-4">
                                    <h6 class="text-uppercase"><?= $value['name']; ?></h6>
                                    <h6>Rp, <?= $value['subtotal']; ?>.000</h7>
                                </div>
                            <?php endforeach; ?>





                            <hr class="my-4">
                            <?php $keranjang = \Config\Services::cart()->contents();
                            $subTotal = 0;
                            foreach ($keranjang as $key => $value) {
                                $subTotal = $subTotal + $value['subtotal'];
                            }
                            ?>
                            <div class="d-flex justify-content-between mb-5">
                                <h5 class="text-uppercase">Total price</h5>
                                <h5>Rp, <?= $subTotal; ?>.000</h5>
                            </div>
                            <button type="button" class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark" onclick="location.href='/Content/clearCart'">Payment</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>