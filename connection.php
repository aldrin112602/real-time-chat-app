<?php
// Create connection
$conn = mysqli_connect("sql203.epizy.com","epiz_28760070","0jKWGEh4V2k","epiz_28760070_MyDb");

// Check connection
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
?>