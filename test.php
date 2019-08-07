<?php
require 'vendor/autoload.php';

$parser = new ChargeHive\Webhooks\WebhookParser('');
$webhook = $parser->parse(
  '{
  "uuid": "d2f258bc-0171-4f01-a99f-f57f53c9a145",
  "type": "chargeCreated",
  "data": {
    "chargeUuid": "XX:aaebd1e0-b926-11e9-90eb-720007684d30:1",
    "chargeIntent": "",
    "contract": "",
    "amount": {
      "amount": 100,
      "currency": "USD"
    },
    "references": {},
    "expiryTime": 0,
    "merchantReference": ""
  },
  "checksum": "523930ff52d0a2f0810d7ee6dfbc73419379ea54",
  "verification": "6ef23d6b9f8ea77fcc34cd163458e5a7c109eef8",
  "created": 1565191134,
  "webhookVersion": "1.0.0",
  "projectId": "test-project"
}'
);

var_dump($webhook);
