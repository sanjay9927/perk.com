<?php


// Create a class called PersonBase

 class PersonBase{

      // Define an age class variable with public visibility and no default value
	public $age;

	  // Define a height class variable with private visibility and a default value of 0
	private $height = 0;

	   // Add a public method called addHeight that accepts an inches parameter. 
	   //This method will increment the height class variable by the number of inches provided.

	public function addHeight($height){
         $this->height = $height;
	}

       // Add a private method called getHeight that returns the value of the height class variable. 
	   // If the variable is set to 0 throw an exception with an error message
	private function getHeight(){
		if ($this->height == 0) {
        throw new Exception('Height should be greater than zero.');
    }
       return $this->height;
	}

       // Add a public method called setRandomAge that sets the age class variable to a random number between 18 and 90
	public function setRandomAge(){
      $this->age = rand(18,90);
	}


      // Add a public method called saySomething. This method will make an API call to the following JSON API and return the text of the response.
      // https://baconipsum.com/api/?type=all-meat&sentences=1&start-with-lorem=1

	public function saySomething(){
		$url = "https://baconipsum.com/api/?type=all-meat&sentences=1&start-with-lorem=1";
		$response = file_get_contents($url);
		$response = json_decode($response);
		return $response[0];
	}
   
}

// Create a class called Person that extends the PersonBase class

class Person extends PersonBase{
  

  // Override the saySomething method from the parent class. Get the text returned by the inherited method, reverse the string and then return it.

  public function saySomething(){
  	$obj = new PersonBase;
  	$original_string = $obj->saySomething();
  	$original_string_array = explode(" ",$original_string);
  	$reverse_string = implode(" ",array_reverse($original_string_array));
    return $reverse_string;

    // some point are not clear while reversing string "." always will be in last ..?? and Special caratecter "," will be in same position or not ..?? so I just reverse the string.
  }
}
?>