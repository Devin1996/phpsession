<?php
require "vendor/autoload.php";

$client = new MongoDB\Client;
$companydb = $client->companydb;
$empcollection = $companydb->empcollection;

$updateResult = $empcollection->updateOne(
    ['age'=>'32'],
    ['$set' => ['age'=>'23']]
);

/*
 $updateResult = $empcollection->updateMany(
    ['skill' => 'qa'],
    ['$set' => ['manager' => 'Tim']]
);
 */

 /*
 $replaceResult = $empcollection->replaceOne(
    ['_id' => '4'],
    ['_id' => '4', 'favColor' => 'blue']

    printf("Matched %d documents \n",$replaceResult->getMatchedCount());
    printf("Modified %d documents \n",$replaceResult->getModifiedCount());
);
 */

printf("Matched %d documents \n",$updateResult->getMatchedCount());
printf("Modified %d documents \n",$updateResult->getModifiedCount());
?>