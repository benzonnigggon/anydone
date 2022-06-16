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
              <div class="mb-3 txt-center">
                  <h3>Register</h3>
                </div>
            <div class="mb-3">
              <img src="" alt="messaging icon">
            </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Business Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Business Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="disabledSelect" class="form-label">Country</label>
                <select id="disabledSelect" class="form-select">
                  <option>Nepal</option>
                  <option>India</option>
                  <option>China</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">I agree to <a href="#">terms and conditions</a></label>
              </div>
              <div class="mb-3 txt-center">
                <p>Or</p>
                <p>Already have an account? <a href="#">Login</a></p>
              </div>
              <button type="submit" class="btn btn-primary btn-wide">Submit</button>
            </form>
      </div>
  </div>
  </section>
    <?php
        include 'include/footer.php';
    ?>
</body>
</html>