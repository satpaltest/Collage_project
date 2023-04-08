<?php 
session_start();
error_reporting(E_ALL);

include "conn.php";
session_unset();

session_destroy();

header('location:index.php');

 ?>