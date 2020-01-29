<!-- Start Navbar -->

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="home.php" class="navbar-brand"><img src="assets/images/peso-domain-logo 2.png"></a>
    </div>

    <ul class="nav navbar-nav navbar-right">
    <li><a href="dashboard.php">Dashboard</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['Admin']; ?> <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Edit Profile</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#"><i class="logout fa fa-sign-out"></i> Logout</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

<!-- End Navbar -->
