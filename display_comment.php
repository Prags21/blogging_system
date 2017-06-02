<?php
$client = new MongoClient();
$db = $client->blog;
 $collection = $db->comment->find();

 foreach($collection as $row)
			{
 ?>
 <body>
 
  <div class="storyUnit">
                <p><?php echo($row['post_id'])?></p>
		<p><?php echo($row['cmnt_id']) ?></p>
		<p><?php echo ($row['date']) ?></p>
		<p><?php echo ($row['name']) ?></p>
		<p><?php echo($row['comment']) ?></p>
<p><a href="../blog/update_cmnt_pg.php?id=<?php echo $row['_id']; ?>">Update</a></p>
			<p><a href="../blog/delete_comment.php?id=<?php echo $row['_id']; ?>">Delete</a></p>
    </div>
 </body>
			<?php 
			}
			?>