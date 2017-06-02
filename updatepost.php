<?php
$client = new MongoClient();

$db = $client->blog;
$id= new MongoId($_POST['id']);
 $db->post->update(
 array('_id'=>$id),
	array(
	'$set'=>array('content'=>$_POST["content"],'date'=>new MongoDate())
	)
 );
 header('location:../blog/display_post.php');
 ?>