<?php
include 'db.php';

$sql = "SELECT * FROM example_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Field 1: " . $row["field1"]. " - Field 2: " . $row["field2"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
