<?php
require "vendor/autoload.php";

$name=$_GET['name'];
$age=$_GET['age'];

$client123 = new MongoDB\Client;

//create the datbase and use
$liotdb = $client123->liotdb;

/*
//create the collection inside the database
$result1 = $liotdb->createCollection('student_collection');

var_dump($result1);
*/
$student_collection = $liotdb->student_collection;

$insertOneResult = $student_collection->insertOne(
    ['name'=>$name,'age'=>$age]
);


?>