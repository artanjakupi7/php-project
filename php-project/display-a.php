<?php

include 'database-connection.php';

// Retrieve the data from the "A" table
$sql = "SELECT * FROM A";
$result = mysqli_query($conn, $sql);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
  // Output the data in an HTML table
  echo "<table>";
  echo "<tr>";
  echo "<th>Table A</th>";
  echo "</tr>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["col_1"] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "No results found in A table";
}

// Close the database connection
mysqli_close($conn);

?>

<style>
/* Style the tables */
table {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

th {
  background-color: #4caf50;
  color: #fff;
}
</style>
