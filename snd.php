<?php
 require_once "Mail.php";
 require_once "Mail/mime.php";
 
 $from = "Susan Sender <minnicool77@gmail.com>";
 $to = "Rachel Recipient <pragati.minni@gmail.com>";
 $subject = "Hi!";
 $text = "Hi,\n\nIt is a text message";
 $html = "It is a <b>HTML</b> message";
 $mime = new Mail_mime();
 $mime->setHTMLBody($html);
 $mime->setTXTBody($text);
 $body = $mime->get();
 
 $host = "mail.smtp2go.com";
 $port = "25"; // 8025, 587 and 25 can also be used.
 $username = "Pragati Singh";
 $password = "nishant#3";
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $headers = $mime->headers($headers);
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
     'port' => $port,
     'auth' => true,
     'username' => $username,
     'password' => $password));
 
 $mail = $smtp->send($to, $headers, $body);
 
 if (PEAR::isError($mail)) {
   echo("<p>" . $mail->getMessage() . "</p>");
  } else {
   echo("<p>Message successfully sent!</p>");
  }
 ?>