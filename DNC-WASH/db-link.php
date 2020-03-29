<?php

putenv("TZ=America/New_York");
date_default_timezone_set("America/New_York");

$servername = "localhost";
$username = "cron";
$password = "1234";
$dbname = "asterisk";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$today = date("Y-m-d H:i:s");

?>