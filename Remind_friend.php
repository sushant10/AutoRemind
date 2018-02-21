<?php 
# remind friend to take her pills   

require_once "vendor/autoload.php";// Loads the library
use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = getenv('TWILIO_ACCOUNT_SID');
$token = getenv('TWILIO_AUTH_TOKEN');

$client = new Client($sid, $token);

$my_number = getenv('my_num');
$her_number = getenv('her_num'); 

# add functionality to message different things at different times

$client->messages->create(
    $her_number,
    array(
        'from' => $my_number,
        'body' => "Wake up! Take your pills"
    )
);  
?>