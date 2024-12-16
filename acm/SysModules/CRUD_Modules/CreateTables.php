<?php

/**
 * @CREATE_DB_TABLE
 *
 * @param string $tableName - The name of the table to be created.
 * @param array $columns - An associative array where keys are column names and values are column options.
 * @param bool $die - Optional parameter. If true, the function outputs the SQL query and stops execution.
 * @return string - A message indicating whether the table creation was successful or an error occurred.
 *
 * SQL statement to create the sample table
 * Each line corresponds to a column in the table
 * Adjust the column specifications based on your requirements
 
 * Integer column with auto-increment and primary key
 * -- id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY
 
 * Varchar column with maximum length and not null constraint
 * name VARCHAR(255) NOT NULL

 * Integer column
 * age INT(11)

 * Varchar column with unique constraint
 * email VARCHAR(255) UNIQUE

 * Timestamp column with default value
 * created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

 * Boolean column with default value
 * is_active BOOLEAN DEFAULT TRUE

 * Text column
 * description TEXT

 * Decimal column with precision and scale
 * price DECIMAL(10,2)

 * Binary large object column
 * image BLOB

 * Index on the 'name' column
 * INDEX(name)

 * Full-text index on 'name' and 'description' columns
 * FULLTEXT search_index(name, description)

 * Foreign key reference to another table
 * FOREIGN KEY (parent_id) REFERENCES parent_table(id) ON DELETE CASCADE

 * Check constraint on the 'age' column
 * CHECK (age >= 18)

 * Unique key constraint on 'name' and 'email' columns
 * UNIQUE KEY unique_constraint(name, email)* ;
 */

function CREATE_DB_TABLE($tableName, $columns, $die = false)
{

  // SQL statement to create the table
  $sql = "CREATE TABLE $tableName (";

  // Loop through each column and add it to the SQL statement
  foreach ($columns as $columnName => $columnOptions) {
    $sql .= "$columnName $columnOptions, ";
  }

  // Remove the trailing comma and space
  $sql = rtrim($sql, ", ");

  // Add any additional table options here if needed
  $sql .= ");";

  // Output the SQL query and stop execution if $die is true
  if ($die == true) {
    die($sql);
  }

  //execute query
  $QUERY = mysqli_query(DBConnection, $sql);
  $status = [];
  if ($QUERY == true) {
    $status['status'] = $QUERY;
    $status['msg'] = "<code><b>Success:</b> '<b>$tableName</b>' is created successfully!</code><br>";
  } else {
    $status['status'] = $QUERY;
    $status['msg'] = "<code><b>Error:</b> Unable to create table '<b>$tableName</b>' due to " . mysqli_error(DBConnection) . "</code><br>";
  }

  return $status;
}
