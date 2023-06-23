<?php
global $mysqli;
include '../chestionare/database.php';
header('Content-Type: application/rss+xml; charset=utf-8');

$query = "SELECT * FROM `user` ORDER BY teste_trecute DESC";
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);

$xml = new DOMDocument('1.0', 'utf-8');

$rss = $xml->createElement('rss');
$rss->setAttribute('version', '2.0');
$xml->appendChild($rss);

$channel = $xml->createElement('channel');
$rss->appendChild($channel);

$title = $xml->createElement('title', 'Top Utilizatori');
$channel->appendChild($title);

$description = $xml->createElement('description', 'Top utilizatori');
$channel->appendChild($description);
//echo json_encode($channel);
$link = $xml->createElement('link', 'http://localhost:63342/proiect/proiect/topUseri/topUseri.php');
$channel->appendChild($link);

while ($row = $results->fetch_assoc()) {
    $item = $xml->createElement('item');

    $userTitle = $xml->createElement('title', $row['username']);
    $item->appendChild($userTitle);

    $userDescription = $xml->createElement('description', 'Chestionare trecute: ' . $row['teste_trecute'] . ', Chestionare picate: ' . $row['teste_picate']);
    $item->appendChild($userDescription);

    $channel->appendChild($item);
}

$xml->formatOutput = true;
$rssContent = $xml->saveXML();
//echo json_encode($channel);

$rssContent = str_replace("&", "&amp;", $rssContent);
$rssContent = str_replace("<![CDATA[", "&lt;![CDATA[", $rssContent);

echo $rssContent;
?>

