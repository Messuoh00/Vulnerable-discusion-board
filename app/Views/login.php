<?= $this->extend('template.php') ?>

<?= $this->section('content') ?>

<!-- Normal Breadcrumb Begin -->
<section class="normal-breadcrumb set-bg" data-setbg="/assets/img/normal-breadcrumb.jpg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="normal__breadcrumb__text">
          <h2>Login</h2>
          <p>Log in to your account.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Normal Breadcrumb End -->

<!-- Login Section Begin -->
<section class="login spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="login__form">
          <h3>Login</h3>
          <form action="/login" method="post">
            <div class="input__item">
              <input type="text" placeholder="Username" name="username">
              <span class="icon_profile"></span>
            </div>
            <div class="input__item">
              <input type="password" placeholder="Password" name="password">
              <span class="icon_lock"></span>
            </div>
            <button type="submit" class="site-btn">Login Now</button>
          </form>
          <a href="#" class="forget_pass">Forgot Your Password?</a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="login__register">
          <h3>Dont’t Have An Account?</h3>
          <a href="/register" class="primary-btn">Register Now</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Login Section End -->

<?= $this->endSection() ?>