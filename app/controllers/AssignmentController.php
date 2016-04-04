<?php

class AssignmentController extends BaseController {
  

	public function registration()
	{
		return View::make('registration');
	}

	public function register(){

		$email = Input::get('email');
		$first_name = Input::get('first_name');
		$last_name = Input::get('last_name');

		$validator = Validator::make(
            Input::all(),
            array(
                'first_name' => 'required|max:255',
                'last_name' => 'required|max:255',
                'email' => 'required|email|max:255',
            )
        );
        if($validator->fails()){
          $response_array = array('success' => false, 'error_code' => 201, 'message' => get_error(201));
        }else{
          $user = User::where('email',$email)->first();
          if($user == NULL){
          	$user = new User;
          	$user->first_name = $first_name;
          	$user->last_name = $last_name;
          	$user->email_status = UNVERIFIED;
          	$user->email = $email;
          	
            $subject = "[Perk.com] Registration";
            $message = "Hi,".$first_name." ".$last_name." Thank you for registering !!";
          	
          	if(send_email($email,$subject,$message)){
          		  $user->save();
                $response_array = array('success' => true, 'message' => get_error(202));
          	}else{
          		 $response_array = array('false' => false, 'error_code' => 203, 'message' => get_error(203));
          		}
          }else{
          	$response_array = array('success' => false, 'error_code' => 204, 'message' => get_error(204));
          }
        }
        $response_code = 200;
        $response = Response::json($response_array, $response_code);
        return $response;
	}

	

}
