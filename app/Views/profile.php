<?= $this->extend('template.php') ?>

<?= $this->section('content') ?>
<div class="container mb-4">
  <div class="row d-flex justify-content-center">
    <div class="row w-100">
      <div class="col-12 blog__details__title">
        <h2 style="font-size: 30"><?= $info['username'] ?>'s Profile:</h2>
      </div>
    </div>
    <div class="row w-100">
      <div class="col-2">
        <img class="rounded-circle" src="/uploads/avatars/<?= $info['profile_picture'] ?>">
      </div>
      <div class="col-10 blog__details__content">
        <span style="color:white; font-weight:800; font-size:20px"> Basic Information: </span>
        <div class="login__form mt-3 pl-0">
          <form class="row" method="post" action='/register' autocomplete="off">
            <div class="col-6">
              <div class="input__item">
                <input type="text" name="username" required placeholder="Username..." value="<?= $info['username'] ?>">
                <span class="icon_profile"></span>
              </div>
            </div>
            <div class="col-6">
              <div class="input__item">
                <input type="text" name="email" required placeholder="Email..." value="<?= $info['email'] ?>">
                <span class=" icon_mail"></span>
              </div>
            </div>
            <div class="col-12">
              <textarea style="width:100%" class="p-2" rows=3 placeholder="Bio..."><?= $info['bio'] ?></textarea>
            </div>

            <div class="col-12 mt-3 d-flex justify-content-end">
              <input type="submit" class="site-btn" value="Update Info">
            </div>


          </form>
        </div>
        <hr>
      </div>
    </div>
    <div class="row w-100">
      <div class="row col-12">
        <div class="col-12 blog__details__title mt-0 mb-0">
          <h2 style="font-size: 26px" class="mb-2"> Latest Posts:</h2>
        </div>
      </div>
      <div class="row col-12 w-100">
        <?php foreach ($posts as $post) : ?>
          <div class="ml-3 product__sidebar__comment__item__text py-3 w-100" style="border-top: 1px solid rgba(255, 255, 255, 0.2); border-bottom: 1px solid rgba(255, 255, 255, 0.2);">
            <h5 style="font-size: 20px">
              <a href="/forums/<?= $post['id'] ?>"> <?= $post['title'] ?></a>
            </h5>
            <span class="d-flex" style="align-items: center; font-size:14px">
              <ul class="mb-1">
                <li><?= $post['type'] ?></li>
              </ul>
            </span>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>