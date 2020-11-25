<?php
if(!isset($_post['submit']))
{
    echo "error: the form must be submitted"
}
$name = $_post['name'];
$visitor_email=$_post['email'];
$number=$_post['mobile number'];

$email_from = 'alfatah school';

	$email_subject = "New admission";

	$email_body = "You have received a new message from $name.\n".
        "the message:\n $message".

$to = "schoolsalfatah@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);
        function IsInjected($str)
{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
               
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}
?>