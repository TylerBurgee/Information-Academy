<?php
include 'db_connection.php';
 
$conn = OpenCon();
 
echo "Connected Successfully";

$query = mysql_query("SELECT * FROM messages");

echo $query;

CloseCon($conn);
 
?>