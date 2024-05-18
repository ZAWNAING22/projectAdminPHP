<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entity_name = $_POST['entity_name'];
    $entity_type = $_POST['entity_type'];
    $action = $_POST['action'];

    if ($action == 'register') {
        $sql = "INSERT INTO entities (name, type) VALUES ('$entity_name', '$entity_type')";
    } elseif ($action == 'update') {
        $entity_id = $_POST['entity_id'];
        $sql = "UPDATE entities SET name='$entity_name', type='$entity_type' WHERE id=$entity_id";
    } elseif ($action == 'delete') {
        $entity_id = $_POST['entity_id'];
        $sql = "DELETE FROM entities WHERE id=$entity_id";
    }

    if ($conn->query($sql) === TRUE) {
        echo ucfirst($action) . "d entity successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
