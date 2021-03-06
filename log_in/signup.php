<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Template</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="assets/images/login_pic.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
               <!--<img src="assets/images/logo.svg" alt="logo" class="logo">-->
              </div>
              <p class="login-card-description">Register Here!</p>
              <form action="process.php" method="POST">
                <div class="form-group">
                  <label for="fname" class="sr-only">First Name</label>
                  <input type="text" id= "fname" name="fname" class="form-control" placeholder="First Name *" value="" />
              </div>
              <!--
              <div class="form-group">
                <label for="midname" class="sr-only">Middle Name</label>
                  <input type="text" id="midname" name="midname" class="form-control" placeholder="Middle Name *" value="" />
              </div>
              -->

              <div class="form-group">
                <label for="lname" class="sr-only">Last Name</label>
                  <input type="text" id="lname" name="lname" class="form-control" placeholder="Last Name *" value="" />
              </div>

              <div class="form-group">
                  <div class="maxl">
                      <label class="radio inline">
                          <input type="radio" id="gen" name="gender" value="Male" checked>
                          <span> Male </span>
                      </label>
                      <label class="radio inline">
                          <input type="radio" id="gen" name="gender" value="Female">
                          <span>Female </span>
                      </label>
                  </div>
              </div>

                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" id="email" name="email" id="email" class="form-control" placeholder="Email address">
                  </div>
                  <div class="form-group mb-4">
                    <label for="rank" class="sr-only">Rank</label>
                    <input type="rank" id="rank" name="rank" id="rank" class="form-control" placeholder="Rank">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" id="email" name="password" id="password" class="form-control" placeholder="Password">
                  </div>

          

                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Confirm Password</label>
                    <input type="password" id="email" name="password_2" id="password" class="form-control" placeholder="Password">
                  </div>

                  <input name="register" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Sign Up">
                </form>
                <!--<a href="#!" class="forgot-password-link">Forgot password?</a>
                <p class="login-card-footer-text">Don't have an account? <a href="#!" style="color:blueviolet;">Sign Up</a></p>
                <nav class="login-card-footer-nav">
                  <a href="admin.html" style="color: #17a2b8;">Admin Log In</a>
                  <a href="#!">Privacy policy</a>-->
                </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="card login-card">
        <img src="assets/images/login.jpg" alt="login" class="login-card-img">
        <div class="card-body">
          <h2 class="login-card-title">Login</h2>
          <p class="login-card-description">Sign in to your account to continue.</p>
          <form action="#!">
            <div class="form-group">
              <label for="email" class="sr-only">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="password" class="sr-only">Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-prompt-wrapper">
              <div class="custom-control custom-checkbox login-card-check-box">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
              </div>
              <a href="#!" class="text-reset">Forgot password?</a>
            </div>
            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">
          </form>
          <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
        </div>
      </div> -->
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
