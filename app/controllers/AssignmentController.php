<?php

define('UNVERIFIED',0);

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
        	$response_array = array('success' => false, 'error_code' => 201, 'message' => "Required fields can not be Empty.");
        }else{
          $user = User::where('email',$email)->first();
          if($user == NULL){
          	$user = new User;
          	$user->first_name = $first_name;
          	$user->last_name = $last_name;
          	$user->email_status = UNVERIFIED;
          	$user->email = $email;
          	$user->save();
          	$response_array = array('success' => true, 'message' => "User has been registered successfully.");
          }else{
          	$response_array = array('success' => false, 'error_code' => 202, 'message' => "Email already registered with us.");
          }
        }
        $response_code = 200;
        $response = Response::json($response_array, $response_code);
        return $response;
	}

}
