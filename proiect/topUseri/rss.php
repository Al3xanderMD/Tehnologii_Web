<?php
global $mysqli;
include '../chestionare/database.php';

// Fetch the user data from your local database
$query = "SELECT * FROM `user` ORDER BY teste_trecute DESC";
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);

// Set the appropriate content type header for an RSS feed
header('Content-Type: application/rss+xml; charset=utf-8');

// Create the RSS feed structure
$xml = new DOMDocument('1.0', 'utf-8');

// Create the <rss> element
$rss = $xml->createElement('rss');
$rss->setAttribute('version', '2.0');
$xml->appendChild($rss);

// Create the <channel> element
$channel = $xml->createElement('channel');
$rss->appendChild($channel);

// Add the channel information (title, description, link, etc.)
$title = $xml->createElement('title', 'Top Utilizatori');
$channel->appendChild($title);

$description = $xml->createElement('description', 'Top utilizatori');
$channel->appendChild($description);

$link = $xml->createElement('link', 'http://localhost:63342/proiect/proiect/topUseri/topUseri.php'); // Replace with the URL of your topUseri.php page
$channel->appendChild($link);

// Iterate over the user data and create <item> elements
while ($row = $results->fetch_assoc()) {
    $item = $xml->createElement('item');

    $userTitle = $xml->createElement('title', $row['username']);
    $item->appendChild($userTitle);

    $userDescription = $xml->createElement('description', 'Chestionare trecute: ' . $row['teste_trecute'] . ', Chestionare picate: ' . $row['teste_picate']);
    $item->appendChild($userDescription);

    $channel->appendChild($item);
}

// Output the XML
echo $xml->saveXML();
?>
