<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "file-management";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
