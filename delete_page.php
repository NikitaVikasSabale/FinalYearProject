<?php include 'dbconnect.php'; ?>


<?php

if(isset($_GET['username'])) {
    $username = $_GET['username'];
    $role = $_GET['role'];
}

        $sql = "DELETE FROM `login` WHERE `username` = '$username'";
        $result = mysqli_query($conn, $sql);

        if(!$result)
            {
              die("Failed ! ".mysqli_error());
            }
            else {
                if($role=='forester')
                {
                    header('Location:admin-add-forester.php');
                }
                else if($role=='rfo')
                {
                    header('Location:admin-add-rfo.php');
                }
                else if($role=='acf')
                {
                    header('Location:admin-add-acf.php');
                }
                else if($role=='dfo')
                {
                    header('Location:admin-add-dfo.php');
                }
            }

?>