<?php
// Get the requested URL
// $url = isset($_GET['url']) ? $_GET['url'] : '/';
$url = isset($_GET['url']) ? trim($_GET['url']) : '/';
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
$base_url = $protocol . $_SERVER['HTTP_HOST'] . '/';
$asset_base = $base_url == "http://localhost/"? '/cogniflow/' : '/';
?>