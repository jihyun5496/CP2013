<?php


error_reporting(E_ALL^E_NOTICE);
session_start();
$us = $_SESSION['profile'];


if (!(isset($_SESSION['profile']) != '')) {

header ("Location: index.php");

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



        <ul class="nav navbar-right">
            <li><a href="destroy.php">Logout</a></li>
        </ul>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <?php
                    error_reporting(E_ALL ^ E_DEPRECATED);

                    $username= $us;

                    //connect db
                    mysql_connect('localhost','root','');

                    //select db
                    mysql_select_db('payroll_db');

                    $super = "SELECT * FROM user where user_name= '".$username."' ";

                    $records=mysql_query($super);

                    while($user=mysql_fetch_assoc($records)){
                        echo"<tr>";

                        echo"<h4>  Current Balance : <font color='#4169e1'> $".$user['total']."</font></h4>";
                        echo "<h4> Preferred Payment Method : <font color='#4169e1'> ".$user['user_payment']."</font></h4>";



                    }





                    ?>



                    <br><br><br>
                    <br>
                    <form action='' method='post'>
                        New Payment Method : <select name='payment'>
                            <option value='POSB/DBS' selected>POSB/DBS</option>
                            <option value='CASH'>CASH</option>
                            <option value='OCBC'>OCBC</option>
                        </select>
                        <input name = 'lbutton' type='submit' value='Update'/><br>

                        <?php
                        error_reporting(E_ALL^E_NOTICE);

                        $mypayment = $_POST["payment"];

                        $link = mysqli_connect("localhost", "root", "","payroll_db");
                        $message1= 'You have successfully subscribed Payment Method with Bank ';
                        $message2= 'Thanks For working with ';


                        if($_POST['lbutton']){

                            $add=mysqli_query($link,"UPDATE user SET user_payment='".$mypayment."' WHERE user_name='".$us."' ");


                            if(!$add){
                                echo "<br>";
                                echo"Error In Choosing Payment Method";
                            }else{
                                echo "<br>";
                                echo $message1."<font color='red'>".$mypayment."</font>" ;
                                echo "<br>";
                                echo $message2."<font color='red'>".$mypayment."</font>" ;
                            }
                        }
                        ?>
                    </form><br><br>

                    </div>

        <div class="col-md-1"></div>
        <div class="col-md-7 col-md-offset-2 main">

            <table class="table table-striped">
                <tr>
                    <th>ID No.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Contact No.</th>
                    <th>Address</th>

                </tr>
                <tr>
                    <?php
                    error_reporting(E_ALL ^ E_DEPRECATED);

                    $username= $us;
                    //connect db
                    mysql_connect('localhost','root','');

                    //select db
                    mysql_select_db('payroll_db');

                    $super = "SELECT * FROM user where user_name= '".$username."' ";

                    $records=mysql_query($super);

                    while($user=mysql_fetch_assoc($records)){
                        echo"<tr>";
                        echo"<td>".$user['user_ic']."</td>";
                        echo"<td>".$user['user_fname']."</td>";
                        echo"<td>".$user['user_lname']."</td>";
                        echo"<td>".$user['user_phone']."</td>";
                        echo"<td>".$user['user_address']."</td>";

                        echo"</tr>";



                    }
                    ?>

                </tr>
            </table>
          <form class="form-horizontal"action="" method="post">


            <div class="form-group">

              <div class="col-sm-10">

              </div>
            </div>

              <div class="form-group">
                  <label for="inputFname" class="col-sm-2 control-label">First Name</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputFname" placeholder="Insert New First Name" name="fn">
                  </div>
              </div>
              <div class="form-group">
                  <label for="inputLname" class="col-sm-2 control-label">Last Name</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputLname" placeholder="Insert New Last Name" name="ln">
                  </div>
              </div>


              <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Contact No.</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputIc" placeholder="Insert New Contact No." name="tel">
                  </div>
              </div>
              <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Address</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputIc" placeholder="Insert New Address" name="ad">
                  </div>
              </div>
              <div class="form-group" align="right">
                  <div class="col-sm-offset-2 col-sm-10">
                      <input type="submit" class="btn btn-default" value="Update Details" name="registerbtn">
                  </div>
              </div>






<?php
error_reporting(E_ALL^E_NOTICE);
 $username= $us;
 if($_POST['registerbtn']){



                                         $fname=$_POST['fn'];
                                         $lname=$_POST['ln'];
                                         $addr=$_POST['ad'];
                                         $tele=$_POST['tel'];






                         $link = mysqli_connect("localhost", "root", "","payroll_db");

                         $add=mysqli_query($link,"UPDATE user SET user_fname = '".$fname."' ,user_lname = '".$lname."' ,user_address = '".$addr."', user_phone = '".$tele."'  WHERE user_name= '".$username."' ");

                         if($add) {
                           echo "Updating Succesful.";
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


