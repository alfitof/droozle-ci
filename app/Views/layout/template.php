<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>
  <link rel="icon" href="<?= base_url() ?>/favicon.ico" type="image/gif">
  <link rel="stylesheet" type="text/css" href="/style/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/style/lightslider.css" />
  <script type="text/javascript" src="/js/Jquery.js"></script>
  <script type="text/javascript" src="/js/lightslider.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>

  <?= $this->include('layout/navbar'); ?>
  <?= $this->renderSection('content'); ?>
  <?= $this->include('layout/footer'); ?>

  <script type="text/javascript" src="/js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

  <script>
    AOS.init();
    $('.radio-group .radio').click(function() {
      $(this).parent().parent().find('.radio').removeClass('selected');
      $(this).addClass('selected');
    });
  </script>
</body>

</html>