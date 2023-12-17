<?php include "nav.php";?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DFO - Notifications</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
      </head>
<style>
.notifications {
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
      <li><a class="active" href="#" id="sidebar-item">Notifications</a></li>
      <li><a href="dfo-arg.php" id="sidebar-item">Acts ,Rules & Guidelines</a></li>
      <li><a href="dfo-regoff.php" id="sidebar-item">Regional Offices</a></li>
      <li><a href="dfo-support.php" id="sidebar-item">Support</a></li>
      <li><a href="login.php" id="sidebar-item" style="margin-top: 300px;">Logout</a></li>
    </ul>
  </div>

<div class="notifications">
    


<?php 
    
        include 'dbconnect.php';

        $sql = "SELECT por.id,por.name,por.acts_and_sections,por.time 
        FROM por 
        INNER JOIN investigation
        ON por.id = investigation.id ORDER BY id DESC" ;
        
        $result = mysqli_query($conn, $sql);

        if(!$result)
            {
              die("Failed ! ".mysqli_error());
            }
        else
            {
              while($row = mysqli_fetch_assoc($result)) {
    ?>
                  <div class="alert alert-warning col-md-12" role="alert">
                  
                    <p> <b> New Case filed by <?php echo $row['name']; ?> </b>under act <?php echo $row['acts_and_sections']; ?> .</p>
                    
                    <a href="dfo-notifications-por.php?id=<?php echo $row['id']; ?>" class="alert-link">Click hear to see the details  </a><span style="margin-left: 700px; font-size: 12px;"> <?php echo $row['time'];?> </span>
                  </div>  
    <?php
                }
            }
    ?>
   

</div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
  
</html>