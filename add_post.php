<?php
$client = new MongoClient();
$db = $client->blog;
 $collection = $db->post;

     
$document = array( 
      "content"=>$_POST['content'], 
      "category"=>$_POST['category'], 
	  "name"=>$_POST['name'],
		"title"=>$_POST['title'];
      "date"=> new MongoDate());
   
	
   $collection->insert($document);
   echo "Document inserted successfully";
   header('location:../blog/display_post.php');
?>
  