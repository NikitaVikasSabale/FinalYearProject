<?php include "nav.php";?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>forester - Acts , Rules & Guidelines</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <style>

.actsinfo {
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
      <li><a href="forester-dashboard.php" id="sidebar-item">Dashboard</a></li>
      <li><a href="forester-reportcase.php" id="sidebar-item">Report Case</a></li>
      <li><a href="forester-cases-submitted.php" id="sidebar-item">Cases Submitted</a></li>
      <li><a class="active" href="#" id="sidebar-item">Acts ,Rules & Guidelines</a></li>
      <li><a href="forester-regoff.php" id="sidebar-item">Regional Offices</a></li>
      <li><a href="forester-support.php" id="sidebar-item">Support</a></li>
      <li><a href="login.php" id="sidebar-item" style="margin-top: 250px;">Logout</a></li>
    </ul>
  </div>

  

  <div class="actsinfo">
  <div class="row">
    <div class="col-sm-4">
      <div class="card bg-warning" style="width: 18rem;">
        <img class="card-img-top" src="img\Indian Forest Act 1.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Indian Forest Act , 1927</h5>
          <p class="card-text">The Act makes various provisions for such conservation of forests and in the scheme, it provides for a State Government to constitute any forest lands or wastelands, over which the Government have proprietary rights, a reserved forest.</p>
          <a href="forester-i-f-a.php" class="btn btn-outline-dark">Read More ...</a>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="card bg-warning" style="width: 18rem;">
        <img class="card-img-top" src="img\wildlife protection act.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Wildlife Protection Act , 1972</h5>
          <p class="card-text">The Act empowers the Central Govt. to declare certain areas as Sanctuaries or National Parks and prohibits hunting of wild animals; birds etc. and impose punishment for violating the same.</p>
          <a href="forester-w-p-a.php" class="btn btn-outline-dark">Read More ...</a>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="card bg-warning" style="width: 18rem;">
        <img class="card-img-top" src="img\forest conservation act.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Forest Conservation Act , 1980</h5>
          <p class="card-text">Forest(Conservation) ACT, 1980 with Amendments Made in 1988. An Act provide for the conservation of forests and for matters connected there with or ancillary or incidental there to.</p>
          <a href="forester-f-c-a.php" class="btn btn-outline-dark">Read More ...</a>
        </div>
      </div>
    </div>
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

  



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
  
</html>