<?php

include 'database-connection.php';

// Get the form data
$a_input = mysqli_real_escape_string($conn, $_POST['a-input']);
$b_input = mysqli_real_escape_string($conn, $_POST['b-input']);
$c_input = mysqli_real_escape_string($conn, $_POST['c-input']);

// // Validate the b-input field
// if (!is_numeric($b_input)) {
//   die("Error: b-input must be a number");
// }
if ($a_input != "") {
// Insert the data into the "A" table
$sql = "INSERT INTO A (col_1) VALUES ('$a_input')";

if (mysqli_query($conn, $sql)) {
  echo "Record added to A table successfully";
} else {
  echo "Error adding record to A table: " . mysqli_error($conn);
}
}

if ($b_input != "") {
// Insert the data into the "B" table
$sql = "INSERT INTO B (col_1) VALUES ('$b_input')";

if (mysqli_query($conn, $sql)) {
  echo "Record added to B table successfully";
} else {
  echo "Error adding record to B table: " . mysqli_error($conn);
}
}

if ($c_input != "") {
// Insert the data into the "C" table
$sql = "INSERT INTO C (col_1) VALUES ('$c_input')";

if (mysqli_query($conn, $sql)) {
  echo "Record added to C table successfully";
} else {
  echo "Error adding record to C table: " . mysqli_error($conn);
}
}

// Close the database connection
mysqli_close($conn);
