<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "nickrestourant";

$con = mysqli_connect($server, $user, $pass, $database);
if($con === false)
{
    die("Error: Not connected"). mysqli_error($con);
}
?>