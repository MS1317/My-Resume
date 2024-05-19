<?php
require "db.php";
// Fetch card data from the database
$sql = "SELECT * FROM service_cards";
$result = $conn->query($sql);

// Check if there are any rows returned
if ($result->num_rows>0) {
    $cardData=[];
    while ($row = $result->fetch_assoc()) {
        $cardData[] = $row;
    }
}
else {
    echo" 0 Results";
}

// Close the database connection
$conn->close();
