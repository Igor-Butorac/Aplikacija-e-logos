<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "e_logos"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}