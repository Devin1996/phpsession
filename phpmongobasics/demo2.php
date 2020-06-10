<?php
require "vendor/autoload.php";

$client = new MongoDB\Client;

//create the datbase companydb
$companydb = $client->companydb;

//list collections inside the database 
foreach ($companydb->listCollections() as $collection) {
    
     var_dump($collection); 
}

/*
$result1 = $companydb->createCollection('empcollection');
var_dump($result1);

Dropping a Collection

$result2 = $companydb->dropCollection('empcollection');
var_dump($result2);


//list databses 
foreach ($client->listDatabases() as $db) {
    
     var_dump($db); 
}

$result3 = $client->dropDatabase('companydb');
var_dump($result3);
*/

?>