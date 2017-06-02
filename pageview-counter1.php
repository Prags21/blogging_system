<?php
include("pageview-counter.php");
$id=$_GET['id'];
$client = new MongoClient();

$db = $client->blog;
$id= new MongoId($id);
 $row = $db->count->insert(array("_id"=>$id));
 $row;
 ?>