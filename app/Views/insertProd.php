<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div>
            <form action="/saveProd" method="post" enctype="multipart/form-data" id="add_post_form">
                <?= csrf_field(); ?>
                <h2 class="my-5 text-center">Form Insert Product</h2>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control  <?= (\Config\Services::validation()->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" autofocus value="<?= old('nama'); ?>">
                        <div class=" invalid-feedback">Tolong masukkan nama
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tipe" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" id="tipe" name="tipe">
                            <option>Select Type</option>
                            <option value="T-shirt">T-shirt</option>
                            <option value="Oversize T-shirt">Oversize T-shirt</option>
                            <option value="Crewneck">Crewneck</option>
                            <option value="Coach Jacket">Coach Jacket</option>
                            <option value="Caps">Caps</option>
                            <option value="Sandal">Sandal</option>
                            <option value="Collar Shirt">Collar Shirt</option>
                            <option value="Mask">Mask</option>
                            <option value="Pants">Pants</option>
                            <option value="Socks">Socks</option>
                            <option value="Bags">Bags</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= (\Config\Services::validation()->hasError('harga')) ? 'is-invalid' : ''; ?>" id="harga" name="harga" value="<?= old('harga'); ?>">
                        <div class="invalid-feedback">Tolong masukkan harga</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="link" class="col-sm-2 col-form-label">Link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= (\Config\Services::validation()->hasError('link')) ? 'is-invalid' : ''; ?>" id="link" name="link" value="<?= old('link'); ?>">
                        <div class=" invalid-feedback">Tolong masukkan link
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="gambar" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="gambar" name="image" value="<?= old('image'); ?>">
                        <div class=" invalid-feedback">Tolong masukkan gambar
                        </div>
                    </div>
                </div>
                <div class="row mb-3 text-center">
                    <div>
                        <button type="submit" name="submit" class="btn btn-outline-dark mt-4" id="add_post">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>