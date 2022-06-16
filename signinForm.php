<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include 'include/nav.php';
    ?>
  <section class="form-bg">
    <div class="container-fluid">
      <div class="row">
          <form class="login-form">
            <div class="mb-3">
              <img src="" alt="messaging icon">
            </div>
            <div class="mb-3 txt-center">
              <h3>Sign in</h3>
            </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
                <div id="emailHelp" class="form-text"><a href="#">Forgot Password?</a></div>
              </div>
              <button type="submit" class="btn btn-primary btn-wide">Submit</button>
              <div class="mb-3 txt-center">
                <p>Don't have an account? <a href="signinForm.html">Sign up</a></p>
              </div>
            </form>
      </div>
  </div>
  </section>
    <?php
        include 'include/footer.php';
    ?>
</body>
</html>