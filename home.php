<?php

  session_start();
  if (isset($_SESSION['Admin'])) {

   // header('Location: dashboard.php');

  }
  include 'init.php';
  include 'includes/templates/header.php';

  // Check the HTTP request

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashedPass = sha1($password);

   // If user exist in DB

   $stmt = $con->prepare("SELECT  UserID, Username, Password FROM admin WHERE Username = ? AND Password = ? AND GroupID = 1");
   $stmt->execute(array($username, $hashedPass));
   $row = $stmt->fetch();
   $count = $stmt->rowCount();

   // The user exist when the $count > 0

   if ($count > 0) {

     $_SESSION['Admin'] = $username;
     $_SESSION['ID'] = $row['UserID'];
     header('Location: dashboard.php');
     exit();

   }

  }

?>  

<!-- Start Navbar -->

<nav class="navbar navbar-light">
  <a class="navbar-brand" href="home.php"><img src="assets/images/peso-domain-logo 2.png"></a>
  <form class="login form-inline" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <input class="form-control mr-sm-2" name="username" type="text" placeholder="Username">
    <input class="form-control mr-sm-2" name="password" type="password" placeholder="Password">
    <button class="btn btn-danger my-2 my-sm-0" type="submit">Login</button>
  </form>
</nav>

<!-- End Navbar -->

<!-- Start Background Banner -->

<div class="banner-header">
  <img src="assets/images/peso-banner.png">
</div>

<!-- End Background Banner -->

<?php

  include 'includes/templates/footer.php';

?>  