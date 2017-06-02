<?php
$client = new MongoClient();

$db = $client->blog;
$id= new MongoId($_POST['id']);
 $db->comment->update(
 array('_id'=>$id),
	array(
	'$set'=>array('comment'=>$_POST["comment"],'date'=>new MongoDate())
	)
 );
 header('location:../blog/display_comment.php');
 ?>