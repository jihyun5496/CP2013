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






$sql="SELECT * FROM user WHERE user_name='".$username."' AND user_pass='".$password."' LIMIT 1";
$result = mysql_query($sql);
if (mysql_num_rows($result) == 1){
    echo"Successful";
    session_start();
    $_SESSION['profile'] = $username;
    header("Location: editEmployee.php");
   exit();
}else{
    header("Location: error.php");
}

}
?>