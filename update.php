<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $conn->real_escape_string($_POST['id']);
    $field1 = $conn->real_escape_string($_POST['field1']);
    $field2 = $conn->real_escape_string($_POST['field2']);

    $sql = "UPDATE example_table SET field1='$field1', field2='$field2' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>
