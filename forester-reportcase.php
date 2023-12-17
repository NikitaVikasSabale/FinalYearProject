<?php include "nav.php";?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>forester - Report Case</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  
<style>

      .reportcase {
        position: absolute;
        width: 75%;
        overflow-x: hidden;
        margin-left:23%;
        margin-top: 200px;
       }

      .alert {
        position: absolute;
        width: 70%;
        overflow-x: hidden;
        margin-left: 30%;
        margin-top: 140px;
       }

      form select{
        cursor: pointer;
      }

</style>

<script>
              function toggleShow() {
                let radio2 = document.getElementById('radio2');
                let para = document.getElementById('para');
                if(para.style.display != 'block'){
                  para.style.display = 'block';
                }
                
              }

              function toggleHide() {
                 let radio1 = document.getElementById('radio1');
                 let para = document.getElementById('para');
                 if(para.style.display != 'none') {
                  para.style.display = 'none';
                 }
              }
</script>

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
      <li><a href="forester-dashboard.php" id="sidebar-item">Dashboard</a></li>
      <li><a class="active" href="#" id="sidebar-item">Report Case</a></li>
      <li><a href="forester-cases-submitted.php" id="sidebar-item">Cases Submitted</a></li>
      <li><a href="forester-arg.php" id="sidebar-item">Acts ,Rules & Guidelines</a></li>
      <li><a href="forester-regoff.php" id="sidebar-item">Regional Offices</a></li>
      <li><a href="forester-support.php" id="sidebar-item">Support</a></li>
      <li><a href="login.php" id="sidebar-item" style="margin-top: 250px;">Logout</a></li>
    </ul>
  </div>

<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
          $compartment_number = $_POST['compartment_number'];
          $date = $_POST['date'];
          $designated_area = $_POST['designated_area'];
          $circle = $_POST['circle'];
          $forest_area = $_POST['forest_area'];
          $forest_department = $_POST['forest_department'];
          $particulars_of_offence = $_POST['particulars_of_offence'];
          $details_of_seized_goods = $_POST['details_of_seized_goods'];
          $details_of_the_accused = $_POST['details_of_the_accused'];
          $accused_name = $_POST['accused_name'];
          $accused_age = $_POST['accused_age'];
          $accused_address = $_POST['accused_address'];
          $latitude = $_POST['latitude'];
          $longitude = $_POST['longitude'];
          $other_details = $_POST['other_details'];
          $acts_and_sections = $_POST['acts_and_sections'];
          $other = $_POST['other'];
          $other_entries = $_POST['other_entries'];
          $place_of_crime = $_POST['place_of_crime'];
          $name = $_POST['name'];
          $designation = $_POST['designation'];

									
        // submit to database
        include 'dbconnect.php';

        $conn = mysqli_connect($server, $username_server, $password_server, $database);

          if (!$conn)
            {
              die("Error".mysqli_connect_error());
            }
          else 
            {
              //SQL query to be executed
              $sql = "INSERT INTO `por` (`id`, `time`, `compartment_number`, `date`,`forest_department`, `forest_area`, `circle`, `designated_area`, `particulars_of_offence`, `details_of_seized_goods`, `details_of_the_accused`, `accused_name`, `accused_age`, `accused_address`, `latitude`, `longitude`, `other_details`, `acts_and_sections`, `other`, `other_entries`, `place_of_crime`, `name`, `designation`, `username`) VALUES ('', now(), '$compartment_number', '$date', '$forest_department', '$forest_area', '$circle', '$designated_area', '$particulars_of_offence', '$details_of_seized_goods', '$details_of_the_accused', '$accused_name', '$accused_age', '$accused_address', '$latitude', '$longitude', '$other_details', '$acts_and_sections', '$other', '$other_entries', '$place_of_crime', '$name', '$designation', '$username')";
              $result = mysqli_query($conn, $sql);
        

                if($result)
                  {
                      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin-left: 25%;">
                      <strong>Success ! </strong> Preliminary Offence Report submitted successfully . 
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                  }
                else
                  {
                      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-left: 25%;">
                      <strong>Failed ! </strong> Failed to submit Preliminary Offence Report .
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                  }
              }
      }
?>

<div class="col-md-12">
<div class="reportcase">
  
    <form action="forester-reportcase.php" method="post">
      <div class="text-center">
      <h3>Preliminary Offence Report -प्राथमिक गुन्हा अहवाल </h3></br>
      </div>

      				
      <div class="form-row">

        <div class="form-group col-md-4">
          <label for="compartment_number"><b>Compartment Number ( कंपार्टमेंट नंबर ) </b></label></br>
          <input type="text" class="form-control" id="compartment_number" name="compartment_number" placeholder="Area in Hectors" required>
        </div>
             

        <div class="form-group col-md-3" style="margin-left: 10px;">
          <label for="date"><b>Date ( तारीख ) </b></label></br>
          <input type="date" id="date" name="date" required>
        </div>

      </div>

      <div class="form-row">

      <div class="form-group col-md-3">
          <label for="forest_department"><b>Forest Department ( वन विभाग )</b></label>
            <select class="form-control" id="forest_department" name="forest_department" required>
                <option value=""> - </option>
            </select>
        </div>

        <div class="form-group col-md-3">
          <label for="forest_area"><b>Forest Area ( वन परिक्षेत्र )</b></label>
            <select class="form-control" id="forest_area" name="forest_area" required>
                <option> - </option>
            </select>
        </div>

        <div class="form-group col-md-3">
          <label for="circle"><b>Circle ( परिमंडल )</b></label>
          <select class="form-control" id="circle" name="circle" required>
                <option> - </option>
          </select>
        </div>

        <div class="form-group col-md-3">
          <label for="designated_area"><b>Designated Area ( नियत क्षेत्र )</b></label>
          <select class="form-control" id="designated_area" name="designated_area" required>
              <option> - </option>
            </select>
        </div>
       
      </div>

      <div class="form-group">
        <label for="id6"><b>Particulars of offence ( अपराधाचा तपशील )</b></label>
        <textarea class="form-control" id="id6" name="particulars_of_offence" rows="5" required></textarea>
      </div>

      <div class="form-group">
        <label for="id7"><b>Details of seized goods ( जप्त मुद्देमालाचा तपशील )</b></label>
        <textarea class="form-control" id="id7" name="details_of_seized_goods" rows="5" required></textarea>
      </div>

      <div class="form-group">
        <label><b>Details of the accused: If found - name, age, address should be mentioned. If unknown, it should be noted.</br> ( आरोपीचा तपशील : आढळून आल्यास - नाव , वय , पत्ता नमूद करावेत . अज्ञात असल्यास तशी नोंद करावी .)</b></label></br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" onclick="toggleHide()" id="radio1" name="details_of_the_accused" value="Unknown" checked>
            <label class="form-check-label" for="radio1">Unknown accused ( अज्ञात आरोपी ) </label>
            <span class="checkmark"></span>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" onclick="toggleShow()" id="radio2" name="details_of_the_accused" value="Known">
              <label class="form-check-label" for="radio2">Known accused ( ज्ञात आरोपी ) </label>
              <span class="checkmark"></span>
          </div>
      </div>
      
      <div id="para" style="display:none;">
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="id8">Name ( नाव )</label>
            <input type="text" class="form-control" id="id8" name="accused_name" placeholder="नाव ">
          </div>

          <div class="form-group col-md-3">
            <label for="id9">Age ( वय )</label>
            <input type="text" class="form-control" id="id9" name="accused_age" placeholder="वय">
          </div>

          <div class="form-group col-md-3">
            <label for="id10">Address ( पत्ता )</label>
            <input type="text" class="form-control" id="id10" name="accused_address" placeholder="पत्ता">
          </div>
        </div>
      </div>

      							
    <div class="form-group">
      <label><b>Crime Spot - Latitude and Longitude as per GPS ( अपराधाचे ठिकाण - GPS नुसार अक्षांश व रेखांश)</b></label>
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="id11">Latitude ( अक्षांश )</label>
          <input type="text" class="form-control" id="id11" name="latitude" placeholder="अक्षांश" required>
        </div>

        <div class="form-group col-md-3">
          <label for="id12">Longitude ( रेखांश )</label>
          <input type="text" class="form-control" id="id12" name="longitude" placeholder="रेखांश" required>
        </div>

        <div class="form-group col-md-6">
          <label for="id13">Other Details ( इतर तपशील )</label>
          <input type="text" class="form-control" id="id13" name="other_details" placeholder="इतर तपशील">
        </div>

      </div>
    </div>


    <div class="form-group">
      <label><b>Acts and Sections - Sections and Acts applicable in case of offence at first glance </br>( अधिनियम व कलमे - अपराध प्रकरणी प्रथम दर्शनी लागू होणारी कलमे व अधिनियम )</b></label>
        <div class="col-md-6">
              <select class="form-control" name="acts_and_sections" required>
                <option> - </option>
                <option>Indian Forest Act , 1927</option>
                <option>Wildlife Protection Act , 1972</option>
                <option>Forest Conservation Act , 1927</option>
              </select>
        </div>
    </div>

    <div class="form-group">
        <label for="id14"><b>Other Acts and Sections ( इतर असल्यास )</b></label>
        <textarea class="form-control" id="id14" name="other" rows="5"></textarea>
    </div>

    <div class="form-group">
        <label for="id15"><b>Other entries - if required ( इतर नोंदी - आवश्यक असल्यास )</b></label>
        <textarea class="form-control" id="id15" name="other_entries" rows="5"></textarea>
    </div>

    <div class="form-group">
      <label for="id16"><b>Place of Crime registration ( गुन्हा नोंदविल्याचे ठिकाण )</b></label>
      <input type="text" class="form-control" id="id16" name="place_of_crime" placeholder="गुन्हा नोंदविल्याचे ठिकाण " required>
    </div>

      <div class="form-group">
      <label><b>Name, Designation of Prosecuting Authority ( गुन्हा नोंदावणाऱ्या अधिकाराचे नाव , पदनाम )</b></label>
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="id17">Name ( नाव )</label>
          <input type="text" class="form-control" id="id17" value="<?php echo $name ?>" name="name" placeholder="नाव" required>
        </div>


        <div class="form-group col-md-6">
          <label for="id18">Designation ( पदनाम )</label>
            <select class="form-control" id="id18" name="designation" required>
                <option value=""> - </option> 
                <option>Forester</option> 
                <option>Range Forest Officer</option>
                <option>Assistant Conservator of Forest</option>
            </select>
        </div>

        

    <input class="btn btn-primary" type="submit" value="Submit" style="margin-left:40%">

    </form>

  </div>

  <footer class="mb-auto pt-5 text-muted text-center text-small">
  <p class="mb-1">© 2022-2023 महाराष्ट्र वन विभाग महाराष्ट्र शासन </p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="support.php">Support</a></li>
    </ul>
</footer>

</div>



<script>
  if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
  }
</script> 
 
<script src="app.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
  
</html>





