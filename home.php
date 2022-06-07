<?php require_once "controllerUserData.php"; ?>
<?php
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if ($email != false && $password != false) {
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if ($run_Sql) {
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if ($status == "verified") {
            if ($code != 0) {
                header('Location: reset-code.php');
            }
        } else {
            header('Location: user-otp.php');
        }
    }
} else {
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <title>Home</title>
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <link rel="stylesheet"
                    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css<?php echo time(); ?>">
          <link rel="stylesheet" href="css/homeStyle.css?v=<?php echo time(); ?>">
</head>

<body>
        <nav>
            <div class="logo">
            <img src="/images/B.png" alt="" class="logo">
            <p>itty</p>
            </div>
        
            <ul>
            <li class="active"><a href="/index.html">home</a></li>
            <li><a href="/todo.php">tasks</a></li>
            <li><a href="/About Us/HTML/AboutUs.html">about</a></li>
            <li><a href="/contact.html"><u>contact</u></a></li>
            </ul>
        
            <div class="profile-section">
                    <img src="/images/moon.png" alt="" class="darkmode">
                    <a href="/login-user.php" class="logout-btn">Logout</a>
            </div>
            </div>
        </nav>

        <main>

                    <!-- Insert codes for every page here-->
                        

        </main>

          <section class="footer">
          
                    <div class="copy"> Copyright&copy;2022 All rights reserved.
                              <span>Bitty</span>p
                    </div>
          
          </section>

</body>

</html>