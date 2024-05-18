<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message_id = $_POST['message_id'];
    $response = $_POST['response'];

    $sql = "UPDATE messages SET response='$response' WHERE id=$message_id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Response sent successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
