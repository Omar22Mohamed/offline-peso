<?php

  session_start();
  if (isset($_SESSION['Admin'])) {

    //header('Location: dashboard.php');

  }
  include 'init.php';
  include 'includes/templates/header.php';


?>

<div class="dashboard">

  <div class="sidebar">
    <div class="logo-area text-center">PESO Legazpi</div>
    <ul class="links-area list-unstyled">
      <li><a href="#" data-toggle="modal" data-target="#addadminmodal"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Admin</a></li>
      <li><a href="#"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Applicant NSRP</a></li>
      <li><a href="add-employer.php?do=Add&userid=<?php echo $_SESSION['ID'] ?>"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Employer NSRP</a></li>
      <li><a href="#"><i class="fa fa-file" aria-hidden="true"></i> Applicants Report</a></li>
      <li><a href="employers-report.php"><i class="fa fa-file" aria-hidden="true"></i> Employers Report</a></li>
      <li><a href="#"><i class="fa fa-download" aria-hidden="true"></i> View & Download Applicant NSRP</a></li>
      <li><a href="#"><i class="fa fa-download" aria-hidden="true"></i> View & Download Employer NSRP</a></li>
      <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Log out</a></li>
    </ul>
  </div>

  <div class="content-area">

    <div class="header">
      <i class="fa fa-exchange fa-lg toggle-dashboard-sidebar"></i>
      
    </div>

    <div class="container-fluid">
      <div class="content">
        Content
      </div>
    </div>

  </div>

  <!-- Start Add Admin Modal -->
  <div class="modal fade" id="addadminmodal" tabindex="-1" role="dialog" aria-labelledby="addadminmodalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addadminmodalLabel">Add Admin</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <input type="text" name="admin_name" class="form-control" placeholder="Username">
            <input type="password" name="admin_password" class="form-control" placeholder="Password">
            <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
          </form>
        </div>
      </div>
    </div>
  </div>
<!-- End Add Admin Modal -->

</div>

<?php

  include 'includes/templates/footer.php';

?>