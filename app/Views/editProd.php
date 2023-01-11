<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div>
            <form action="/Content/updateProd/<?= $prod['id']; ?>" enctype="multipart/form-data" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $prod['slug']; ?>">
                <h2 class="my-5 text-center">Form Edit Product</h2>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control " id="nama" name="nama" value="<?= $prod['nama']; ?>" autofocus required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tipe" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" id="tipe" name="tipe">
                            <option selected>Select Type</option>
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
                        <input type="text" class="form-control" id="harga" name="harga" value="<?= $prod['harga']; ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="link" class="col-sm-2 col-form-label">Link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="link" name="link" value="<?= $prod['link']; ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="gambar" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="gambar" name="image" value="<?= $prod['image']; ?>">
                    </div>
                </div>
                <div class="row mb-3 text-center">
                    <div>
                        <button type="submit" class="btn btn-outline-dark mt-4">Edit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>