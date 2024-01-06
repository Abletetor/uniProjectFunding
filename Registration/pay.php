<?php

require 'dbh.inc.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to get the latest news
$sql = "SELECT id, title, content, date FROM news ORDER BY date DESC LIMIT 5";
$result = $conn->query($sql);

// Output data of each row
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Title: " . $row["title"]. " - Content: " . $row["content"]. " - Date: " . $row["date"]. "<br>";
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>