<?php
require "vendor/autoload.php";

$client = new MongoDB\Client;
$companydb = $client->companydb;

$empcollection = $companydb->empcollection;

/*
$document = $empcollection->findOne(
    ['_id'=>'1']
);
var_dump($document);
*/

$documentlist = $empcollection->find(
    ['skill'=>'qa'],
    ['Projection' => ['name' => 1]]
);

/*
$documentlist = $empcollection->find(
    ['skill'=>'qa'],
    ['Projection' => ['_id'=>0,'name' => 1]]
);

*/

foreach ($documentlist as $doc) {
    
    var_dump($doc);
}
?>