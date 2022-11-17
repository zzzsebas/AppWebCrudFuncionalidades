<?php
$servername = "localhost";
$database = "decimoA";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,
$username, $password, $database);
if (!$conn) {
    die("connection failed " . mysqli_connect());
}else{
   // print "<p> Connection true </p>\n";
    //header ("location: ../index.html", TRUE,301);
}


?>
