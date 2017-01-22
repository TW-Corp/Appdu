<?php
  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['message'] ;

  mail( "thetwcorp@gmail.com", "Feedback Form Results",
    $message, "From: $email" );
  header( "Location: http://appdu.000webhost.com/thanks.html" );
?>
