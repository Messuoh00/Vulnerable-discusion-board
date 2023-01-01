<?= $this->extend('template.php') ?>

<?= $this->section('content') ?>

<!-- Normal Breadcrumb Begin -->
<section class="normal-breadcrumb set-bg" data-setbg="/assets/img/normal-breadcrumb.jpg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="normal__breadcrumb__text">
          <h2>Register</h2>
          <p>Register a new account on our website.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Normal Breadcrumb End -->

<!-- Signup Section Begin -->
<section class="signup spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="login__form">
          <h3>Sign Up</h3>
          <form method="post" action='/register' autocomplete="off">
            <div class="input__item">
              <input type="text" name="username" required placeholder="Username...">
              <span class="icon_profile"></span>
            </div>

            <div class="input__item">
              <input type="text" name="email" required placeholder="Email...">
              <span class="icon_mail"></span>
            </div>

            <div class="input__item">
              <input type="text" name="email2" required placeholder="Email Confirmation...">
              <span class="icon_mail"></span>
            </div>

            <div class="input__item">
              <input type="password" name="password" required placeholder="Password...">
              <span class="icon_lock"></span>
            </div>

            <div class="input__item">
              <input type="password" name="password2" required placeholder="Password Confirmation...">
              <span class="icon_lock"></span>
            </div>

            <div class="form-group mt-2">
              <input type="submit" class="site-btn" value="Sign up">
            </div>
            <hr>
          </form>
          <h5>Already have an account? <a href="#">Log In!</a></h5>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Signup Section End -->

<?= $this->endSection() ?>