<?php
$body = "Dzien dobry: \n\n";
$body .= 'name: ' . strip_tags($_POST['userName']) . "\n";
$body .= 'surname: ' . strip_tags($_POST['userSurname']) . "\n";
$body .= 'email: ' . strip_tags($_POST['userEmail']) . "\n";
$body .= 'phone: ' . strip_tags($_POST['userPhone']) . "\n\n";
$body .= 'subject: ' . strip_tags($_POST['subject']) . "\n\n";
$body .= strip_tags($_POST['message']) . "\n";
$headers = 'From: contact@domena.com' . "\r\n" .
   'Reply-To: domena@domena.com' . "\r\n";
$retval = mail("domena@domena.com", strip_tags($_POST['subject']), $body, $headers);
   if( $retval == true )
   {
      echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Message sent successfully...')
        window.location.href='./index.html';
      </SCRIPT>");
   }
   else
   {
      echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Message could not be sent...')
        window.location.href='./index.html';
      </SCRIPT>");
   }
?>
<!-- to pomogło jak localhost nie chcial wysylac na gmaila maili http://www.developerfiles.com/how-to-send-smtp-mails-with-postfix-mac-os-x-10-8/ -->
<!-- sudo vi /etc/postfix/sasl_passwd -->
<!-- sudo postfix reload -->
