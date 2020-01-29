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

  <div class="container">
    <div class="employer-nsrp">

      <div class="the-form-header">
        <div class="main-left-header">
          <span class="header-left-1">NSRP Reg Form 2</span> 
          <br>
          <span class="header-left-2">July 2017</sapn>
        </div>
        <div class="main-center-header">
          <span class="header-center-1">Republic of the Philippines</span>
          <br>
          <span class="header-center-2">Department of Labor and Employment</span>
          <br>
          <span class="header-center-3">National Skills Registration Program</span>
          <br>
          <span class="header-center-4">Establishment Registration Form</span>
        </div>
      </div>

      <form action="?do=Insert" method="POST">

        <div class="establishment-details">
          <div class="establishment-details-title">
            <span class="title">I. Establishment Details</span>
          </div>
          <input class="form-control" type="text" name="establishment_name" placeholder="Establishment Name:" autocomplete="off">
          <input class="form-control" type="text" name="acronym_abbreviation" placeholder="Acronym/Abbreviation:" autocomplete="off">
          <input class="form-control" type="text" name="tax_id_no" placeholder="Tax Identification Number:" autocomplete="off">
          <label for="">Employer type:</label>  
          <select name="employer_type" id="employe_type">
            <option value="Government">Government</option>
            <option value="Private">Private</option>
            <option value="Recruitment & Placement Agency (Local)">Recruitment & Placement Agency (Local)</option>
            <option value="censed Recruitment Agency (Overseas)">censed Recruitment Agency (Overseas)</option>
            <option value="DO 174-17,Subcontractor">DO 174-17,Subcontractor</option>
          </select>
          <hr>
          <label for="">Total Work Force:</label>
          <select name="total_work" id="total_work">
            <option value="Micro (1-9)">Micro (1-9)</option>
            <option value="Small (10-99)">Small (10-99)</option>
            <option value="Medium (100-199)">Medium (100-199)</option>
            <option value="Large (200 and up)">Large (200 and up)</option>
          </select>
          <input class="form-control" type="text" name="line_business" placeholder="Line of Business/Industry (check BIR 2303):" autocomplete="off">
          <input class="form-control" type="text" name="address" placeholder="Address:" autocomplete="off">
          <input class="form-control" type="text" name="barangay" placeholder="Barangay:" autocomplete="off">
          <input class="form-control" type="text" name="city_municipality" placeholder="City/Municipality:" autocomplete="off">
          <input class="form-control" type="text" name="province" placeholder="Province:" autocomplete="off">
        </div>

        <div class="establishment-contact-details">
          <div class="establishment-contact-details-title">
          <span class="title">II. Establishment Contact Details</span>
          </div>
          <label for="">Title:</label>
          <select name="title" id="title">
            <option value="Master">Master</option>
            <option value="Mr">Mr</option>
            <option value="Mister">Mister</option>
            <option value="Miss">Miss</option>
            <option value="Mrs">Mrs</option>
            <option value="Ms">Ms</option>
            <option value="Mx">Mx</option>
            <option value="Sir">Sir</option>
            <option value="Madam or Ma'am">Madam or Ma'am</option>
            <option value="Dr">Dr</option>
            <option value="Prof">Prof</option>
            <option value="Fr">Fr</option>
            <option value="Pr">Pr</option>
            <option value="Br">Br</option>
            <option value="Sr">Sr</option>
            <option value="Elder">Elder</option>
            <option value="Rabbi">Rabbi</option>
            <option value="Imam">Imam</option>
            <option value="Sayyid">Sayyid</option>
            <option value="Sharif">Sharif</option>
            <option value="Haji">Haji</option>
          </select>
          <input class="form-control" type="text" name="full_name" placeholder="Contact Person (Full name):" autocomplete="off">
          <input class="form-control" type="text" name="position" placeholder="Position:" autocomplete="off">
          <input class="form-control" type="text" name="telephone_no" placeholder="Telephone No:" autocomplete="off">
          <input class="form-control" type="text" name="mobile_no" placeholder="Mobile No:" autocomplete="off">
          <input class="form-control" type="text" name="fax_no" placeholder="Fax No:" autocomplete="off">
          <input class="form-control" type="email" name="email" placeholder="Email Address:" autocomplete="off">
        </div>

        <input class="btn btn-primary" type="submit" name="save" value="Save">

      </form>
      
    </div>
  </div>

  <!-- End Employer NSRP Form -->

  <?php } elseif ($do == 'Insert') {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $establishmentname        = $_POST['establishment_name'];
      $acronymabbreviation      = $_POST['acronym_abbreviation'];
      $taxidno                  = $_POST['tax_id_no'];
      $employertype             = $_POST['employer_type'];
      $totalwork                = $_POST['total_work'];
      $linebusiness             = $_POST['line_business'];
      $address                  = $_POST['address'];
      $barangay                 = $_POST['barangay'];
      $citymunicipality         = $_POST['city_municipality'];
      $province                 = $_POST['province'];
      $title                    = $_POST['title'];
      $fullname                 = $_POST['full_name'];
      $position                 = $_POST['position'];
      $telephoneno              = $_POST['telephone_no'];
      $mobileno                 = $_POST['mobile_no'];
      $faxno                    = $_POST['fax_no'];
      $email                    = $_POST['email'];

      $stmt = $con->prepare("INSERT INTO employer_nsrp(Estab_Name, Acron_Abbrev, Tax_ID, Emp_Type, Total_Work,
                              Line_Business, Address, Barangay, City_Muni, Province, Title, Contact_Per,
                              Position, Tel_No, Mob_No, Fax_No, Email, Date)
                            VALUES(:zestablishment_name, :zacronym_abbreviation, :ztax_id_no, :zemployer_type,
                                    :ztotal_work, :zline_business, :zaddress, :zbarangay, :zcity_municipality,
                                    :zprovince, :ztitle, :zfull_name, :zposition, :ztelephone_no, :zmobile_no,
                                    :zfax_no, :zemail, now()) ");

      $stmt->execute(array(

        'zestablishment_name'   => $establishmentname,
        'zacronym_abbreviation' => $acronymabbreviation,
        'ztax_id_no'            => $taxidno,
        'zemployer_type'        => $employertype,
        'ztotal_work'           => $totalwork,
        'zline_business'        => $linebusiness,
        'zaddress'              => $address,
        'zbarangay'             => $barangay,
        'zcity_municipality'    => $citymunicipality,
        'zprovince'             => $province,
        'ztitle'                => $title,
        'zfull_name'            => $fullname,
        'zposition'             => $position,
        'ztelephone_no'         => $telephoneno,
        'zmobile_no'            => $mobileno,
        'zfax_no'               => $faxno,
        'zemail'                => $email

      ));  
      
      echo "<div class='alert alert-info'>" . $stmt->rowCount() . ' Employer Added</div>';

    }

    }

    include 'includes/templates/footer.php';
 
  } else {

    header('Location: home.php');
    exit();

  }

?>

  
