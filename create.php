<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $field1 = $conn->real_escape_string($_POST['field1']);
    $field2 = $conn->real_escape_string($_POST['field2']);

    $sql = "INSERT INTO example_table (field1, field2) VALUES ('$field1', '$field2')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
