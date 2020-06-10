<?php
require "vendor/autoload.php";

$client = new MongoDB\Client;

$companydb = $client->companydb;

$empcollection = $companydb->empcollection;

$deleteResult = $empcollection->deleteOne(
    ['_id' => '4']
);

printf("Deleted %d documents", $deleteResult->getDeleteCount());

/*
$deleteResult = $empcollection->deleteMany(
    ['_id' => '4']
);

printf("Deleted %d documents", $deleteResult->getDeleteCount());

*/
?>