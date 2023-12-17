<?php
session_start();

if (isset($_SESSION['username']))
{
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$name = $_SESSION['name'];
$forest_area = $_SESSION['forest_area'];

}

else
header('location:login.php');

?>
<style>
   
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

<?php 
    
    include 'dbconnect.php';

    $sql = "SELECT * FROM `login`";
    $result = mysqli_query($conn, $sql);
  
    ?>    

          



   
   

         