<?php


error_reporting(E_ALL^E_NOTICE);
session_start();
$j = $_SESSION['profile'];

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Employee Sign In</title>


    <link href="css/bootstrap.css" rel="stylesheet">


    <link href="css/custom.css" rel="stylesheet">

  </head>

  <body>
  <style type="text/css">
      .classname {
          -moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
          -webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
          box-shadow:inset 0px 1px 0px 0px #ffffff;
          background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf) );
          background:-moz-linear-gradient( center top, #ededed 5%, #dfdfdf 100% );
          filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
          background-color:#ededed;
          -webkit-border-top-left-radius:14px;
          -moz-border-radius-topleft:14px;
          border-top-left-radius:14px;
          -webkit-border-top-right-radius:14px;
          -moz-border-radius-topright:14px;
          border-top-right-radius:14px;
          -webkit-border-bottom-right-radius:14px;
          -moz-border-radius-bottomright:14px;
          border-bottom-right-radius:14px;
          -webkit-border-bottom-left-radius:14px;
          -moz-border-radius-bottomleft:14px;
          border-bottom-left-radius:14px;
          text-indent:0px;
          border:1px solid #dcdcdc;
          display:inline-block;
          color:#777777;
          font-family:Arial;
          font-size:19px;
          font-weight:bold;
          font-style:normal;
          height:38px;
          line-height:38px;
          width:270px;
          text-decoration:none;
          text-align:center;
          text-shadow:1px 1px 0px #ffffff;
      }
      .classname:hover {
          background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed) );
          background:-moz-linear-gradient( center top, #dfdfdf 5%, #ededed 100% );
          filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
          background-color:#dfdfdf;
      }.classname:active {
           position:relative;
           top:1px;
       }</style>

    <div class="container">

      <form class="form-signin" action="checklogin.php" method="post">
        <center><img src="image/black-white-metro-administrator-icon.png" width="200" height="200"></center>
          <h2></h2>

        <label for="username" class="sr-only">Username</label><br/><br/>
        <input type="username" name="username" class="form-control" placeholder="Employee username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label><br/>
        <input type="password" name="password" class="form-control" placeholder="Employee password" required>
        <div class="checkbox">
        </div>
        <input type='submit' name='do_login' value='Login' class="classname"/>
      </form>
        <br/><a href="login.php"></a>

       <center>


           <a href="../login.php"/> <img src="image/icon-ios7-gear-128.png" width="50" height="50">





    </div>


    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>