<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class=" col-lg-6 col-md-8">
            <div class="card p-3">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="heading text-center">Payment Method</h2>
                    </div>
                </div>
                <form onsubmit="event.preventDefault()" class="form-card">
                    <div class="row justify-content-center mb-4 radio-group">
                        <div class="col-sm-3 col-5">
                            <div class='radio selected mx-auto' data-value="dk"> <img class="fit-image" src="https://i.ibb.co/3hL6q8s/Frame-22.png" width="105px" height="55px"> </div>
                        </div>
                        <div class="col-sm-3 col-5">
                            <div class='radio mx-auto' data-value="visa"> <img class="fit-image" src="https://i.ibb.co/G7bCqkF/Frame-22-1.png" width="105px" height="55px"> </div>
                        </div>
                        <div class="col-sm-3 col-5">
                            <div class='radio mx-auto' data-value="master"> <img class="fit-image" src="https://i.ibb.co/s9Z3Zr0/Frame-22-2.png" width="105px" height="55px"> </div>
                        </div>
                        <div class="col-sm-3 col-5">
                            <div class='radio mx-auto' data-value="paypal"> <img class="fit-image" src="https://i.ibb.co/TrTXrQB/Frame-22-3.png" width="105px" height="55px"> </div>
                        </div> <br>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="input-group"> <input type="text" name="Name" placeholder="John Doe"> <label>Name</label> </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="input-group"> <input type="text" name="Name" placeholder="Street no. 148"> <label>Address</label> </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="input-group"> <input type="text" name="Name" placeholder="+62 97594857"> <label>Phone</label> </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <?php $keranjang = \Config\Services::cart()->contents();
                        $subTotal = 0;
                        foreach ($keranjang as $key => $value) {
                            $subTotal = $subTotal + $value['subtotal'];
                        }
                        ?>
                        <button type="button" class="btn btn-dark mb-4 btn-block btn-lg" data-mdb-ripple-color="dark" onclick="location.href='/Payment/success'">Pay Rp. <?= $subTotal; ?>.000</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>