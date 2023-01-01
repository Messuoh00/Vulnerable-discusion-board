<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Anime Template">
  <meta name="keywords" content="Anime, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Anime | Template</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Css Styles -->
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="/assets/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="/assets/css/elegant-icons.css" type="text/css">
  <link rel="stylesheet" href="/assets/css/plyr.css" type="text/css">
  <link rel="stylesheet" href="/assets/css/nice-select.css" type="text/css">
  <link rel="stylesheet" href="/assets/css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="/assets/css/slicknav.min.css" type="text/css">
  <link rel="stylesheet" href="/assets/css/style.css" type="text/css">
</head>

<body>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- Header Section Begin -->
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col-lg-2">
          <div class="header__logo">
            <a href="/">
              <img src="/assets/img/logo.png" alt="">
            </a>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="header__nav">
            <nav class="header__menu mobile-menu">
              <ul>
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/forums">Forums</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="col-lg-2">
          <?php if ($session->get('username')) : ?>
            <div class="header__right d-flex align-items-center justify-content-end">
              <div class="d-flex align-items-center mr-4">
                <a href="/profile/<?= $session->get('username') ?>" style="font-size:14px"><span class="icon_profile"></span> <?= $session->get('username') ?></a>
              </div>
              <div>
                <form action="/logout" method="post" >
                       <label style="color:red;">
                        <input type="submit" hidden value="" class="button" />
                        logout
                      </label>
                </form> 
              </div>
            </div>
          <?php else: ?>
            <div class="header__right d-flex align-items-center justify-content-end">
              <div class="mr-4">
                <a href="/register" style="font-size:14px">Sign up</a>
              </div>
              <div>
                <a href="/login" style="font-size:14px">Log in</a>
              </div>
            </div>
          <?php endif ?>
        </div>
      </div>
      <div id="mobile-menu-wrap"></div>
    </div>
  </header>
  <!-- Header End -->
  <?= $this->renderSection('content') ?>

  <!-- Footer Section Begin -->
  <footer class="footer">
    <div class="page-up">
      <a href="/#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="footer__logo">
            <a href="/"><img src="/assets/img/logo.png" alt=""></a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="footer__nav">
            <ul>
              <li class="active"><a href="/">Homepage</a></li>
              <li><a href="/forums">Forums</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Search model Begin -->
  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
      <div class="search-close-switch"><i class="icon_close"></i></div>
      <form class="search-model-form">
        <input type="text" id="search-input" placeholder="Search here.....">
      </form>
    </div>
  </div>
  <!-- Search model end -->

  <!-- Js Plugins -->
  <script src="/assets/js/jquery-3.3.1.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/player.js"></script>
  <script src="/assets/js/jquery.nice-select.min.js"></script>
  <script src="/assets/js/mixitup.min.js"></script>
  <script src="/assets/js/jquery.slicknav.js"></script>
  <script src="/assets/js/owl.carousel.min.js"></script>
  <script src="/assets/js/main.js"></script>


</body>

</html>