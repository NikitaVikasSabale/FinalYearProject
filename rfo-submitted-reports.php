<?php include "nav.php";?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Range Forest Officer - Submitted reports</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <style>

.submittedreports {
        position: absolute;
        max-width: 100%;
        overflow-x: hidden;
        margin-left:30%;
        margin-top: 150px;
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
      <li><a href="rfo-notifications.php" id="sidebar-item">Notifications</a></li>
      <li><a class="active" href="#" id="sidebar-item">Submitted Reports</a></li>
      <li><a href="rfo-arg.php" id="sidebar-item">Acts ,Rules & Guidelines</a></li>
      <li><a href="rfo-regoff.php" id="sidebar-item">Regional Offices</a></li>
      <li><a href="rfo-support.php" id="sidebar-item">Support</a></li>
      <li><a href="login.php" id="sidebar-item" style="margin-top: 260px;">Logout</a></li>
    </ul>
  </div>

  <div class="submittedreports">
  
  <table class="table table-hover table-bordered table-striped" style="margin-top :30px;">
    <thead>
      <tr>
        <th>Submitted on Date - (तारीख)</th>
        <th>Description of the crime ( अपराधाचे वर्णन )</th>
        <th>Click 'View Details' button to see the details</th>

      </tr>
    </thead>
  
    <tbody>
      <?php 
  
          include 'dbconnect.php';
  
          $sql = "SELECT * FROM investigation WHERE username ='$username' ORDER BY id DESC" ;
          $result = mysqli_query($conn, $sql);
  
          if(!$result)
              {
                die("Failed ! ".mysqli_error());
              }
          else
              {
                while($row = mysqli_fetch_assoc($result)) {
      ?>
                      <tr>
                        <td><?php echo $row['commencement_date']; ?></td>
                        <td><?php echo $row['desc_of_crime']; ?></td>
                        <td class="text-center"><a href="rfo-submitted-reports-viewpage.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning">View Details</a></td>
                      </tr>
      <?php
                  }
              }
      ?>
  
    </tbody>
  </table>
  
  
  
  </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
  
</html>