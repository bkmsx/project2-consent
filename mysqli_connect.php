<?php
$servername = "216.198.213.85:3306";
$username = "tiensql";
$password = "Jus!sk$1SpoaSWa1#";
$dbname = "novumcapitalkyc";

$dbc = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($dbc->connect_error) {
    die("Connection failed: " . $dbc->connect_error);
} 

?>