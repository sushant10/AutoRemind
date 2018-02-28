<?php 
# remind friend to take her pills   

require_once "vendor/autoload.php";// Loads the library
use Twilio\Rest\Client;

set_error_handler('exceptions_error_handler');

function exceptions_error_handler($severity, $message, $filename, $lineno) {
  if (error_reporting() == 0) {
    return;
  }
  if (error_reporting() & $severity) {
    throw new ErrorException($message, 0, $severity, $filename, $lineno);
  }
}


date_default_timezone_set('America/New_York');//or change to whatever timezone you want
// Your Account Sid and Auth Token from twilio.com/user/account
$sid = getenv('TWILIO_ACCOUNT_SID');
$token = getenv('TWILIO_AUTH_TOKEN');

$client = new Client($sid, $token);

$my_number = getenv('my_num');
$her_number = getenv('her_num'); 
$message = "";
$logtime=date('H:i');
# TODO // add functionality to message different things at different times

$messages = array(
   08 => "Take pill X",
   13 => "Take pill Y",
   14 => "Take pill Z",
);

#trying out timely messages
try{
echo "Message: {$messages[date("H")]} // Sent at: {$logtime} /n" ;
$client->messages->create(
    $her_number,
    array(
        'from' => $my_number,
        'body' => "Hey! It's time to take {$messages[date("H")]}"
    )
);
}catch(Exception $e){
	echo "Message not sent, it's not the right time to remind";
}


?>