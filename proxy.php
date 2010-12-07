<?php
$url = 'http://api.openstreetmap.org' . $_GET['url'];
header('Content-Type: text/xml');
echo file_get_contents($url);

?>