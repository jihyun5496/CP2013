<?php


error_reporting(E_ALL^E_NOTICE);
session_start();
$j = $_SESSION['profile'];


if (!(isset($_SESSION['profile']) != '')) {

header ("Location: login.php");

}


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>PayRoll System</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet"> 
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>   
  </head>

  <body>

    

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="addEmployee.php">Add Employee <span class="sr-only">(current)</span></a></li>
            <li><a href="editEmployee.php">Edit Employee Information</a></li>
            <li><a href="updateEmployee.php">Update Employee Salary</a></li>
            <li class="active"><a href="removeEmployee.php">Remove Employee</a></li>
          </ul>
          <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="endSession.php">Logout</a></li>
          </ul>
        </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-7 col-md-offset-2 main">
          <form class="form-horizontal" action="" method="post">

            <div class="form-group">
              <label for="inputIc" class="col-sm-2 control-label">ID No.</label>
              <div class="col-sm-10">
                <input type="text" name="ic" class="form-control" id="inputIc" placeholder="Insert Employee ID">
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" name="registerbtn" class="btn btn-default" value="Remove Employee"/><br>

            
                <?php
                if($_POST['registerbtn']){
                $ic=$_POST['ic'];

                $link = mysqli_connect("localhost", "root", "","payroll_db");

      
                $del=mysqli_query($link,"DELETE FROM user WHERE user_ic=  '".$ic."' ");

                if($del) {
                    echo"<br>";
                    echo "Delete Successful.";
                          }else{
                          echo"<br>";
                                 echo".:Error in Deleting:.";

                                }



 }



?>

                  


                



              </div>
            </div>
          </form>

         
        </div>
      </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <script src="../../assets/js/vendor/holder.js"></script>

    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
