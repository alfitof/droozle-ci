<!-- Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <nav class="navbar navbar-light bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/">
          <img src="/img/logo.png" alt="" width="100" height="43" />
        </a>
      </div>
    </nav>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white me-3" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white me-3" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Category</a>
          <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
            <li><a id="item" class="dropdown-item" href="/Category/tshirt">T-shirt</a></li>
            <li><a id="item" class="dropdown-item" href="/Category/sandal">Sandal</a></li>
            <li><a id="item" class="dropdown-item" href="/Category/crewneck">Crewneck</a></li>
            <li><a id="item" class="dropdown-item" href="/Category/pants">Pants</a></li>
            <li><a id="item" class="dropdown-item" href="/Category/bags">Bags</a></li>
            <li><a id="item" class="dropdown-item" href="/Category/caps">Caps</a></li>
            <li><a id="item" class="dropdown-item" href="/Category/collar">Collar Shirt</a></li>
            <li><a id="item" class="dropdown-item" href="/Category/mask">Mask</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white me-3" href="/contact">Contact</a>
        </li>
        <?php if (in_groups('admin')) : ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white me-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Manage Content</a>
            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
              <li><a id="item" class="dropdown-item" href="/table">Detail Products</a></li>
            </ul>
          </li>
        <?php else : ?>
          <li class="nav-item">
            <a class="nav-link text-white me-3" href="/all">All Product</a>
          </li>
        <?php endif ?>

        <?php if (!logged_in()) : ?>
          <li class="nav-item">
            <a href="/login"><button type="button" class="btn btn-outline-light">Sign In</button></a>
          </li>
        <?php else : ?>
          <li class="nav-item">
            <a href="/logout"><button type="button" class="btn btn-outline-light">Logout</button></a>
          </li>
        <?php endif ?>
      </ul>
    </div>
    <li class="nav-icon">
      <a href="/Pages/soon"><i class="fas fa-search"></i></a>
    </li>
    <li class="nav-icon">
      <a href="/Pages/soon"><i class="fas fa-heart" id="wishlist"></i></a>
    </li>
    <?php $keranjang = \Config\Services::cart()->contents();
    $jml_item = 0;
    foreach ($keranjang as $key => $value) {
      $jml_item = $jml_item + $value['qty'];
    }
    ?>
    <li class="nav-item">
      <a href="/cart" class="btn btn-outline-light rounded-full">
        <span id="cartCouter" style="margin-right: 10px;"><?= $jml_item; ?></span>
        <i class="fas fa-shopping-cart" id="shopcart"></i>
      </a>
    </li>
    <!-- <li class="nav-item">
      <a href="/cart" class="button button--ghost">
        <span id="cartCounter">1</span>
        <img src="/img/cart.png" alt="" /></a>
    </li> -->
  </div>
</nav>
<!-- Akhir Navbar -->