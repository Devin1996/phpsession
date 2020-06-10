<?php
require "vendor/autoload.php";

$client = new MongoDB\Client;

//create the datbase companydb
$companydb = $client->companydb;

$empcollection = $companydb->empcollection;
/*
$insertOneResult = $empcollection->insertOne(
     ['_id'=>'1','name'=>'Panda','age'=>'32','skill'=>'dicipline']
);
*/

$insertManyResult = $empcollection->insertMany([
    ['_id'=>'5','name'=>'Kevin','age'=>'23','skill'=>'developing'],
    ['_id'=>'6','name'=>'Ben','age'=>'45','skill'=>'uiux'],
    ['_id'=>'7','name'=>'Mervin','age'=>'23','skill'=>'qa']
]);

printf("Inserted %d douments", $insertManyResult->getInsertedCount());
var_dump($insertManyResult->getInsertedIds());

?>