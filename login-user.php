<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <title>Login</title>
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <link rel="stylesheet" href="/css/logstyle.css?v=<?php echo time(); ?>">
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
            <li><a href="/contact.html">contact</a></li>
            </ul>

            <div class="profile-section">
                    <img src="/images/moon.png" alt="" class="darkmode">
            <div class="profile-container">
                <img src="/images/prof.png" alt="" class="profile">
                <img src="/images/dropdown.png" alt="" class="dropdown">
                <div id="user-login">
                    <p><a href="/login-user.php">login</a></p>
                    <p><a  href="/signup-user.php">sign up</a></p>
                </div>
            </div>
            </div>
        </nav>

          <section class="container" id="container">
                    <div class="row">
                              <div class="form login-form">
                                        <form action="login-user.php" method="POST" autocomplete="">
                                                  <img src="/images/Vector.png" class="login-icon">
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
                            <div class="image">
                                            <img src="images\list.png" alt="">
                                            <h1 class="h1-text"> Bitty </h1>
                            </div>
    
        </section>

        <section class="footer">
          
                    <div class="copy"> Copyright&copy;2022 All rights reserved.
                              <span>Bitty</span>
                    </div>
          
          </section>
                        

</body>

</html>