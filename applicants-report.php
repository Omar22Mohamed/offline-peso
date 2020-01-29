<?php

  session_start();
  if (isset($_SESSION['Admin'])) {

  // header('Location: dashboard.php');

  }
  include 'init.php';
  include 'includes/templates/header.php';


?>

  Applicants Report

<?php

  include 'includes/templates/footer.php';

?>