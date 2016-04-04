<?php

define('UNVERIFIED',0);

require_once('./vendor/autoload.php');
use Postmark\PostmarkClient;
use Postmark\Models\PostmarkException;

function send_email($to_email,$subject,$message) {
    $postmark_key = Config::get('app.postmark_key');
    $from_email = Config::get('app.from_email');
	try{
        $client = new PostmarkClient($postmark_key);
	    $sendResult = $client->sendEmail($from_email,$to_email, $subject,$message);
	    return true;
	}catch(PostmarkException $ex){
	    log::info($ex->message);
	    return false;
	}catch(Exception $generalException){
	    log::info($generalException->message);
	    return false;
	}
}
?>