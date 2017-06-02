
<?php
$id=$_GET['id'];
$client = new MongoClient();

$db = $client->blog;
$id= new MongoId($id);
 $row = $db->comment->findOne(array("_id"=>$id));

?>
<body>
<form method="post" action="../blog/updatecmnt.php">
Post-Id:<input name="post_id" value="<?php echo($row['post_id'])?>"/></br>
Comment-Id:<input name="comment_id" value="<?php echo($row['cmnt_id']) ?>"/></br>
Your name:<input name="name" value="<?php echo($row['name']) ?>" /></br>
Comment:<textarea name="comment" value="<?php echo($row['comment']) ?>"></textarea></br>
<input name="id" type="hidden" value="<?php echo($row['_id']) ?>" />
<input type="submit" value="update"/>
</form>