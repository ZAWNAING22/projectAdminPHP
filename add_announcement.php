<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['announcement_title'];
    $content = $_POST['announcement_content'];

    $sql = "INSERT INTO announcements (title, content) VALUES ('$title', '$content')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Announcement added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
