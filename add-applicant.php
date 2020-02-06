<?php

  session_start();
  if (isset($_SESSION['Admin'])) {

    include 'init.php';
    include 'includes/templates/header.php';
    include 'includes/templates/navbar.php';


    $do = isset($_GET['do']) ? $_GET['do'] : 'Manage'; ?>

   <?php if ($do == 'Manage') { ?>



   <?php } elseif ($do == 'Add') { ?>

  <!-- Start Employer NSRP Form -->

  <div class="applicant-form-container">
    <div class="applicant-nsrp">

      <div class="the-form-header">
        <div class="main-left-header">
        <span class="header-left-1">NSRP Form 1</span> 
          <br>
          <span class="header-left-2">January 2017</sapn>
        </div>
        <div class="main-center-header">
          <span class="header-center-1">Republic of the Philippines</span>
          <br>
          <span class="header-center-2">Department of Labor and Employment</span>
          <br>
          <span class="header-center-3">PESO EMPLOYMENT INFORMATION SYSTEM</span>
          <br>
          <span class="header-center-4">REGISTRATION FORM</span>
        </div>
      </div>

      <form action="?do=Insert" method="POST">

        <div class="personal-information">

          <div class="personal-information-title">
            <span class="title">I. PERSONAL INFORMATION</span>
          </div>
          
          <div class="row pinfo-form1">
            <div class="col-md-3">
              <label for="surname">SURNAME</label>
              <input type="text" name="surname" class="form-control" placeholder="Surename">
            </div>
            <div class="col-md-3">
              <label for="surname">FIRST NAME</label>
              <input type="text" name="firstname" class="form-control" placeholder="First Name">
            </div>
            <div class="col-md-3">
              <label for="surname">MIDDLE NAME</label>
              <input type="text" name="middname" class="form-control" placeholder="Middle Name">
            </div>
            <div class="col-md-3">
              <label for="surname">SUFFIX</label>
              <input type="text" name="suffix" class="form-control" placeholder="Suffix">
            </div>
          </div>

          <div class="row pinfo-form2">
            <div class="col-md-3">
              <label for="dob">DATE OF BIRTH</label>
              <input type="text" name="dob" class="form-control" placeholder="Date of Birth">
            </div>
            <div class="col-md-3">
              <label for="dob">PLACE OF BIRTH</label>
              <input type="text" name="pob" class="form-control" placeholder="Place of Birth">
            </div>
            <div class="col-md-3">
              <label for="sex">SEX</label>
              <select name="sex" id="sex" class="form-control">
                <option value="0">...</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
            <div class="col-md-3">
              <label for="religion">RELIGION</label>
              <input type="text" name="religion" class="form-control" placeholder="Religion">
            </div>
          </div>

          <div class="row pinfo-form3">
            <div class="col-md-2">
              <label for="civstat">CIVIL STATUS</label>
              <select name="civstat" id="civstat" class="form-control">
                <option value="0">...</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Widowed">Widowed</option>
                <option value="Separated">Separated</option>
                <option value="Live-in">Live-in</option>
              </select>
            </div>
            <div class="col-md-3">
              <label for="houseno" display="inline-block">House N0./ Street Village</label>
              <input type="text" name="houseno" class="form-control">
            </div>
            <div class="col-md-2">
              <label for="barangay">Barangay</label>
              <input type="text" name="barangay" class="form-control">
            </div>
            <div class="col-md-2">
              <label for="muni-cit">Municipality/City</label>
              <input type="text" name="muni-cit" class="form-control">
            </div>
            <div class="col-md-2">
              <label for="province">Province</label>
              <input type="text" name="province" class="form-control">
            </div>
          </div>

          <div class="row pinfo-form4">
            <div class="col-md-3">
              <label for="tin">TIN</label>
              <input type="text" name="tin" class="form-control" placeholder="TIN">
            </div>
            <div class="col-md-3">
              <label for="gsidno">GSIS/SSS ID NO.</label>
              <input type="text" name="gsidno" class="form-control" placeholder="GSIS/SSS ID NO.">
            </div>
            <div class="col-md-3">
              <label for="pagno">PAG-IBIG NO.</label>
              <input type="text" name="pagno" class="form-control" placeholder="PAG-IBIG NO.">
            </div>
            <div class="col-md-3">
              <label for="philhelno">PHILHEALTH NO.</label>
              <input type="text" name="philhelno" class="form-control" placeholder="PHILHEALTH NO.">
            </div>
          </div>

          <div class="row pinfo-form5">
            <div class="col-md-3">
              <label for="height">HEIGHT</label>
              <input type="text" name="height" class="form-control" placeholder="HEIGHT (cm/ft)">
            </div>
            <div class="col-md-3">
              <label for="email">EMAIL ADDRESS</label>
              <input type="email" name="email" class="form-control" placeholder="EMAIL ADDRESS">
            </div>
            <div class="col-md-3">
              <label for="landnum">LANDLINE NUMBER</label>
              <input type="text" name="landnum" class="form-control" placeholder="LANDLINE NUMBER">
            </div>
            <div class="col-md-3">
              <label for="cellnum">CELLPHONE NUMBER</label>
              <input type="text" name="cellnum" class="form-control" placeholder="CELLPHONE NUMBER">
            </div>
          </div>

          <div class="row pinfo-form6">
            <div class="col-md-2">
              <label for="disability">DISABILITY</label>
              <select name="disability" id="disability" class="form-control">
                <option value="0">...</option>
                <option value="Visual">Visual</option>
                <option value="Hearing">Hearing</option>
                <option value="Speech">Speech</option>
                <option value="Physical">Physical</option>
              </select>
              <label for="otherdis"></label>
              <input type="text" name="otherdis" class="form-control" placeholder="Others, specify:">
            </div>
            <div class="col-md-3">
              <label for="empstatty" display="inline-block">EMPLOYMENT STATUS/TYPE</label>
              <select name="empstatty" class="form-control">
                <optgroup label ="Employment Status">
                  <option value="">...</option>
                <option value="Employed">Employed</option>
                <option value="Unemployed">Unemployed</option>
              </select>
              <br />
              <select name="empstatty" class="form-control">
                <optgroup label ="Employed Types">
                <option value="">...</option>
                <option value="Wage Employed">Wage Employed</option>
                <option value="Self Employed">Self Employed</option>

                <optgroup label ="Unemployed Types">
                <option value="New Entant/Fresh Graduate">New Entant/Fresh Graduate</option>
                <option value="Finished Contract">Finished Contract</option>
                <option value="Resigned">Resigned</option>
                <option value="Retired">Retired</option>
                <option value="Terminated/Laidoff(local)">Terminated/Laidoff(local)</option>
                <option value="Terminated/Laidoff(abroad)">Terminated/Laidoff(abroad)</option>
                <input type="text" name="abroadreason" class="form-control" placeholder="Country terminated/Laidoff(abroad)">
                <input type="text" name="otherempstatty" class="form-control" placeholder="Others, specify">
              </select>
            </div>
            <div class="col-md-2">
              <label for="lookforwork">Are you actively looking for work?</label>
              <select name="lookforwork" class="form-control">
                <option>...</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
              <label for="howlonglooking">How long have you been looking for work?</label>
              <input type="text" name="howlonglooking" class="form-control">
            </div>
            <div class="col-md-2">
              <label for="workimmed">Willing to work immediatelt?</label>
              <select name="workimmed" class="form-control">
                <option>...</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
              <label for="ifno">If no, when?</label>
              <input type="text" name="ifno" class="form-control">
            </div>
            <div class="col-md-2">
              <label for="beneficiary">Are you a 4Ps beneficiary?</label>
              <select name="beneficiary" class="form-control">
                <option>...</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
              <label for="ifyes">If yes, Household ID No.</label>
              <input type="text" name="ifyes" class="form-control">
            </div>
          </div>

        </div>

        <div class="job-preference">
         <div class="job-preference-title">
            <span class="title">II. JOB PREFERENCE</span>
          </div>
        </div>

      </form>

    </div>
  </div>

  <!-- End Employer NSRP Form -->

  <?php } elseif ($do == 'Insert') {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {



      $stmt = $con->prepare("");

      $stmt->execute(array(



      ));  
      
      echo "<div class='alert alert-info'>" . $stmt->rowCount() . ' Applicant Added</div>';

    }

    }

    include 'includes/templates/footer.php';
 
  } else {

    header('Location: home.php');
    exit();

  }

?>

  
