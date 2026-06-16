<?php
//Live Host
// $servername = "db5007204991.hosting-data.io";
// $username = "dbu1903535";
// $password = "Shamimhossanshamim";
// $dbname = "dbs5938572";

// // Local Host
$servername = "localhost";
$username = "freelancer_nayem";
$password = "Shamimhossanshamim";
$dbname = "scratch_card";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
