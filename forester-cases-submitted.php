<?php include "nav.php";?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>forester - Cases submitted</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     </head>
  <style>

.submittedcases {
        position: absolute;
        width: 75%;
        overflow-x: hidden;
        margin-left:23%;
        margin-top: 100px;
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
      <li><a href="forester-dashboard.php" id="sidebar-item">Dashboard</a></li>
      <li><a href="forester-reportcase.php" id="sidebar-item">Report Case</a></li>
      <li><a class="active" href="#" id="sidebar-item">Submitted Reports</a></li>
      <li><a href="forester-arg.php" id="sidebar-item">Acts ,Rules & Guidelines</a></li>
      <li><a href="forester-regoff.php" id="sidebar-item">Regional Offices</a></li>
      <li><a href="forester-support.php" id="sidebar-item">Support</a></li>
      <li><a href="login.php" id="sidebar-item" style="margin-top: 250px;">Logout</a></li>
    </ul>
  </div>


<div class="submittedcases">
  
<table class="table table-hover table-bordered table-striped" style="margin-top :30px;">
  <thead>
    <tr>
      <th>Date </br>(तारीख)</th>
      <th>Compartment Number </br>(कंपार्टमेंट नंबर)</th>
      <th>Designated Area </br>(नियत क्षेत्र)</th>
      <th>Circle </br>(परिमंडल)</th>
      <th>Forest Area </br>(वन परिक्षेत्र)</th>
      <th>Forest Department </br>(वन विभाग)</th>
      <th>Acts and Sections </br>(अधिनियम व कलमे)</th>
    </tr>
  </thead>

  <tbody>
    <?php 

        include 'dbconnect.php';

        $sql = "SELECT * FROM por WHERE username ='$username' ORDER BY id DESC" ;
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
                      <td><?php echo $row['date']; ?></td>
                      <td><?php echo $row['compartment_number']; ?></td>
                      <td><?php echo $row['designated_area']; ?></td>
                      <td><?php echo $row['circle']; ?></td>
                      <td><?php echo $row['forest_area']; ?></td>
                      <td><?php echo $row['forest_department']; ?></td>
                      <td><?php echo $row['acts_and_sections']; ?></td>
                      <td><a href="forester-por-viewpage.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning">View Details</a></td>
                    </tr>
    <?php
                }
            }
    ?>

  </tbody>
</table>



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