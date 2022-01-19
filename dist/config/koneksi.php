<?php
//error_reporting(0);

$dbhost = "localhost";
$dbuser = "almardiy_aplikasicuti";
$dbpass = "almardiy_aplikasicuti";
$dbname = "almardiy_aplikasicuti";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if ($conn) {
  die("Tidak dapat terhubung ke database: " . mysqli_error($conn));
}
