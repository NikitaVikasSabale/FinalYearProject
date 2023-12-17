<?php include "nav.php";?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assistant Conservator of Forest - Support</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
<style>
       .supportform {
        position: fixed;
        width: 100%;
        margin-left: 20%;
        margin-top: 200px;
       }

       .alert {
        position: absolute;
        width: 60%;
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
      <li><a href="acf-dashboard.php" id="sidebar-item">Dashboard</a></li>
      <li><a href="acf-notifications.php" id="sidebar-item">Notifications</a></li>
      <li><a href="acf-submitted-reports.php" id="sidebar-item">Submitted Reports</a></li>
      <li><a href="acf-arg.php" id="sidebar-item">Acts ,Rules & Guidelines</a></li>
      <li><a href="acf-regoff.php" id="sidebar-item">Regional Offices</a></li>
      <li><a class="active" href="#" id="sidebar-item">Support</a></li>
      <li><a href="login.php" id="sidebar-item" style="margin-top: 260px;">Logout</a></li>
    </ul>
  </div>


  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
          $name = $_POST['name'];
          $designation = $_POST['designation'];
          $email = $_POST['email'];
          $feedback = $_POST['feedback'];
        
   
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
              $sql = "INSERT INTO `support` (`name`, `designation`, `email`, `feedback`) VALUES ('$name', '$designation', '$email', '$feedback')";
              $result = mysqli_query($conn, $sql);
        

                if($result)
                  {
                      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin-left: 25%;">
                      <strong>Success ! </strong> Thank you for your feedback , We will work on it shortly . 
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                  }
                else
                  {
                      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-left: 25%;">
                      <strong>Failed ! </strong> Failed to give Feedback .
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                  }
              }
      }
?>


  <!--Feedback Form -->
  <div class="supportform">
  <form class="container align-items-center" action="acf-support.php" method="post">
  <p class="text-large">We welcome inquiries and feedback . What can we help you with ?</p>
      <h6 class="text-primary">Required Information *</h6>
    
    <div class="form-row">
      <div class="form-group col-sm-5">
        <label for="name"><h6>Full Name <b class="text-primary">*</b></h6></label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Full name" required>
      </div>
    </div>
    </br>

    
    <div class="form-row">
      <div class="form-group col-sm-5">
            <label for="designation"><h6>Designation <b class="text-primary">*</b></h6></label>
            <select class="form-control" id="designation" name="designation" required>
                <option value=""> - </option>  <!-- id="role"-->
                <option value="forester">Forester</option>
                <option value="rfo">Range Forest Officer</option>
                <option value="acf">Assistant Conservator of Forest</option>
                <option value="dfo">Divisional Forest Officer</option>
            </select>
      </div>
    </div>
    </br>

    
    <div class="form-row">
      <div class="form-group col-md-5">
        <label for="email"><h6>Email id <b class="text-primary">*</b></h6></label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email id" required>
      </div>
    </div>
    </br>

    <div class="form-row">
      <div class="form-group col-md-5">
      <label for="feedback"><h6>Write Here ... <b class="text-primary">*</b></h6></label>
        <textarea class="form-control" id="feedback" name="feedback" rows="3" required></textarea>
      </div>
    </div>

    
    <div class="text-center col-md-5" style="margin-top: 15px;">
      <button type="submit" class="btn btn-primary " style="padding:8px;">Submit</button>
    </div>
  </form>
  </div>

  <div class="col-md-4" style="position: fixed; margin-left: 65%; margin-top: 250px;">
          <img src="img/support1.jpg" class="img-fluid rounded-start" alt="...">
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