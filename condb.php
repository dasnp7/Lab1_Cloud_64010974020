<?php 
//connect database
$condb= mysqli_connect("localhost","root","12345678","internet") or die("Error: " . mysqli_error($condb));
mysqli_query($condb, "SET NAMES 'utf8' ");
date_default_timezone_set('Asia/Bangkok');
?>