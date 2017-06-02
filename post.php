<?php
$client = new MongoClient();
$db = $client->blog;
 $collection = $db->post;
$document = array( 
      "title"=>$_POST['title'],
      "category"=>$_POST['category'], 
	  "name"=>$_POST['name'],
      "content"=>$_POST['content'],
      "date"=> new MongoDate()
   );
	   $collection->insert($document);
   echo "Document inserted successfully";
   header('location:../blog/display_post.php');
?>
  