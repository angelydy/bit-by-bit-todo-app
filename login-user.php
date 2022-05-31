<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <title>Login</title>
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<body>
          <section class="container" id="container">
                    <div class="row">
                              <div class="col-md-4 offset-md-4 form login-form">
                                        <form action="login-user.php" method="POST" autocomplete="">
                                                  <h2 class="h2-text">Login</h2>
                                                  <p class="p-text">Save your progress by logging in</p>
                                                  <?php
                    if (count($errors) > 0) {
                    ?>
                                                  <div class="alert alert-danger text-center">
                                                            <?php
                            foreach ($errors as $showerror) {
                                echo $showerror;
                            }
                            ?>
                                                  </div>
                                                  <?php
                    }
                    ?>
                                                  <div class="form-group">
                                                            <input class="form-control" type="email" name="email"
                                                                      placeholder="email address" required
                                                                      value="<?php echo $email ?>">
                                                  </div>
                                                  <div class="form-group">
                                                            <input class="form-control" type="password" name="password"
                                                                      placeholder="password" required>
                                                  </div>
                                                  <div class="link forget-pass text-right"><a
                                                                      href="forgot-password.php">forgot password?</a>
                                                  </div>
                                                  <div class="form-group">
                                                            <input class="form-control button" type="submit"
                                                                      name="login" value="Login">
                                                  </div>
                                                  <div class="link login-link p1-text">Not yet a member? <a
                                                                      href="signup-user.php">Create an Account</a></div>
                                        </form>

                              </div>
                    </div>

</body>

</html>