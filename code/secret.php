<?php
include('TinyRedisClient.php');
$k = 'secret';
$client = new TinyRedisClient("redis:6379");
// Check if secret exists
$secret = $client->get($k);
if ($secret === NULL) {
  // echo "secret does not exists, creating";
  $client->set($k, uniqid());
} else {
   // echo "secret exists";
   // echo $secret;
}
