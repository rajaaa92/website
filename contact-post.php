<?php
$body = "Nowy czlowiek zainteresowany jezykami: \n\n";
$body .= 'email: ' . strip_tags($_POST['email_id']) . "i co widac?" . "\n";
$headers = 'From: contact@rajewska.asia' . "\r\n" .
   'Reply-To: '. strip_tags($_POST['email_id']) . "\r\n";
$retval = mail("contact@rajewska.asia", "Nowy czlowiek zainteresowany jezykami", $body, $headers);
   if( $retval == true )
   {
      echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Thank you!')
        window.location.href='./index.html';
      </SCRIPT>");
   }
   else
   {
      echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Error. Try again.')
        window.location.href='./index.html';
      </SCRIPT>");
   }
?>
<!-- to pomogło jak localhost nie chcial wysylac na gmaila maili http://www.developerfiles.com/how-to-send-smtp-mails-with-postfix-mac-os-x-10-8/ -->
<!-- sudo vi /etc/postfix/sasl_passwd -->
<!-- sudo postfix reload -->
