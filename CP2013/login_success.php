<?php
error_reporting(E_ALL^E_NOTICE);
session_start();
$j = $_SESSION['profile'];
echo "$j";
?>