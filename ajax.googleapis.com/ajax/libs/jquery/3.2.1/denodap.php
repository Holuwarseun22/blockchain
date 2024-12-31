<?php
// denodap.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get POST data
    $dappWord = $_POST['dappWord'];
    $dappAddress = $_POST['dappAddress'];
    $dappName = $_POST['dappName'];

    // Process the data (e.g., generate a random string or store data)

    // Generate a random string for demonstration
    $randomString = bin2hex(random_bytes(16));

    // Send a JSON response back to the client
    echo json_encode(["randomString" => $randomString]);
}
?>
