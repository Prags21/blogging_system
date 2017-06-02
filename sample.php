

<?php

$client = new MongoClient();

$conn = $client->blog->rating;

$id= new MongoId($_POST['id']);
 
	 
 

if ($conn->connect_error) {
    die("Unable to connect Server: " . $conn->connect_error);
}
 
if (isset($_POST['rate']) && !empty($_POST['rate'])) {
 
    $rate = $conn->real_escape_string($_POST['rate']);
// check if user has already rated
   $query = $conn->findOne(array("_id"=>$id));
   
    $row = $query->fetch_assoc();
    if ($query->num_rows > 0) {
        echo $row['id'];
    } else {
 $conn->update(
 array('_id'=>$id),
	array(
	'$set'=>array('rate'=>$_POST["rate"]));
	
      
    }

?>