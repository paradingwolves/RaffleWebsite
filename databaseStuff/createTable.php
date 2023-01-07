<?php
  // Connect to the database
  require_once('connectvars.php');
  require_once('connection.php');

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  // Create table query
  $sql = "CREATE TABLE Entries (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    phoneNumber VARCHAR(20) NOT NULL,
    tickets INT(6) NOT NULL,
    email VARCHAR(50) NOT NULL
  )";

  // Execute query
  if (mysqli_query($conn, $sql)) {
      echo "Table Entries created successfully";
  } else {
      echo "Error creating table: " . mysqli_error($conn);
  }

  // Close connection
  mysqli_close($conn);
?>
