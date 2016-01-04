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

    <title>PayRoll Management System</title>
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
            <li class="active"><a href="updateEmployee.php">Update Employee Salary</a></li>
            <li><a href="removeEmployee.php">Remove Employee</a></li>
          </ul>
          <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="endSession.php">Logout</a></li>
          </ul>
        </div>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
        <div class="col-md-1"></div>
        <div class="col-md-7 col-md-offset-2 main">
          <form class="form-horizontal" action="" method="post">
              <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Position:</label>
                  <div class="col-sm-10">
                      <select name='position'>
                          <option value='Full Time' selected>Full Time</option>
                          <option value='Part Time'>Part Time</option>
                      </select>
                  </div>
              </div>

              <div class="form-group">
              <label for="input" class="col-sm-2 control-label">Employee ID</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputIc" placeholder="" name="ic">
              </div>
            </div>


            <div class="form-group">
              <label for="inputFname" class="col-sm-2 control-label">Hours Worked</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputFname" placeholder="" name="wk">
              </div>
            </div>
            <div class="form-group">
              <label for="inputLname" class="col-sm-2 control-label">Overtime</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputLname" placeholder="" name="ot">
              </div>
            </div>
            <div class="form-group">
              <label for="inputIc" class="col-sm-2 control-label">Bonus</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputIc" placeholder="" name="bo">
              </div>
            </div>
          <div align="right">
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-default" name="registerbtn" value="Submit">
              </div>
            </div>
          </div>






          </form>


         <?php
          if($_POST['registerbtn']){


                           $useric=$_POST['ic'];
                           $work=$_POST['wk'];
                           $over=$_POST['ot'];
                           $bon=$_POST['bo'];
                           $myposition = $_POST["position"];






           $link = mysqli_connect("localhost", "root", "","payroll_db");

           $add=mysqli_query($link,"UPDATE user SET workhour = '".$work."' ,overtime = '".$over."' ,bonus = '".$bon."'  WHERE user_ic='".$useric."' ");
          if($myposition=="Full Time"){
              $plus=mysqli_query($link,"UPDATE user SET total = (($work*12)+($over*12*1.25)+$bon) WHERE user_ic='".$useric."'  ");
              $pos=mysqli_query($link,"UPDATE user SET user_position='".$myposition."' WHERE user_ic='".$useric."' ");

          }
          if($myposition=="Part Time"){
          $plus=mysqli_query($link,"UPDATE user SET total = ((workhour*8)+(overtime*8*1.25)+bonus) WHERE user_ic='".$useric."'  ");
              $pos=mysqli_query($link,"UPDATE user SET user_position='".$myposition."' WHERE user_ic='".$useric."' ");


          }



           if($add) {
             echo "Updating Succesful.";
           }else{
             echo".:Error in Updating:.";

           }



          }



         ?>





        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="../../assets/js/vendor/holder.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
