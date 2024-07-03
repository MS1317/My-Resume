<?php
require "db.php";

// Initialize arrays for storing fetched data
$cardData = [];
$lVideoData = [];
$webTechnology = [];
$reactWebsites = [];
$htmlWebsites = [];
$phpWebsites = [];
$wpWebsites = [];

// Fetch service cards data from the database
$cards = "SELECT * FROM service_cards";
$result = $conn->query($cards);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $cardData[] = $row;
    }
}

// Fetch latest video data from the database
$latestVideo = "SELECT * FROM videos";
$result2 = $conn->query($latestVideo);
if ($result2->num_rows > 0) {
    while ($row = $result2->fetch_assoc()) {
        $lVideoData[] = $row;
    }
}

// Fetch web technology data from the database
$webTechnologyQuery = "SELECT * FROM web_service";
$result3 = $conn->query($webTechnologyQuery);
if ($result3->num_rows > 0) {
    while ($row = $result3->fetch_assoc()) {
        $webTechnology[] = $row;
    }
}

// Fetch websites based on type
try {
    // React Websites
    $stmt = $conn->prepare('SELECT * FROM websites WHERE type = ?');
    $type = 'react';
    $stmt->bind_param('s', $type);
    $stmt->execute();
    $result4 = $stmt->get_result();
    $reactWebsites = $result4->fetch_all(MYSQLI_ASSOC);

    // HTML Websites
    $type = 'html';
    $stmt->execute();
    $result4 = $stmt->get_result();
    $htmlWebsites = $result4->fetch_all(MYSQLI_ASSOC);

    // PHP Websites
    $type = 'php';
    $stmt->execute();
    $result4 = $stmt->get_result();
    $phpWebsites = $result4->fetch_all(MYSQLI_ASSOC);

    // WordPress Websites
    $type = 'wordpress';
    $stmt->execute();
    $result4 = $stmt->get_result();
    $wpWebsites = $result4->fetch_all(MYSQLI_ASSOC);
} catch (mysqli_sql_exception $e) {
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$conn->close();
?>
