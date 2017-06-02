
<?php

$id=$_GET['id'];
$client = new MongoClient();

$db = $client->blog;
$id= new MongoId($id);
function pageview_counter(field){

 $db->counter->insert(array("_id"=>$id),
	( "countr"=>0)
	);
	
   var ret = db.count.findAndModify({
        query: { _id: $id },
        update: { $inc: { countr: 1 } },
        new: true
   });    
   return ret.countr;
}

?>
    