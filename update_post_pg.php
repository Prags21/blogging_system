
<?php
$id=$_GET['id'];
$client = new MongoClient();

$db = $client->blog;
$id= new MongoId($id);
 $row = $db->post->findOne(array("_id"=>$id));

?>
<body>
<form method="post" action="../blog/updatepost.php">
Category:<input name="Category" value="<?php echo($row['category'])?>"/></br>
Title:<input name="title" value="<?php echo($row['title']) ?>"/></br>
Content:<input name="content" rows=10 col=20 value="<?php echo($row['content']) ?>" /></br>
<input name="id" type="hidden" value="<?php echo($row['_id']) ?>" />
<input type="submit" value="update"/>
</form>
