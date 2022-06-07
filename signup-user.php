<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <title>Signup</title>
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <link rel="stylesheet" href="css/logstyle.css?v=<?php echo time(); ?>">
  		  <link rel="shortcut icon" href="/images/b3logo.png"/>
  		  <script src="/index.js" defer></script>
</head>

<body>
        <nav>
            <div class="logo">
            <img src="/images/B.png" alt="" class="logo">
            <p>itty</p>
            </div>

            <ul>
            <li><a href="/index.html">home</a></li>
            <li><a href="/todo.php">tasks</a></li>
            <li><a href="/About Us/HTML/AboutUs.html">about</a></li>
            <li class="active"><a href="/contact.html"><u>contact</u></a></li>
            </ul>

            <div class="profile-section">
                    <img src="/images/moon.png" alt="" class="darkmode">
            <div class="profile-container">
                <img src="/images/prof.png" alt="" class="profile">
                <img src="/images/dropdown.png" alt="" class="dropdown">
            </div>
            </div>
        </nav>

          <div class="container">
                    <div class="row">
                              <div class="form">
                                        <form action="signup-user.php" method="POST" autocomplete="">
                                                  <img src="images/Vector.png" class="login-icon">
                                                  <h2 class="h2-text">Create an Account</h2>
                                                  <p class="p-text">It's quick and easy.</p>
                                                  <?php
                    if (count($errors) == 1) {
                    ?>
                                                  <div class="alert alert-danger text-center">
                                                            <?php
                            foreach ($errors as $showerror) {
                                echo $showerror;
                            }
                            ?>
                                                  </div>
                                                  <?php
                    } elseif (count($errors) > 1) {
                    ?>
                                                  <div class="alert alert-danger">
                                                            <?php
                            foreach ($errors as $showerror) {
                            ?>
                                                            <li><?php echo $showerror; ?></li>
                                                            <?php
                            }
                            ?>
                                                  </div>
                                                  <?php
                    }
                    ?>
                                                  <div class="form-group">
                                                            <input class="form-control" type="text" name="name"
                                                                      placeholder="full name" required
                                                                      value="<?php echo $name ?>">
                                                  </div>
                                                  <div class="form-group">
                                                            <input class="form-control" type="email" name="email"
                                                                      placeholder="email address" required
                                                                      value="<?php echo $email ?>">
                                                  </div>
                                                  <div class="form-group">
                                                            <input class="form-control" type="password" name="password"
                                                                      placeholder="password" required>
                                                  </div>
                                                  <div class="form-group">
                                                            <input class="form-control" type="password" name="cpassword"
                                                                      placeholder="confirm password" required>
                                                  </div>
                                                  <div class="form-group">
                                                            <input class="form-control button" type="submit"
                                                                      name="signup" value="Signup">
                                                  </div>
                                                  <div class="link login-link p1-text">Already a member? <a
                                                                      href="login-user.php">Login here</a></div>
                                        </form>
                              </div>

                              <div class="image">
                                            <img src="images\list.png" alt="">
                                            <h1 class="h1-text"> Bitty </h1>
                            </div>
                    </div>
          </div>

          <section class="footer">
          
                    <div class="copy"> Copyright&copy;2022 All rights reserved.
                              <span>Bitty</span>
                    </div>
          
          </section>

</body>

</html>