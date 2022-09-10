<?php
$client = new Client();
$headers = [
  'Authorization' => '{{UmHPahWgVq4TEE3XxqaRrs0851BDQk8r}}',
  'Content-Type' => 'application/json'
];
$body = '{
  "username": "ScottGalang",
  "password": "scottgalang0929",
  "real_name": "Scott Rylee C. Galang",
  "email": "galang.scottrylee@.auf.edu.ph",
  "access_level": {
    "name": "updater"
  },
  "enabled": false,
  "protected": false
}';
$request = new Request('POST', MANTISHUB_URL. '/api/rest/users/', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();
