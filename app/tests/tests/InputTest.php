<?php

require_once __DIR__ . '/../classes/Input.php';

class InputTest extends PHPUnit_Framework_TestCase {

	
	public function setUp(){
		
	}

	public function test_get(){
	
		//Arrange
		$_GET['email'] = 'dtang@usc.edu';
		
	

		//Act
		$email = Input::get('email'); // 'dtang@usc.edu'
	
		
		//Assert
		$this->assertEquals('dtang@usc.edu', $email);
		
		unset($_GET['email']);

	}
	
	public function test_get_null(){
		//Arrange
		
		//Act
		$email = Input::get('email'); // null, see assertNull()
		
		
		//Assert
		
		$this->assertNull($email);
		
		unset($_GET['email']);
	}
	
	public function test_default_value(){
	
		//Arrange
		
		//Act
		$email = Input::get('plan', 'standard'); // assertEquals 'standard', since it did not exist in $_GET. You are basically providing a default value here
		//Assert
		
		$this->assertEquals('standard', $email);
		
		unset($_GET['plan']);
	}




}