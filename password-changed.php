<?php require_once "controllerUserData.php"; ?>
<?php
if ($_SESSION['info'] == false) {
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <title>Login</title>
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <link rel="stylesheet" href="css/logstyle.css?v=<?php echo time(); ?>">
      <link rel="shortcut icon" href="/images/b3logo.png"/>
    <script src="/index.js"></script>
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
            <li><a href="/contact.html"><u>contact</u></a></li>
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
                              <div class="form login-form">
                                        <?php
                if (isset($_SESSION['info'])) {
                ?>
                                        <div class="alert alert-success text-center">
                                                  <?php echo $_SESSION['info']; ?>
                                        </div>
                                        <?php
                }
                ?>
                                        <form action="login-user.php" method="POST">
                                                  <div class="form-group">
                                                            <input class="form-control button" type="submit"
                                                                      name="login-now" value="Login Now">
                                                  </div>
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