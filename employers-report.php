<?php

  session_start();
  if (isset($_SESSION['Admin'])) {

    include 'init.php';
    include 'includes/templates/header.php';
    include 'includes/templates/navbar.php';

  }

  $start_date_error = '';
  $end_date_error = '';

  if(isset($_POST["export"]))
  {
    if(empty($_POST["start_date"]))
    {
      $start_date_error = '<label class="text-danger">Start Date is Required</label>';
    }
    else if(empty($_POST["end_date"]))
    {
      $end_date_error = '<label class="text-danger">End Date is Required</label>';
    }
    else
    {
      $file_name = 'Employer Data.csv';
      header("Content-Description: File Transfer");
      header("Content-Disposition: attachment; filename=$file_name");
      header("Content-Type: application/csv;");

      $file = fopen("php://output", "w");

      $header = array(
          "Employer ID",
          "Establishment Name",
          "Acronym/Abbreviation",
          "Tax Identification Number",
          "Employer Type",
          "Total Work Force",
          "Line of Business/Industry",
          "Address",
          "Barangay",
          "City/Municipality",
          "Province",
          "Title",
          "Contact Person",
          "Position",
          "Telephone Number",
          "Mobile No",
          "Fax No",
          "Email Address",
          "Date Created"
        );

      fputcsv($file, $header);
      
      $query = "SELECT * FROM employer_nsrp WHERE Date >= '".$_POST["start_date"]."' AND Date <= '".$_POST["end_date"]."' ORDER BY Date DESC";
    
      $statement = $con->prepare($query);
      $statement->execute();
      $result = $statement->fetchAll();

      foreach($result as $row)
      {
        $data = array();
        $data[] = $row["Emp_ID"];
        $data[] = $row["Estab_Name"];
        $data[] = $row["Acron_Abbrev"];
        $data[] = $row["Tax_ID"];
        $data[] = $row["Emp_Type"];
        $data[] = $row["Total_Work"];
        $data[] = $row["Line_Business"];
        $data[] = $row["Address"];
        $data[] = $row["Barangay"];
        $data[] = $row["City_Muni"];
        $data[] = $row["Province"];
        $data[] = $row["Title"];
        $data[] = $row["Contact_Per"];
        $data[] = $row["Position"];
        $data[] = $row["Tel_No"];
        $data[] = $row["Mob_No"];
        $data[] = $row["Fax_No"];
        $data[] = $row["Email"];
        $data[] = $row["Date"];

        fputcsv($file, $data);
      }
      fclose($file);
      exit;
    }
  }

  $query = "SELECT * FROM employer_nsrp ORDER BY Date DESC";

  $statement = $con->prepare($query);
  $statement->execute();
  $result = $statement->fetchAll();

?>

 <div class="container box">
  <div class="table-responsive">
    <br />
    <div class="row">
      <form method="post">
        <div class="input-daterange">
          <div class="col-md-10">
            <div id="input-daterange" class="input-group input-daterange">

              <input type="text" name="start_date" class="form-control" placeholder="Start Date" readonly>
                <?php echo $start_date_error; ?>
                <div class="input-group-addon">to</div>

              <input type="text" name="end_date" class="form-control" placeholder="End Date" readonly>
                <?php echo $end_date_error; ?>

            </div>
          </div>
        </div>
        <div class="col-md-2">
          <button type="submit" name="export" class="btn btn-success"><i class="fa fa-file-excel-o" aria-hidden="true"> Export to Excel</button></i>
        </div>
      </form>
    </div>
    <br />
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Employer ID</th>
            <th>Establishment Name</th>
            <th>Acronym/Abbreviation</th>
            <th>Tax Identification Number</th>
            <th>Employer Type</th>
            <th>Total Work Force</th>
            <th>Line of Business/Industry</th>
            <th>Address</th>
            <th>Barangay</th>
            <th>City/Municipality</th>
            <th>Province</th>
            <th>Title</th>
            <th>Contact Person</th>
            <th>Position</th>
            <th>Telephone Number</th>
            <th>Mobile No</th>
            <th>Fax No</th>
            <th>Email Address</th>
            <th>Date Created</th>
          </tr>
        </thead>
          <tbody>
            <?php
              foreach($result as $row)
              {
                echo '
                  <tr>
                    <td>'. $row["Emp_ID"] .'</td>
                    <td>'. $row["Estab_Name"] .'</td>
                    <td>'. $row["Acron_Abbrev"] .'</td>
                    <td>'. $row["Tax_ID"] .'</td>
                    <td>'. $row["Emp_Type"] .'</td>
                    <td>'. $row["Total_Work"] .'</td>
                    <td>'. $row["Line_Business"] .'</td>
                    <td>'. $row["Address"] .'</td>
                    <td>'. $row["Barangay"] .'</td>
                    <td>'. $row["City_Muni"] .'</td>
                    <td>'. $row["Province"] .'</td>
                    <td>'. $row["Title"] .'</td>
                    <td>'. $row["Contact_Per"] .'</td>
                    <td>'. $row["Position"] .'</td>
                    <td>'. $row["Tel_No"] .'</td>
                    <td>'. $row["Mob_No"] .'</td>
                    <td>'. $row["Fax_No"] .'</td>
                    <td>'. $row["Email"] .'</td>
                    <td>'. $row["Date"] .'</td>
                  </tr>
                ';
              }
            ?>
          </tbody>
      </table>
    <br />
    <br />
  </div>
 </div>
  

<?php

include 'includes/templates/footer.php';

?>  