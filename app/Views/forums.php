<?= $this->extend('template.php') ?>

<?= $this->section('content') ?>

<section class="normal-breadcrumb set-bg" data-setbg="assets/img/normal-breadcrumb.jpg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="normal__breadcrumb__text">
          <h2>Our Forums</h2>
          <p>Welcome to our forums.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="blog spad">
  <div class="container">
    <div class="row">
    <div class="col-12 blog__details__title mt-0 mb-0">

        <h2 style="font-size: 36px"> New Posts:</h2>

          <form class="row" method="post" action='/forums' autocomplete="off">
                  
                  <div class="col-6">
                    <div class="input__item">
                      <input type="text" name="title" required placeholder="title" required >
                      <span class="icon_profile"></span>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="input__item">
                      <input type="text" name="type" required placeholder="post type..." >
                    </div>
                  </div>
                  <div class="col-12">
                    <textarea style="width:100%" name="content" class="p-2" rows=3 placeholder="content..."></textarea>
                  </div>

                  <div class="col-12 mt-3 d-flex justify-content-end">
                    <input type="submit" class="site-btn" value="POST">
                  </div>

          </form>

        
      </div>

      <div class="col-12 blog__details__title mt-0 mb-0">
        <h2 style="font-size: 36px"> Latest Posts:</h2>
      </div>
    </div>
    <?php foreach ($posts as $post) : ?>
      <div class="product__sidebar__comment__item__text py-4" style="border-top: 1px solid rgba(255, 255, 255, 0.2); border-bottom: 1px solid rgba(255, 255, 255, 0.2);">
        <h5 style="font-size: 20px">
          <a href="/forums/<?= $post['id'] ?>"><?= $post['title'] ?></a>
        </h5>
        <span class="d-flex" style="align-items: center; font-size:14px">
          <a style="color:white" href="/profile/<?= $post['author'] ?>"><i class="fa fa-user mr-1"></i><?= $post['author'] ?></a>
          <ul class="ml-2 mb-0">
            <li><?= $post['type'] ?></li>
          </ul>
        </span>
        <p style="color:gray">
          <?= mb_strimwidth($post['content'], 0, 240, "..."); ?>
        </p>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<?= $this->endSection() ?>