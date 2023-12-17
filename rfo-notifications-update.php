<?php include "nav.php";?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Range Forest Officer - Notifications (POR)</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">   
    </head>
<style>
.por {
        position: absolute;
        width: 70%;
        overflow-x: hidden;
        margin-left:25%;
        margin-top: 200px;
        margin-right: 2%;
       }

.alert {
        position: absolute;
        width: 70%;
        overflow-x: hidden;
        margin-left: 30%;
        margin-top: 140px;
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
      <li><a href="rfo-dashboard.php" id="sidebar-item">Dashboard</a></li>
      <li><a class="active" href="#" id="sidebar-item">Notifications</a></li>
      <li><a href="rfo-submitted-reports.php" id="sidebar-item">Submitted Reports</a></li>
      <li><a href="rfo-arg.php" id="sidebar-item">Acts ,Rules & Guidelines</a></li>
      <li><a href="rfo-regoff.php" id="sidebar-item">Regional Offices</a></li>
      <li><a href="rfo-support.php" id="sidebar-item">Support</a></li>
      <li><a href="login.php" id="sidebar-item" style="margin-top: 260px;">Logout</a></li>
    </ul>
  </div>

    <?php
       if(isset($_GET['id'])) {
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
                }
        }
    ?>


<?php
if(isset($_POST['update'])) {
    if(isset($_GET['id_new']))
    {
        $idnew = $_GET['id_new'];
    }
    $commencement_date = $_POST['commencement_date'];
    $first_reaction = $_POST['first_reaction'];
    $desc_of_crime = $_POST['desc_of_crime'];
    $investigation = $_POST['investigation'];
    $supplementory_particulars_of_offence = $_POST['supplementory_particulars_of_offence'];
    $arrangements = $_POST['arrangements'];
    $accused_name_2 = $_POST['accused_name_2'];
    $accused_address_2 = $_POST['accused_address_2'];
    $accused_statement = $_POST['accused_statement'];

    $sql = "INSERT INTO `investigation` (`id`,`commencement_date`,`first_reaction`,`desc_of_crime`,`investigation`,`supplementory_particulars_of_offence`,`arrangements`,`accused_name_2`,`accused_address_2`,`accused_statement`,`username`) VALUES ('$idnew','$commencement_date','$first_reaction','$desc_of_crime','$investigation','$supplementory_particulars_of_offence','$arrangements','$accused_name_2','$accused_address_2','$accused_statement','$username')";
    $result = mysqli_query($conn, $sql);    

    if($result)
        {
          echo '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin-left: 25%;">
          <strong>Success ! </strong> Investigation Report submitted successfully . 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    else
        {
                      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-left: 25%;">
                      <strong>Failed ! </strong> Failed to submit Investigation Report .
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
        }
    
}
?>

<div class="col-md-12">
  <div class="por">   
    <form action="rfo-notifications-update.php?id_new=<?php echo $id; ?>" method="POST">

    <div class="text-center">
      <h3>Investigation Report - तपास अहवाल </h3></br>
      </div>

          <div class="form-group">
              <label for="commencement_date"><b>Commencement Date ( प्रारंभ दिनांक ) </b></label></br>
              <input type="date" id="commencement_date" name="commencement_date" required>
          </div>

        <div class="form-group">
            <label for="first_reaction"><b>First reaction ( प्रथम प्रतिवृत्त )</b></label>
            <textarea class="form-control" id="first_reaction" name="first_reaction" rows="3" required></textarea>
        </div>

      <div class="form-group">
        <label for="desc_of_crime"><b>Description of the crime ( अपराधाचे वर्णन )</b></label>
        <textarea class="form-control" id="desc_of_crime" name="desc_of_crime" rows="3" required></textarea>
      </div>

      <div class="form-group">
        <label for="investigation"><b>Investigation ( तपासणी )</b></label>
        <textarea class="form-control" id="investigation" name="investigation" rows="3" required></textarea>
      </div>

      <div class="form-group">
        <label for="supplementory_particulars_of_offence"><b>Supplementary particulars of offence ( अपराधाचा पुरवणी तपशील )</b></label>
        <textarea class="form-control" id="supplementory_particulars_of_offence" name="supplementory_particulars_of_offence" rows="3" required></textarea>
      </div>

      <div class="form-group">
        <label for="arrangements"><b>What arrangement was made ( कोणती व्यवस्था केली ) </b></label>
        <textarea class="form-control" id="arrangements" name="arrangements" rows="3" required></textarea>
      </div>

      <div class="form-group">
        <label> <b>Name and place of the accused ( आरोपीचे नाव व ठिकाण )</b></label></br>
          <div class="form-row">
      
            <div class="form-group col-md-6">
              <label for="accused_name_2">Name ( नाव )</label>
              <input type="text" class="form-control" id="accused_name_2" name="accused_name_2" placeholder="नाव" >
            </div>

            <div class="form-group col-md-6">
              <label for="accused_address_2">Address ( पत्ता )</label>
              <input type="text" class="form-control" id="accused_address_2" name="accused_address_2" placeholder="पत्ता">
            </div>
          </div>
      </div>

      <div class="form-group">
        <label for="accused_statement"><b>Accused's statement ( आरोपीची जबानी )</b></label>
        <textarea class="form-control" id="accused_statement" name="accused_statement" rows="3" required></textarea>
      </div>

    <input class="btn btn-primary" type="submit" name="update" value="Submit" style="margin-left:40%">

    </form>
  </div>  
</div>
  
<script>
  if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
  }
</script> 

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
  
</html>