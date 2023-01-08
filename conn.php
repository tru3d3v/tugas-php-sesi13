<?php
  $db_host = '127.0.0.1';
  $db_user = 'muchlis';
  $db_password = 'mypwd';
  $db = 'web';

$conn = new mysqli($db_host, $db_user, $db_password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>