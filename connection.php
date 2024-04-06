<?php

// Create connection
$con = new mysqli('localhost', 'root', '', 'schoolproject');

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
} else {
  echo "Successfully established";
}

?>




