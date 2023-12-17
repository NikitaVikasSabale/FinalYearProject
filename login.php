<?php
session_start();
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "Select * from login where username='$username' AND password='$password'";
    //echo $sql;exit;
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            //if (password_verify($password, $row['password']))
              // {
                $role=$row['role'];
                $name=$row['name'];
                $forest_area=$row['forest_area'];
                $circle=$row['circle'];
              }
              $login = true;
                $_SESSION['username']=$username;
                $_SESSION['password']=$password;
                $_SESSION['role']=$role;
                $_SESSION['name']=$name;
                $_SESSION['forest_area']=$forest_area;
                $_SESSION['circle']=$circle;
                if($role=='admin')
                {
                 // echo "admin"; exit; 
                header("Location:admin-dashboard.php");
                }
                else if($role=='forester')
                {
                    header('Location:forester-dashboard.php');
                }
                else if($role=='rfo')
                {
                    header('Location:rfo-dashboard.php');
                }
                else if($role=='acf')
                {
                    header('Location:acf-dashboard.php');
                }
                else if($role=='dfo')
                {
                    header('Location:dfo-dashboard.php');
                }
            }
    else 
    {
      echo '<span class="text-danger" style="margin-left: 700px;">
      <strong>Failed ! </strong> Invalid credentials .
      </span>';
    }
            
}
?>
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

 
<style>

      form {
          border: 3px solid #f1f1f1;
          border-radius: 4%;
          margin-top: 190px;
          margin-right: 550px;
          margin-left: 550px;
      }

      input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }

      .container {
        padding: 20px;
        background-color: white;
        border-radius: 4%;
        
      }

      span.psw {
        float: right;
        padding-top: 16px;
      }

      .bg-img {
        background-image: url("img/home.jpg");
        min-height: 380px;
      
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: fixed;
      }

      /* Change styles for span and cancel button on extra small screens */
      @media screen and (max-width: 300px) {
        span.psw {
          display: block;
          float: none;
        }
      }
        
          .nav {
            list-style-type: none;
            margin: 0px;
            padding: 0px;
            background-color: Blue;
            position: fixed;
            width: 100%;
            z-index: 1;
          }

          .nav-heading {
            float: left;
            display: block;
            color: white;
            font-size:20px;
            padding: 10px 20px;
            text-decoration: none;
          }

          #logo{
          border-radius:50%;
          padding:10px;
          width: 120px;
          height: 120px;
          }


          #sidebar {
            list-style-type: none;
            margin: 0;
            padding: 10px;
            width: 22%;
            background-color: white;
            position: fixed;
            height: 100%;
            overflow: auto;
            margin-top: 120px;
            border-right-style: solid;
            border-color: #e6f0ff;
          }

          #sidebar-item {
            display: block;
            color: #000;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 5px;
          }


          #sidebar-item.active {
            background-color: blue;
            color: white;
          }

          #sidebar-item:hover:not(.active) {
            background-color: #66a3ff;
            color: white;
          }

</style>


</head>
<body>
    <div class="nav">
            <img src="img/logo.png" id="logo"></img>
            <div class="nav-heading">महाराष्ट्र वन विभाग महाराष्ट्र शासन <br> MAHARASHTRA FOREST DEPARTMENT <br>  Government of Maharashtra</div>
            </div>  
    </div>
<div class="bg-img">

<form action="login.php" method="post">
  <div class="container">
   <p><b>Forest crime report system</b> is a real time technology based solution to monitor criminal networks, criminal activities to provide actionable intelligence to undertake preventive measures against a possible crime.</p>
 
    <label for="username"><b>Username</b></label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
        
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>

    <div class=" text-center">
    <button type="submit" class="btn btn-primary col-4">Login</button>
    </div>
  </div>
  
</form>

<footer class="text-muted text-center text-small" style="margin-top: 75px;">
  <p class="mb-1 text-light">© 2022-2023 महाराष्ट्र वन विभाग महाराष्ट्र शासन </p>
    <ul class="list-inline text-light">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
</body>
</div>
</html>
