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
function get_error($error_code)
{
    if(is_array($error_code)){
        return implode( ' ', $error_code);
    }

    switch($error_code) {
        case 201:
            $error_message = "Required field can not be empty.";
            break;
        case 202:
            $error_message = "You are registered successfully.";
            break;
        case 203:
            $error_message = "Postmark Exception while sending Email.";
            break;
        case 204:
            $error_message = "Email already registered with us.";
            break;
        default:
            $error_message = "Unknown error occurred.";
    }
    return $error_message;
}

?>