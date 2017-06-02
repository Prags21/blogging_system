<?php

$recipient = $_POST['email'];
$client = new MongoClient();
$db = $client->blog;
 $collection = $db->subs;
$document = array( 
      "mail"=>$_POST['email']);
# SUBJECT (Subscribe/Remove)
$subject = "Subscribe";

# RESULT PAGE
$location = "../blog/blog.php";

$sender = $recipient;

# MAIL BODY
$body .= "Name: ".$_POST['name']." \n";
$body .= "You have subscribed"." \n";

## SEND MESSGAE ##

mail( $recipient, $subject, $body ) or die ("Mail could not be sent.");

echo("yay!!!");

?>