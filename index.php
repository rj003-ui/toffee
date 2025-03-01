<?php
header('Access-Control-Allow-Origin: *');

$get = $_GET['get'];
$mpdUrl = 'https://linearjitp-playback.astro.com.my/dash-wv/linear/' . $get;

$mpdheads = [
  'http' => [
      'header' => "cookie: Edge-Cache-Cookie=URLPrefix=aHR0cHM6Ly9tcHJvZC1jZG4udG9mZmVlbGl2ZS5jb20v:Expires=1740896044:KeyName=prod_live_events:Signature=P1U5696X3Ki95r1ySAqoWZl4iwhZF0dLUI1ERfdE8UlEPaB99eUvNx5WltZUJWg4dGjo3zpOSFhKIOIbucxmCQ\r\n",
      'follow_location' => 1,
      'timeout' => 5
  ]
];
$context = stream_context_create($mpdheads);
$res = file_get_contents($mpdUrl, false, $context);
echo $res;
?>
