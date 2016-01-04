<?php

$host="localhost";
$user="root";
$pass="";
$db="payroll_db";

mysql_connect($host, $user, $pass);
mysql_select_db($db);

if(isset($_POST['username'])){
    $username= $_POST['username'];
    $password=$_POST['password'];






$sql="SELECT * FROM admin WHERE admin_username='".$username."' AND admin_password='".$password."' LIMIT 1";
$result = mysql_query($sql);
if (mysql_num_rows($result) == 1){
    echo"Successful";
    session_start();
    $_SESSION['profile'] = $username;
    header("Location: addEmployee.php");
   exit();
}else{
    header("Location: error.php");
}

}
?>