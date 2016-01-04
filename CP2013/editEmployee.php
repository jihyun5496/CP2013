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
            <li><a href="addEmployee.php">Add Employee</a></li>
            <li class="active"><a href="editEmployee.php">Edit Employee Information</a></li>
            <li><a href="updateEmployee.php">Update Employee Salary</a></li>
            <li><a href="removeEmployee.php">Remove Employee</a></li>
          </ul>
          <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="endSession.php">Logout</a></li>
          </ul>
        </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-7 col-md-offset-2 main">



            <hr> </hr>


            <form class="form-horizontal"action="" method="post">
<div align="right">
  <div class="form-group">

              <label for="inputIc" class="col-sm-2 control-label">Current ID No.</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputIc" placeholder="" >
              </div>
            </div>
                <hr> </hr>
            <div class="form-group">
              <label for="inputFname" class="col-sm-2 control-label">New First Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputFname" placeholder="" name="fn">
              </div>
            </div>
            <div class="form-group">
              <label for="inputLname" class="col-sm-2 control-label">New Last Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputLname" placeholder="" name="ln">
              </div>
            </div>
            <div class="form-group">
              <label for="inputIc" class="col-sm-2 control-label">New ID No.</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputIc" placeholder="" name="ic">
              </div>
            </div>
            <div class="form-group">
              <label for="input" class="col-sm-2 control-label">New Address</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputIc" placeholder="" name="ad">
              </div>
            </div>
            <div class="form-group">
              <label for="input" class="col-sm-2 control-label">New Contact No.</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputIc" placeholder="" name="tel">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-default" value="Update Information" name="registerbtn">
              </div>
            </div>
</div>

                    <h4>List of Employee Details</h4>
                    <hr> </hr>
                <table class="table table-striped">
                    <tr>
                        <th>ID No.</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Contact No.</th>
                        <th>Address</th>
                        <th> Balance</th>
                        <th> Payment Method</th>
                        <th>Position</th>

                    </tr>
                    <tr>
                        <?php
                        error_reporting(E_ALL ^ E_DEPRECATED);
                        //connect db
                        mysql_connect('localhost','root','');

                        //select db
                        mysql_select_db('payroll_db');

                        $super = "SELECT * FROM user";

                        $records=mysql_query($super);

                        while($user=mysql_fetch_assoc($records)){
                            echo"<tr>";
                            echo"<td>".$user['user_ic']."</td>";
                            echo"<td>".$user['user_fname']."</td>";
                            echo"<td>".$user['user_lname']."</td>";
                            echo"<td>".$user['user_address']."</td>";
                            echo"<td>".$user['user_phone']."</td>";
                            echo"<td>".$user['total']."</td>";
                            echo"<td>".$user['user_payment']."</td>";
                            echo"<td>".$user['user_position']."</td>";
                            echo"</tr>";



                        }

                        ?>



                    </tr>
                </table>

<?php
error_reporting(E_ALL^E_NOTICE);
 if($_POST['registerbtn']){


                                         $useric=$_POST['ic'];
                                         $fname=$_POST['fn'];
                                         $lname=$_POST['ln'];
                                         $addr=$_POST['ad'];
                                         $tele=$_POST['tel'];






                         $link = mysqli_connect("localhost", "root", "","payroll_db");

                         $add=mysqli_query($link,"UPDATE user SET user_fname = '".$fname."' ,user_lname = '".$lname."' ,user_address = '".$addr."', user_phone = '".$tele."'  WHERE user_ic=  '".$useric."' ");

                         if($add) {
                           echo "Updating Successful.";
                         }else{
                           echo".:Error in Updating:.";

                         }



  }


?>
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
