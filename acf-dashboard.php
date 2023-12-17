<?php include "nav.php";?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assistant Conservator of Forest - Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  
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
      <li><a class="active" href="#" id="sidebar-item">Dashboard</a></li>
      <li><a href="acf-notifications.php" id="sidebar-item">Notifications</a></li>
      <li><a href="acf-submitted-reports.php" id="sidebar-item">Submitted Reports</a></li>
      <li><a href="acf-arg.php" id="sidebar-item">Acts ,Rules & Guidelines</a></li>
      <li><a href="acf-regoff.php" id="sidebar-item">Regional Offices</a></li>
      <li><a href="acf-support.php" id="sidebar-item">Support</a></li>
      <li><a href="login.php" id="sidebar-item" style="margin-top: 260px;">Logout</a></li>
    </ul>
  </div>

  <img src="img/homeimage.jpg"style="margin-left: 22%; margin-top:120px; width: 1140px; height: 350px;">

  
   <div style="margin-left: 22%; padding:20px; border-bottom-style: solid; border-color: #e6f0ff;">
   <h4>About the Project</h4>

   <p>Globally as well as nationally, Forest Conservation is increasingly being viewed as a powerful instrument in sequestering carbon and thereby offset adverse climate change. Maharashtra Forest Department, being custodian of the State’s rich and diverse bio-diversity, is committed to a conservation-centric management and protection strategy. Wild-life focused eco-tourism management hinges on sustainability.</p>
   <p>Intensive use of Information and Communication Technology supplemented by e-governance is under effective use to monitor ongoing forestry activities.</p>
   <p>Forest crime report system is a real time technology based solution to monitor criminal networks, criminal activities and associated incidents to provide actionable intelligence to the enforcement officials to undertake preventive measures against a possible crime.</p>
  </div>
 
  



<footer class="mb-auto pt-5 text-muted text-center text-small">
  <p class="mb-1">© 2022-2023 महाराष्ट्र वन विभाग महाराष्ट्र शासन </p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
</footer>

  



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
  
</html>