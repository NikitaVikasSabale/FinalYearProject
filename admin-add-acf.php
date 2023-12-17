<?php include "nav.php";?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Module</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
  <style>
      
      .addlogins {
        position: absolute;
        width: 75%;
        overflow-x: hidden;
        margin-left:23%;
        margin-top: 150px;
       }

       .alert {
        position: absolute;
        width: 75%;
        overflow-x: hidden;
        margin-left:23%;
        margin-top: 90px;
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
      <li><a href="admin-dashboard.php" id="sidebar-item">Dashboard</a></li>
      <li><a href="admin-add-forester.php" id="sidebar-item">Add Forester</a></li>
      <li><a href="admin-add-rfo.php"id="sidebar-item">Add Range forest Officer</a></li>
      <li><a class="active" href="#" id="sidebar-item">Add Assistant Conservator of Forest</a></li>
      <li><a href="admin-add-dfo.php" id="sidebar-item">Add Divisional Forest Officer</a></li>
      <li><a href="admin-support.php" id="sidebar-item">Support</a></li>
     
      <li><a href="login.php" id="sidebar-item" style="margin-top: 250px;">Logout</a></li>
    </ul>
  </div>

<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
          $name = $_POST['name'];
          $username = $_POST['username'];
          $password = $_POST['password'];
          $designation = $_POST['designation'];
          $forest_area = $_POST['forest_area'];
          $forest_department = $_POST['forest_department'];
   
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
              $sql = "INSERT INTO `login` (`name`, `username`, `password`, `role`, `forest_area`, `forest_department`) VALUES ('$name', '$username', '$password', 'acf', '$forest_area', '$forest_department')";
              $result = mysqli_query($conn, $sql);
        

                if($result)
                  {
                      echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-left: 23%;">
                      <strong>Success ! </strong> User ' . $name. '   added successfully . 
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                  }
                else
                  {
                      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-left: 23%;">
                      <strong>Failed ! </strong> Failed to add user.
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                  }
              }
      }
?>


<div class="addlogins">
  <form action="admin-add-acf.php" method="post">
    <h1 class="text-center">Add a User </h1>
    <div class="form-row">

        <div class="form-group col-md-3">
            <label for="username"><b>Full Name</b></label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
        </div>

        <div class="form-group col-md-2">
            <label for="username"><b>Username</b></label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
        </div>

        <div class="form-group col-md-2">
            <label for="password"><b>Password</b></label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>

        <div class="form-group col-md-2">
            <label for="forest_department"><b>Forest Department</b></label>
            <select class="form-control" name="forest_department" required>
                <option>-</option>
                <option>Satara</option>  
            </select>
        </div>

        <div class="form-group col-md-2">
            <label for="forest_area"><b>Forest area</b></label>
            <select class="form-control" name="forest_area">
                <option>-</option>
                <option>Khandala</option><option>Koregaon</option><option>Mahabaleshwar</option><option>Medha</option><option>Patan</option>
                <option>Phaltan</option><option>Satara</option><option>Vaduj</option><option>Wai</option>  
            </select>
        </div>

        

    </div>

    <div class="text-center col-md-12">
      <button type="submit" class="btn btn-primary" style="padding:8px;">Submit</button>
    </div>
    
  </form>

<table class="table table-hover table-bordered table-striped" style="margin-top :30px;">
  <thead>
    <tr>
      <th>Full Name</th>
      <th>Username</th>
      <th>Password</th>
      <th>Designation</th>
      <th>Forest department</th>
      <th>Forest area</th>
      
      <th>Delete</th>
    </tr>
  </thead>

  <tbody>
    <?php 
    
        include 'dbconnect.php';

        $sql = "SELECT * FROM login WHERE role='acf'";
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
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['username']; ?></td>
                      <td><?php echo $row['password']; ?></td>
                      <td><?php echo $row['role']; ?></td>
                      <td><?php echo $row['forest_department']; ?></td>
                      <td><?php echo $row['forest_area']; ?></td>
                      
                      <td><a href="delete_page.php?username=<?php echo $row['username']; ?>&role=<?php echo $row['role']; ?>" class="btn btn-sm btn-danger">Delete</a></td>
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