<?php
$STMP_HOST = 'localhost';
$STMP_PORT = 25;

$AUTOMAIL = 
'name      : %s
company   : %s
telephone : %s
email     : %s

%s';

ini_set('SMTP',      $STMP_HOST );
ini_set('smtp_port', $SMTP_PORT );

$to = 'Khalid@businessfocuschina.com';
$subject = '[auto mail] from your site, some one is interested in your courses';

$headers = 'MIME-Version: 1.0\r\n';
$headers .= 'MIME-Version: 1.0\r\n';
$headers .= 'Content-type:text/plain;charset=utf-8\r\n';

// 更多报头

$headers .= 'From: <automail@businessfocuschina.com>\r\n';
$headers .= 'Cc: automail@businessfocuschina.com\r\n';

$message = sprintf($AUTOMAIL,
  $_POST['name'],
  $_POST['company'],
  $_POST['telephone'],
  $_POST['email'],
  $_POST['content']);

$ret = mail($to,$subject,$message,$headers);
$success = 'there is some problem during mail sending';
if($ret){
   $success = 'a mail has been send';
}
include('contact.php');
?>