<?php
require "db.php";

// Fetch card data from the database
$cards = "SELECT * FROM service_cards";
$result = $conn->query($cards);

// Fetch latest video data from the database
$latestVideo = "SELECT * FROM videos";
$result2 = $conn->query($latestVideo); 

// Fetch web technology data from the database
$webTechnology = "SELECT * FROM websites";
$result3 = $conn->query($webTechnology); 

$cardData = [];
$lVideoData = [];
$webTechnology = [];


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

// Check if there are any rows returned for web technology
if ($result3->num_rows > 0) {
    while ($row = $result3->fetch_assoc()) {
        $webTechnology[] = $row;
    }
} else {
    echo "0 Results for web technology";
}

// Close the database connection
$conn->close();
?>
