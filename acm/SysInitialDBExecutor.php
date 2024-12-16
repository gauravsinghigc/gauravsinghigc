<?php
if (isset($_GET['sys_sql']) == "Gsi@" . date("dmy")) {

  // Create connection
  $conn = DBConnection;

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // SQL file path
  $sqlFilePath = __DIR__ . "/MySqlFiles/InitialTables.sql";

  // Read SQL file
  $sqlContent = file_get_contents($sqlFilePath);

  // Execute multi-query (assuming the SQL file contains multiple queries separated by semicolons)
  if ($conn->multi_query($sqlContent)) {
    $_SESSION['success'] = "Initial Database table are created successfully";
    header("location: " . DOMAIN);
  } else {
    $_SESSION['warning'] = "Unable to create initial Database Tables";
    header("location: " . DOMAIN);
  }

  // Close connection
  $conn->close();
}
