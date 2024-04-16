<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enter";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$nameFilter = '';
if (isset($_GET['ename'])) {
    $ename = $conn->real_escape_string($_GET['ename']);
    $nameFilter = " WHERE ename LIKE '%$ename%'";
}

$sql = "SELECT id, ename, category, price FROM products" . $nameFilter;

$result = $conn->query($sql);

$data = [];
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $data[] = $row;
  }
  echo json_encode($data);
} else {
  echo json_encode([]);
}

$conn->close();
?>
