<?php
$client = new Client();
$headers = [
  'Authorization' => '{{UmHPahWgVq4TEE3XxqaRrs0851BDQk8r}}',
  'Content-Type' => 'application/json'
];
$body = '{
  "text": "galang.scottrylee@auf.edu.ph",
  "view_state": {
    "name": "public"
  }
}';
$request = new Request('POST', MANTISHUB_URL. '/api/rest/issues/[ISSUE_NUMBER]/notes', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();
