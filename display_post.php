<?php
$client = new MongoClient();
$db = $client->blog;
 $collection = $db->post->find();

 foreach($collection as $row)
		
			{
		

				
				
 ?>
 <body>
 <table>
  <div class="storyUnit">
                <p><?php echo($row['category'])?></p>
		<p><?php echo($row['title']) ?></p>
		<p><?php echo ($row['date']) ?></p>
	
		<p><?php echo($row['content']) ?></p>
		<p><?php echo("<b>name:</b>".$row['name']) ?></p>
			<p><a href="../blog/update_post_pg.php?id=<?php echo $row['_id']; ?>">Update</a></p>
<p><a href="../blog/delete_post.php?id=<?php echo $row['_id']; ?>">Delete</a></p>
    </div>
 </body>
			<?php 
			}
			?>