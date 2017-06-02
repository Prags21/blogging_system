<?php

$client = new MongoClient();

$db = $client->blog;
 $collection = $db->comment;
$document = array( 
      "cmnt_id"=>$_POST['comment_id'], 
      "post_id"=>$_POST['post_id'], 
      "comment"=>$_POST['comment'],
	  "name"=>$_POST['name'],
      "date"=> new MongoDate()
   );
	
   $collection->insert($document);
   echo "Document inserted successfully";
?>
  