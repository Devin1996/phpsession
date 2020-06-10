<?php
require "vendor/autoload.php";

$client = new MongoDB\Client;

$companydb = $client->companydb;

$result1 = $companydb->createCollection('empcollection');

var_dump($result1);

?>