<?php
require "db.php";

// Fetch card data from the database
$cards = "SELECT * FROM service_cards";
$result = $conn->query($cards);

// Fetch latest video data from the database
$latestVideo = "SELECT * FROM videos";
$result2 = $conn->query($latestVideo); 

$cardData = [];
$lVideoData = [];

// Check if there are any rows returned for service cards
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $cardData[] = $row;
    }
} else {
    echo "0 Results for service cards";
}

// Check if there are any rows returned for videos
if ($result2->num_rows > 0) {
    while ($row = $result2->fetch_assoc()) {
        $lVideoData[] = $row;
    }
} else {
    echo "0 Results for videos";
}

// Close the database connection
$conn->close();
?>
