<?php
$client = new Client();
$headers = [
  'Authorization' => '{{UmHPahWgVq4TEE3XxqaRrs0851BDQk8r}}',
  'Content-Type' => 'application/json'
];
$body = '{
  "summary": "GALANG, SCOTT RYLEE C.",
  "description": "Description for sample REST issue.",
  "additional_information": "More info about the issue",
  "project": {
    "id": 1,
    "name": "MyProject"
  },
  "category": {
    "id": 5,
    "name": "bugtracker"
  },
  "handler": {
    "name": "vboctor"
  },
  "view_state": {
    "id": 10,
    "name": "public"
  },
  "priority": {
    "name": "normal"
  },
  "severity": {
    "name": "trivial"
  },
  "reproducibility": {
    "name": "always"
  },
  "sticky": false,
  "tags": [
    {
      "name": "mantishub"
    }
  ]
}';
$request = new Request('POST', MANTISHUB_URL. '/api/rest/issues', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();
