<?php
$id=$_GET['id'];


$client = new MongoClient();
$db = $client->blog;
$id= new MongoId($id);
 $row = $db->comment->remove(array("_id"=>$id));
 echo "Deleted";
 header('location:../blog/display_comment.php');
 ?>