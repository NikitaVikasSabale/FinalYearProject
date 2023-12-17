<?php include "nav.php";?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DFO - Notifications (POR)</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
<style>
.reports {
        position: absolute;
        max-width: 100%;
        overflow-x: hidden;
        margin-left:25%;
        margin-top: 150px;
        margin-right: 2%;
       }

</style>
<body>  

<div class="nav">
    <img src="img/logo.png" id="logo"></img>
        <div class="nav-heading">महाराष्ट्र वन विभाग महाराष्ट्र शासन <br> MAHARASHTRA FOREST DEPARTMENT <br>  Government of Maharashtra</div>
            <img src="img/icon2.png" class="img-fluid rounded-start" style="width: 35px; height: 35px; margin-top: 80px; margin-left: 700px;">
              <span class="text-white" style="font-size: 20px; margin-top: 80px; margin-left: 5px;"> <?php echo $username;?>. </span>
        </div>  
</div>
  
  <!-- Sidebar -->
  <div>
    <ul id="sidebar">
      <li><a href="dfo-dashboard.php" id="sidebar-item">Dashboard</a></li>
      <li><a class="active" href="dfo-notifications.php" id="sidebar-item">Notifications</a></li>
      <li><a href="dfo-arg.php" id="sidebar-item">Acts ,Rules & Guidelines</a></li>
      <li><a href="dfo-regoff.php" id="sidebar-item">Regional Offices</a></li>
      <li><a href="dfo-support.php" id="sidebar-item">Support</a></li>
      <li><a href="login.php" id="sidebar-item" style="margin-top: 300px;">Logout</a></li>
    </ul>
  </div>

<div class="reports">  
  <!-- Preliminary offence report --> 
  <div class="por">
    <?php 
      include 'dbconnect.php';
      $id = $_GET['id'];
      

      $sql = "SELECT * FROM por WHERE id = $id" ;
      $result = mysqli_query($conn, $sql);


     if(!$result)
            {
              die("Failed ! ".mysqli_error());
            }
            else 
            {
              $row = mysqli_fetch_assoc($result);
              ?>

    <h3 class="text-center">- Preliminary Offence Report - </h3>              
    <table class="table table-borderless">
      <thead>
        <tr>
          <th scope="col-md-6">Title</th>
          <th scope="col-md-6">Details</th>
          
        </tr>
      </thead>

      <tbody>
        <tr>
          <th scope="row">Date ( तारीख )</th>
          <td><?php echo $row['date']; ?></td>
        </tr>

        <tr>
          <th scope="row">Compartment Number ( कंपार्टमेंट नंबर )</th>
          <td><?php echo $row['compartment_number']; ?></td>
        </tr>
    
        <tr>
          <th scope="row">Designated Area ( नियत क्षेत्र )</th>
          <td><?php echo $row['designated_area']; ?></td> 
        </tr>

        <tr>
          <th scope="row">Circle ( परिमंडल )</th>
          <td><?php echo $row['circle']; ?></td> 
        </tr>

        <tr>
          <th scope="row">Forest Area ( वन परिक्षेत्र )</th>
          <td><?php echo $row['forest_area']; ?></td> 
        </tr>

        <tr>
          <th scope="row">Forest Department ( वन विभाग )</th>
          <td><?php echo $row['forest_department']; ?></td> 
        </tr>

        <tr>
          <th scope="row">Particulars of offence ( अपराधाचा तपशील )</th>
          <td><?php echo $row['particulars_of_offence']; ?></td> 
        </tr>

        <tr>
          <th scope="row">Details of seized goods ( जप्त मुद्देमालाचा तपशील )</th>
          <td><?php echo $row['details_of_seized_goods']; ?></td> 
        </tr>

        <tr>
          <th scope="row">Details of the accused ( आरोपीचा तपशील )</th>
          <td><?php echo $row['details_of_the_accused']; ?></td> 
        </tr>

        <tr>
          <th scope="row">Name ( नाव )</th>
          <td><?php echo $row['accused_name']; ?></td> 
        </tr>

        <tr>
          <th scope="row">Age ( वय )</th>
          <td><?php echo $row['accused_age']; ?></td> 
        </tr>

        <tr>
          <th scope="row">Address ( पत्ता )</th>
          <td><?php echo $row['accused_address']; ?></td> 
        </tr>

        <tr>
          <th scope="row">Crime Spot - Latitude ( अपराधाचे ठिकाण - अक्षांश )</th>
          <td><?php echo $row['latitude']; ?></td> 
        </tr>

        <tr>
          <th scope="row">Crime Spot - Longitude ( अपराधाचे ठिकाण - रेखांश )</th>
          <td><?php echo $row['longitude']; ?></td> 
        </tr>

        <tr>
          <th scope="row">Crime Spot - Other Details ( अपराधाचे ठिकाण - इतर तपशील )</th>
          <td><?php echo $row['other_details']; ?></td> 
        </tr>
        
        <tr>
          <th scope="row">Acts and Sections ( अधिनियम व कलमे )</th>
          <td><?php echo $row['acts_and_sections']; ?></td> 
        </tr>

        <tr>
          <th scope="row">Other ( इतर )</th>
          <td><?php echo $row['other']; ?></td> 
        </tr>

        <tr>
          <th scope="row">Other entries - if required ( इतर नोंदी - आवश्यक असल्यास )</th>
          <td><?php echo $row['other_entries']; ?></td> 
        </tr>

        <tr>
          <th scope="row">Place of Crime registration ( गुन्हा नोंदविल्याचे ठिकाण )</th>
          <td><?php echo $row['place_of_crime']; ?></td> 
        </tr>

        <tr>
          <th scope="row">Name of Prosecuting Authority ( गुन्हा नोंदावणाऱ्या अधिकाराचे नाव )</th>
          <td><?php echo $row['name']; ?></td> 
        </tr>

        <tr>
          <th scope="row">Designation of Prosecuting Authority ( गुन्हा नोंदावणाऱ्या अधिकाराचे पदनाम )</th>
          <td><?php echo $row['designation']; ?></td> 
        </tr>
      </tbody>
    </table>
   
    <?php
              }
    ?>
  </div> 

<!-- Investigation report --> 
  <div class="investigationreport">
      <?php 
        include 'dbconnect.php';
        $id = $_GET['id'];

        $sql = "SELECT * FROM investigation WHERE id = $id" ;
        $result = mysqli_query($conn, $sql);

              if(!$result)
              {
                die("Failed ! ".mysqli_error());
              }
              else 
              {
                $row = mysqli_fetch_assoc($result);
      ?>
    <h3 class="text-center">- Investigation Report - </h3> 
    <table class="table table-borderless">
      <thead>
        <tr>
          <th scope="col-md-6">Title</th>
          <th scope="col-md-6">Details</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <th scope="row">Commencement Date ( प्रारंभ दिनांक )</th>
          <td><?php echo $row['commencement_date']; ?></td>
        </tr>

        <tr>
          <th scope="row">First reaction ( प्रथम प्रतिवृत्त )</th>
          <td><?php echo $row['first_reaction']; ?></td>
        </tr>
    
        <tr>
          <th scope="row">Description of the crime ( अपराधाचे वर्णन )</th>
          <td><?php echo $row['desc_of_crime']; ?></td> 
        </tr>

        <tr>
          <th scope="row">Investigation ( तपासणी )</th>
          <td><?php echo $row['investigation']; ?></td> 
        </tr>

        <tr>
          <th scope="row">Supplementary particulars of offence ( अपराधाचा पुरवणी तपशील )</th>
          <td><?php echo $row['supplementory_particulars_of_offence']; ?></td> 
        </tr>

        <tr>
          <th scope="row">What arrangement was made ( कोणती व्यवस्था केली )</th>
          <td><?php echo $row['arrangements']; ?></td> 
        </tr>

        <tr>
          <th scope="row">Name of the accused ( आरोपीचे नाव )</th>
          <td><?php echo $row['accused_name_2']; ?></td> 
        </tr>

        <tr>
          <th scope="row">Place of the accused ( आरोपीचे ठिकाण )</th>
          <td><?php echo $row['accused_address_2']; ?></td> 
        </tr>

        <tr>
          <th scope="row">Accused's statement ( आरोपीची जबानी )</th>
          <td><?php echo $row['accused_statement']; ?></td> 
        </tr>
      </tbody>
    </table>
    <?php
              }
    ?>
  </div>

</div>




  

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
  
</html>